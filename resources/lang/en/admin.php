<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'loaisanpham' => [
        'title' => 'Loaisanpham',

        'actions' => [
            'index' => 'Loaisanpham',
            'create' => 'New Loaisanpham',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tenloai' => 'Tenloai',
            'slug' => 'Slug',
            'mota' => 'Mota',
            'ngaytao' => 'Ngaytao',
            'enabled' => 'Enabled',
            
        ],
    ],

    'sanpham' => [
        'title' => 'Sanpham',

        'actions' => [
            'index' => 'Sanpham',
            'create' => 'New Sanpham',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'sanpham' => [
        'title' => 'Sanpham',

        'actions' => [
            'index' => 'Sanpham',
            'create' => 'New Sanpham',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tensanpham' => 'Tensanpham',
            'slug' => 'Slug',
            'gia' => 'Gia',
            'gia_km' => 'Gia km',
            'mota' => 'Mota',
            'hinhanh' => 'Hinhanh',
            'baohanh' => 'Baohanh',
            'thongso' => 'Thongso',
            'ngaytao' => 'Ngaytao',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];