<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function() {
    return 'Home , Home' ;
});

Route::get('/about', function () {
    return view('schol'); //schol.blade.php
});*/

/*Route::get('/user/profile/{id}', function ($id) {
    echo 'user id :' . $id - 2;
});*/



/*Route::get('/about', function () {
    return view('pages1.schol');
});
*/


// news , all news , new
/*Route::get('/news/{id?}', function ($id = null) {
    $news = [ 1 , 2 , 3 , 6 , 8 ];

if($id){
echo 'new is : ' . $id ;
}else{
    echo'all news : <br>' ;
foreach($news as $new){
    echo $new . '<br>';
    }


}





   // echo 'new id :' . $id;
});*/



//site 1 / home , about us , contact us  //////perfix/////

Route::prefix('site1')->controller(SiteOneController::class)->group(function(){

    Route::get('/home' , 'home');
    Route::get('/about' ,  'about');
    Route::get('/contact' , 'contact');
    Route::get('/msg/{id?}' , 'msg');

});














