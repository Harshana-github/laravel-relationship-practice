@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-log-12 text-center">
                <h1 class="page-title">Update Students</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('students') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('students/' . $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <h4>Students</h4>
                            <div class="mb-3">
                                <label>Full name</label>
                                <input type="text" name="fullname" value="{{ $student->fullname }}"
                                    class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ $student->email }}" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" />
                            </div>
                            <h4>Students Detail</h4>
                            <div class="mb-3">
                                <label>Alternative Phone No</label>
                                <input type="text" name="alter_phone" value="{{ $student->studentDetail->alter_phone }}"
                                    class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" value="{{ $student->studentDetail->course }}"
                                    class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Roll No</label>
                                <input type="text" name="roll_no" value="{{ $student->studentDetail->roll_no }}"
                                    class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
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
