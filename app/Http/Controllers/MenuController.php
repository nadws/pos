<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MenuController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Menu',
            'content' => 'Selamat datang di menu',
        ];
        return Inertia::render('Menu', $data);
    }
}
