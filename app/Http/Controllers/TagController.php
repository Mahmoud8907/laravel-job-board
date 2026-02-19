<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $data = Tag::all();
        return view('tag.index',["tags" => $data, "pageTitle" => "Tag"]);
    }
    public function create(){
        Tag::create([
            'title' => 'Software Engineering',
        ]);
        return redirect('/tags');
    }
    public function testManyToMany(){
        // $post1 = Post::find(1);
        // $post3 = Post::find(3);
        // $post4 = Post::find(4);

        // $post1->tags()->attach([1,2]);
        // $post3->tags()->attach([1]);
        // $post4->tags()->attach([2]);

        // return response()->json([
        //     "post1" => $post1->tags,
        //     "post3" => $post3->tags,
        //     "post4" => $post4->tags,
        // ]);

        $tag =Tag::find(2);
        $tag->posts()->attach([3]);
        return response()->json([
            "tag" => $tag->title,
            "posts" => $tag->posts,
        ]);
    }
}
