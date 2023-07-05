<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function Home(Request $request) {
        if ($request->has('q')) {
            $pagination = Blog::search($request->q)->query(function (Builder $query) {
                $query->with('author');
            })->paginate(9)->appends(['query' => null, 'q' => $request->get('q')]);
        }
        else {
            $pagination = Blog::with('author')->paginate(9);
        }

        return Inertia::render('Home', [
            'blogs' => $pagination->items(),
            'pagination' => $pagination
        ]);
    }
}
