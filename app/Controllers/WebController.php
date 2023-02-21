<?php

namespace App\Controllers;

class WebController extends BaseController
{
    function index()
    {
        $data['page'] = "website/pages/home";
        return view('website/partials/template', $data);
    }

    function about_us()
    {
        $data['page'] = "website/pages/about_us";
        return view('website/partials/template', $data);
    }
    function website_design_and_development()
    {
        $data['page'] = "website/pages/website_design_and_development";
        return view('website/partials/template', $data);
    }

    function digital_marketing()
    {
        $data['page'] = "website/pages/digital_marketing";
        return view('website/partials/template', $data);
    }
    function mobile_app_development()
    {
        $data['page'] = "website/pages/mobile_app_development";
        return view('website/partials/template', $data);
    }
    function desktop_application()
    {
        $data['page'] = "website/pages/desktop_application";
        return view('website/partials/template', $data);
    }
    function web_hosting_and_server_setup()
    {
        $data['page'] = "website/pages/web_hosting_and_server_setup";
        return view('website/partials/template', $data);
    }
    function internet_of_things()
    {
        $data['page'] = "website/pages/internet_of_things";
        return view('website/partials/template', $data);
    }
    function our_work()
    {
        $data['page'] = "website/pages/our_work";
        return view('website/partials/template', $data);
    }
    function contact_us()
    {
        $data['page'] = "website/pages/contact_us";
        return view('website/partials/template', $data);
    }
}