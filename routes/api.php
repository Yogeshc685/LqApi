<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/judgements','JudgementController');
Route::group(['prefix'=>'judgements'],function(){

  Route::apiResource('/{product}/reviews','ReviewController');
});
