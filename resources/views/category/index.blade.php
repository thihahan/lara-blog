@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categories List</li>
        </ol>
    </nav>
    <hr>
    <div>
{{--        <h3>Category List</h3>--}}
{{--        <hr>--}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Control</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <a href="{{route("category.edit", $category->id)}}"><i class="bi btn btn-sm btn-dark bi-pencil"></i></a>
                        <form action="{{route("category.destroy", $category->id)}}" method="post" class="d-inline-block">
                            @csrf
                            @method("delete")
                            <button class="btn btn-sm btn-dark"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                    <td>
                        <p class="mb-0">{{$category->created_at->format("d.m.Y")}}</p>
                        <p class="mb-0">{{$category->created_at->format("h : i A")}}</p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


