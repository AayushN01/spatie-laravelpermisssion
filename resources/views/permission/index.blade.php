@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row my-3">
                <div class="col-lg-12">
                    <a href="{{route('permission.create')}}" class="btn btn-primary me-3" style="float: right;">Add new Permission</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10%">S.No.</th>
                        <th width="30%">Permission</th>
                        <th width="30%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $key => $permission)
                        <tr>
                            <th>{{++$key}}</th>
                            <td>{{$permission->name}}</td>
                            <td>
                                <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('permission.delete', $permission->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection