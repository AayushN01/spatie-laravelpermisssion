@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        @can('create user')
        <div class="card-header">
            <div class="row my-3">
                <div class="col-lg-12">
                    <a href="{{route('user.create')}}" class="btn btn-primary me-3" style="float: right;">Add a new User</a>
                </div>
            </div>
        </div>
        @endcan
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10%">S.No.</th>
                        <th width="30%">Name</th>
                        <th width="30%">Email</th>
                        @role('SuperAdmin|Admin')
                        <th width="30%">Actions</th>
                        @endrole
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <th>{{++$key}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            @role('SuperAdmin|Admin')
                            <td>
                                <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                            @endrole
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection