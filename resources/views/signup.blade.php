<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/bootstrap.css')}}">

    <!-- Styles -->
    <style>
        .login {
               width: 100%;
               /* height: 100vh; */
               display: flex;
           }
           .login form{
               padding-left: 20px;
               width: 50%;
               margin-right: 10%;
               margin-top: 15%;
           }
           .login form h2{
               position: absolute;
               top: 12%;
               left: 20%;
           }
           .login .image img{
               width: 100%;
               height: 400px;
               margin-left: -50px;
               margin-top: 15%;
           }
           #register .image img{
               width: 100%;
               height: 450px;
               margin-left: -50px;
               margin-top: 15%;
           }
           .right h2{
               margin-top: -15px;
           }
           .header{
               display: flex;
               justify-content: flex-end;
               margin-right: 50px;
               font-size: 20px;
               margin-top: 20px;
           }
           .header a{
               text-decoration: none;
           }
           #register input {
            outline: none;
            width: 600px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        @media(max-width:915px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 5%;
           }
           .login form h2{
               position: absolute;
               top: 10%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:915px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 5%;
           }
           .login form h2{
               position: absolute;
               top: 10%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:914px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 10%;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:912px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 40% !important;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:896px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                margin-bottom: 10px;
            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 10% !important;
           }
           .login form h2{
               position: absolute;
               top: 10%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:820px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 45% !important;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:740px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 10% !important;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:720px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 25% !important;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:700px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 15% !important;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:653px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
                overflow-y: scroll;
                margin-bottom: 10px;

            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 15%;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 38%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:414px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 50% !important;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 28%;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
        @media(max-width:280px){
            .login{
                width: 100%;
                height: 100vh !important;
                padding: 0px !important;
            }
            .login .image img{
              display: none;
           }
           .login form{
               padding-left: 0px !important;
               padding: 0px !important;
               width: 100% !important;
               margin-left:10%;
               margin-top: 50% !important;
           }
           .login form h2{
               position: absolute;
               top: 20%;
               left: 34%;
               font-size: 18px;
           }
           #login input {
            outline: none;
            width: 600px;
            width: 100% !important;
            padding: 4px;
            margin-left: 0px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
        }
   </style>
   
   
</head>

<body>
    <div class="header text-primary font-weight-bold"><a href="/">HOME</a></div>
    <div id="register"  class="login">
        <form action="{{route('signup')}}" method="post">
          <h2>SIGNUP PAGE</h2>
          <span>Full Name:</span>
         <div class="mt-2">
          <input type="text" value="{{old('fullname')}}" name="fullname" class="form-group form-control-lg w-100 {{$errors->has('fullname') ? 'is-invalid': ''}}" >
          @error('fullname')
              <span class="text-danger">{{$message}}</span>
          @enderror
         </div>
          <span>Email:</span>
         <div class="mt-2">
          <input type="text" value="{{old('email')}}" name="email" class="form-group form-control-lg w-100 {{$errors->has('email') ? 'is-invalid': ''}}" >
          @error('email')
              <span class="text-danger">{{$message}}</span>
          @enderror
         </div>
          <span>Password:</span>
         <div class="mt-2">
          <input type="password" value="{{old('password')}}" name="password" class="form-group form-control-lg w-100 {{$errors->has('password') ? 'is-invalid': ''}}" >
          @error('password')
              <span class="text-danger">{{$message}}</span>
          @enderror
         </div>
         <div class="mt-2">
             <button class="btn btn-primary w-100" id="reg">REGISTER</button>
         </div>
         @csrf
         <div class="mt-2">
            <a href="#">Forgot Password? Click here</a>
         </div>
        </form>
        <div class="image">
          <img src="{{url('images/image_6.jpg')}}" alt="">
        </div>
      </div>
</body>

</html>
<script>

</script>




