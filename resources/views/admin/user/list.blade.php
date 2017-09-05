@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">User List</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ url('admin/user/add') }}" class="btn btn-info">Create New User</a>
                <br/>
                <!--    Striped Rows Table  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Striped Rows Table
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($users)
                                        @foreach($users as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--  End  Striped Rows Table  -->
            </div>
        </div>
    </div>
@endsection
