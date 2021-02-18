<html>
<head>



  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="/ctf2/g.css">
  <script src="/ctf2/split.js"></script>
  <script src="https://unpkg.com/splitting/dist/splitting.js"></script>
  <script src="https://codepen.io/shshaw/pen/5eb6d4e9bfd78e3911ed9d0d0dfce69b"></script>
  <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
  <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />

  <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>



</head>
<body>

  <video autoplay muted loop id="myVideo">
    <source src="/ctf2/back.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <div class="title">
  <a href="http://ctf2.op/ctf2/public/quest" style="text-decoration:none;"><span class="text write" data-splitting="lines">
    Wellcome to Middle Earth </br>
    OneCTF 2020
  </span></a>
  <span aria-hidden="true" class="text laser" data-splitting="lines">
    Wellcome to Middle Earth </br>
     OneCTF 2020
  </span>
</div>

<script>
  Splitting();
</script>

<?php include 'C:/xampp/htdocs/ctf2/resources/views/inc/nav.blade.php';?>
</body>
</html>

<style>


#myVideo {
  position:fixed;
   z-index:-1;
   top:0;
   left:0;
   width:100%;
   height:auto;
}

</style>
