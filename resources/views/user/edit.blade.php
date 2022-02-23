@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header text-center">
                <h4>Edit User {{$user->name}}</h4>
            </div>
            <div class="card-body">
                <form action="{{route('user.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row my-3">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-12">
                            <label for="role">Role</label>
                            <select name="role" class="form-control">
                                <option value="" selected>Select Role</option>
                                @foreach ($role as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <button class="btn btn-success" type="submit" value="Submit">Submit</button>
                    </div>
                    <div class="row my-3">
                        <a href="{{route('user.index')}}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection