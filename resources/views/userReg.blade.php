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
    <script defer src="https://unpkg.com/alpinejs@3.8.1/dist/cdn.min.js"></script>

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
            box-shadow: 0px 0px 4px black;
            padding-left: 50px;
            padding-right: 50px;
            position: fixed;
            top: 0px;
            z-index: 7000;
        }

        .header .right i {
                display: none;
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
            color: black
        }

        .right h2 {
            margin-top: -15px;
        }

        .body {
            width: 100%;
            height: 100vh;
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
            margin-bottom: 30px;
            margin-top: 20px;
            background-color: transparent;
            outline: none;
            border: 0px;
            font-family: "Futura Md";
            font-size: 18px;
            font-weight: bold;
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


        .body .content {
            width: 81%;
            height: 100%;
            background-color: transparent;
            margin-left: 250px;
            margin-top: 150px;
            padding: 30px;
            font-size: 17px;
        }
        .adjust{
            margin-top: 100px !important
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
            right: 40px;
            top: 200px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 200px;
        }

        .profile2 img {
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
        

        @media(max-width:915px){
            .body .menu {
               overflow-y: scroll
            }
            .body .menu button{
            margin-top: 10px;
              margin-bottom: 50px;
            }
            .body #completeReg input {
            width: 350px;
           
        }
        }

        @media(max-width:912px){
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
                margin-top: 35px;
                margin-bottom: 35px;
            }
            .body .menu2 a {
                font-size: 28px;
            }
            .header .right i {
                display: inherit;
            }
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 23px;
            text-align: justify;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        }
        @media(max-width:896px) {
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
                overflow-y: scroll;
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
            .profile {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 29px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
        .body #completeReg input {
            outline: none;
            width: 350px;
            padding: 4px;
            margin-right: 43px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
        }
        }
        @media(max-width:820px){
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
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .body #completeReg span {
            margin-left: 70px;
        }
        .body #completeReg input {
            outline: none;
            width: 600px;
            padding: 4px;
            margin-left: 70px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
        }
        }
      
       

        @media(max-width:700px){
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
                overflow-y: scroll
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
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .profile {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 40px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
        .body #completeReg span {
            font-weight: bold;
            margin-left: 40px !important;
        }
        .body #completeReg input {
            outline: none;
            width: 400px;
            padding: 4px;
            margin-left: 40px !important;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
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
        @media(max-width:414px){
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
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .profile {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 40px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
        .body #completeReg input {
            outline: none;
            width: 350px;
            padding: 4px;
            margin-left:10px !important;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
        }
        .body #completeReg span {
            margin-left: 10px !important;
        }
        }
        @media(max-width:375px){
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
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: -90px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .profile {
            position: absolute;
            right: -80px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: -50px;
            top: 40px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }

        .body #completeReg span {
            margin-left: 100px !important;
        }

        .body #completeReg input {
            outline: none;
            width: 300px;
            padding: 4px;
            margin-left: 100px !important;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
            margin-left: 130px;
        }
        }
        @media(max-width:280px){
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
                font-size: 12px;
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
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: -90px;
            position: absolute;
            top: 50px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .profile {
            position: absolute;
            right: -80px;
            top: -30px;
        }

        .profile2 {
            position: absolute;
            right: -50px;
            top: 0px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }

        .body #completeReg span {
            margin-left: 100px !important;
        }

        .body #completeReg input {
            outline: none;
            width: 200px;
            padding: 4px;
            margin-left: 100px !important;
            margin-bottom: 20px;
            border: none;
            font-size: 14px;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
            margin-left: 130px;
            width: 200px
        }
        }

    </style>
