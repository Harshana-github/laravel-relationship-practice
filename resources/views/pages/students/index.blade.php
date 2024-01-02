@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div>
                Tutorial view -> <a href="https://www.youtube.com/watch?v=2GHp2fa2FWo"><button type="button"
                        class="btn btn-success">PLAY</button></a>
            </div>
            <div class="col-log-12 text-center">
                @if (session('message'))
                    <h4 class="alert alert-success">{{ session('message') }}</h4>
                @endif
                <h1 class="page-title">Students List - (1:1)</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('students.create.get') }}" class="btn btn-primary float-end">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->fullname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>
                                            <a href="{{ url('students/' . $student->id . '/edit') }}"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <form action="{{ url('students/' . $student->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type='submit' class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
