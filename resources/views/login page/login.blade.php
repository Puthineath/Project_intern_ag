<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
  
  
  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
       <form  class="login100-form validate-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
        <span class="login100-form-title p-b-37">
          Sign In
        </span>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter  email">

          <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email">

           @if ($errors->has('email'))
             <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
             </span>
            @endif
       
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">

           <input id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Password">
               @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                 </span>
                @endif
          <span class="focus-input100"></span>
        </div>

       
        <div class="container-login100-form-btn">
        

          <button type="submit" class="btn btn-primary login100-form-btn">
                  Sign In
            </button>

           <div class="wrap-input100" style="margin-top: 20px;margin-left: 50px ">
            <input class=" form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                     {{ __('Remember Me') }}
                  </label>
          </div>

        </div>

        

        <div class="text-center" style="margin-top: 50px">
          <a href=" {{route('signup')}}" class="txt2 hov1">
            Sign Up
          </a>
        </div>
      </form>

      
    </div>
  </div>
  
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>