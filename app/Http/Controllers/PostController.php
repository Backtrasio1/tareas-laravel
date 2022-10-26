<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);    
            
        }
        //METODO DE CREAR
    public function create()
    {
        return view('posts.create');
    }

    //METODO DE GUARDAR
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'body' => 'required',
        ], [
            'title.required' => 'Este campo es requerido',
            'slug.required' => 'Colocar la url',
            'slug.unique' => 'La Url debe ser única',
            'body.required'  => 'Escriba un texto',
        ]);

        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

        //METODO DE EDITAR
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    //METODO DE ACTUALIZAR
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ],[
            'title.required' => 'Este campo es requerido',
            'body.required'  => 'Escriba un texto',
        ]);

        $post->update([
            'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

    //METODO DE DESTRUIR
    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }


    

    
}
