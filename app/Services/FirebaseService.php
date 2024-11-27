<?php

namespace App\Services;

use Google\Cloud\Firestore\FirestoreClient;

class FirestoreService
{
    protected $firestore;

    public function __construct()
    {
        $this->firestore = new FirestoreClient([
            'keyFilePath' => env('FIREBASE_CREDENTIALS'),
        ]);
    }

    public function getFirestore()
    {
        return $this->firestore;
    }
}
