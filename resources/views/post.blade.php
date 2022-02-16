@extends('layouts.app')
@section('content')
<div class="container">
    @role('author|admin')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('post.create')}}" class="btn-primary btn-sm ml-auto">Add</a>
        </div>
    </div>
    @endrole
    <ul>
        @foreach ($posts as $post)
        <li class="d-flex"><a href="" class="text-danger">{{$post->title}}</a>@can('edit post')<a href="{{route('post.edit', $post->id)}}" class="ml-5 btn btn-warning">Edit</a> @endcan  @role('admin')<a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>@endrole</li>
        @endforeach
    </ul>
</div>
@endsection