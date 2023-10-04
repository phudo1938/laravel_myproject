<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     // return view('home');
//     $user = new User();
//     $allUser = $user::all();
//     dd($allUser);
// });
Route::prefix('admin')->group(function () {
    Route::get('/home/{slug}-{id}.html', function ($slug=null, $id=null) {
         $content = 'Phương thức get path/ unicode với tham số: ';
        $content .= '$id = '.$id.'</br>';
        $content .= '$slug = '.$slug;
        return $content;
    })->where(
        ['id'=>'[0-9]+',
         'slug'=>'[a-z-]+']
    );
});
