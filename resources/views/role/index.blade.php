@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row my-3">
                <div class="col-lg-12">
                    <a href="{{route('role.create')}}" class="btn btn-primary me-3" style="float: right;">Add a new Role</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10%">S.No.</th>
                        <th width="30%">Role</th>
                        <th width="30%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <th>{{++$key}}</th>
                            <td>{{$role->name}}</td>
                            <td>
                                <a href="{{route('role.edit', $role->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('role.delete', $role->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection