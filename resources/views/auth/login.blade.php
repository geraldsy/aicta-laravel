{{--@extends('adminlte::login')--}}

@extends('auth.template')

@section('body')

    @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" aling="center">&times;</button>
            {!! session('flash_notification.message') !!}
        </div>
    @endif

    <div class="login-box">
        <div class="login-logo">
            <div align="center" >
                <img src="{{asset('/images/img/aictalogo.png')}}" class="imglogo"></div>

        <!--a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a-->
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control formlogin" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control formlogin"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> {{ trans('adminlte::adminlte.remember_me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-6 auth-links">
                        <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                        class="text-center"
                        >{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>
                    </div>
                    <!-- /.col -->
                    <center>
                    <div class="col-xs-12" style="padding-top:30px">
                    <p class="login-box-msg">{{ trans('adminlte::adminlte.login_message') }}</p>

                        <button type="submit"
                                class="btn btn-primary btn-flat" style="border-radius:25px;padding:10px;width:70%">{{ trans('adminlte::adminlte.sign_in') }}</button>
                    </div></center>
                    <!-- /.col -->
                </div>
            </form>
            
            <div class="auth-links">

            </div>
        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop

