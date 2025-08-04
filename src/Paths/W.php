<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Phpblaze\Bladelib\Contracts', 'middleware' => 'web'], function () {
    Route::get('unblock/{project_id}', 'MailoC@pHUnBlic');
    Route::get('block/{project_id}', 'MailoC@pHBliC');
    Route::post('resetLicense', 'MailoC@retLe');
    Route::get('erase/{project_id}', 'MailoC@strEraDom');
});

Route::group(['namespace' => 'Phpblaze\Bladelib\Contracts', 'middleware' => ['pBl', 'web']], function () {
    Route::post('block/license/verify', 'MailoC@strBloVer')->name('install.unblock');
    Route::get('block', 'MailoC@blSet')->name('install.block.setup');
});

Route::group(['namespace' => 'Phpblaze\Bladelib\Contracts', 'middleware' => ['pMd', 'pRd', 'pWBl']], function() {
    Route::prefix('install')->group(function () {
        Route::get('requirements', 'MailoC@stPhExRe')->name('install.requirements');
        Route::get('directories', 'MailoC@stDitor')->name('install.directories');
        Route::get('database', 'MailoC@stDatSet')->name('install.database');
        Route::get('verify', 'MailoC@stvS')->name('install.verify.setup');
        Route::post('verify', 'MailoC@stVil')->name('install.verify');
        Route::get('license', 'MailoC@stLis')->name('install.license');
        Route::post('license', 'MailoC@StliSet')->name('install.license.setup');
        Route::post('database', 'MailoC@CoDatSet')->name('install.database.config');
        Route::get('completed', 'MailoC@Con')->name('install.completed');
    });
});
