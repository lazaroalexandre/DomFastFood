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
                <div><h3>{{ __('Login') }}</h3></div>
                <br><br>
                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" placeholder="Enter your e-mail" autofocus>

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
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="position: absolute; left: 15%; margin-top: 1px;" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label style="position: absolute; float: right; right: 10%; margin-top: -6px;">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot your Password?') }}
                                        </a>
                                    @endif
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <button type="submit" class="col-10 btn btn-lg btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            
                        </div>

                    </form>
                    <div class="row mb-4">
                            
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                    
                                    <label for="register0">Não possui uma conta?</label> 
                                    <a class="btn btn-link" id="register0" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
