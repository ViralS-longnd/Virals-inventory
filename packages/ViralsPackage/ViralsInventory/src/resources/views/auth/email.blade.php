@extends('virals-inventory::layouts.app')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>ViralSoft </b>Inventory</a>
        </div>

        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Enter Email to reset password</p>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="post" action="{{ route('inventory.auth.password.email') }}">
                @csrf

                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">
                            <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                        </button>
                    </div>
                </div>

            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection

