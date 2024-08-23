<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $title;

    public function __construct()
    {
        $this->title = 'Beranda'; // Set default title
    }

    public function index()
    {
        $blogs = Blog::inRandomOrder()->limit(3)->get();
        return view('home', [
            'blogs' => $blogs,
            'title' => $this->title
        ]);
    }
    public function showBlogs()
    {

        return view('blogs.index', compact('blogs')); // Mengirim data ke view
    }
}
