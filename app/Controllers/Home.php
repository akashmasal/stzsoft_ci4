<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page'] = "website/pages/home";
        return view('website/partials/template',$data);
    }

    function about_us(){
        $data['page'] = "website/pages/about_us";
        return view('website/partials/template',$data);
    }
    function contact_us(){
        $data['page'] = "website/pages/contact_us";
        return view('website/partials/template',$data);
    }
}
