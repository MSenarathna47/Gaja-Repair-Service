<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ReviewController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/user/dashboard',[HomeController::class,'ViewFrontend'])->name('user.dashboard');
Route::get('/admin/dashboard',[HomeController::class,'ViewAdminDashboard'])->name('admin.dashboard');
Route::get('/manager/dashboard',[HomeController::class,'ViewManagerDashboard'])->name('manager.dashboard');
Route::get('/logout',[AuthenticatedSessionController::class,'destroy'])->name('admin.logout');
Route::get('/redirect', [App\Http\Controllers\LoginController::class, 'Login'])->name('redirect');


// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('backend.index');
//     })->name('dashboard');
// });


// Frontend route

Route::get('/home', [FrontendController::class , 'Index'])->name('home');
Route::get('/about', [FrontendController::class , 'ViewAbout'])->name('about');
Route::get('/branch', [FrontendController::class , 'ViewBranch'])->name('branch');
Route::get('/contact', [FrontendController::class , 'ViewContact'])->name('contact');
Route::get('/features', [FrontendController::class , 'Viewfeatures'])->name('features');
Route::get('/apoiment', [FrontendController::class , 'Viewapoiment'])->name('apoiment');
Route::get('/our_team', [FrontendController::class , 'Viewour_team'])->name('our_team');
Route::get('/review', [FrontendController::class , 'Review'])->name('review');



//    all admin routes

Route::prefix('admin')->group(function(){

    Route::controller(AppointmentController::class)->group(function (){

        Route::post('make/appointment','MakeAppointment')->name('make.appointment'); 
        Route::get('/view/appointment','ViewAppointment')->name('admin.view.appointment');
        Route::get('/check/appointment{id}','CheckAppointment')->name('admin.check.appointment');
        Route::get('/delete/appointment{id}','AppointmentDelete')->name('admin.delete.appointment');
        Route::post('/request/appointment','RequestAppointment')->name('request.appointment');
        Route::get('/view/request/appointment','ViewRequestAppointment')->name('view.request.appointment');
        Route::get('/view/approved/appointment','ViewApprovedAppointment')->name('view.approved.appointment');
        Route::get('/view/mailed/appointment','ViewMailedAppointment')->name('view.mailed.appointment');
        Route::get('/sendmail/{id}','SendMail')->name('send.mail');


    });
    Route::controller(ManagerController::class)->group(function (){

        Route::get('/view/manager','ViewManager')->name('view.manager');
        Route::get('/add/manager','AddManager')->name('add.manager');
        Route::post('store/manager','Store')->name('store.manager');
        Route::get('/edit/manager{id}','EditManager')->name('edit.manager');
        Route::get('/delete/manager/{id}','DeleteManager')->name('delete.manager');
        Route::post('/update/manager','UpdateManager')->name('update.manager');
        
    });
    
    Route::controller(BranchController::class)->group(function (){

        Route::get('view/branch','ViewBranch')->name('view.branch');
        Route::get('/add/branch','AddBranch')->name('add.branch');
        Route::post('/store/branch','StoreBranch')->name('store.branch');
        Route::get('/edit/branch{id}','EditBranch')->name('edit.branch');
        Route::get('/delete/branch/{id}','DeleteBranch')->name('delete.branch');
        Route::post('/update/branch','UpdateBranch')->name('update.branch');
        
    });
});



Route::prefix('manager')->group(function(){

    Route::controller(AppointmentController::class)->group(function (){

        Route::get('/view/appointment','ManagerViewAppointment')->name('manager.view.appointment');
        Route::get('/check/appointment{id}','ManagerCheckAppointment')->name('manager.check.appointment');
        Route::post('/corform/appointment','CorformAppointment')->name('corform.appointment');

    });
});



    Route::controller(ReviewController::class)->group(function (){

        Route::post('/add/review','AddReview')->name('add.review');
        // Route::get('/check/appointment{id}','ManagerCheckAppointment')->name('manager.check.appointment');
        // Route::post('/corform/appointment','CorformAppointment')->name('corform.appointment');

    });
















