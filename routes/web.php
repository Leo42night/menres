<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\RiskOwnerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// route untuk semua auth
Auth::routes();

Route::get('/', fn() => view('welcome'))->name('dashboard');

// DIBAWAH INI MERUPAKAN KUMPULAN API
Route::controller(DataController::class)->group(function () {
    // Digunakan Axios untuk mengambil data lokasis toko yang punya produk id
    Route::get('/data/search-loc/{id}', 'index')->name('data.search-loc');
    
    // datatable of roles and 2 button type for witdh screen   
    Route::get('/data/role-big', 'rolesBig')->name('data.role-big');
    Route::get('/data/role-small', 'rolesSmall')->name('data.role-small');
    
    // datatable of users and 2 button type for witdh screen   
    Route::get('/data/user-big', 'usersBig')->name('data.user-big');
    Route::get('/data/user-small', 'usersSmall')->name('data.user-small');

    Route::get('/data/category', 'categories')->name('data.category');
    Route::get('/data/asset', 'assets')->name('data.assets');
    Route::get('/data/requirement', 'requirements')->name('data.requirements');
});

Route::middleware(['auth'])->group(function () {
    // Admin Routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'manageRoles'])->name('admin');
        Route::get('/admin/roles', [AdminController::class, 'manageRoles'])->name('admin.roles');
        Route::post('/admin/roles/create', [AdminController::class, 'createRole'])->name('admin.roles.create');
        Route::put('/admin/roles/edit/{id}', [AdminController::class, 'editRole'])->name('admin.roles.edit');
        Route::delete('/admin/roles/delete/{id}', [AdminController::class, 'deleteRole'])->name('admin.roles.delete');

        Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
        Route::post('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
        Route::put('/admin/users/edit/{id}', [AdminController::class, 'editUser'])->name('admin.users.edit');
        Route::delete('/admin/users/delete/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    });

    // Risk Owner Routes
    Route::middleware(['role:risk_owner'])->group(function () {
        Route::get('/dashboard', [RiskOwnerController::class, 'dashboard'])->name('risk.owner.dashboard');
        Route::get('/risk/identification', [RiskOwnerController::class, 'identifyRisk'])->name('risk.owner.identify');
        Route::get('/risk/analysis', [RiskOwnerController::class, 'analyzeRisk'])->name('risk.owner.analyze');
        Route::get('/risk/evaluation', [RiskOwnerController::class, 'evaluateRisk'])->name('risk.owner.evaluate');
    });

    // Operator Routes
    Route::middleware(['role:operator'])->group(function () {
        Route::get('/assets/categories', [OperatorController::class, 'manageAssetCategories'])->name('operator.asset.categories');
        Route::post('/assets/categories/create', [OperatorController::class, 'storeAssetCategory'])->name('operator.asset.categories.create');
        Route::put('/assets/categories/edit/{id}', [OperatorController::class, 'updateAssetCategory'])->name('operator.asset.categories.edit');
        Route::delete('/assets/categories/delete/{id}', [OperatorController::class, 'deleteAssetCategory'])->name('operator.asset.categories.delete');

        Route::get('/assets', [OperatorController::class, 'manageAssets'])->name('operator.assets');
        Route::post('/assets/create', [OperatorController::class, 'storeAsset'])->name('operator.assets.create');
        Route::put('/assets/edit/{id}', [OperatorController::class, 'updateAsset'])->name('operator.assets.edit');
        Route::delete('/assets/delete/{id}', [OperatorController::class, 'deleteAsset'])->name('operator.assets.delete');

        Route::get('/security-requirements', [OperatorController::class, 'manageSecurityRequirements'])->name('operator.security.requirements');
        Route::post('/security-requirements/create', [OperatorController::class, 'stroreSecurityRequirement'])->name('operator.security.requirements.create');
        Route::put('/security-requirements/edit/{id}', [OperatorController::class, 'updateSecurityRequirement'])->name('operator.security.requirements.edit');
        Route::delete('/security-requirements/delete/{id}', [OperatorController::class, 'deleteSecurityRequirement'])->name('operator.security.requirements.delete');
    });

    // Kepala UPT Routes
    Route::middleware(['role:kepala_upt'])->group(function () {
        Route::get('/risk/profile', [RiskController::class, 'showRiskProfile'])->name('kepala.upt.risk.profile');
    });
});