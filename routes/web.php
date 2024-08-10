<?php

use App\Http\Controllers\ListingController;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//all listings
Route::get('/', [ListingController::class,'index']);




//show create form
Route::get('/create',[ListingController::class,'create']);


//single listing data
Route::post('/listings', [ListingController::class, 'store']);

Route::get('listings/{listing}/edit',
ListingController::class,'edit');

//single listing 
Route::get('/listings/{listing}', [ListingController::class, 'show']);


/*
Route::get('/hello', function(){
    return response ('hello world')
    ->header('Content-Type','text/plain')
    ->header('foo','bar');
 
});


Route::get('/post/{id}' , function($id){
    return response('post'. $id);
})->where('id','[0-9]+');

Route::get('/search', function (Request $request){
    return $request->name.''.$request->city;
});*/
              
