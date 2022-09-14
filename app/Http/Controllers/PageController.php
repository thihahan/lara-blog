<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){
        $posts = Post::when(request("keyword"), function ($q){
            $keyword = request("keyword");
            $q->orwhere("title", "like", "%$keyword%")
                ->orwhere("description", "like", "%$keyword%");
        })->latest("id")
            ->paginate(7)->withQueryString();
        return view("index", compact("posts"));
    }

    public function detail($slug){
        $post = Post::where("slug", $slug)->with(['user', 'category', 'photos'])->first();
        return view("detail", compact("post"));
    }

    public function postByCategory(Category $category){
        $posts = $category->posts()->when(request("keyword"), function ($q){
            $keyword = request("keyword");
            $q->where("title", "like", "%$keyword%")
                ->orwhere("description", "like", "%$keyword%");
        })->where("category_id", $category->id)->with(['user', "category"])
        ->paginate(10)->withQueryString();
        return view("index", compact("posts", "category"));
    }
}
