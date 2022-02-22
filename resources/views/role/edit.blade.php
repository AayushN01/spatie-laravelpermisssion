@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header text-center">
                <h4>Edit Role</h4>
            </div>
            <div class="card-body">
                <form action="{{route('role.update', $role->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row my-3">
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" class="form-control" name="name" value="{{$role->name}}">
                        </div>
                    </div>
                    <div class="row my-3">
                        <label for="permissions">Permission</label>
                        <select name="permissions[]" class="form-control" multiple>
                            @foreach ($permissions as $permission)
                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row my-3">
                        <button class="btn btn-success" type="submit" value="Submit">Submit</button>
                    </div>
                    <div class="row my-3">
                        <a href="{{route('role.index')}}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection