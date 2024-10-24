<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // Method to display all posts
    public function index() {
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // Method to show the form for creating a new post
    public function create() {
        return view('posts.create');
    }

    // Method to store a new post
    public function store(Request $request) {
        DB::table('posts')->insert([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/posts');
    }

    // Method to display a single post by ID
    public function show($id) {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.show', ['post' => $post]);
    }
    // Method to delete a post
public function destroy($id) {
    DB::table('posts')->where('id', $id)->delete();
    return redirect('/posts')->with('success', 'Post deleted successfully');
}
}
