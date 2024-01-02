@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-log-12 text-center">
                <h1 class="page-title">Home Page</h1>
                <div>
                    <h3 class="page-content">This application developed for learn laravel relationships</h3>

                    one to one -> hasOne() <br />
                    one to many -> hasMany()

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
