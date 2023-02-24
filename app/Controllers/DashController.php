<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthenticationModel;

class DashController extends BaseController
{
    public function index()
    {
        $data['page_title'] = "STZSOFT - ADMIN DASHBOARD";
        return view('admin/pages/login', $data);
    }

    function login()
    {
        $model = new AuthenticationModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];
        if (!$this->validate($rules)) {
            $data = [
                'errors' => $rules,
                'status' => false,
                'url' => 'login'
            ];
            echo json_encode($data);
        } else {
            $check_user_exist = $model->where('username', $username)
                ->where('password', $password)
                ->first();
            if ($check_user_exist) {
                $session = session();
                $set_session = [
                    'username' => $username,
                    'status' => 'loggedin',
                    'role' => 'User'
                ];
                $session->set($set_session);
                $data['url'] = 'dashboard';
                // $data = [
                //     'url' => 'dashboard',
                //     'status' => true,
                // ];

                echo json_encode($data);
                // echo "exist";
            } else {
                // echo "not exist";
                return redirect()->to('/login');
            }
        }
    }

    function dashboard(){
        $data['page_title'] = "STZSOFT - ADMIN DASHBOARD";
        $data['page'] = 'admin/pages/dashboard';
        return view('admin/partials/template', $data);
    }
}