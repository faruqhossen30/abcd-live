<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DashboarController extends Controller
{
    public function index(): Response{
        return Inertia::render('Admin/Dashboard');
    }
}