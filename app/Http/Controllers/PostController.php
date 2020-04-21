<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PostResource::collection(Post::latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        if($request->photo){

            $ext = '.'.explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            $name = time().$ext;

            Image::make($request->photo)->save($_SERVER['DOCUMENT_ROOT'].'/uploads/blog/'.$name);
            // Image::make($request->photo)->resize(400, 220)->save($_SERVER['DOCUMENT_ROOT'].'/uploads/blog/'.$name);
        }
        
        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'article' => $request->article,
            'photo' => $request->photo,
            'user' => $request->user,
            'category_id' => $request->category_id,
        ]);
        

        return response('Saved', Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $currentPhoto = $post->photo;

        if($request->photo != $currentPhoto){

            $ext = '.'.explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            $name = time().$ext;

            Image::make($request->photo)->save($_SERVER['DOCUMENT_ROOT'].'/uploads/blog/'.$name);
            // Image::make($request->photo)->resize(400, 220)->save($_SERVER['DOCUMENT_ROOT'].'/uploads/blog/'.$name);

            $request->merge(['photo' => $name]);

            $oldPhoto = $oldPhoto = $_SERVER['DOCUMENT_ROOT'].'/uploads/blog/'.$currentPhoto;

            if(file_exists($oldPhoto)){
                unlink($oldPhoto);
            }
        }

        $post = Post::find($post->id);

        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->article = $request->article;

        if($request->photo != $currentPhoto){
            $post->photo = $name;
        }

        if($request->filled('category_id')){
            $post->category_id = $request->category_id;
        }
    
        $post->save();

        return response('Updated', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response('Deleted', Response::HTTP_NO_CONTENT);
    }
}
