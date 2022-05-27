@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('draobhsad') }}</div>

                <div class="card-body">
                    {{ __('You are not logged in!') }}

                    <hr>

                    <div class="row mb-0">
                        <div>
                            <label for="q-reset" class="col-md-3 col-form-label">{{ __('Already have an account?') }}</label>

                            @if (Route::has('login'))
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div>
                            <label for="q-reset" class="col-md-3 col-form-label">{{ __("You don't have an account?") }}</label>

                            @if (Route::has('register'))
                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection