<!-- <html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kripcok | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset ('assets1/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets1/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets1/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets1/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets1/plugins/iCheck/square/blue.css') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="margin-top: 200px; background-image: url(assets/img/kripcokfoto1.jpg); background-repeat: no-repeat; background-size: 100% 1000px;">
    <div class="container">
<div class="login-box">
  <div class="login-box-body" style="width: 450px;
    text-align: center;
    background-color: rgba(110,149,237,.8);
    border-radius: 20px;
    margin: 0px auto 0px;
    margin-top: 150px; 
    padding-bottom: 10px;">
    <center>
        <P><h3>KripCok</h3></P>
    </center>
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="POST" action="{{ route('login') }}">
                        @csrf
      <div class="form-group row">

        <div class="col-md-12">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>
    </div>
      <div class="form-group row">
        <div class="col-md-12">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>
      </div>
    </form>


    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
     </a>

  </div>
</div>
</div>

<script src="{{ asset ('assets1/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset ('assets1/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('assets1/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>


</body>
</html>
 -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

    <div class="container">
    <img src="assets/img/logokripcok.png">
    <center>
      <p style="color: #fff;">Welcome to the admin login page</p>
    </center><br>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- display validation errors here  -->

        <div class="input-group">
            <input id="email" type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus><br>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">           
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">
            <button type="submit" class="btn">
                {{ __('Login') }}
            </button>
        </div><br>
    </form>
    </div>
</body>
</html>
