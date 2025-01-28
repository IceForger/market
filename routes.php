<?php

use Plugins\Market\Controllers\AdminController;

Route::middleware(['admin'])->prefix('admin/market')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('market.admin.index');
    Route::post('/save', [AdminController::class, 'save'])->name('market.admin.save');
});
