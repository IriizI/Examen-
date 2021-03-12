<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\category as ModelsCategory;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return response()->json(['posts'=> $post]);
    }

    public function individual($id){
        $post = Post::findOrfail($id);
        return response()->json(['post'=> $post]);
    }


public function categoryPost($id)
{
    $category = ModelsCategory::findOrFail($id);
    $posts = Post::where('category_id', $category->id)
    ->latest('id')
    ->get();
    return response()->json(
        [
        'category'=>$category,
        'posts'=>$posts
        ]); 

}
public function categoryPosthome()
{
    $categories = ModelsCategory::all()->take(3);
    $array = array();
    foreach($categories as $category){
        $posts = Post::where('category_id',$category->id)
        ->limit(3)
        ->get();
        $array[] = $posts;
    }
   return response()->json(
        [
        'category'=>$categories,
        'posts'=>$array
        ]);  
    }

}
