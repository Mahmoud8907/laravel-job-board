<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $data = Comment::all();
        return view('comment.index',["comments" => $data, "pageTitle" => "Comment"]);
    }
    public function create(){
        // Comment::create([
        //     'author' => 'Mahmoud',
        //     'content' => 'This is a test comment',
        //     'post_id' => 2,
        // ]);
        Comment::factory(5)->create();
        return redirect('/comments');
    }
}
