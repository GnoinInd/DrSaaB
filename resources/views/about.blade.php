<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="card">
            <form action="{{ route('sendData') }}" method="POST">
                @csrf
                <div class="forminput ">
                    <input type="text" name="fname" placeholder="enter fname"><br>
                </div>
                <div class="forminput">
                    <input type="text" name="lname" placeholder="enter lname"><br>
                </div>
                <div class="forminput">
                    <input type="text" name="email" placeholder="enter email"><br>
                </div>
                <div class="forminput">
                    <input type="text" name="mobile" placeholder="enter mobile number"><br>
                </div>
                <div class="forminput">
                    <button type='submit' name="submit"> send</button>
                </div>
            </form>





        </div>

    </div>
</body>

</html>
