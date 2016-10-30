<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>huwahuwa</title>
  </head>
  <body>
    <div class="container">
      <div class="box1">

      </div>
    </div>

    <style media="screen">
      .box1{
      border-radius: 50% 50% 50% 50%;
      bottom:0px;
      top:0px;
      left:0px;
      right:0px;
      margin:auto;
      animation: anime1 1s ease -2s infinite alternate;
      }
      @keyframes anime1 {
        0% {width: 100px;
           height: 50px;
           background-color: aqua;
           position: absolute;
           border: solid 1px;
      }
        100% {
           width: 100px;
           height: 50px;
           background-color: blue;
           position: absolute;
           border:solid 1px;
           margin-bottom: 50px;
           }
      }
    </style>
  </body>
</html>
