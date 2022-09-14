<div class="list-group mb-2">
    <a class="list-group-item list-group-item-action" href="{{ route("home") }}"><i class="bi bi-house me-2"></i>Home</a>
    <a class="list-group-item list-group-item-action" href="{{ route("test") }}"><i class="bi bi-at me-2"></i>Test</a>
    <a class="list-group-item list-group-item-action" href="{{ route("photo.index") }}"><i class="bi bi-image me-2"></i>Gallery</a>

{{--    category--}}
    <li class="list-group-item list-group-item-action text-bg-light">Manage Category</li>
    <a class="list-group-item list-group-item-action" href="{{ route("category.index") }}">
        <span style="margin-left: 10px!important;"><i class="bi bi-bookmarks me-2"></i>Categories List</span></a>
    <a class="list-group-item list-group-item-action" href="{{ route("category.create") }}">
        <span style="margin-left: 10px!important;"><i class="bi bi-bookmark-plus me-2"></i>Create Category</span></a>


{{--    Post--}}
    <li class="list-group-item list-group-item-action text-bg-light">Manage Post</li>
    <a class="list-group-item list-group-item-action" href="{{ route("post.index") }}">
        <span style="margin-left: 10px!important;"><i class="bi bi-file-earmark me-2"></i>Posts List</span></a>
    <a class="list-group-item list-group-item-action" href="{{ route("post.create") }}">
        <span style="margin-left: 10px!important;"><i class="bi bi-file-earmark-plus me-2"></i>Create Post</span></a>


    @admin
{{--    User--}}
    <li class="list-group-item list-group-item-action text-bg-light">Manage User</li>
    <a class="list-group-item list-group-item-action" href="{{ route("user.index") }}">
        <span style="margin-left: 10px!important;"><i class="bi bi-person me-2"></i>Users List</span></a>
    @endadmin
</div>
