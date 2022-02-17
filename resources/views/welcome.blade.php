<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/bootstrap.css')}}">

    <!-- Styles -->
    <style lang="scss">
        body {
            font-family: 'Futura Md';
        }

        html,
        body {
            margin: 0px;
            padding: 0px;
        }

        .header {
            width: 100%;
            height: 80px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 1px black;
            padding-left: 50px;
            padding-right: 50px;
            position: fixed;
            top: 0px;
            z-index: 7000;
        }

        i {
            color: white;
        }

        .body {
            width: 100%;
        }

        .body img {
            width: 100%;
            margin-top: -150px;
        }

        .body .overlay {
            width: 100%;
            height: 95vh;
            background: linear-gradient(to right, rgba(110, 43, 182, 0.5), rgba(241, 211, 61, 0.6));
            position: absolute;
            margin-top: 80px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 40px;
            text-shadow: 0px 0px 3px black;
        }

        .left button {
            border-radius: 25px;
            font-size: 14px;
            width: 120px;
            height: 50px;
            font-weight: bold;
            box-shadow: 0px 0px 1px black;
            margin-right: 40px;
        }

        .btn-warning:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
        }
        .btn-warning a{
         text-decoration: none;
         color: black;
        }

        .btn-primary a{
           text-decoration: none;
            color:white
        }
        .btn-primary:hover {
            background-color: transparent !important;
            border: 1px solid #007bff !important;
            color: black !important;
        }
        .btn-primary:hover a{
           color: black
        }

        @media(max-width:912px){
            .body img {
            width: 100%;
            margin-top: -50px;
            height: 50vh;
        }
        .body .overlay {
            width: 100%;
            height: 100vh;
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 33px;
            text-shadow: 0px 0px 3px black;
        }
        }

        @media(max-width:820px){
            .body img {
            width: 100%;
            margin-top: -50px;
            height: 50vh;
        }
        .body .overlay {
            width: 100%;
            height: 100vh;
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 33px;
            text-shadow: 0px 0px 3px black;
        }
        }
        @media(max-width:720px){
            .body img {
            width: 100%;
            margin-top: 40px;
            height: 50vh;
        }
        .body .overlay {
            width: 100%;
            height: 100vh;
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .header .right h2{
                font-size: 23px !important;
            }
        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 23px;
            text-shadow: 0px 0px 3px black;
        }
        }
        @media(max-width:700px){
            .body img {
            width: 100%;
            margin-top: 30px;
            height: 50vh;
        }
        .body .overlay {
            width: 100%;
            height: 100vh;
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .header .right h2{
                font-size: 23px !important;
            }
        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 23px;
            text-shadow: 0px 0px 3px black;
        }
        }
        @media(max-width:540px){
            .header{
                padding-left: 40px;
                padding-right: 0px;
                height: 150px;
            }
            .header .right{
                width: 100%;
            }
            .header .right h2{
                font-size: 23px !important;
            }
            .header .left{
                display: block;
            }
            .header .left button{
            border-radius: 0px;
            font-size: 14px;
            width: 120px;
            height: 50px;
            margin-right: 0px;
            margin-bottom: 10px;
            margin-top: 10px;
            }
            .body{
                margin-top: 120px;
            }
            .body img {
            width: 100%;
            margin-top: -50px;
            height: 50vh;
        }
        .body .overlay {
            width: 100%;
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 23px;
            text-shadow: 0px 0px 3px black;
        }
        }
        @media(max-width:414px){
            .header{
                padding-left: 40px;
                padding-right: 0px;
                height: 150px;
            }
            .header .right{
                width: 100%;
            }
            .header .right h2{
                font-size: 23px !important;
            }
            .header .left{
                display: block;
            }
            .header .left button{
            border-radius: 0px;
            font-size: 14px;
            width: 120px;
            height: 50px;
            margin-right: 0px;
            margin-bottom: 10px;
            margin-top: 10px;
            }
            .body{
                margin-top: 120px;
            }
            .body img {
            width: 100%;
            margin-top: -50px;
            height: 50vh;
        }
        .body .overlay {
            width: 100%;
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 23px;
            text-shadow: 0px 0px 3px black;
        }
        }
        @media(max-width:280px){
            .header{
                display: block;
                padding-left: 40px;
                padding-right: 0px;
                height: 210px;
            }
          
            .header .right{
                width: 100%;
            }
            .header .right h2{
                margin-top: 30px;
                margin-left: 35px;
                font-size: 18px !important;
            }
            .header .left{
                display: block;
            }
            .header .left button{
            border-radius: 0px;
            font-size: 14px;
            width: 120px;
            height: 50px;
            margin-left: 40px;
            margin-bottom: 10px;
            margin-top: 10px;
            }
            .body{
                margin-top: 120px;
            }
            .body img {
            width: 100%;
            margin-top: -10px;
            height: 50vh;
        }
        .body .overlay {
            width: 100%;
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .overlay h3 {
            font-weight: bold !important;
            color: white;
            font-size: 23px;
            text-shadow: 0px 0px 3px black;
        }
        }
    </style>
</head>

<body>
    <main>
        <main>
            <div class="header">
                <div class="right">
                    <h2> SCHOOL OF ICT</h2>
                </div>
                <div class="left">
                    <button class="btn btn-warning"><a href="/login">LOGIN</a></button>
                    <button class="btn btn-primary"><a href="/signup">APPLY NOW</a></button>
                </div>
            </div>
            <div class="body">
                <div class="overlay">
                    <h3>{{$text}}</h3>
                </div>
                <img src="{{url('images/bg_1.jpg')}}" alt="">
            </div>
        </main>
    </main>
</body>

</html>
<script>

</script>