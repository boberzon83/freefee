<?php

use App\Models\Town;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


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

Route::post('/contacto', function (Request $request) {
    //Enviar mail
    $email_cliente = 'hola@fincax.es';
    $data = array(
        'name' => $request->name,
        'tel' => $request->tel,
    );

    Mail::send('mails.demo', $data, function ($message) use ($email_cliente) {
        $message->from('hola@fincax.es', 'FreeFee');
        $message->sender('hola@fincax.es');
        $message->to($email_cliente);
        $message->subject('FreeFee - Contacto');
    });

    $alert = 'Se ha recibido su contacto correctamente, gracias por confiar en Freefee';

    $towns = Town::where('status', 1)->orderBy('name','ASC')->get();
    return view('welcome', compact('towns','alert'));

})->name('contacto');

Route::get('/terminos', function () {
    return view('privacy');
})->name('terminos');


Route::get('/cookies', function () {
    return view('cookies');
})->name('cookies');

Auth::routes();

//RUTAS PARA LA GESTIÓN DE LOS USUARIOS
Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/usuarios-crear', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::get('/usuarios-eliminados', [App\Http\Controllers\UserController::class, 'deleted'])->name('user.deleted');
Route::post('/usuarios', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/usuarios-editar_{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::get('/usuarios-profile_{user}', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::get('/usuarios-ficha_{user}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::put('/usuarios-actualizar_{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::put('/usuarios-actualizar-perfil_{user}', [App\Http\Controllers\UserController::class, 'update_profile'])->name('user.update_profile');
Route::delete('/usuarios-eliminar_{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
Route::put('/usuarios-activar_{user}', [App\Http\Controllers\UserController::class, 'active'])->name('user.active');

//RUTAS PARA LA GESTIÓN DE EMPRESAS
Route::get('/empresas', [App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
Route::get('/empresas-crear', [App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
Route::get('/empresas-eliminados', [App\Http\Controllers\CompanyController::class, 'deleted'])->name('company.deleted');
Route::post('/empresas', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
Route::get('/empresas-editar_{company}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit');
Route::get('/empresas-stock-asociado_{company}', [App\Http\Controllers\CompanyController::class, 'stock_asoc'])->name('company.stock_asoc');
Route::put('/empresas-actualizar_{company}', [App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');
Route::delete('/empresas-eliminar_{company}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('company.destroy');
Route::put('/empresas-activar_{company}', [App\Http\Controllers\CompanyController::class, 'active'])->name('company.active');

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');


//RUTAS PARA LA GESTION DEL PERFIL DEL USUARIO
Route::post('/update-profile_{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password_{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//ASIGNAR IDIOMA ELEGIDO
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
