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

        .header .right i {
                display: none;
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

        .body .menu2 button a{
            text-decoration: none;
            color: black;
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

        #theCourse {
            width: 200px;
            height: 400px;
            overflow-y: scroll;
            background-color: white;
            box-shadow: 0px 0px 4px black;
            position: absolute;
            padding: 20px;
            margin-top: 63px;
        }

        #theCourse H5 {
            margin-bottom: 23px;
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
            .mb-3 input{
            width: 90% !important;
            margin-bottom: 20px;
        }
        .text-center h2{
            font-size: 18px;
            margin-left: -60px;
        }
        .table {
            width: 100% !important;
            margin-left: 0px;
        }

        .table table {
            width: 100% !important;
            border: 1px solid black;
            border-collapse: collapse
        }


        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-size: 10px;
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
                font-size: 15px;
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
        .mb-3 input{
            width: 90% !important;
            margin-bottom: 20px;
        }
        .text-center h2{
            font-size: 18px;
            margin-left: -60px;
        }
        .table {
            width: 80%;
        }

        .table table {
            width: 80% !important;
            border: 1px solid black;
            border-collapse: collapse
        }


        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-size: 10px;
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
            margin-left: -0px;
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
        .body #completeReg span {
            margin-left: 10px !important;
        }
        .mb-3 input{
            width: 90% !important;
            margin-bottom: 20px;
        }
        .text-center h2{
            font-size: 18px;
            margin-left: -60px;
        }
        .table {
            width: 70% !important;
            margin-left: -15px;
        }

        .table table {
            width: 60% !important;
            border: 1px solid black;
            border-collapse: collapse
        }


        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-size: 10px;
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
            margin-left: 0px;
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
        .mb-3 input{
            width: 90% !important;
            margin-bottom: 20px;
        }
        .text-center h2{
            font-size: 18px;
            margin-left: -60px;
        }
        .table {
            width: 100% !important;
            margin-left: 0px;
            overflow-x: scroll;
        }

        .table table {
            width: 100% !important;
            border: 1px solid black;
            border-collapse: collapse
        }


        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-size: 14px;
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


                        <form action="{{'/dashboard/courseReg'}}" method="post" id="courseReg" class="content">
                            <div id="errorReg" hidden class="alert alert-danger">
                                <h3 class="text-danger">You can not register this course now</h3>
                            </div>
                            <div id="errorReg2" hidden class="alert alert-danger">
                                <h3 class="text-danger">You have registered the course already!</h3>
                            </div>
                            <div id="mycourse">
                                <div id="theCourse" hidden>

                                </div>
                                <div class="mb-3">
                                    <span>Enter Course code</span>
                                    <div>
                                        <input oninput="handleCourse(this)" id="course" type="text" name="course"
                                            value="{{old('course')}}"
                                            class="{{$errors->has('course') ? 'is-inavlid' : '' }}">
                                        <input hidden type="text" name="courseCode" id="courseCode">
                                        <input hidden type="text" name="courseTitle" id="courseTitle">
                                        <input hidden type="text" name="level" id="level">
                                        <input hidden type="text" name="unit" id="unit">
                                        <button id="course" class="btn btn-primary">ADD
                                            COURSE</button>
                                        @error('course')
                                        <div>
                                            <small class="text-danger">{{$message}}</small>
                                        </div>
                                        @enderror
                                        @csrf
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h2>REGISTERED COURSE</h2>
                            </div>
                            <div class="table">
                                <table id="table">
                                    <th>S/N</th>
                                    <th>COURSE CODE</th>
                                    <th>COURSE TITLE</th>
                                    <th>DATE OF REGISTRATION</th>
                                    <th>UNIT</th>
                                </table>
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
    let regCourse =@json($regCourse);
    let course =@json($course);
    let level =@json($level);
    let seen = false;
    let seenTwo = false;
    let seenThree = false;
    let seenFour = false;
    let seenFive = false;
    let payment=@json($payment);
    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    }
        if (payment.length!=0) {
        document.getElementById('courseReg').hidden=false;
        document.getElementById('otherCourse').hidden=true;
        for (let i = 0; i < course.length; i++) {
        document.getElementById('theCourse').innerHTML += `<h5>${course[i].courseCode}<h5>`;
    }
  

    for (let i = 0; i < regCourse.length; i++) {
        document.getElementById('table').innerHTML += `<tr><td>${i + 1}</td><td>${regCourse[i].courseCode}</td><td>${regCourse[i].courseTitle}</td><td>${regCourse[i].created_at}</td><td>${regCourse[i].unit}</td></tr>`

    }

    handleCourse = (params) => {
        document.getElementById('theCourse').innerHTML = "";
        if (params.value != "") {
            let code = params.value;
            document.getElementById('theCourse').hidden = false;
            for (let i = 0; i < course.length; i++) {
                let myword = new RegExp(code, 'gi');
                let by = course[i].courseCode.match(myword);
                if (course[i].courseCode.includes(by)) {
                    document.getElementById('theCourse').innerHTML += `<h5 onclick="handleSelectCourse(${i})">${course[i].courseCode}<h5>`;
                    seen = true;
                    setTimeout(() => {
                        seen = false;
                    }, 1000);
                }
                else if (i == course.length - 1 && seen == false) {
                    document.getElementById('theCourse').innerHTML = "";
                    document.getElementById('theCourse').innerHTML += `<h5>NO FOUND<h5>`;
                }
            }
        }
        else {
            document.getElementById('theCourse').hidden = true;
        }
    }
    handleSelectCourse = (params) => {
        document.getElementById('errorReg2').hidden = true;
        document.getElementById('errorReg').hidden = true;
        if (regCourse.length > 0) {
            for (let i = 0; i < regCourse.length; i++) {
                if (regCourse[i].courseCode == course[params].courseCode) {
                    document.getElementById('errorReg2').hidden = false;
                    seenThree = true;
                    document.getElementById('course').value = "";
                    document.getElementById('theCourse').hidden = true;
                    setTimeout(() => {
                        seenThree = false;
                    }, 1000);
                }

                else if (i == regCourse.length - 1 && seenThree == false) {
                    for (let k = 0; k < course.length; k++) {
                        if ((Number(course[k].courseCode.substr(4, 1)) > level) || (Number(course[k].courseCode.substr(4, 1)) < level)) {
                            document.getElementById('errorReg').hidden = false;
                            seenFour = true;
                            document.getElementById('course').value = "";
                            document.getElementById('theCourse').hidden = true;
                            setTimeout(() => {
                                seenFour = false;
                            }, 1000);
                        }

                        else if (k == course.length - 1 && seenFour == false) {
                            document.getElementById('course').value = course[params].courseCode;
                            document.getElementById('courseCode').value = course[params].courseCode;
                            document.getElementById('courseTitle').value = course[params].courseTitle;
                            document.getElementById('level').value = level;
                            document.getElementById('unit').value = course[params].unit;
                            document.getElementById('theCourse').hidden = true;
                        }

                    }
                }

            }
        }
        if (regCourse.length == 0) {
            for (let j = 0; j < course.length; j++) {
                if ((Number(course[params].courseCode.substr(4, 1)) != level)) {
                    document.getElementById('errorReg').hidden = false;
                    seenFive = true;
                    document.getElementById('course').value = "";
                    document.getElementById('theCourse').hidden = true;
                    setTimeout(() => {
                        seenFive = false;
                    }, 1000);
                }
                else if (j == course.length - 1 && seenFive == false) {
                    document.getElementById('course').value = course[params].courseCode;
                    document.getElementById('courseCode').value = course[params].courseCode;
                    document.getElementById('courseTitle').value = course[params].courseTitle;
                    document.getElementById('level').value = level;
                    document.getElementById('unit').value = course[params].unit;
                    document.getElementById('theCourse').hidden = true;
                }

            }

        }

    }
}else{
        document.getElementById('courseReg').hidden=true;
        document.getElementById('otherCourse').hidden=false;
}
</script>
@else
<h4 class="ml-3 mt-3">You are not granted permission to this content unless you verified your email</h4>
<button class="btn btn-primary ml-4"><a href="/dashboard">Go back</a></button>
<button class="btn btn-primary ml-4"><a href="/verify">Verify Email now</a></button>
@endif
@endguest