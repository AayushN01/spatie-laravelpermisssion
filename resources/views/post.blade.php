@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-head">
            @role('author|admin')
            <div class="row my-3">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-primary" style="float: right;">Add</a>
                </div>
            </div>
            @endrole
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($posts as $key => $post)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    @can('edit post')<a href="{{route('post.edit', $post->id)}}" class="ml-5 btn btn-warning">Edit</a> @endcan
                                    @role('admin')<a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>@endrole
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection