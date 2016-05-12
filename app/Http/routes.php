<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#-----------------------------------------------
# Authentication
#----------------------------------------------

Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/','Auth\AuthController@postLogin');

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');


Route::get('/logout', 'Auth\AuthController@logout');

/*Route::get('/logout', function(){
  \Auth::logout();

 # This line is our new addition to this method
 \Session::flash('message','You have been logged out.');

 return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');

}); */

Route::group(['middleware' => 'auth'], function() {

Route::get ('/dashboard','DashboardController@getIndex');
Route::get ('/task/create','DashboardController@createTask');
Route::post('/task/create', 'DashboardController@postCreate');
Route::get('/task/edit/{id?}', 'DashboardController@editTask');
Route::post('/task/edit/{id?}', 'DashboardController@editpostTask');
Route::get('/task/detail/{id?}', 'DashboardController@detailTask');
Route::get('/task/confirm-delete/{id?}', 'DashboardController@getConfirmDelete');
Route::get('/task/delete/{id?}', 'DashboardController@getDelete');
Route::get('/task/incomplete', 'DashboardController@getIncomplete');
Route::get('/task/complete', 'DashboardController@getComplete');




});





















Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
