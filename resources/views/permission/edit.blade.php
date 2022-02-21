@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header text-center">
                <h4>Create a New Permission</h4>
            </div>
            <div class="card-body">
                <form action="{{route('permission.update', $permission->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row my-3">
                        <div class="form-group">
                            <label for="name">Permission Name</label>
                            <input type="text" class="form-control" name="name" value="{{$permission->name}}">
                        </div>
                    </div>
                    <div class="row my-3">
                        <button class="btn btn-success" type="submit" value="Submit">Submit</button>
                    </div>
                    <div class="row my-3">
                        <a href="{{route('permission.index')}}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection