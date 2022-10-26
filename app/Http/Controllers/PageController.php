<?php

namespace App\Http\Controllers;

use App\Models\Post; // Clases de mi propio codigo 
use Illuminate\Http\Request; // Clases de laravel

class PageController extends Controller
{
    public function home(Request $request){
        $search = $request->search;

        $posts = Post::where('title','LIKE',"%{$search}%")->with('user')->latest()->paginate();

        return view('home',['posts' => $posts]);

    }

    // public function blog()
    // {
    //     // $posts = Post::get(); //traeme los post con el Modelo
    //     // $post = Post::first(); //registro uno
    //     // $post = Post::find(25); //registro seleccionado

    //     // dd($post);

    //     $posts = Post::lastest()->paginate();

    //     return view('blog', ['posts' => $posts]);
    // }

    public function post(Post $post)
    {

        return view('post', ['post' => $post]);
    }
}
