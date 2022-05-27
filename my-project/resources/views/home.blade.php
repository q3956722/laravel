@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">檢視者：{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <hr>
                    <div class="row mb-0">
                        <div>
                            {{ __('Want to learn some coding?') }}
                            <a class="btn btn-link" href="{{ route('course.index') }}">
                                {{ __('Go to course selecting') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
