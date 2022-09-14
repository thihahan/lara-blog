@extends("master")
@section("content")
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="text-center mb-0">Blog Post</h1>
                <form method="get" class="">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" name="keyword" value="{{request("keyword")}}">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </form>
                <div class="my-3 d-flex justify-content-between">
                    @isset($category)
                    <h3 class="mb-0">filtered by : {{$category->title}}</h3>
                        <a href="{{route("page.index")}}" class="btn btn-primary">All Posts</a>
                    @endisset
                </div>
                @forelse($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title mb-0">{{$post->title}}
                                </h3>

                            </div>
                            <p><a href="{{route("page.category", $post->category->slug)}}" class="mt-3 mb-1">
                                    <span class="badge bg-secondary">{{$post->category->title}}</span>
                                </a>
                            </p>
                            <p class="mb-0">{{$post->excerpt}}</p>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="">
                                    <p class="mb-0">{{$post->user->name}}</p>
                                    <p class="mb-0">{{$post->created_at->diffForHumans()}}</p>
                                </div>
                                <div>
                                    <a href="{{route("page.detail", $post->slug)}}" class="btn btn-primary">see more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                @empty
                    <h2 class="text-center mt-0">There is no posts yet!</h2>
                @endforelse
                {{$posts->onEachSide(1)->links()}}

            </div>
        </div>
    </div>
@endsection
