@guest
<h1>YOU HAPPENED NOT TO HAVE LOGGED IN... login from here <a href="/login">Now</a></h1>
@else
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

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
            color: black;
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

        .btn-danger:hover {
            background-color: transparent !important;
            border: 1px solid #dc3545 !important;
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }

        .btn-danger:hover a {
            text-decoration: none;
            color: black;
        }

        .btn-primary a {
            text-decoration: none;
            color: white
        }

        .btn-primary:hover {
            background-color: transparent !important;
            border: 1px solid #007bff !important;
            color: black !important;
        }

        .btn-primary:hover a {
            text-decoration: none;
            color: black
        }

        .right h2 {
            margin-top: -15px;
        }

        .body {
            width: 100%;
            height: 100vh;
        }


        .body .menu2 {
            height: 100vh;
            width: 250px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            position: fixed;
            left: 0px;
            top: 80px;
            z-index: 9000;
            padding-top: 20px;
            padding-left: 30px
        }
        .body .menu2 button {
            margin-bottom: 22px;
            margin-top: 20px;
            background-color: transparent;
            outline: none;
            border: 0px;
            font-family: "Futura Md";
            font-size: 18px;
            font-weight: bold;

        }

        .body .menu {
            height: 100vh;
            width: 250px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            position: fixed;
            left: 0px;
            top: 80px;
            padding-top: 20px;
            padding-left: 30px
        }

        .body .menu button {
            margin-bottom: 50px;
            margin-top: 10px;
            background-color: transparent;
            outline: none;
            border: 0px;
            font-family: "Futura Md";
            font-size: 18px;
            font-weight: bold;
        }


        .body .content {
            width: 81%;
            height: 100%;
            background-color: transparent;
            margin-left: 250px;
            margin-top: 100px;
            padding: 30px;
            font-size: 17px;
        }

        .body .content p {
            text-decoration: underline
        }

        .body .content .picture {
            width: 100%;
            margin-top: 160px;
            display: flex;
            flex-wrap: wrap
        }

        .body .content .picture div {
            width: 200px;
            height: 200px;
            margin-right: 50px;
            margin-bottom: 150px;
        }

        .body .content .picture img {
            width: 220px;
            height: 220px;
        }

        .body #completeReg {
            display: flex;
            flex-wrap: wrap;
        }

        .body #completeReg span {
            font-weight: bold;
        }

        .body #completeReg input {
            outline: none;
            width: 300px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        .profile {
            position: absolute;
            right: 20px;
            top: 200px;
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }

        .table {
            width: 100%;
        }

        .table table {
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse
        }

        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        .body #courseReg span {
            font-weight: bold;
        }

        .body #mycourse {
            margin-bottom: 40px;
        }

        .body #courseReg input {
            outline: none;
            width: 600px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        .menu button a {
            text-decoration: none;
            color: black;
        }

        .menu2 button a {
            text-decoration: none;
            color: black;
        }
        .header .right i {
                display: none;
            }

            @media(max-width:1024px){
                .body .menu2{
                   display: none;
                }
            }

        @media(max-width:912px) {
            .header {
                padding-left: 60px;
                padding-right: 60px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 23px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 33px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2{
                   display: inherit;
                }

            .body .menu2 {
                height: 100vh;
                width: 350px;
                overflow-y: scroll;
            }
            .body .menu2 button{
                margin-top: 35px;
                margin-bottom: 35px;
            }
            .body .menu2 a {
                font-size: 28px;
            }
            .header .right i {
                display: inherit;
            }
        }

        @media(max-width:820px) {
            .header {
                padding-left: 60px;
                padding-right: 60px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 23px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 33px;
            }

            .body .menu {
                display: none;
            }
            .header .right i {
                display: inherit;
            }
        }
        @media(max-width:540px) {
            .header {
                padding-left: 60px;
                padding-right: 60px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 23px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 33px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 350px;
            }
            .body .menu2 button{
                margin-top: 17px;
                margin-bottom: 17px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
        }

        @media(max-width:414px) {
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 17px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 23px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 100%;
            }
            .body .menu2 button{
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
        }
    </style>
</head>

<body>
    <main>
        <main>
            <div class="header">
                <div class="right d-flex">
                    <h2>Welcome {{auth()->user()->fullname}}</h2>
                    <i class="fa fa-bars text-primary" onclick="handleMenu()"></i>
                </div>
                <div class="left">
                    <button class="btn btn-danger"><a href="/logout">LOGOUT</a></button>
                    <button class="btn btn-primary"><a href="/dashboard">HOME</a></button>
                </div>
            </div>
            <div class="body">
                <div class="menu">
                    <button><a href="/dashboard/completeReg">Complete Registration</a></button>
                    <button><a href="/dashboard/courseReg">Course Registration</a></button>
                    <button><a href="/dashboard/timetable">Timetable</a></button>
                    <button><a href="/dashboard/payment">Payment/Receipt</a></button>
                    <button><a href="/dashboard/assignment">Assignment and Project</a></button>
                    <button><a href="/dashboard/result">Check Result</a></button>
                </div>
                <div class="menu2" id="menu2" hidden>
                    <div><button><a href="/dashboard/">Home</a></button></div>
                    <div><button><a href="/dashboard/completeReg">Complete Registration</a></button></div>
                    <div><button><a href="/dashboard/courseReg">Course Registration</a></button></div>
                    <div><button><a href="/dashboard/timetable">Timetable</a></button></div>
                    <div><button><a href="/dashboard/payment">Payment/Receipt</a></button></div>
                    <div><button><a href="/dashboard/assignment">Assignment and Project</a></button></div>
                    <div><button><a href="/dashboard/result">Check Result</a></button></div>
                    <div> <button><a href="/logout">Logout</a></button></div>
                </div>
                @extends('dashHome');
            </div>
            </div>
        </main>
    </main>
</body>

</html>
<script>
    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    }

</script>
@endguest