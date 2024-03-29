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
            margin: 0px;
            padding: 0px;
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

        .header .right i {
                display: none;
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
        .newcontent{
            margin-top: 100px;
            width: 81%;
            margin-left: 250px;
            padding: 30px;
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
        .mytable table {
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
        .payHis{    
            margin-top: -10px;
            margin-left: 50px !important;
        }
        .pay{
            margin-top: 210px;
        }
        .content button{
            margin-top: 10px !important;
        }
        .newcontent{
            margin-left: 0px;
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
        .payHis{    
            margin-top: -10px;
            margin-left: 78px !important;
        }
        .payHis h2{    
           margin-left: 60px;
           width: 100%;
        }
        .pay{
            margin-top: 160px;
            margin-left: -10px;
        }
        .pay h2{
            margin-left: 50px;
        }
        .newcontent{
            margin-left: 0px;
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
      
       

        @media(max-width:768px){
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
        .payHis{    
            margin-top: -10px;
            margin-left: 50px !important;
        }
        .pay{
            margin-top: 210px;
        }
        .content button{
            margin-top: 10px !important;
        }
        .newcontent{
            margin-left: 0px;
        }
        }

        @media(max-width:740px){
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
        .payHis{    
            margin-top: -10px;
            margin-left: 50px !important;
        }
        .pay{
            margin-top: 210px;
        }
        .content button{
            margin-top: 10px !important;
        }
        .newcontent{
            margin-left: 0px;
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
        .payHis{    
            margin-top: -10px;
            margin-left: 50px !important;
        }
        .pay{
            margin-top: 210px;
        }
        .content button{
            margin-top: 10px !important;
        }
        .newcontent{
            margin-left: 0px;
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
            width: 100%;
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
        .payHis{    
            margin-top: -10px;
            margin-left: -10px !important;
        }
        .payHis h2{    
            margin-left: 50px !important;
        }
        .pay{
            margin-top: 160px;
        }
        .pay h2{
            margin-left: 10px;
        }
        .newcontent{
            margin-left: 0px;
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
        .payHis{    
            margin-top: -10px;
            margin-left: -28px !important;
        }
        .payHis h2{    
           margin-left: 60px;
           width: 100%;
        }
        .pay{
            margin-top: 160px;
            margin-left: -10px;
        }
        .pay h2{
            margin-left: 0px;
        }
        .newcontent{
            margin-left: 0px;
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
            overflow-x: scroll !important;
        }

        .table table {
            width: 100% !important;
            border: 1px solid black;
            border-collapse: collapse;
        }


        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-size: 14px;
        }
        .payHis{   
            margin-top: -10px;
            margin-left: -20px !important;
        }
        .payHis h2{    
           margin-left: 60px;
           width: 100%;
        }
        .pay{
            margin-top: 160px;
            margin-left: -10px;
        }
        .pay h2{
            margin-left: 0px;
        }
        .newcontent{
            min-width: 100% !important;
            margin-left: 0px;
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
               <div class="newcontent" id="mytable">
                @if($su=Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{$su}}</strong>
                </div>
                @endif
                <div  class="table payHis">
                    <div class="text-center">
                        <h2>PAYMENT HISTORY</h2>
                    </div>
                    <table  id="newtable">
                        <th>S/N</th>
                        <th>AMOUNT</th>
                        <th>LEVEL</th>
                        <th>PAYMENT DATE</th>
                        <th>REFERENCE</th>
                    </table>
                </div>
               </div>
                <form hidden action="{{url('dashboard/paymentError')}}" method="post">
                    @csrf
                  <button id="paymentError">click</button>
                </form>
                <form action="{{url('dashboard/payment')}}" method="post" id="courseReg" class="content">
                    <div class="pay">
                        <div class="text-center">
                            <h2>PAYMENT</h2>
                        </div>
                        <div class="table">
                            <table id="table">
                                <th>S/N</th>
                                <th>AMOUNT</th>
                                <th>LEVEL</th>
                                <th>DEADLINE DATE</th>
                                <th>PENALTY CHARGE</th>
                            </table>
                        </div>
                    </div>
                    <div id="mycourse">
                        <div id="theCourse" hidden>

                        </div>
                        @if($su=Session::get('error'))
                        <div class="alert alert-danger">
                            <strong>{{$su}}</strong>
                        </div>
                        @endif
                        <div class="mb-3">
                            <span>Message</span>
                            <div>
                                <input id="course" type="text" readonly name="course"
                                value="Remember you're making use of online payment gateway">
                                <input hidden type="text" name="amount" id="amount">
                                <input hidden type="text" name="reference" id="reference">
                                @csrf
                               <button id="payit" hidden>Click</button>
                                <button id="course" onclick="handlePayment()" type="button" class="btn btn-primary">Make
                                    Payment</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            </div>
        </main>
    </main>
    <script src="https://js.paystack.co/v1/inline.js"></script>
</body>

</html>
<script>
    let userInfo=@json($userInfo);
    let paymentInfo =@json($paymentInfo);
    let payment =@json($payment);
    console.log(payment);
    let email =@json($email);
    let index=userInfo.level;
    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    }
    if (payment.length<index && payment.length!=0) {
        document.getElementById('courseReg').hidden=false;
    }
    else if(payment.length<index && payment.length==0){
        document.getElementById('courseReg').hidden=false;
        document.getElementById('mytable').hidden=true;
    }else{
        document.getElementById('courseReg').hidden=true;
        document.getElementById('mytable').hidden=false;
    }
    for (let i = 0; i < paymentInfo.length; i++) {
        let amount = new Intl.NumberFormat("en-Us", { currency: "NGN", style: "currency" }).format(paymentInfo[i].amount);
        let penalty = new Intl.NumberFormat("en-Us", { currency: "NGN", style: "currency" }).format(paymentInfo[i].penalty);
        document.getElementById('table').innerHTML += `<tr><td>${i + 1}</td><td>${amount}</td><td>${paymentInfo[i].level}</td><td>${paymentInfo[i].deadline}</td><td>${penalty}</td></tr>`

    }
    for (let i = 0; i < payment.length; i++) {
        let amount = new Intl.NumberFormat("en-Us", { currency: "NGN", style: "currency" }).format(payment[i].amount);
        document.getElementById('newtable').innerHTML += `<tr><td>${i + 1}</td><td>${amount}</td><td>${payment[i].level}</td><td>${payment[i].payment_date}</td><td>${payment[i].reference}</td></tr>`

    }
    function handlePayment() {
        let refer
        var handler = PaystackPop.setup({
            key: 'pk_test_b151276bd6786f5c094f1c35d7ee0008f073fb2d',
            email: email,
            amount: paymentInfo[0].amount * 100,
            currency: 'NGN',
            callback: function (response) {
                let reference = response.reference;
                //this happens after the payment is completed successfully
                document.getElementById('amount').value=paymentInfo[0].amount;
                document.getElementById('reference').value=reference;
                document.getElementById('payit').click();
            },
            onClose: function () {
                document.getElementById('paymentError').click();
            },
        });
        handler.openIframe();
    }



</script>
@endguest