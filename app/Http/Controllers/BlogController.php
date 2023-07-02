<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function Home() {
        $blogs = BlogResource::collection(Blog::all());

        return Inertia::render('Home', [
            'blogs' => $blogs,
        ]);
    }
}
