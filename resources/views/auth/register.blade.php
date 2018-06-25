@extends('layouts.auth')

    @section('title', 'Sign Up')

    @section('custom_styles')
        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
        <link href="{{ asset('mupo/plugins/parsley/src/parsley.css') }}" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->
    @endsection

    @section('auth-news-feed')
        <!-- begin register -->
        <div class="register register-with-news-feed">
    @endsection

    @section('content')
        <!-- begin register-header -->
        <h1 class="register-header">
            <img src='{{ asset('mupo/img/mupo.png') }}' /> {{ __('Sign Up') }}
            <small class="text-info">Create your {{ config('app.name', 'MupoWaste') }} Account. It’s free!</small>
        </h1>
        <!-- end register-header -->

        <!-- begin register-content -->
        <div class="register-content">
            <form data-parsley-validate="true" class="margin-bottom-0" method="POST" action="{{ route('register') }}">
                @csrf

                <label class="control-label" for="name"> {{ __('Name') }} <span class="text-danger">*</span></label>
                <div class="row m-b-15{{ $errors->has('name') ? ' has-error has-feedback' : '' }}">
                    <div class="col-md-12">
                        <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}" data-type="alphanum" placeholder="Name"  data-parsley-required="true" />
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <label class="control-label" for="email"> {{ __('Email') }} <span class="text-danger">*</span></label>
                <div class="row m-b-15{{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                    <div class="col-md-12">
                        <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <label class="control-label" for="phone">{{ __('Phone') }} <span class="text-danger">*</span></label>
                <div class="row m-b-15{{ $errors->has('phone') ? ' has-error has-feedback' : '' }}">
                    <div class="col-md-12">
                        <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone') }}" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" placeholder="Phone" data-parsley-required="true" />
                        @if ($errors->has('phone'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <label class="control-label" for="password">{{ __('Password') }} <span class="text-danger">*</span></label>
                <div class="row m-b-15{{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
                    <div class="col-md-12">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Password" data-parsley-required="true" />
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="checkbox m-b-30">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="acceptedPolicy" name="acceptedPolicy" value="1" required />
                            By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use</a>.
                        </label>
                    </div>
                </div>
                <div class="register-buttons">
                    <button type="submit" class="btn btn-info btn-block btn-lg">{{ __('Sign Up') }}</button>
                </div>
                <div class="m-t-20 m-b-40 p-b-40 text-inverse text-center">
                    Already a member? Click <a href="{{ route('login') }}">here</a> to login.
                </div>
                <hr />
                <p class="text-center">
                    &copy; {{ date('Y') }} {{ config('app.name', 'MupoWaste') }} | All Right Reserved.
                </p>
            </form>
        </div>
        <!-- end register-content -->
    @endsection

    @section('custom_js')
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="{{ asset('mupo/plugins/parsley/dist/parsley.js') }}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
    @endsection
