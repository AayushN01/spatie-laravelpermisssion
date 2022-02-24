@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        @can('create permission')
        <div class="card-header">
            <div class="row my-3">
                <div class="col-lg-12">
                    <a href="{{route('permission.create')}}" class="btn btn-primary me-3" style="float: right;">Add new Permission</a>
                </div>
            </div>
        </div>
        @endcan
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10%">S.No.</th>
                        <th width="30%">Permission</th>
                        @role('SuperAdmin')
                        <th width="30%">Actions</th>
                        @endrole
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $key => $permission)
                        <tr>
                            <th>{{++$key}}</th>
                            <td>{{$permission->name}}</td>
                            @role('SuperAdmin')
                            <td>
                                <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('permission.delete', $permission->id)}}" class="btn btn-danger">Delete</a>
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