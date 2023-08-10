<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileUnacceptableForCollection;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {

        // if ($exception  instanceof FileUnacceptableForCollection) {
        //     return redirect()->back()->with('error', 'Only JPEG Files Are Accepted');
        // }
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
