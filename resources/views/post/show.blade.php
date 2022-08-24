@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("post.index")}}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
        </ol>
    </nav>
    <div class="card">
        @if(isset($post->feature_image))
            <img src="{{asset("storage/".$post->feature_image)}}" class="card-img-top" alt="...">
            @endif
        <div class="card-body">
            <h4 class="card-title">{{$post->title}} <span class="badge bg-secondary text-end">{{\App\Models\Category::find($post->category_id)->title}}</span></h4>
            <p class="card-text">{{$post->description}}</p>
            <div class="d-flex justify-content-between">
                <div>
                     <h3 class="">{{\App\Models\User::find($post->user_id)->name}}</h3>
                </div>
                <div>
                    <p class="mb-0">{{$post->created_at->format("d.m.Y")}}</p>
                    <p class="mb-0">{{$post->created_at->format("h : i A")}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
