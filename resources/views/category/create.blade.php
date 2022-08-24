@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("category.index")}}">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Category</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <form action="{{route("category.store")}}" method="post">
                @csrf
                <label for="" class="form-label">Category title</label>
                <input type="text" class="form-control mb-2 @error("title") is-invalid @enderror" name="title" value="{{old("title")}}">
                @error("title")
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <div class="text-end">
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
