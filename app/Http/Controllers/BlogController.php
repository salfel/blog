<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Pagination\LengthAwarePaginator;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function Home() {
        $pagination = Blog::with('author')->paginate(9);

        return Inertia::render('Home', [
            'pagination' => $pagination,
            'blogs' => $pagination->items()
        ]);
    }
}
