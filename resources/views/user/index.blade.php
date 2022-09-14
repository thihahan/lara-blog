@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users List</li>
        </ol>
    </nav>
    <form action="{{route("user.index")}}" method="get">
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
                <th scope="col">Name</th>
                <td scope="col">Email</td>
                <td scope="col">Role</td>
                <th scope="col">Control</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td class="w-25">{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td class="text-center">
                        @can("update", $user)
                            <a href="{{route("post.edit", $user->id)}}"><i class="bi btn btn-sm btn-dark bi-pencil"></i></a>
                        @endcan
                        <a href="{{route("post.show", $user->id)}}"><i class="bi btn btn-sm btn-dark bi-info-circle"></i></a>
                        @can("delete", $user)
                            <form action="{{route("post.destroy", $user->id)}}" method="post" class="d-inline-block">
                                @csrf
                                @method("delete")
                                <button class="btn btn-sm btn-dark"><i class="bi bi-trash"></i></button>
                            </form>
                        @endcan
                    </td>
                    <td>
                        <p class="mb-0">{{$user->created_at->format("d.m.Y")}}</p>
                        <p class="mb-0">{{$user->created_at->format("h : i A")}}</p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{$users->links()}}
        </div>
    </div>

@endsection
