@extends('auth.layouts.app')

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
            <div>
                <div><h3>{{ __('Register') }}</h3></div>
                <br><br>
                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter your name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation"  placeholder="Confirm your password" required autocomplete="new-password">
                            </div>
                        </div>
                            <div class="col-md-12">
                                <button type="submit" class="col-10 btn btn-lg btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
