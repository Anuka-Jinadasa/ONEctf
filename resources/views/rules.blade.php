
<head>

    <link rel="stylesheet" href="/ctf2/a.css">
    <link rel="stylesheet" href="/ctf2/check.css">

    <?php include 'C:/xampp/htdocs/ctf2/resources/views/inc/nav.blade.php';?>




    <div>
    <div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
    </div>



</head>
<body>

  <h2 style="margin-top:15%; margin-left:4%;max-width: 70ch;">
    <span>
      Capture The Flag is a hacking challenge where you can prove your hacking skills.
      This challenge will test your basic understanding of various fields of Computer Science.
    </span>

</h2>

<h3 style="margin-top:5px; margin-left:8%;">
<span>
  <li>Participants must bring their own laptops. </li>
</span>

<span>
  <li>Each problem will have different points according to its difficulty level.</li>
</span>
<span>
  <li>DoS OneCTF infrastructure is strictly prohibited and subject to disqualification</li>
</span>
<span>
  <li>The sole discretion of choosing the contest winner lies with the contest organizers</br> and no enquiries will be entertained regarding the winning criterion.
  </li>
</span>
</h3>


<span><img src="/ctf2/back.jpg" alt="one ring"></span>

@section('content')
<h1>About us</h1>
@endsection
<script>
// function([string1, string2],target id,[color1,color2])
 consoleText(['One CTF.', 'Rules', '2020'], 'text',['#b32400','#b32400','#b32400']);

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
