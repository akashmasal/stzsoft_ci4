<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page'] = "website/pages/home";
        return view('website/partials/template',$data);
    }
}
