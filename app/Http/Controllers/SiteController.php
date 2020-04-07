<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Feedback;

class SiteController extends Controller
{
    public function home(){
    $posts = Post::latest()->paginate(3);
    $links = $posts->links();

    return view('home', compact('posts', 'links'));
        

    }
    public function services(){
        return view('services');
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
    public function search(Request $request){
        
        $key = $request->get('key');
        $key = '%'.trim($key).'%';
        $results = Post::where('title', 'LIKE', $key)
                        ->orWhere('short', 'LIKE', $key)
                        ->orWhere('content', 'LIKE', $key)
                        ->paginate(10);
        // dd($results->toSql());
        $links = $results->links();

        return view('search', compact('results', 'links'));

    }
    public function contact(){
        return view('contact');
    }

    public function feedbackStore(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|',
            'subject' => 'required|min:10|max:100',
            'message' => 'required|max:2048'
        ]);
        Feedback::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'subject' => $request->post('subject'),
            'message' => $request->post('message')
        ]);

        return redirect()
                 ->route('contact')
                 ->with('success', 'Xabar uchun raxmat! Tez orada sizga javob qaytaramiz.');
    }
}
