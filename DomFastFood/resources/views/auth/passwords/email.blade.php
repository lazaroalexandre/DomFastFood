@extends('layouts.app')

@section('content')
<div class="row no-gutters" style="width: 100%; height: 100vh;">
    <div class="col-md-7">
        <section>
            <div class="col-md-12">
                <div><img class="img-fluid" src="{{asset('assets/assets/img/04.jpg')}}" style="height: 100vh; width: 100%;" alt="..." /></div>
            </div>
        </section>
    </div>
    <div class="col-md-5">
        <div class="col-md-10" style="position: relative; left: 50%; top: 50%; transform: translateY(-50%) translateX(-50%); text-align: center;">
                <div><h3>{{ __('Reset Password') }}</h3></div>
                <br><br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                                <button type="submit" class="col-10 btn btn-lg btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
