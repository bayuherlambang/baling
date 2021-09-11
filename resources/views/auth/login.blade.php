@extends('auth.layout.loginApp')

@section('content')
<div class="login-box">
      <div class="logo">
          <a href="javascript:void(0);">Baling</b></a>
          <small>Form Berita Acara Digital HaloBCA SMG2</small>
      </div>
      @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="card">
          <div class="body">
              <form id="sign_in" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="input-group">

                      <div class="form-line">
                          <input id="email" type="text" placeholder="username / email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="input-group">

                      <div class="form-line">
                          <input id="password" type="password" class="form-control" placeholder="password" name="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                </div>
                  <div class="row">
                      <div class="col-xs-8 p-t-5">
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="rememberme" class="filled-in chk-col-pink">
                          <label for="rememberme">Remember Me</label>
                      </div>
                      <div class="col-xs-4">
                          <button class="btn btn-block bg-pink waves-effect" type="submit">
                              Login
                          </button>
                          <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                              Forgot Your Password?
                          </a> -->

                      </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                    <a href="{{ url('/register') }}">Registrasi</a>
                    </div>
                  </div>

              </form>
          </div>
      </div>
</div>

@endsection
