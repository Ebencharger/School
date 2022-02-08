<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

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
               margin-top: 18%;
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
           #login input {
            outline: none;
            width: 600px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #007bff;
        }
   </style>
   
   
</head>

<body>
    <div class="header text-primary font-weight-bold"><a href="/">HOME</a></div>
    <div id="login" class="login">
        <form action="{{route('login')}}" method="post">
          <h2>LOGIN PAGE</h2>
          <span>Email:</span>
         <div class="mt-2">
          <input type="text" value="{{old('email')}}" name="email" class="form-group form-control-lg w-100 {{$errors->has('email') ? 'is-invalid': ''}}" >
          @error('email')
              <span class="text-danger">{{$message}}</span>
          @enderror
          @if ($u=Session::get('error'))
          <span class="text-danger">{{$u}}</span>
          @endif
         </div>
          <span>Password:</span>
         <div class="mt-2">
          <input type="password" value="{{old('password')}}" name="password" class="form-group form-control-lg w-100 {{$errors->has('password') ? 'is-invalid': ''}}" >
          @error('password')
              <span class="text-danger">{{$message}}</span>
          @enderror
          @if ($u=Session::get('error'))
          <span class="text-danger">{{$u}}</span>
          @endif
         </div>
         @csrf
         <div class="mt-2">
             <button class="btn btn-primary w-100">LOGIN</button>
         </div>
        </form>
        <div class="image">
          <img src="{{url('images/image_1.jpg')}}" alt="">
        </div>
      </div>
</body>
</html>
<script>

</script>




