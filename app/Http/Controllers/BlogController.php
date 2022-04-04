<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return response()->json($blogs);
    }
    public function create(Request $request){

    }
    public function store(Request $request){
        $blog = Blog::create($request->post());
        return response()->json([
            'blog'=>$blog
        ]);
    }
    public function show(Blog $blog){
        return response()->json($blog);
    }
    public function edit(){
        
    }
    public function update(Request $request, Blog $blog){
        $blog->fill($request->post())->save();
        return response()->json([
            'blog'=>$blog
        ]);
    }
    public function destroy(Blog $blog){
        $blog->delete();
        return response()->json([
            'message'=>'Blog eliminado'
        ]);
    }
}
