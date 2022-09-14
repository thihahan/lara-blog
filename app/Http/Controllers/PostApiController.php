<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::when(request("keyword"), function ($q){
            $keyword = request("keyword");
            $q->orwhere("title", "like", "%$keyword%")
                ->orwhere("description", "like", "%$keyword%");
        })->latest("id")
            ->paginate(7)->withQueryString();
        return response()->json($posts);
    }

    public function post(Post $post){
        return response()->json($post);
    }
}
