@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">User Create</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['method' => 'POST', 'url' => 'admin/user', 'role' => 'form']) !!}
                                    <div class="form-group">
                                        <label>Name</label>
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        {!! Form::password('password', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Button</button>
                                    <button type="reset" class="btn btn-success">Reset Button</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>
@endsection