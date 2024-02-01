<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\In;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get("/", [IndexController::class, "index"]);
Route::get("/architectural", [IndexController::class, "architectural"]);
Route::get("/contact", [IndexController::class, "contact"]);
Route::get("/interior", [IndexController::class, "interior"]);
Route::get("/legal", [IndexController::class, "legal"]);
Route::get("/management", [IndexController::class, "management"]);
Route::get("/realestate", [IndexController::class, "realestate"]);
Route::get("/services", [IndexController::class, "services"]);
Route::get("/turnkey", [IndexController::class, "turnkey"]);
Route::get("/dashboard", [DashboardController::class, "dashboard"]);
Route::get("/manageproject", [DashboardController::class, "manageproject"]);
Route::get("/manageteams", [DashboardController::class, "manageteams"]);
Route::get("/dashboard-view", [DashboardController::class, "dashboardview"]);
Route::get("/project", [DashboardController::class, "projectpage"]);
Route::post("/contact", [ContactController::class, "submit"]);
Route::post("/project", [DashboardController::class, "project"]);
Route::get("/projects/{id}", [ProjectController::class, "showProject"])->name("showProject");
Route::get("/team",[DashboardController::class,'team']);
Route::post('/team', [DashboardController::class,'submit'])->name('team');
Route::get("/portfolio", function(){
    $projects = DB::table('project')->get();
        return view('portfolio', compact('projects'));
});
Route::get("/about",function () {
        $teams = DB::table('teams')->get();
        return view('about', compact('teams'));
    }
);
Route::get("/manageteams/{id}",[DashboardController::class,"destroyteam"]);
Route::get("/manageproject/{id}",[DashboardController::class,"destroyproject"]);
Route::get("/edit/{id}",[DashboardController::class,"getTeamById"])->name("edit");
Route::get("/editprojects/{id}",[DashboardController::class,"getProjectById"])->name("editprojects");
Route::put('/edit/{id}', [DashboardController::class, 'updateTeam'])->name('teamUpdate');
Route::put('/ediprojects/{id}', [DashboardController::class, 'updatePro'])->name('projectUpdate'); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');