</head>
@if(auth()->user()->email_verified_at)
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
                    <button><a href="/dashboard/result">Result</a></button>
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
              
                        <form action="{{url('completeReg')}}" method="post" enctype="multipart/form-data"
                            id="completeReg" class="content">
                            <div class="profile2">
                                <img src="" alt="No image" id="myImage">
                                <input type="file" id="image" hidden name="image">
                            </div>
                            <div class="profile">
                                <button id="imageBtn" class="btn btn-primary" type="button"
                                    onclick="handleImage()">Change Picture</button>
                            </div>
                            <div>
                                <span>Full Name:</span>
                                <div>
                                    <input id="fullname" value=@json($data->fullname) readonly type="text">
                                </div>
                            </div>
                            <div>
                                <span>Email:</span>
                                <div>
                                    <input readonly type="text" value={{auth()->user()->email}}>
                                </div>
                            </div>
                            <div>
                                <span>Level:</span>
                                <div>
                                    <input readonly type="text" value={{auth()->user()->level}}>
                                </div>
                            </div>
                            <div>
                                <span>Program:</span>
                                <div>
                                    <input id="program" type="text" value="{{old('program')}}" name="program"
                                        class="{{$errors->has('progrma') ? 'is-inavlid' : '' }}">
                                    @error('program')
                                    <div>
                                        <small class="text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span>Date of birth:</span>
                                <div>
                                    <input id="dob" type="date" value="{{old('dob')}}" name="dob"
                                        class="{{$errors->has('dob') ? 'is-inavlid' : '' }}">
                                    @error('dob')
                                    <div>
                                        <small class="text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span>Country:</span>
                                <div>
                                    <input id="country" type="text" name="country" value="{{old('country')}}"
                                        class="{{$errors->has('dob') ? 'is-inavlid' : '' }}">
                                    @error('country')
                                    <div>
                                        <small class="text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span>State:</span>
                                <div>
                                    <input id="state" type="text" name="state" value="{{old('state')}}"
                                        class="{{$errors->has('state') ? 'is-inavlid' : '' }}">
                                    @error('state')
                                    <div>
                                        <small class="text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span>Phone Number:</span>
                                <div>
                                    <input id="phoneno" type="text" name="phoneno" value="{{old('phone')}}"
                                        class="{{$errors->has('phoneno') ? 'is-inavlid' : '' }}">
                                    @error('phoneno')
                                    <div>
                                        <small class="text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span>Next of kin:</span>
                                <div>
                                    <input id="nok" type="text" name="nok" value="{{old('nok')}}"
                                        class="{{$errors->has('nok') ? 'is-inavlid' : '' }}">
                                    @error('nok')
                                    <div>
                                        <small class="text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span>Address of Next of kin:</span>
                                <div>
                                    <input id="addressNok" type="text" name="addressNok" value="{{old('addressNok')}}"
                                        class="{{$errors->has('addressNok') ? 'is-inavlid' : '' }}">
                                    @error('addressNok')
                                    <div>
                                        <small class="text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span>Phone number of Next of kin:</span>
                                <div>
                                    <input id="phoneNok" type="text" name="phoneNok" value="{{old('phoneNok')}}"
                                        class="{{$errors->has('phoneNok') ? 'is-inavlid' : '' }}">
                                    @error('phoneNok')
                                    <div>
                                    </div><small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            @csrf
                            <div>
                                <button id="complete" class="btn btn-primary">Complete Registration</button>
                            </div>

                        </form>
              
             
                        <form id="otherCourse" class="content adjust">
                            <h3>You are not allowed! <a href="/dashboard/payment">Make payment first</a></h3>
                        </form>
                   

            </div>
            </div>
        </main>
    </main>
</body>

</html>
<script>
    let userData =@json($data);
    let url =@json($picture);
    let payment=@json($payment);
    // console.log(url);
    // console.log(userData.image);
    // console.log(userData);
    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    }

    if (payment.length!=0) {
        document.getElementById('completeReg').hidden=false;
        document.getElementById('otherCourse').hidden=true;
    if (userData.dob) {
        document.getElementById('dob').value = userData.dob;
        document.getElementById('country').value = userData.country;
        document.getElementById('state').value = userData.state;
        document.getElementById('phoneno').value = userData.phoneno;
        document.getElementById('nok').value = userData.nok;
        document.getElementById('addressNok').value = userData.addressNok;
        document.getElementById('phoneNok').value = userData.phoneNok;
        document.getElementById('program').value = userData.program;
        document.getElementById('myImage').src = `{{url('/storage/${userData.image}')}}`;
        document.getElementById('complete').setAttribute('disabled', 'true');
        document.getElementById('imageBtn').setAttribute('disabled', 'true');

        document.getElementById('dob').setAttribute('readonly', 'true');
        document.getElementById('country').setAttribute('readonly', 'true');
        document.getElementById('state').setAttribute('readonly', 'true');
        document.getElementById('phoneno').setAttribute('readonly', 'true');
        document.getElementById('nok').setAttribute('readonly', 'true');
        document.getElementById('addressNok').setAttribute('readonly', 'true');
        document.getElementById('phoneNok').setAttribute('readonly', 'true');
        document.getElementById('program').setAttribute('readonly', 'true');
    }
    let image = document.getElementById('image');
    handleImage = () => {
        image.click();
    }
    }else{
        document.getElementById('completeReg').hidden=true;
        document.getElementById('otherCourse').hidden=false;
    }
</script>
@else
<h4 class="ml-3 mt-3">You are not granted permission to this content unless you verified your email</h4>
<button class="btn btn-primary ml-4"><a href="/dashboard">Go back</a></button>
<button class="btn btn-primary ml-4"><a href="/verify">Verify Email now</a></button>
@endif
@endguest