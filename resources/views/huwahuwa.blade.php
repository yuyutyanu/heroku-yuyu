<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>huwahuwa</title>
</head>

<body>

    <h1></h1>
    <div class="container">
        <div class="box1">

        </div>
        <div class="box2">

        </div>
        <div class="box3">

        </div>
    </div>

    <style media="screen">
        .box1 {
            border-radius: 50% 50% 50% 50%;
            width: 100px;
            height: 100px;
            animation: anime1 3s ease-in-out infinite alternate;
            -webkit-animation: anime2 3s ease-in-out infinite alternate;
            margin-left: 5%;
        }

        .box2 {
            width: 200px;
            height: 200px;
            border-radius: 50% 50% 50% 50%;
            margin-left: 30%;
            animation: anime1 3s ease-in-out -2s infinite alternate;
            -webkit-animation: anime2 3s ease-in-out -2s infinite alternate;
        }

        .box3 {
            width: 300px;
            height: 300px;
            border-radius: 50% 50% 50% 50%;
            margin-left: 65%;
            animation: anime1 3s ease-in-out -4s infinite alternate;
            -webkit-animation: anime2 3s ease-in-out -4s infinite alternate;
        }

        @keyframes anime1 {
            0% {
                background-color: aqua;
                position: absolute;
                bottom: 50px;
            }
            100% {
                background-color: blue;
                position: absolute;
                bottom: 100px;
            }
        }

        @-webkit-keyframes anime2 {
            0% {
                background-color: aqua;
                position: absolute;
                border: solid 1px;
                bottom: 50px;
            }
            100% {
                background-color: blue;
                position: absolute;
                border: solid 1px;
                bottom: 100px;
            }
        }
    </style>
</body>

</html>
