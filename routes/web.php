<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return view('infos/contact/info');
});
Route::get('/partenariat', function () {
    return view('infos/contact/partenariat');
});
Route::get('/sav', function () {
    return view('infos/contact/sav');
});
Route::get('/contact', function () {
    return view('infos/contact/nousContacter');
});


Route::get('/frontend', function () {
    $pers = [
        ['Benseti','Aicha',     'web develloper', 'aicha.jpg',    '0494 50 11 33', 'Junior',   'front'],
        ['Mars','Bruno',        'web develloper', 'bruno.jpg',    '0497 66 45 33', 'Medior',   'front'],
        ['Darwin','Charles',    'web develloper', 'charles.jpg',  '0496 53 11 33', 'Director', 'front'],
        ['Remy','Ines',         'web develloper', 'ines.jpg',     '0499 92 11 54', 'Senior',   'front'],
        ['Gabin','Jean',        'web develloper', 'jean.jpg',     '0485 50 74 79', 'Manager',  'front'],
        ['Scorniels','Joelle',  'web develloper', 'joelle.jpg',   '0473 47 11 24', 'Medior',   'front'],
        ['Frenet','Julie',      'web develloper', 'julie.jpg',    '0494 50 11 33', 'Senior',   'back'],
        ['Lee','Kim',           'web develloper', 'kim.jpg',      '0497 66 45 33', 'Director', 'back'],
        ['Panier','Magali',     'web develloper', 'magali.jpg',   '0496 53 11 33', 'Manager',  'back'],
        ['Bergzucker','Marc',   'web develloper', 'marc.jpg',     '0499 92 11 54', 'Senior',   'back'],
        ['Rouyer','Nathalie',   'web develloper', 'nathalie.jpg', '0485 50 74 79', 'Medior',   'back'],
        ['Cardin','Pierre',     'web develloper', 'pierre.jpg',   '0473 47 11 24', 'Junior',   'back'],

    ];
    
    return view('team/web/dev/frontend', compact('pers'));
});

Route::get('/backend', function () {
    $pers = [
        ['Benseti','Aicha',     'web develloper', 'aicha.jpg',    '0494 50 11 33', 'Junior',   'front'],
        ['Mars','Bruno',        'web develloper', 'bruno.jpg',    '0497 66 45 33', 'Medior',   'front'],
        ['Darwin','Charles',    'web develloper', 'charles.jpg',  '0496 53 11 33', 'Director', 'front'],
        ['Remy','Ines',         'web develloper', 'ines.jpg',     '0499 92 11 54', 'Senior',   'front'],
        ['Gabin','Jean',        'web develloper', 'jean.jpg',     '0485 50 74 79', 'Manager',  'front'],
        ['Scorniels','Joelle',  'web develloper', 'joelle.jpg',   '0473 47 11 24', 'Medior',   'front'],
        ['Frenet','Julie',      'web develloper', 'julie.jpg',    '0494 50 11 33', 'Senior',   'back'],
        ['Lee','Kim',           'web develloper', 'kim.jpg',      '0497 66 45 33', 'Director', 'back'],
        ['Panier','Magali',     'web develloper', 'magali.jpg',   '0496 53 11 33', 'Manager',  'back'],
        ['Bergzucker','Marc',   'web develloper', 'marc.jpg',     '0499 92 11 54', 'Senior',   'back'],
        ['Rouyer','Nathalie',   'web develloper', 'nathalie.jpg', '0485 50 74 79', 'Medior',   'back'],
        ['Cardin','Pierre',     'web develloper', 'pierre.jpg',   '0473 47 11 24', 'Junior',   'back'],

    ];

    return view('team/web/dev/backend', compact('pers'));
});

Route::get('/equipe', function () {
    $pers = [
        ['Benseti','Aicha',     'web develloper', 'aicha.jpg',    '0494 50 11 33', 'Junior',   'front'],
        ['Mars','Bruno',        'web develloper', 'bruno.jpg',    '0497 66 45 33', 'Medior',   'front'],
        ['Darwin','Charles',    'web develloper', 'charles.jpg',  '0496 53 11 33', 'Director', 'front'],
        ['Remy','Ines',         'web develloper', 'ines.jpg',     '0499 92 11 54', 'Senior',   'front'],
        ['Gabin','Jean',        'web develloper', 'jean.jpg',     '0485 50 74 79', 'Manager',  'front'],
        ['Scorniels','Joelle',  'web develloper', 'joelle.jpg',   '0473 47 11 24', 'Medior',   'front'],
        ['Frenet','Julie',      'web develloper', 'julie.jpg',    '0494 50 11 33', 'Senior',   'back'],
        ['Lee','Kim',           'web develloper', 'kim.jpg',      '0497 66 45 33', 'Director', 'back'],
        ['Panier','Magali',     'web develloper', 'magali.jpg',   '0496 53 11 33', 'Manager',  'back'],
        ['Bergzucker','Marc',   'web develloper', 'marc.jpg',     '0499 92 11 54', 'Senior',   'back'],
        ['Rouyer','Nathalie',   'web develloper', 'nathalie.jpg', '0485 50 74 79', 'Medior',   'back'],
        ['Cardin','Pierre',     'web develloper', 'pierre.jpg',   '0473 47 11 24', 'Junior',   'back'],

    ];

    return view('team.web.dev.equipe', compact('pers'));
});


