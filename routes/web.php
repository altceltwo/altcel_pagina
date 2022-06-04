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
    return view('pagina.index');
});

Route::get('planes', function(){
	return View::make('pagina.paquetes');
});

Route::get('avisodeprivacidad', function(){
	return View::make('pagina.aviso');
});

Route::get('cobertura', function(){
	return View::make('pagina.cobertura');
});

Route::get('legales', function(){
	return View::make('pagina.legales');
});

Route::get('terminos', function(){
	return View::make('pagina.terminos');
});

Route::get('soporte', function(){
	return View::make('pagina.soporte');
});

Route::get('quienesomos', function(){
	return View::make('pagina.somos');
});

Route::get('terminos', function(){
	return View::make('pagina.terminos');
});

Route::get('distribuidores', function(){
	return View::make('pagina.distribuidor');
});

Route::get('recargas', function(){
	return View::make('pagina.recarga');
});

Route::get('card', function(){
	return View::make('pagina.recargas.card');
});
Route::post('cardPasarela', function(){
	return View::make('pagina.recargas.pasarela');
})->name('cardaPost');


Route::get('testmp', function () {
	return view('pagina.mercadopago.mp');
 });
 
Route::get('newDealer','DealerController@newDealer')->name('newDealer');

Route::post('pegaphone','DealerController@pegaPhone');

// Route::get('rechargeWeb', 'RechargeController@rechargeWeb')->name('recarga');
Route::get('validatePhone', 'RechargeController@rechargeWeb')->name('validPhone');

//webhook
// Route::post('/webhook', 'WebhookController@webhookConekta');
Route::post('/notifications-webhook', 'WebhookController@notificationWHk');
