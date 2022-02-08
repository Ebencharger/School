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

        .body {
            width: 100%;
            height: 100vh;
        }



        .body .content {
            width: 81%;
            height: 100%;
            background-color: transparent;
            margin-left: 250px;
            position: absolute;
            top: 0px;
            padding: 30px;
            font-size: 17px;
        }

        .body .content p {
            text-decoration: underline
        }

        .body .content .picture {
            width: 100%;
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

 
    </style>
</head>

<body class="body">
    <div id="content" class="content">
        Hi student, thanks for joining <b>School of ICT (SCICT)</b>. This online School is established in
        order to bring technology more closer to you. As you know that every activity of today's World is
        run using technology, we suppose you acquire enough skills that are required so as to go as well
        into the World of Tech. We're happy dear Techie, that you have made up your mind to become a student
        of this great institution. We look forward to see you growing your pace and enlarge your small World
        into a wide World. <br>
        As per our terms and conditions, all payments are made via our third party payment gateways. Don't
        pay any of your tuition fees by hand and if need be, we would let you know. Your class starts the
        day you make your payment and strict attendance will be taken. Be disciplined and focused, for we
        <b>SCICT</b> love and care for students who are focused. <br>
        Signed by <a href="www.ebencharger@wordpress.com">Ebencharger</a>, C.E.O SCICT.
    
        <p class="mt-4 font-weight-bold text-primary">OUR INSTRUCTORS</p>
        <div class="picture">
            <div>
                <img src="{{url('images/person_1.jpg')}}" alt="">
                <h5 class="mt-1">JACKIE ASHAY (INDIA)</h5>
                <b>DATA ANALYST</b>
            </div>
            <div>
                <img src="{{url('images/person_2.jpg')}}" alt="">
                <h5 class="mt-1">MEDLEY COOKER (AUSTRALIA)</h5>
                <b>FRONTEND DEVELOPER</b>
            </div>
            <div>
                <img src="{{url('images/person_3.jpg')}}" alt="">
                <h5 class="mt-1">JAMES ALBERT (UK)</h5>
                <b>VIDEO & EFX CREATOR</b>
            </div>
            <div>
                <img src="{{url('images/person_4.jpg')}}" alt="">
                <h5 class="mt-1">SMART JOBBER (USA)</h5>
                <b>UI/UX DESIGNER</b>
            </div>
            <div>
                <img src="{{url('images/person_5.jpg')}}" alt="">
                <h5 class="mt-1">HADASSAH OTIH (CANADA)</h5>
                <b>CONTENT CREATOR</b>
            </div>
            <div>
                <img src="{{url('images/person_6.jpg')}}" alt="">
                <h5 class="mt-1">WARREN SHARK (CALIFORNIA)</h5>
                <b>FOREIGN TRADER/MARKETER</b>
            </div>
            <div>
                <img src="{{url('images/person_7.jpg')}}" alt="">
                <h5 class="mt-1">ELYOMU GRACIA (UK)</h5>
                <b>BACKEND DEVELOPER</b>
            </div>
            <div>
                <img src="{{url('images/person_8.jpg')}}" alt="">
                <h5 class="mt-1">JACKIE CHANW (CHINA)</h5>
                <b>ROBOTIST</b>
            </div>
            <div>
                <img src="{{url('images/person_9.jpg')}}" alt="">
                <h5 class="mt-1">PARTHINO JAMES (CANADA)</h5>
                <b>SOUND PRODUCER</b>
            </div>
        </div>
    </div>
    @yield('content')
</body>

</html>
<script>
   
</script>
@endguest














