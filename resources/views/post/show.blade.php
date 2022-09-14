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
            <h4 class="card-title">{{$post->title}} <span class="badge bg-secondary text-end">{{$post->category->title}}</span></h4>
            <p class="card-text">{{$post->description}}
            </p>
            <div class="d-flex mb-3">
                @foreach($post->photos as $photo)
                    <img src="{{asset("storage/".$photo->name)}}" alt="" height="100" class="mx-2">
                @endforeach
            </div>
            <div class="d-flex justify-content-between">
                <div>
                     <h3 class="">{{$post->user->name}}</h3>
                </div>
                <div>
                    <p class="mb-0">{{$post->created_at->format("d.m.Y")}}</p>
                    <p class="mb-0">{{$post->created_at->format("h : i A")}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
