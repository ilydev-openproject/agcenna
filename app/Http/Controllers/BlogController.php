<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->title = 'Blog'; // Set default title
    }
    public function index()
    {
        $blogs = Blog::where('status', 'published')
            ->orderBy('id_blog', 'desc')
            ->Paginate(6);
        $categories = Category::withCount('blogs')
            ->get();
        $total = Blog::count();
        $tags = Tag::limit(14)->get();
        return view('blog', [
            'blogs' => $blogs,
            'categories' => $categories,
            'total' => $total,
            'tags' => $tags,
            'title' => $this->title
        ]);
    }
    public function detail($slug)
    {
        // Mengambil data blog berdasarkan slug
        $blog = Blog::where('slug', $slug)->with('tags')->first();

        // Memeriksa jika blog tidak ditemukan
        if (!$blog) {
            abort(404, 'Blog not found');
        }

        // Mengembalikan view dengan data blog
        return view('blogdetail', compact('blog'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $blogs = Blog::where('id_category', $category->id_category)
            ->orderBy('id_blog', 'desc')
            ->paginate(6);

        $categories = Category::withCount('blogs')
            ->get();
        $total = Blog::count();
        $tags = Tag::limit(14)->get();
        return view('blog', [
            'blogs' => $blogs,
            'categories' => $categories,
            'total' => $total,
            'tags' => $tags,
            'title' => $this->title
        ]);
    }
    public function tag($slug)
    {
        $tags = Tag::where('slug', $slug)->first();

        if (!$tags) {
            return redirect()->back()->with('error', 'Tag tidak ditemukan');
        }

        // Ambil semua blog yang memiliki tag tersebut
        $blogs = Blog::whereHas('tags', function ($query) use ($tags) {
            $query->where('tags.id', $tags->id);
        })
            ->orderBy('id_blog', 'desc')
            ->paginate(6);

        $categories = Category::withCount('blogs')
            ->get();
        $total = Blog::count();
        $tags = Tag::limit(14)->get();
        return view('blog', [
            'blogs' => $blogs,
            'categories' => $categories,
            'total' => $total,
            'tags' => $tags,
            'title' => $this->title
        ]);
    }
}
