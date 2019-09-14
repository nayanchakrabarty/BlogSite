<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['fetured_posts'] = Post::with('category', 'author')
            ->where('is_fetured', 1)
            ->where('status', 'published')
            ->limit(3)
            ->latest()
            ->get();
        $data['recent_posts'] = Post::with('category', 'author')
            ->where('status', 'published')
            ->limit(4)
            ->latest()
            ->get();
        $data['most_view_posts'] = Post::with('category')
            ->orderBy('total_view', 'DESC')
            ->limit('5')
            ->get();
        //dd($data);

        return view('front.home', $data);
    }

    public function post_details($id)
    {
        $posts = Post::findOrFail($id);
        $data['post_details'] = $posts;
        $posts->increment('total_view');
        //dd($posts);
        return view('front.post.details', $data);
    }
    public function category_posts($id)
    {
        $data['posts'] = Post::with('category', 'author')
            ->where('category_id', $id)
            ->where('status', 'published')
            ->orderBy('id','DESC')
            ->paginate(3);
        $data['category'] = Category::findOrFail($id);
        return view('front.post.category_posts', $data);

    }
}
