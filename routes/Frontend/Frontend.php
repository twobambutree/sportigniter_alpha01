<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

        Route::get('/upload', 'VideoUploadController@index')->name('upload');
        Route::post('/upload', 'VideoUploadController@store');

        Route::post('/videos', 'VideoController@store')->name('videos');
        Route::put('/videos/{video}', 'VideoController@update')->name('videos.update');

        Route::get('create', 'PlaybookController@indexCreate')->name('create');
        Route::post('create', 'PlaybookController@store')->name('create');

        Route::get('playbook/{playbook}', 'PlaybookController@index')->name('playbook');
        //Route::get('playbook/{playbook}', 'PlaybookController@index')->name('playbook');

        //Route::get('playbook/update', 'PlaybookController@edit')->name('playbook.edit');
        Route::put('playbook/{playbook}/update', 'PlaybookController@update')->name('playbook.update');

        Route::post('playbook/{playbook}/physical', 'PlaybookController@createPhysical')->name('playbook.physical');
        //Route::post('playbook/{playbook}/physical', 'PlaybookController@createPhysical')->name('playbook.physical');

        Route::put('playbook/{playbook}/physical/update', 'PlaybookController@updatePhysical')->name('playbook.physical.update');
        //Route::put('playbook/{playbook}/physical/update', 'PlaybookController@updatePhysical')->name('playbook.physical.update');

        Route::post('playbook/{playbook}/education', 'PlaybookController@createEducation')->name('playbook.education');
        //Route::post('playbook/{playbook}/education', 'PlaybookController@createEducation')->name('playbook.education');

        Route::put('playbook/{playbook}/education/update', 'PlaybookController@updateEducation')->name('playbook.education.update');
        //Route::post('playbook/{playbook}/education/update', 'PlaybookController@updateEducation')->name('playbook.education.update');

        Route::post('playbook/{playbook}/player', 'PlaybookController@createPlayer')->name('playbook.player');
        //Route::post('playbook/{playbook}/profile', 'PlaybookController@createProfile')->name('playbook.profile');

        Route::put('playbook/{playbook}/player/update', 'PlaybookController@updatePlayer')->name('playbook.player.update');
        //Route::post('playbook/{playbook}/profile/update', 'PlaybookController@updateProfile')->name('playbook.profile.update');

    });
});
