@extends("master")
@section("content")
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title mb-0">{{$post->title}}
                                </h3>
                            </div>
                            <p><a href="{{route("page.category", $post->category->slug)}}" class="mt-2">
                                    <span class="badge bg-secondary">{{$post->category->title}}</span>
                                </a>
                            </p>
                            <div>
                               @if($post->photos->isNotEmpty())
                                    <div id="carouselExampleControls" class="carousel slide my-3" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($post->photos as $key=>$photo)
                                                <div class="carousel-item bg-black @if($key == 0) active @endif">
                                                    <a class="venobox" data-gall="gallery01" href="{{asset("storage/".$photo->name)}}">
                                                        <img src="{{asset("storage/".$photo->name)}}" class="d-block detail-img mx-auto" alt="...">
                                                    </a>
                                                </div>
                                            @endforeach

                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <p class="mb-0" style="white-space: pre-wrap">{{$post->description}}</p>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="fs-5">
                                    <p class="mb-0">{{$post->user->name}}</p>
                                    <p class="mb-0">{{$post->created_at->diffForHumans()}}</p>
                                </div>
                                <div>
                                    @can("update", $post)
                                        <a href="{{route("post.edit", $post->id)}}" class="btn btn-primary">Edit</a>

                                    @endcan
                                    <a href="{{route("page.index")}}" class="btn btn-primary">All Posts</a>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

