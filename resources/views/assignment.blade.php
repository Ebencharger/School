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

        .assignment input {
            outline: none !important;
            width: 260px !important;
            padding: 4px;
            margin-right: 43px;
            text-align: center;
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
    </style>
</head>

<body>
    <main>
        <main>
            <div class="header">
                <div class="right">
                    <i class="fa fa-gears"></i>
                    <h2>Welcome {{auth()->user()->fullname}}</h2>
                </div>
                <div class="left">
                    <i class="fa fa-bell-o"></i>
                    <button class="btn btn-danger"><a href="/logout">LOGOUT</a></button>
                    <button class="btn btn-primary"><a href="/dashboard">HOME</a></button>
                </div>
            </div>
            <div class="body" id="body">


            </div>
            </div>
        </main>
    </main>
</body>

</html>
<script>
    let assignment =@json($assignment);
    let submission =@json($submit);
    let seen = false;
    let index = 0;
    number = [];
    if (submission.length > 0) {
        for (let i = 0; i < submission.length; i++) {
            console.log(i);
            if (assignment[i].question==submission[i].question) {
                number.push(i);
                seen = true;
                setTimeout(() => {
                    seen = false;
                }, 1000);
            }
            else if (i == assignment.length - 1 && seen == false) {
                assignment = assignment;
            }
        }
         assignment.splice(0, number.length);
    }
     
    console.log(assignment);
    function display() {
        if (assignment.length==0) {
            document.getElementById('body').innerHTML += `<div class="menu">
                    <button><a href="/dashboard/completeReg">Complete Registration</a></button>
                    <button><a href="/dashboard/courseReg">Course Registration</a></button>
                    <button><a href="/dashboard/timetable">Timetable</a></button>
                    <button><a href="/dashboard/payment">Payment/Receipt</a></button>
                    <button><a href="/dashboard/assignment">Assignment and Project</a></button>
                    <button>Result</button>
                </div>`;
            document.getElementById('body').innerHTML += `<div class="content">
                   <h3>You have submitted all assigments and projects</h3>
                </div>`;
        }
        if (assignment.length > 0) {
            document.getElementById('body').innerHTML = "";
            document.getElementById('body').innerHTML += `<div class="menu">
                    <button><a href="/dashboard/completeReg">Complete Registration</a></button>
                    <button><a href="/dashboard/courseReg">Course Registration</a></button>
                    <button><a href="/dashboard/timetable">Timetable</a></button>
                    <button><a href="/dashboard/payment">Payment/Receipt</a></button>
                    <button><a href="/dashboard/assignment">Assignment and Project</a></button>
                    <button>Result</button>
                </div>`;
            document.getElementById('body').innerHTML += ` <form action="{{'/dashboard/assignment'}}" method="post" id="courseReg" class="content" enctype="multipart/form-data">
                    <div id="mycourse">
                        <h5 class="mb-5">Note: Zip either your Assignment or Project folder and let the folder name be your name</h5>
                        <div id="theCourse" hidden>

                        </div>
                        <div class="mb-3">
                            <div class="assignment mb-3" >
                                <input id="" readonly value="COURSE:${assignment[index].courseCode}" type="text" name="course">
                                <input id="" readonly value="LECTURER:${assignment[index].lecturer}" type="text" name="course">
                                <input id="" readonly value="TAG:${assignment[index].tag}" type="text" name="course">
                                <h3 class="mt-4">${assignment[index].question}</h3>
                            </div>
                            <span>Select Your Assignment file</span>
                            <div>
                                <input id="course" type="file" name="answer"
                                    value="{{old('answer')}}" class="{{$errors->has('answer') ? 'is-inavlid' : '' }}">
                                <input hidden type="text" name="courseCode" value="${assignment[index].courseCode}" id="courseCode">
                                <input hidden type="text" name="lecturer" value="${assignment[index].lecturer}" id="lecturer">
                                <input hidden type="text" name="tag" value="${assignment[index].tag}" id="tag">
                                <input hidden type="text" name="question" value="${assignment[index].question}" id="tag">
                                @csrf
                                <button id="course" class="btn btn-primary">Submit</button>
                                <button id="next" onclick="handleNext()""  type="button" class="btn btn-primary ml-4">Next</button>
                                <button id="prev" onclick="handlePrev()"  type="button" class="btn btn-primary ml-4">Prev</button>
                                @error('answer')
                                <div>
                                    <small class="text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>`
            if (assignment.length == 1) {
            document.getElementById('next').setAttribute('disabled', 'true');
            document.getElementById('prev').setAttribute('disabled', 'true');
        }
        else if (assignment.length > 1 && index == 0) {
            document.getElementById('prev').setAttribute('disabled', 'true');
        }
        else if (index + 1 == assignment.length) {
            document.getElementById('next').setAttribute('disabled', 'true');
        }
        else {
            document.getElementById('next').removeAttribute('disabled');
            document.getElementById('prev').removeAttribute('disabled');
        }
        }
    }
    display();

    function handleNext() {
        index++;
        console.log(index, assignment.length);
        display();
    }
    function handlePrev() {
        index--;
        display();
    }


</script>
@endguest