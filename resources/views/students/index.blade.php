
@extends('layouts.app')
@section('content')






<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h6 class="alert alert-warning">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Student Table
                        <a href="{{ url('students/create') }}" class="btn btn-primary btn-sm float-end">Add Student</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection