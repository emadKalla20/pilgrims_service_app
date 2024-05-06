@section('title','Create admin')
@include('theme.header')


<div class="row g-0 app-auth-wrapper">
    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
        <div class="d-flex flex-column align-content-end">
            <div class="app-auth-body mx-auto">
                <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
                <h2 class="auth-heading text-center mb-5">Signup in to Pilgrims service</h2>
                <div class="auth-form-container text-start">
                    <form method="POST" action="{{ route('create_admin') }}">
                        @csrf
                        <div class="name mb-3">
                            <label class="sr-only" for="name">{{__('Name')}}</label>
                            <div>
                                <input id="name" type="text" aria-describedby="nameHelp" placeholder="{{__('Name')}}" class="form-control @error('name') is-invalid @enderror signin-name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="email mb-3">
                            <label class="sr-only" for="email">{{__('Email')}}</label>
                            <div>
                                <input id="email" type="email" aria-describedby="emailHelp" placeholder="{{__('Email')}}" class="form-control @error('email') is-invalid @enderror signin-email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="email mb-3">
                            <label for="user_id_num" class="sr-only">{{ __('ID number') }}</label>
                            <div>
                                <input id="user_id_num" type="text" placeholder="ID number" class="form-control @error('user_id_num') is-invalid @enderror" name="user_id_num" value="{{ old('user_id_num') }}" required autocomplete="user_id_num">

                                @error('user_id_num')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="name mb-3">
                            <label for="phone_num" class="sr-only">{{ __('Phone number') }}</label>

                            <div>
                                <input id="phone_num" type="text" placeholder="{{__('Phone number')}}" class="form-control @error('phone_num') is-invalid @enderror signin-email" name="phone_num" value="{{ old('phone_num') }}" required autocomplete="new-phone_num">
                                @error('phone_num')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--//form-group-->
                        <div class="password mb-3">
                            <label class="sr-only" for="password">{{__("Password")}}</label>
                            <div>
                                <input id="password" type="password" placeholder="{{__('Password')}}" class="form-control signin-password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="password mb-3">
                            <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                            <div>
                                <input id="password-confirm" type="password-confirm" placeholder="{{__('Confirm Password')}}" class="form-control signin-password @error('password-confirm') is-invalid @enderror" name="password-confirm" required autocomplete="current-password-confirm">

                                @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="extra mt-3 row justify-content-between">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div><!--//col-6-->
                        </div><!--//form-group-->
                        <div class="text-center">
                            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">{{__('Create admin')}}</button>
                        </div>
                    </form>
                </div><!--//auth-form-container-->

            </div><!--//auth-body-->

            <footer class="app-auth-footer">
                <div class="container text-center py-3">
                    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                    <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

                </div>
            </footer><!--//app-auth-footer-->
        </div><!--//flex-column-->
    </div><!--//auth-main-col-->
    <div class="col-12 col-md-5 col-lg-6 h-100" style="background-image: url('{{asset('assets/images/background/background-1.jpeg')}}');background-position: right;
    background-size: cover;">
    </div><!--//auth-background-col-->

</div><!--//row-->
@include('theme.footer')
