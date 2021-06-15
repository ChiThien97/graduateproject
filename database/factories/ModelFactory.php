<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Loaisanpham::class, static function (Faker\Generator $faker) {
    return [
        'tenloai' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'mota' => $faker->text(),
        'ngaytao' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Sanpham::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Sanpham::class, static function (Faker\Generator $faker) {
    return [
        'tensanpham' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'gia' => $faker->randomFloat,
        'gia_km' => $faker->randomFloat,
        'mota' => $faker->text(),
        'hinhanh' => $faker->sentence,
        'baohanh' => $faker->sentence,
        'thongso' => $faker->text(),
        'ngaytao' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
