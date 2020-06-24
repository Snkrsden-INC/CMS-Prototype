@extends('layouts.app')

@section('content')
    <div class="container mt-5 col-md-6">
        <!--Form with header-->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card wow fadeIn" data-wow-delay="0.6s">
                <div class="card-body">

                    <!--Header-->
                    <div class="form-header warning-color-dark">
                        <h3><i class="fas fa-user mt-2 mb-2"></i> Log in</h3>
                    </div>

                    <!--Body-->

                    <div class="md-form">
                        <i class="fas fa-envelope prefix white-text"></i>
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email">
                        <label for="email">{{ __('E-mail Address..') }}</label>
                        @error('email')
                        <span class="text-center invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix white-text"></i>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password"
                               required autocomplete="current-password">
                        <label for="password">{{ __('Password..') }}</label>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                                class="btn btn-outline-warning btn-rounded btn-lg">{{ __('Login') }}</button>

                        <hr>
                        <div class="inline-ul text-center d-flex justify-content-center">
                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                            <a class="p-2 m-2 fa-lg li-ic"><i
                                    class="fab fa-linkedin-in white-text"> </i></a>
                            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                        </div>
                    </div>
                    <div class="form-group row mb-0 text-center">
                        <div class="col-md-8">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            <!--/Form with header-->
        </form>
    </div>
    <div class="container text-align-center">
        <button class="btn btn primary">
            Get Text File
        </button>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(() => {
            new WOW().init();
        });
    </script>
@endsection
