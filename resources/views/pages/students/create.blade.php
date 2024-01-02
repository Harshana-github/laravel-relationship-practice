@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-log-12 text-center">
                <h1 class="page-title">Add Students</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('students') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.create.post') }}" method="POST">
                            @csrf
                            <h4>Students</h4>
                            <div class="mb-3">
                                <label>Full name</label>
                                <input type="text" name="fullname" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>
                            <h4>Students Detail</h4>
                            <div class="mb-3">
                                <label>Alternative Phone No</label>
                                <input type="text" name="alter_phone" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Roll No</label>
                                <input type="text" name="roll_no" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            font-size: 3rem;
            color: #4b85bf;
        }
    </style>
@endpush
