<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->title = 'Tentang'; // Set default title
    }
    public function index()
    {
        return view('tentang', [
            'title' => $this->title
        ]);
    }
    public function agency()
    {
        return view('agency', [
            'title' => $this->title
        ]);
    }
    public function webdev()
    {
        return view('webdev', [
            'title' => 'Web Development'
        ]);
    }
    public function design()
    {
        return view('design', [
            'title' => 'Graphic Design'
        ]);
    }
    public function medsos()
    {
        return view('medsos', [
            'title' => $this->title
        ]);
    }
}
