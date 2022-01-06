@extends('layouts.frontend.app')

@push('css')

@endpush

@section('content')

   <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content" style="margin-bottom: 50px;">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->

                    <div class="col-md-8 col-sm-8 sign-in">
                        <h4 class="">Sign in</h4>
                        <p class="">Hello, Welcome to your account.</p>
                        <div class="social-sign-in outer-top-xs">
                            <a href="{{ route('login.provider','github') }}" class="facebook-sign-in"><i class="fa fa-github"></i> Sign In with Github</a>
                            <a href="{{ route('login.provider','google') }}" class="twitter-sign-in"><i class="fa fa-google"></i> Sign In with Google</a>
                        </div>
                        <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input  type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" @error('email') is-invalid @enderror>
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" @error('password') is-invalid @enderror name="password" >
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="radio outer-xs">
                                <label>
                                    <input type="radio" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                                </label>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                        </form>
                    </div>
                    <!-- Sign-in -->

                    <!-- create a new account -->            </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            </div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection



@push('js')



@endpush