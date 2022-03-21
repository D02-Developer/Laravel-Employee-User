<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Models\Employee;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'index']);

Route::get('/employee', [EmployeeController::class, 'list']); // View List

Route::post('/employee/add', [EmployeeController::class, 'store']); // Save Data
Route::get('/employee/add', function () {
    $user = User::all();
    return view('employees.create', ['user' => $user]);
});
// Route::view('/employee/add', 'employees.create');

Route::post('/employee/edit/{id}', [EmployeeController::class, 'update']); // Update Data
Route::get('/employee/edit/{id}', function ($id) {
    $employee = Employee::find($id);
    $user = User::all();
    return view('employees.edit', ['user' => $user, 'employees'=> $employee]);
});
// Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit']);

Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy']); //Delete Data


Route::get('/user', [UserController::class, 'list']); // View List

Route::post('/user/add', [UserController::class, 'store']); // Save Data
Route::view('/user/add', 'users.create');

Route::post('/user/edit/{id}', [UserController::class, 'update']); // Update Data
Route::get('/user/edit/{id}', [UserController::class, 'edit']);

Route::get('/user/delete/{id}', [UserController::class, 'destroy']); //Delete Data
