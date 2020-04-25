<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Luezoid\Laravelcore\Contracts\IFile::class, function ($app) {
            if (config('file.is_local')) {
                return $app->make(\Luezoid\Laravelcore\Files\Services\LocalFileUploadService::class);
            }
            return $app->make(\Luezoid\Laravelcore\Files\Services\SaveFileToS3Service::class);
        });
        if ($this->app->environment() == 'local') {
            $this->app->register(\Reliese\Coders\CodersServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
