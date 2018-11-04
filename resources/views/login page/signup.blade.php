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
      <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
       
        <span class="login100-form-title p-b-37">
          Sign Up
        </span>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
         <input id="name" type="text" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Name" required autofocus>

            @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('name') }}</strong>
                   </span>
            @endif
          </div>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter  email">

          <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email" required >

           @if ($errors->has('email'))
             <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
             </span>
            @endif
       
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">

           <input id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" required>
               @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                 </span>
                @endif
          <span class="focus-input100"></span>
        </div>

         <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter confirm password">

               <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" placeholder="Enter Confirm Password" required>


        </div>

        <div class="container-login100-form-btn">
        

          <button type="submit" class="btn btn-primary login100-form-btn">
                  Sign Up
            </button>

        

        

      
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