{{--TODO: Make changes to registration input errors (Properly align them) --}}
@extends('layouts.app')

@section('content')
    <div class="container mt-5 col-md-8">
        <!--Form with header-->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card wow fadeIn" data-wow-delay="0.6s">
                <div class="card-body">

                    <!--Header-->
                    <div class="form-header warning-color-dark">
                        <h3><i class="fas fa-user mt-2 mb-2"></i>{{ __('Register') }}</h3>
                    </div>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fas fa-user prefix white-text"></i>
                        <input type="text" id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}"
                               name="name">
                        <label for="name">{{ __('Username..') }}</label>

                        @error('name')
                        <span class="text-center invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
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
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="new-password">
                        <label for="password">{{ __('Password..') }}</label>
                        @error('password')
                        <span class="text-center invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                        @enderror
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix white-text"></i>
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required autocomplete="new-password">
                        <label for="password-confirm">{{ __('Confirm Password..') }}</label>
                    </div>

                </div>

                <div class="text-center">
                    <button type="submit"
                            class="btn btn-lg btn-outline-warning btn-rounded">{{ __('Register') }}</button>
                    <hr>
                </div>

            </div>
    </div>
    </form>
    <!--/Form with header-->
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(() => {
            new WOW().init();
        });
    </script>
@endsection
