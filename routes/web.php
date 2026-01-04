<?php

use Illuminate\Support\Facades\Route;

class User
{
    public static function index(): array
    {
        return [
            [
                'id' => '324',
                'name' => 'jooo',
                'role' => 'admin',
            ],
            [
                'id' => '325',
                'name' => 'hana',
                'role' => 'user',
            ],
            [
                'id' => '326',
                'name' => 'mayer',
                'role' => 'guest',
            ],
        ];
    }
}
$data = (new User)->index();

Route::get('/admin', function () {

    return view('welcome', ['data' => User::index()]);
});
