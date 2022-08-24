@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("category.index")}}">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <form action="{{route("category.update", $category->id)}}" method="post">
                @csrf
                @method("put")
                <label for="" class="form-label">Category title</label>
                <input type="text" class="form-control mb-2 @error("title") is-invalid @enderror" name="title" value="{{$category->title}}">
                @error("title")
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <div class="text-end">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
