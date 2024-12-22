<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;

use App\Http\Middleware\CheckProfile;


Route::get("/", [HomeController::class,"home"])->name("home.tampil");


Route::get("/registrasi", [AuthController::class,"tampilRegistrasi"])->name("registrasi.tampil");
Route::post("/registrasi/submit", [AuthController::class,"submitRegistrasi"])->name("registrasi.submit");

Route::get("/login", [AuthController::class,"tampilLogin"])->name("login");
Route::post("/login/submit", [AuthController::class,"submitLogin"])->name("login.submit");

Route::get("/logout", [AuthController::class,"logout"])->name("logout");

Route::get("/campaign", [ArticleController::class, "articles"]);
Route::get("/article", [ArticleController::class, "article_detail"]);

Route::get('/works', [PortofolioController::class, 'index'])->name('portfolio.index');
Route::get('/works/{id}', [PortofolioController::class, 'show'])->name('portfolio.show');

Route::get("/about", [AboutUsController::class,"about"])->name("about.tampil");

Route::get("/donation", [DonationController::class,"view"])->middleware(CheckProfile::class)->name('donation.create');
Route::post('/donation', [DonationController::class, 'store'])->name('donation.store');

Route::get('/profile', [ProfileController::class, 'show'])->middleware(CheckProfile::class);
Route::post('/profile', [ProfileController::class, 'store'])->name('user.profile.store');