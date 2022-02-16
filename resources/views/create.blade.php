@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="card">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="form-group">
                        <label for="title">Body</label>
                        <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-4 offset-lg-5">
                    <button class="btn btn-primary btn-lg ml-5" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection