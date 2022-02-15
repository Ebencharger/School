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
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form input {
            border: 2px solid #007bff;
            width: 60px;
            height: 60px;
            text-align: center;
            font-size: 30px;
            outline: none;
        }

        form span {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <form action="{{url('verify')}}" method="post" enctype="multipart/form-data" id="completeReg" class="content">
        <h4>Enter the token that was sent to your email</h4>
        <div class="token">
            <input type="text" hidden id="realToken" name="realToken">
            <input type="text" id="token">
            <span>-</span>
            <input type="text" id="token">
            <span>-</span>
            <input type="text" id="token">
            <span>-</span>
            <input type="text" id="token">
            <span>-</span>
            <input type="text" id="token">
            <span>-</span>
            <input type="text" id="token">
        </div>
        @csrf
        <button id="myBtn" hidden>CLICK</button>
    </form>

</body>

</html>
<script>
    let token = document.querySelectorAll('#token');
    let myIndex = 0;
    for (let i = 0; i < token.length; i++) {
        if (i < token.length) {
            token[i].addEventListener('input', function () {
                myIndex++;
                if (token[i].value.length == 1) {
                    document.getElementById('realToken').value+=token[i].value;
                   if ((i+1) !=token.length) {
                    token[i + 1].focus();
                   }
                }
                if (myIndex == token.length) {
                
                 document.getElementById('myBtn').click();
                }
                console.log(document.getElementById('realToken').value);
            })
            
        }
    }



</script>