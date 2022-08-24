@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("post.index")}}">Post</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <form action="{{route("post.update", $post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="mb-3">
                    {{--                title--}}
                    <label for="title" class="form-label">Post title</label>
                    <input type="text" id="title"
                           class="form-control @error("title") is-invalid @enderror"
                           name="title" value="{{old("title", $post->title)}}">
                    @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    {{--                category--}}
                    <label for="category" class="form-label">Select Category</label>
                    <select name="category" id="category" class="form-select">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{$category->id}}"
                                {{$category->id == old("category", $post->category_id) ? "selected" : ""}}
                            >{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    {{--                post description--}}
                    <label for="description" class="form-label">Post Description</label>
                    <textarea name="description"
                              class="form-control @error("description") is-invalid @enderror"
                              id="description" rows="10">
                    {{old("description", $post->description)}}
                </textarea>
                    @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 d-flex justify-content-between">
                    {{--                feature image--}}
                    <div>
                        <label for="feature_image" class="form-label">Feature Image</label>
                        <input type="file" name="featured_image"
                               class="form-control @error("featured_image") is-invalid @enderror">
                        @error("featured_image")
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-lg btn-primary">Update Post</button>
                    </div>
                </div>
                <div>
                    <img src="{{asset("storage/".$post->feature_image)}}" class="card-img" alt="">
                </div>
            </form>
        </div>
    </div>
@endsection
