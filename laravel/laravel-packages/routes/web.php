<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

// use Spatie\QueryBuilder\QueryBuilder;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/activity-logs', function () {
    return Activity::all()->last();
});


Route::get('/query-builder', function () {
    $result = QueryBuilder::for(User::class)
        ->allowedFilters([
            'name', 'email', 'id',
            AllowedFilter::exact("id"),
            AllowedFilter::scope('verified')
        ])
        ->allowedSorts(['name',])
        ->allowedFields(['name', 'email'])
        // ->where('email_verified_at' , null)
        ->get();
    return $result;
});
