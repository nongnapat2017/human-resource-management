<?php

/*
|--------------------------------------------------------------------------
| Production Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/get-list/{name}', 'ListController@getList');

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
 */
Route::get('/create-employee', 'EmployeeController@showMainForm');

Route::get('/test', function(){
//    $data = [ 'name' => 'test' ,
//              'name' => 'php'];
//     return $data;
return view('test');
});
