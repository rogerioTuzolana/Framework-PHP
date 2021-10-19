<?php


//Rotas do tipo Get
$this->get("/",'HomeController@index');
$this->get("/home",'HomeController@index');
$this->get("/test",'TestController@index');

$this->get("/exemplo", function(){
    echo "Estamos na home!";
});

$this->get("/dashboard-admin",'AdminHomeController@index');
$this->get("/dashboard-admin/register",'AdminRegisterController@index');
$this->get("/dashboard-admin/login", 'AdminLoginController@index');
$this->get("/dashboard-admin/logout",'AdminLoginController@logout');
$this->get("/dashboard-admin/services", 'AdminServicesController@index');
$this->get("/dashboard-admin/services/add", 'AdminServicesController@add');
$this->get("/dashboard-admin/users", 'AdminUsersController@index');
$this->get("/dashboard-admin/users/add", 'AdminUsersController@add');
$this->get("/dashboard-admin/blog", 'AdminBlogController@index');
$this->get("/dashboard-admin/blog/add", 'AdminBlogController@add');
$this->get("/dashboard-admin/recover-password",'AdminRecoverPassController');
$this->get("/dashboard-admin/forgot-password",'AdminForgotPassController');
$this->get("/dashboard-admin/contacts",'AdminContactsController@index');
$this->get("/dashboard-admin/contacts/add",'AdminContactsController@add');
$this->get("/dashboard-admin/team", 'AdminTeamController@index');
$this->get("/dashboard-admin/team/add", 'AdminTeamController@add');
$this->get("/dashboard-admin/portfolio", 'AdminPortfolioController@index');
$this->get("/dashboard-admin/portfolio/add", 'AdminPortfolioController@add');
$this->get("/dashboard-admin/slide", 'AdminSlideController@index');
$this->get("/dashboard-admin/slide/add", 'AdminSlideController@add');
$this->get("/dashboard-admin/about", 'AdminAboutController@index');

$this->get("/services",'ServicesController');

//Rotas get com parametros

$this->get("/dashboard-admin/users/edit/{id}", 'AdminUsersController@edit');
$this->get("/dashboard-admin/services/edit/{id}", 'AdminServicesController@edit');
$this->get("/dashboard-admin/blog/edit/{id}", 'AdminBlogController@edit');
$this->get("/dashboard-admin/contacts/edit/{id}", 'AdminContactsController@edit');
$this->get("/dashboard-admin/team/edit/{id}", 'AdminTeamController@edit');
$this->get("/dashboard-admin/portfolio/edit/{id}", 'AdminPortfolioController@edit');
$this->get("/dashboard-admin/slide/edit/{id}", 'AdminSlideController@edit');
$this->get("/dashboard-admin/about/edit/{id}", 'AdminAboutController@edit');

$this->get("/dashboard-admin/users/delete/{id}", 'AdminUsersController@delete');
$this->get("/dashboard-admin/services/delete/{id}", 'AdminServicesController@delete');
$this->get("/dashboard-admin/blog/delete/{id}", 'AdminBlogController@delete');
$this->get("/dashboard-admin/team/delete/{id}", 'AdminTeamController@delete');
$this->get("/dashboard-admin/portfolio/delete/{id}", 'AdminPortfolioController@delete');
//$this->get("/dashboard-admin/slide/delete/{id}", 'AdminSlideController@delete');

//Rotas do tipo Post
$this->post("/dashboard-admin/login", 'AdminLoginController@login');
$this->post("/dashboard-admin/register/store",'AdminRegisterController@store');
$this->post("/dashboard-admin/recover-password/update", 'AdminRecoverPassController@update');
$this->post("/dashboard-admin/forgot-password/verify", 'AdminForgotPassController@exist_user');
$this->post("/dashboard-admin/blog/store", 'AdminBlogController@store');
$this->post("/dashboard-admin/services/store", 'AdminServicesController@store');
$this->post("/dashboard-admin/contacts/store", 'AdminContactsController@store');
$this->post("/dashboard-admin/team/store", 'AdminTeamController@store');
$this->post("/dashboard-admin/portfolio/store", 'AdminPortfolioController@store');
$this->post("/dashboard-admin/slide/store", 'AdminSlideController@store');
$this->post("/dashboard-admin/about/store", 'AdminAboutController@store');

//Rotas do tipo post com parametro

$this->post("/dashboard-admin/users/update/{id}", 'AdminUsersController@update');
$this->post("/dashboard-admin/services/update/{id}", 'AdminServicesController@update');
$this->post("/dashboard-admin/blog/update/{id}", 'AdminBlogController@update');
$this->post("/dashboard-admin/contacts/update/{id}", 'AdminContactsController@update');
$this->post("/dashboard-admin/team/update/{id}", 'AdminTeamController@update');
$this->post("/dashboard-admin/portfolio/update/{id}", 'AdminPortfolioController@update');
$this->post("/dashboard-admin/slide/update/{id}", 'AdminSlideController@update');
$this->post("/dashboard-admin/about/update/{id}", 'AdminAboutController@update');