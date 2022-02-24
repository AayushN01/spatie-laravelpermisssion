@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header text-center">
                <h4>Add a New Post</h4>
            </div>
            <div class="card-body">
                <form action="{{route('post.store')}}" method="POST">
                    @csrf
                    <div class="row my-3">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email">Content</label>
                                <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <button class="btn btn-success" type="submit" value="Submit">Submit</button>
                    </div>
                    <div class="row my-3">
                        <a href="{{route('index')}}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection