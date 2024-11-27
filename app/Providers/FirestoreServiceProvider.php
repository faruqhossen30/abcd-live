<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Google\Cloud\Firestore\FirestoreClient;


class FirestoreServiceProvider extends ServiceProvider
{
      /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton(FirestoreClient::class, function () {
            $keyFilePath = base_path(env('FIREBASE_CREDENTIALS')); // Points to the root directory
            return new FirestoreClient([
                'keyFilePath' => $keyFilePath,
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
