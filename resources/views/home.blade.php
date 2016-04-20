@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    @role('admin')
                    <div class="alert alert-success">You are an admin</div>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
