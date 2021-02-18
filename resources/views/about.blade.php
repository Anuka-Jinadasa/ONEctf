
<head>


    <link rel="stylesheet" href="/ctf2/a.css">
    <link rel="stylesheet" href="/ctf2/check.css">


    <?php include 'C:/xampp/htdocs/ctf2/resources/views/inc/nav.blade.php';?>




    <div>
    <div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
    </div>



</head>
<body>

  <h2 style="margin-top:48%; margin-left:-35%;">
    <span>What</span>
    <span>is</span>
    <span>Capture</span>
    <span>the</span>
    <span>Flag</span>
    <span>?</span>
</h2>

<h3>
<span>
  A capture the flag (CTF) contest is a special kind of cybersecurity competition
  designed to challenge its participants to solve computer security problems and/or
  capture and defend computer systems. The game consists of a series of challenges
  where participants must reverse engineer, break, hack, decrypt, or do whatever it
  takes to solve the challenge. The challenges are all set up with the intent of being hacked,
  making it an excellent, legal way to get hands-on experience.
</span>
</h3>

<h2 style="margin-top:0%;margin-left:-35%; ">
  <span>About</span>
  <span>OneCTF</span>
  <span>-</span>
  <span>2020</span>

</h2>

<h3>
<span>
A capture the flag (CTF) contest is a special kind of cybersecurity competition
designed to challenge its participants to solve computer security problems and/or
capture and defend computer systems. The game consists of a series of challenges
where participants must reverse engineer, break, hack, decrypt, or do whatever it
takes to solve the challenge. The challenges are all set up with the intent of being hacked,
making it an excellent, legal way to get hands-on experience.
</span>
</h3>

<h2 style="margin-top:0%; margin-left:-35%;">
<span>Who</span>
<span>can</span>
<span>play</span>
<span>this</span>
<span>OneCTF</span>
<span>?</span>
</h2>

<h3>
<span>
A capture the flag (CTF) contest is a special kind of cybersecurity competition
designed to challenge its participants to solve computer security problems and/or
capture and defend computer systems. The game consists of a series of challenges
where participants must reverse engineer, break, hack, decrypt, or do whatever it
takes to solve the challenge. The challenges are all set up with the intent of being hacked,
making it an excellent, legal way to get hands-on experience.
</span>
</h3>


<span><img src="http://ctf2.op/ctf2/back.jpg" alt="one ring"></span>

@section('content')
<h1>About us</h1>
@endsection
<script>
// function([string1, string2],target id,[color1,color2])
 consoleText(['One CTF.', 'About US', '2020'], 'text',['#b32400','#b32400','#b32400']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}
</script>

</body>
