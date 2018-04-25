<?php
require 'vendor/autoload.php';
require __DIR__. "/table.php";
use Faker\Factory;
$faker= Factory::create();
$users=[
    [
        'name'=>'Shakil',
        'email'=>'shakil@gmail.com',
    ],
    [
        'name'=>'parvaz',
        'email'=>'parvaz@gmail.com',
    ],
    [
        'name'=>'Sujon',
        'email'=>'sujon@gmail.com',
    ]
    ];

    $categories=['tacnology','web','programming'];
    foreach($users as $user){
            User::create([
                'name'=> $user['name'],
                'email'=> $user['email'],
                'password'=>password_hash('secret',PASSWORD_BCRYPT)
            ]);
    }
    foreach($categories as $category){
        Category::create([
            'name'=>$category
        ]);
    }
    for($i=0; $i<50; $i++){
        Post::create([
            'title'=>$faker->sentence,
            'content'=>$faker->paragraph(rand(5,15)),
            'category_id'=> rand(1,3),
            'user_id'=> rand(1,3)
        ]);
    }