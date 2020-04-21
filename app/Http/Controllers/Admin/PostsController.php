<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Image;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_size = env('ADMIN_PAGE_SIZE', 12);
        $posts=Post::latest()
                            ->paginate($page_size);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([

            'title'=> 'required',
            'short'=> 'required',
            'content'=> 'required',
            'img' => 'required|file|mimes:jpeg,jpg,png'
        ]);
        //Upload image to storage
        $img_name = $request->file('img')->store('posts', ['disk' => 'public']);
        //Create thumbnail
        $full_path = storage_path('app/public/'.$img_name);
        $full_thumb_path = storage_path('app/public/thumbs/'.$img_name);
        $thumb = Image::make($full_path);
        // Proporsiya bilan qirqib olish
        // $thumb->resize(300, 300 function($constraint){
        //     $constraint->aspectRatio();
        // })->save($full_thumb_path);
        
        // Kvadrat qirqib olish
        $thumb->fit(300, 300, function($constraint){
                $constraint->aspectRatio();
        })->save($full_thumb_path);

        Post::create([
            'title' => $request->post('title'),
            'short' => $request->post('short'),
            'content' => $request->post('content'),
            'img' => $img_name,
            'views'=> 0,
            'thumb' => 'thumbs/'.$img_name
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Item created!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post=Post::findOrFail($id);

      $request -> validate([
        'title'=> 'required',
        'short'=> 'required',
        'content'=> 'required|min:50'
      ]);
        if($request->file('img')){
      //Delete old file
      Storage::disk('public')->delete([
        $post->img,
        $post->thumb
      ]);
      //Upload image to storage
      $img_name = $request->file('img')->store('posts', ['disk' => 'public']);
      $thumb_name = 'thumbs/'.$img_name;
      //Create thumbnail
      $full_path = storage_path('app/public/'.$img_name);
      $full_thumb_path = storage_path('app/public/'.$thumb_name);
      $thumb = Image::make($full_path);

      // Proporsiya bilan qirqib olish
      $thumb->resize(300, 300, function($constraint){
          $constraint->aspectRatio();
      })->save($full_thumb_path);
     
    } 
    else{
        $img_name = $post->img;
        $thumb_name = $post->thumb;
    }
      

        $post->update([
            'title'=>$request->post('title'),
            'short'=>$request->post('short'),
            'content'=>$request->post('content'),
            'img'=> $img_name,
            'thumb'=> $thumb_name
        ]);

        return redirect()->route('admin.posts.index')->with('success','Item update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Post::findOrFail($id);

        $model -> delete();

        return redirect()->route('admin.posts.index')->with('delete', 'Item delete!');
    }
}
