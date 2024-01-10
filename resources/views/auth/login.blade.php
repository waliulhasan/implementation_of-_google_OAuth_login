@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="container">
                        <a href="{{ route('login.google') }}" class="google-login">
                            <img src="{{ asset('images/google.png') }}" alt="Google Icon"
                            width="50px"
                            class="mx-auto scale-100 hover:scale-125 ease-in duration-200">
                            Login with Google
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
