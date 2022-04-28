<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = Post::all();

        return inertia('Admin/Posts/Index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return inertia('Admin/Posts/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        //
        $request->validate(
            [
                'title' => "required|min:2",
                'author' => 'required|min:2',
                'content' => 'required|min:10'
            ]
        );

        $data = $request->all();

        $slug = Str::slug($data['title']);

        // evito il ripetersi di slug uguali
        $counter =1;
        while (Post::where('slug', $slug)->first()) {
            // se è già presente aggiunge il counter allo slug creato
            $slug = Str::slug($data['title']) . '-' . $counter;
            $counter++;
        };

        $data['slug'] = $slug;

        $post->fill($data);
        $post->save();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return inertia('Admin/Posts/Show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return inertia('Admin/Posts/Edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate(
            [
                'title' => "required|min:2",
                'author' => 'required|min:2',
                'content' => 'required|min:10'
            ]
        );

        $data = $request->all();

        $slug = Str::slug($data['title']);

        // evito il ripetersi di slug uguali, questa volta se slyg cambia
        if($post->slug != $slug){
            $counter = 1;
            while (Post::where('slug', $slug)->first()) {
                // se è già presente aggiunge il counter allo slug creato
                $slug = Str::slug($data['title']) . '-' . $counter;
                $counter++;
            };

            $data['slug'] = $slug;
        }


        $post->update($data);
        $post->save();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
