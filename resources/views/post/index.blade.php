@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts List</li>
        </ol>
    </nav>
    <form action="{{route("post.index")}}" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="keyword" value="{{request("keyword")}}">
            <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search me-2"></i>Search</button>
        </div>
    </form>
    <hr>
    <div>
        {{--        <h3>Category List</h3>--}}
        {{--        <hr>--}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <td scope="col">Category</td>
                @if(Auth::user()->role != "author")

                <td scope="col">Owner</td>
                @endcan
                <th scope="col" class="">Control</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td class="w-25">{{$post->title}}</td>
                    <td>{{$post->category->title}}</td>
                    @if(Auth::user()->role != "author")
                    <td>{{$post->user->name}}</td>
                    @endif
                    <td class="">
                        @can("update", $post)
                        <a href="{{route("post.edit", $post->id)}}"><i class="bi btn btn-sm btn-dark bi-pencil"></i></a>
                        @endcan
                        <a href="{{route("post.show", $post->id)}}"><i class="bi btn btn-sm btn-dark bi-info-circle"></i></a>
                        @can("delete", $post)
                        <form action="{{route("post.destroy", $post->id)}}" method="post" class="d-inline-block">
                            @csrf
                            @method("delete")
                            <button class="btn btn-sm btn-dark"><i class="bi bi-trash"></i></button>
                        </form>
                            @endcan
                    </td>
                    <td>
                        <p class="mb-0">{{$post->created_at->format("d.m.Y")}}</p>
                        <p class="mb-0">{{$post->created_at->format("h : i A")}}</p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{$posts->links()}}
        </div>
    </div>

@endsection
