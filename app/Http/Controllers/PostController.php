<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Post::paginate(10);
        return view('post.index',["posts" => $data, "pageTitle" => "blog"]);
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view('post.show', ["post" => $post, "pageTitle" => $post->title]);
    }
    public function create(){
        // $post = Post::create([
        //     'title' => 'My first post',
        //     'body' => 'This is my content',
        //     'author' => 'Mahmoud',
        //     'published' => true,
        // ]);
        Post::factory(1000)->create();
        return redirect('/blog');
    }
    public function delete(){
        Post::destroy(2);
    }
}
