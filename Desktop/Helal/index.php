<?php
session_start();
require 'vendor/autoload.php';
$url= parse_url(trim($_SERVER['REQUEST_URI'],'/'),PHP_URL_PATH);
$routes=[
    ''=> 'views/home.php',
    'about'=>'views/about.php',
    'contact'=>'views/contact.php',
    'author'=>'views/author.php',
    'post'=> 'views/post.php',
    'category'=>'views/category.php',
    'login'=> 'views/login.php',
    'logout'=>'views/logout.php',
    'register'=>'views/register.php',
    'dashboard/home'=>'views/dashboard/home.php',
    'dashboard/posts/create'=>'views/dashboard/post_create.php',
    'dashboard/edit'=>'views/dashboard/post_edit.php',
    'dashboard/delete'=>'views/dashboard/post_delete.php',
    'dashboard/categories/home'=>'views/dashboard/categories.php',
    'dashboard/categories/edit'=>'views/dashboard/category_edit.php',
    'dashboard/categories/delete'=>'views/dashboard/category_delete.php',
    'dashboard/categories/create'=>'views/dashboard/category_create.php',
];
if(array_key_exists($url,$routes)){
    require $routes[$url];
}else{
    require 'views/notfound.php';
}
