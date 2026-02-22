<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tag::paginate(10);
        return view('tag.index', ["tags" => $data, "pageTitle" => "Tags"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ["pageTitle" => "Creating new tag"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Tag::find($id);
        return view('tag.show', ["tags" => $data, "pageTitle" => " View Tags"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Tag::find($id);
        return view('tag.edit', ["tags" => $data, "pageTitle" => " Edit Tags"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    //    public function testManyToMany(){
    //     $post1 = Post::find(1);
    //     $post3 = Post::find(3);
    //     $post4 = Post::find(4);

    //     $post1->tags()->attach([1,2]);
    //     $post3->tags()->attach([1]);
    //     $post4->tags()->attach([2]);

    //     return response()->json([
    //         "post1" => $post1->tags,
    //         "post3" => $post3->tags,
    //         "post4" => $post4->tags,
    //     ]);

    //     $tag =Tag::find(2);
    //     $tag->posts()->attach([3]);
    //     return response()->json([
    //         "tag" => $tag->title,
    //         "posts" => $tag->posts,
    //     ]);
    // }
}
