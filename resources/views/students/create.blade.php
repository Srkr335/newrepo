@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>
                       Add  Student
                        <a href="{{ url('login') }}" class="btn btn-danger btn-sm float-end">Back </a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('students') }}" method="POST">

                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Course </label>
                            <input type="text" name="course" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Student Section</label>
                            <input type="text" name="section" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection