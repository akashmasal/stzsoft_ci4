<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('WebController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(
    function (){
        $data['page'] = "website/pages/404";
        echo view('website/partials/template',$data);
    }
);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//website 
$routes->get('/', 'WebController::index');
$routes->get('/about-us', 'WebController::about_us');
$routes->get('/website-design-and-development', 'WebController::website_design_and_development');
$routes->get('/digital-marketing', 'WebController::digital_marketing');
$routes->get('/mobile-app-development', 'WebController::mobile_app_development');
$routes->get('/desktop-application', 'WebController::desktop_application');
$routes->get('/web-hosting-and-server-setup', 'WebController::web_hosting_and_server_setup');
$routes->get('/internet-of-things', 'WebController::internet_of_things');
$routes->get('/our-work', 'WebController::our_work');
$routes->get('/contact-us', 'WebController::contact_us');


//admin-dashboard
$routes->get('/admin', 'DashController::index');
$routes->post('/login', 'DashController::login');
$routes->get('/dashboard', 'DashController::dashboard');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
