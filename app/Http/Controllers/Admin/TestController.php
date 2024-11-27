<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Google\Cloud\Firestore\FirestoreClient;

class TestController extends Controller
{
    public function index(FirestoreClient $firestore)
    {
        $collection = $firestore->collection('testCollection');
        $docRef = $collection->add(['name' => 'Laravel Firestore']);
        return 'Document created with ID: ' . $docRef->id();
    }
}
