<?php

namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers' );
$routes->setDefaultController('HomeController' );
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
//$routes->set404Override(function(){
//    return view("page_not_found");
//});

    /*Admin Login Routes*/
    $routes->get('admin', 'Admin\LoginController::index', ['as'=>"admin/login", "filter"=>"csrf"]);
    $routes->post('admin', 'Admin\LoginController::adminLogin', ["as"=>"admin/login", "filter"=>"csrf"]);
    $routes->get('logout', 'Admin\LoginController::adminLogout', ['as'=>'admin/logout']);

    $routes->match(['post', 'get'],'change-password', 'Admin\LoginController::changePassword' , ["as"=>"admin/change-password", "filter"=>"admin"]);
    $routes->get('profile', 'Admin\LoginController::adminProfile', ["as"=>'admin/profile', "filter"=>"admin"]);
    $routes->post('profile', 'Admin\LoginController::updateProfile', ["as"=>'admin/profile', "filter"=>"admin"]);
    $routes->get('register', 'Admin\RegisterController::index', ["as"=>"admin/register"]);

    /*dashboard*/
    $routes->get('dashboard', 'Admin\DashboardController::index', ["as"=>"admin/dashboard", "filter"=>"admin"]);

    /* Country*/
    $routes->match( (['post','get']), 'country', 'Admin\CountryController::index' , ["as"=>"admin/country", "filter"=>"admin"]);
    $routes->match(['get', 'post'],'country/add', 'Admin\CountryController::add' , ["as"=>"admin/country/add", "filter"=>"admin"]);
    $routes->match(['post','get'],'country/update/(:num)', 'Admin\CountryController::update/$1' , ["as"=>"admin/country/update","filter"=>"admin"]);
    $routes->get('country/(:num)', 'Admin\CountryController::delete/$1' , ["as"=>"admin/country/delete", "filter"=>"admin"]);

    /* PACKAGE*/
    $routes->match( (['post','get']), 'package-type', 'Admin\PackageTypeController::index' , ["as"=>"admin/package-type", "filter"=>"admin"]);
    $routes->match(['post','get'],'package-type/add', 'Admin\PackageTypeController::add' , ["as"=>"admin/package-type/add", "filter"=>"admin"]);
    $routes->match(['post','get'],'package-type/update/(:num)', 'Admin\PackageTypeController::update/$1' , ["as"=>"admin/package-type/update","filter"=>"admin"]);
    $routes->get('package-type/(:num)', 'Admin\PackageTypeController::delete/$1' , ["as"=>"admin/package-type/delete", "filter"=>"admin"]);

    /*SERVICE*/
    $routes->match( (['post','get']), 'service', 'Admin\ServiceController::index' , ["as"=>"admin/service", "filter"=>"admin"]);
    $routes->match(['post','get'],'service/add', 'Admin\ServiceController::add' , ["as"=>"admin/service/add", "filter"=>"admin"]);
    $routes->match(['post','get'],'service/update/(:num)', 'Admin\ServiceController::update/$1' , ["as"=>"admin/service/update","filter"=>"admin"]);
    $routes->get('service/(:num)', 'Admin\ServiceController::delete/$1' , ["as"=>"admin/service/delete", "filter"=>"admin"]);

    /* RATELIST*/
    $routes->match( (['post','get']), 'ratelist', 'Admin\RateListController::index' , ["as"=>"admin/ratelist", "filter"=>"admin"]);
    $routes->match(['post','get'],'ratelist/add', 'Admin\RateListController::add' , ["as"=>"admin/ratelist/add", "filter"=>"admin"]);
    $routes->match(['post','get'],'ratelist/update/(:num)', 'Admin\RateListController::update/$1' , ["as"=>"admin/ratelist/update","filter"=>"admin"]);
    $routes->get('ratelist/(:num)', 'Admin\RateListController::delete/$1' , ["as"=>"admin/ratelist/delete", "filter"=>"admin"]);
    $routes->get('ratelist/view/(:num)', 'Admin\RateListController::view/$1' , ["as"=>"admin/ratelist/view", "filter"=>"admin"]);




if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
