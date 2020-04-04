<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function home(){
        return view('home');

    }
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
    public function news(){
    // $posts = Post::orderBy('id', 'DESC')->paginate(2);
    $posts = Post::latest()->paginate(2);
    $links = $posts->links();

    return view('news', compact('posts', 'links'));
    
    }
    public function newsMore($id){
        
        $post = Post::findOrFail($id);

        $post->increment('views');

        $most_viewed = Post::mostViews()->get();

        return view('newsMore', [
            'post'=>$post,
            'most_posts' => $most_viewed
        ]);
    }
}
