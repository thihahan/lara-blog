@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-1">
            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="" style="columns: 3 200px;">
                @foreach(Auth::user()->photos as $photo)
                    <img src="{{asset("storage/".$photo->name)}}" class="rounded w-100 mb-3" alt="">
                @endforeach
            </div>
        </div>
    </div>
@endsection
