<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Store login Auth Password

$routes->get('/auth', 'Auth::login');
$routes->get('/search', 'Frontend::search');


$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');

// Process
$routes->post('/auth/login', 'Auth::loginProcess');
$routes->post('/auth/register', 'Auth::registerProcess');

// Protected Routes
$routes->group('', ['filter' => 'auth'], function ($routes) {

    //    Parte Home
    $routes->get('/', 'Home::index');
    $routes->get('home', 'Home::index');

    // card dashboard
    $routes->get('dashboard', 'Dashboard::index');


    // Hamosu Tabela
    $routes->get('kategoria', 'Kategoria::index');
    $routes->get('kostumer', 'Kostumer::index');
    $routes->get('subkategoria', 'Subkategoria::index');
    $routes->get('produtu', 'Produtu::index');
    $routes->get('fornesedor', 'Fornesedor::index');
    $routes->get('kompras', 'Kompras::index');
    $routes->get('kompras_item', 'Kompras_item::index');
    $routes->get('vendas', 'Vendas::index');
    $routes->get('vendas_item', 'Vendas_item::index');
    $routes->get('role', 'Role::index');
    $routes->get('user', 'User::index');

    //Add and Create
    $routes->get('kategoria/add', 'Kategoria::create');
    $routes->get('kostumer/add', 'Kostumer::create');
    $routes->get('subkategoria/add', 'Subkategoria::create');
    $routes->get('produtu/add', 'Produtu::create');
    $routes->get('fornesedor/add', 'Fornesedor::create');
    $routes->get('kompras/add', 'Kompras::create');
    $routes->get('kompras_item/add', 'Kompras_item::create');
    $routes->get('vendas/add', 'Vendas::create');
    $routes->get('vendas_item/add', 'Vendas_item::create');
    $routes->get('role/add', 'Role::create');
    $routes->get('user/add', 'User::create');

    //Store
    $routes->post('kategoria/store', 'Kategoria::store');
    $routes->post('kostumer/store', 'Kostumer::store');
    $routes->post('subkategoria/store', 'Subkategoria::store');
    $routes->post('produtu/store', 'Produtu::store');
    $routes->post('fornesedor/store', 'Fornesedor::store');
    $routes->post('kompras/store', 'Kompras::store');
    $routes->post('kompras_item/store', 'Kompras_item::store');
    $routes->post('vendas/store', 'Vendas::store');
    $routes->post('vendas_item/store', 'Vendas_item::store');
    $routes->post('role/store', 'Role::store');
    $routes->post('user/store', 'User::store');

    // Edit
    $routes->get('/kategoria/edit/(:num)', 'Kategoria::edit/$1');
    $routes->get('/kostumer/edit/(:num)', 'Kostumer::edit/$1');
    $routes->get('/subkategoria/edit/(:num)', 'Subkategoria::edit/$1');
    $routes->get('/produtu/edit/(:num)', 'Produtu::edit/$1');
    $routes->get('/fornesedor/edit/(:num)', 'Fornesedor::edit/$1');
    $routes->get('/kompras/edit/(:num)', 'Kompras::edit/$1');
    $routes->get('/kompras_item/edit/(:num)', 'Kompras_item::edit/$1');
    $routes->get('/vendas/edit/(:num)', 'Vendas::edit/$1');
    $routes->get('/vendas_item/edit/(:num)', 'Vendas_item::edit/$1');
    $routes->get('/role/edit/(:num)', 'Role::edit/$1');
    $routes->get('/user/edit/(:num)', 'User::edit/$1');

    // Update
    $routes->post('/kategoria/update/', 'Kategoria::update');
    $routes->post('/kostumer/update/', 'Kostumer::update');
    $routes->post('/subkategoria/update/', 'Subkategoria::update');
    $routes->post('/produtu/update/', 'Produtu::update');
    $routes->post('/fornesedor/update/', 'Fornesedor::update');
    $routes->post('/kompras/update/', 'Kompras::update');
    $routes->post('/kompras_item/update/', 'Kompras_item::update');
    $routes->post('/vendas/update/', 'Vendas::update');
    $routes->post('/vendas_item/update/', 'Vendas_item::update');
    $routes->post('/role/update/', 'Role::update');
    $routes->post('/user/update/(:num)', 'User::update/$1');

    //Delete
    $routes->get('kategoria/delete/(:num)', 'Kategoria::delete/$1');
    $routes->get('kostumer/delete/(:num)', 'Kostumer::delete/$1');
    $routes->get('subkategoria/delete/(:num)', 'Subkategoria::delete/$1');
    $routes->get('produtu/delete/(:num)', 'Produtu::delete/$1');
    $routes->get('fornesedor/delete/(:num)', 'Fornesedor::delete/$1');
    $routes->get('kompras/delete/(:num)', 'Kompras::delete/$1');
    $routes->get('kompras_item/delete/(:num)', 'Kompras_item::delete/$1');
    $routes->get('vendas/delete/(:num)', 'Vendas::delete/$1');
    $routes->get('vendas_item/delete/(:num)', 'Vendas_item::delete/$1');
    $routes->get('role/delete/(:num)', 'Role::delete/$1');
    $routes->get('user/delete/(:num)', 'User::delete/$1');

    // Print or Report
    $routes->get('/kategoria/print', 'Kategoria::print');
    $routes->get('/kostumer/print', 'Kostumer::print');
    $routes->get('/subkategoria/print', 'Subkategoria::print');
    $routes->get('/produtu/print', 'Produtu::print');
    $routes->get('/fornesedor/print', 'Fornesedor::print');
    $routes->get('/kompras/print', 'Kompras::print');
    $routes->get('/vendas/print', 'Vendas::print');
    $routes->get('/kompras_item/print', 'Kompras_item::print');
    $routes->get('/vendas_item/print', 'Vendas_item::print');

    // Hamosu Frontend
    $routes->get('/frontend', 'Frontend::frontend');
    $routes->get('frontend', 'Frontend::frontend');

    // logout 
    $routes->get('/auth/logout', 'Auth::logout');
});
