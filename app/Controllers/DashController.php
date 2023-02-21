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
                'message' => 'validation errors'
            ];
            echo json_encode($data);
        } else {

        }

    }
}