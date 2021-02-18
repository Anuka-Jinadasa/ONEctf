<html>

<meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

    <script  src="{(asset('js/validate.js'))}" type="text/javascript"></script>
    <script type="text/javascript" src="flags.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="/ctf2/bootstrap4-neon-glow.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="/ctf2/a.css">

    <div>
    <div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
    </div>



</head>

<body>

  <link rel="stylesheet" href="/ctf2/check.css">



</head>

<div class="container-nav">
  <div class="center-nav">
    <button class="btn-nav" style="outline:black;">
      <svg  class="svg1" width="180px" height="60px" viewBox="0 0 180 60" class="border">
        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
      </svg>
      <a href="http://ctf2.op/ctf2/public/" style="text-decoration:none;"><span><i>Home</i></span></a>
      <span></span>
    </button>

  </div>
</div>

<div class="container-nav" style="margin-left:15%;">
  <div class="center-nav">
    <button class="btn-nav" >
      <svg class="svg1" width="180px" height="60px" viewBox="0 0 180 60" class="border">
        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
      </svg>
        <a href="http://ctf2.op/ctf2/public/quest" style="text-decoration:none;"><span><i>Quest</i></span></a>
      <span></span>
    </button>

  </div>
</div>

<div class="container-nav" style="margin-left:30%;">
  <div class="center-nav">
    <button class="btn-nav" >
      <svg class="svg1" width="180px" height="60px" viewBox="0 0 180 60" class="border">
        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
      </svg>
        <a href="http://ctf2.op/ctf2/public/rules" style="text-decoration:none;"><span><i>Rules</i></span></a>
      <span></span>
    </button>
  </div>
  </div>

    <div class="container-nav" style="margin-left:45%;">
      <div class="center-nav">
        <button class="btn-nav">
          <svg class="svg1" width="180px" height="60px" viewBox="0 0 180 60" class="border">
            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
          </svg>

          <a href="http://ctf2.op/ctf2/public/about-us" style="text-decoration:none;"><span><i>About</i></span></a>
          <span></span>
        </button>

  </div>
</div>


<div id="myGroup">
  <div class="jumbotron bg-transparent mb-0 pt-0 radius-0"  >
              <div class="row hackerFont" style="margin-top:70%;">
                  <div class="col-md-12">
                      <h4 style="margin-bottom:30px;">  &nbsp &nbsp &nbsp &nbsp Web Challenges</h4>
                  </div>
                  <div class="col-md-4 mb-3" >
                      <div class="card category_web" style="width:370px; margin-left:0%;">
                          <div class="card-header solved" data-target="#problem_id_1" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1" >
                              <h5>Palantír Portal</h5>
                          </div>
                          <div id="problem_id_1" class="collapse card-body" data-parent="#myGroup">
                              <blockquote class="card-blockquote">
                                <div style="display: flex;">
                                    <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                      <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                  </div>
                                  <p> Only Wizards can use this power. it is old magic now it is obsolete</br>flag-fomat: OneCTF{md5_flag}
                                  </p>
                                  <a target="_blank" href="portel" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span> &nbspProceed!</a>

                                  <div class="input-group mt-3">
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio1_p1" checked=false><p>Easy</p></label>
                                      </div>
                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio2_p1" name="customRadio_p1" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio2_p1">Medium</label> </input>
                                      </div>
                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio3_p1" name="customRadio_p1" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio3_p1">Hard</label>
                                      </div>
                                  </div>
                                  <div class="input-group mt-3">
                                      <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id ="s1">
                                      <div class="input-group-append">
                                          <button id="submit_p2" class="btn btn-outline-secondary" type="button" onclick="valid()" >Submit</button>


                                      </div>
                                  </div>
                              </blockquote>
                          </div>
                      </div>
                  </div>


                  <div class="col-md-4 mb-3">
                      <div class="card category_reversing" style="width:370px; margin-left: 0%;">
                          <div class="card-header" data-target="#problem_id_2" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                                <h5>Scout Enemy Garrisons </h5>
                          </div>
                          <div id="problem_id_2" class="collapse card-body" data-parent="#myGroup">
                              <blockquote class="card-blockquote">
                                  <div style="display: flex;">
                                      <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                      <div class="pl-2"><anvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                  </div>
                                  <p> Use your skills Ranger </br>flag-fomat: OneCTF{md5_flag}
                                  </p>
                                  <a target="_blank" href="#!" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                  <div class="input-group mt-3">

                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio2_p2" name="customRadio_p2" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio2_p2">Easy</label>
                                      </div>
                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio3_p2" name="customRadio_p2" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio3_p2">Medium</label>
                                      </div>
                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio4_p2" name="customRadio_p2" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio4_p2">Hard</label>
                                      </div>

                                  </div>
                                  <div class="input-group mt-3">
                                      <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                          <button id="submit_p2" class="btn btn-outline-secondary" type="button">Submit</button>
                                      </div>
                                  </div>
                              </blockquote>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-3">
                      <div class="card category_pwning" style="width:370px; margin-left: 0%;">
                          <div class="card-header" data-target="#problem_id_3" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_3">
                              <h5>Secert Archive</h5>
                          </div>
                          <div id="problem_id_3" class="collapse card-body" data-parent="#myGroup">
                              <blockquote class="card-blockquote">
                                  <div style="display: flex;">
                                      <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                      <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                  </div>
                                  <p>Sam wanted send secret message however regular method is not wotking made him use alternative method. </br>flag-fomat: OneCTF{md5_flag}
                                  </p>
                                  <a target="_blank" href="/ctf2/public/quests/Web/secret_message/secert.archive.bin.zip" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer" download></span>&nbspProceed!</a>

                                  <div class="input-group mt-3">

                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio2_p3" name="customRadio_p3" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio2_p3">Easy</label>
                                      </div>
                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio3_p3" name="customRadio_p3" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio3_p3">Medium</label>
                                      </div>
                                      <div class="ht-tm-element custom-control custom-radio">
                                          <input type="radio" id="customRadio4_p3" name="customRadio_p3" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio4_p3">Hard</label>
                                      </div>

                                  </div>
                                  <div class="input-group mt-3">
                                      <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id ="s4">
                                      <div class="input-group-append">
                                          <button id="submit_p3" class="btn btn-outline-secondary" type="button" onclick="valid4()">Submit</button>
                                      </div>
                                  </div>
                              </blockquote>
                          </div>
                      </div>
                  </div>
              </div>
       </div>

       <div style="margin-top: -2%;">
       <div class="jumbotron bg-transparent mb-0 pt-0 radius-0" id="myGroup" id = "myGroup2">
                   <div class="row hackerFont">
                       <div class="col-md-12">
                           <h4 style="margin-bottom:30px;">  &nbsp &nbsp &nbsp &nbsp Crypto Challenges</h4>
                       </div>
                       <div class="col-md-4 mb-3">
                           <div class="card category_web" style="width:370px; margin-left:0%;">
                               <div class="card-header solved" data-target="#problem_id_4" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1">
                                   <h5>!flag</h5>
                               </div>
                               <div id="problem_id_4" class="collapse card-body" data-parent="#myGroup">
                                   <blockquote class="card-blockquote">
                                     <div style="display: flex;">
                                         <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>

                                           <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                       </div>
                                       <p> a = n </br>flag-fomat: OneCTF{md5_flag} </br>
                                       </p>
                                       <a target="_blank" href="/ctf2/public/quests/Crypto/rot/not flag.zip" class="btn btn-outline-secondary btn" download><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                       <div class="input-group mt-3">
                                           <div class="custom-control custom-radio">
                                               <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio1_p1" checked=false><p>Easy</p></label>
                                           </div>
                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio2_p1" name="customRadio_p1" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio2_p1">Medium</label>
                                           </div>
                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio3_p1" name="customRadio_p1" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio3_p1">Hard</label>
                                           </div>
                                       </div>
                                       <div class="input-group mt-3">
                                           <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id="s2">
                                           <div class="input-group-append">
                                               <button id="submit_p1" class="btn btn-outline-secondary" type="button" onclick="valid2()">Submit</button>
                                           </div>
                                       </div>
                                   </blockquote>
                               </div>
                           </div>
                       </div>


                       <div class="col-md-4 mb-3">
                           <div class="card category_reversing" style="width:370px; margin-left:0%;">
                               <div class="card-header" data-target="#problem_id_5" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                                     <h5>United</h5>
                               </div>
                               <div id="problem_id_5" class="collapse card-body" data-parent="#myGroup">
                                   <blockquote class="card-blockquote">
                                       <div style="display: flex;">
                                           <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                           <div class="pl-2"><anvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                       </div>
                                       <p> This is a piece of cake </br>flag-fomat: OneCTF{md5_flag}
                                       </p>
                                       <a target="_blank" href="/ctf2/public/quests/Crypto/United/united.zip" class="btn btn-outline-secondary btn" download><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                       <div class="input-group mt-3">

                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio2_p2" name="customRadio_p2" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio2_p2">Easy</label>
                                           </div>
                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio3_p2" name="customRadio_p2" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio3_p2">Medium</label>
                                           </div>
                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio4_p2" name="customRadio_p2" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio4_p2">Hard</label>
                                           </div>

                                       </div>
                                       <div class="input-group mt-3">
                                           <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id = "s3">
                                           <div class="input-group-append">
                                               <button id="submit_p2" class="btn btn-outline-secondary" type="button" onclick="valid3()">Submit</button>
                                           </div>
                                       </div>
                                   </blockquote>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <div class="card category_pwning" style="width:370px; margin-left:0%;">
                               <div class="card-header" data-target="#problem_id_6" data-toggle="collapse"  aria-expanded="false" aria-controls="problem_id_3">
                                   <h5>My Precious</h5>
                               </div>
                               <div id="problem_id_6" class="collapse card-body" data-parent="#myGroup">
                                   <blockquote class="card-blockquote">
                                       <div style="display: flex;">
                                           <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                           <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                       </div>
                                       <p> You are in dangerous grounds </br>flag-fomat: OneCTF{md5_flag}
                                       </p>
                                       <a target="_blank" href="my_precious" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                       <div class="input-group mt-3">

                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio2_p3" name="customRadio_p3" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio2_p3">Easy</label>
                                           </div>
                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio3_p3" name="customRadio_p3" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio3_p3">Medium</label>
                                           </div>
                                           <div class="ht-tm-element custom-control custom-radio">
                                               <input type="radio" id="customRadio4_p3" name="customRadio_p3" class="custom-control-input">
                                               <label class="custom-control-label" for="customRadio4_p3">Hard</label>
                                           </div>

                                       </div>
                                       <div class="input-group mt-3">
                                           <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id= "s5">
                                           <div class="input-group-append">
                                               <button id="submit_p3" class="btn btn-outline-secondary" type="button" onclick="valid5()">Submit</button>
                                           </div>
                                       </div>
                                   </blockquote>
                               </div>
                           </div>
                       </div>
                   </div>
            </div>
          </div>




          <div style="margin-top: -2%;">
          <div class="jumbotron bg-transparent mb-0 pt-0 radius-0" id="myGroup" id="myGroup2">
                      <div class="row hackerFont">
                          <div class="col-md-12">
                              <h4 style="margin-bottom:30px;">  &nbsp &nbsp &nbsp &nbsp Stegano Challenges</h4>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card category_web" style="width:370px; margin-left:0%;">
                                  <div class="card-header solved" data-target="#problem_id_7" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1">
                                      <h5>Broken Map</h5>
                                  </div>
                                  <div id="problem_id_7" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                      <blockquote class="card-blockquote">
                                        <div style="display: flex;">
                                            <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                              <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                          </div>
                                          <p>  Fix the map and find the hidden path  </br>flag-fomat: OneCTF{md5_flag}
                                          </p>
                                          <a target="_blank" href="/ctf2/public/quests/Stegano/broken_map/map" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                          <div class="input-group mt-3">
                                              <div class="custom-control custom-radio">
                                                  <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio1_p1" checked=false><p>Easy</p></label>
                                              </div>
                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio2_p1" name="customRadio_p1" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio2_p1">Medium</label>
                                              </div>
                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio3_p1" name="customRadio_p1" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio3_p1">Hard</label>
                                              </div>
                                          </div>
                                          <div class="input-group mt-3">
                                              <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id ="s7">
                                              <div class="input-group-append">
                                                  <button id="submit_p1" class="btn btn-outline-secondary" type="button" onclick="valid7()">Submit</button>
                                              </div>
                                          </div>
                                      </blockquote>
                                  </div>
                              </div>
                          </div>


                          <div class="col-md-4 mb-3">
                              <div class="card category_reversing" style="width:370px; margin-left:0%;">
                                  <div class="card-header" data-target="#problem_id_8" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                                        <h5>Careful what you looking for</h5>
                                  </div>
                                  <div id="problem_id_8" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                      <blockquote class="card-blockquote">
                                          <div style="display: flex;">
                                              <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                              <div class="pl-2"><anvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                          </div>
                                          <p> Do not expect a warm welcome from the kingdom of Edoras
                                          </p>
                                          <a target="_blank" href="/ctf2/public/quests/Stegano/careful_what_you_looking_for/king.jpg" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                          <div class="input-group mt-3">

                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio2_p2" name="customRadio_p2" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio2_p2">Easy</label>
                                              </div>
                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio3_p2" name="customRadio_p2" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio3_p2">Medium</label>
                                              </div>
                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio4_p2" name="customRadio_p2" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio4_p2">Hard</label>
                                              </div>

                                          </div>
                                          <div class="input-group mt-3">
                                              <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id = s8>
                                              <div class="input-group-append">
                                                  <button id="submit_p2" class="btn btn-outline-secondary" type="button" onclick="valid8()">Submit</button>
                                              </div>
                                          </div>
                                      </blockquote>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div class="card category_pwning" style="width:370px; margin-left:0%;">
                                  <div class="card-header" data-target="#problem_id_9" data-toggle="collapse"  aria-expanded="false" aria-controls="problem_id_3">
                                      <h5>Coming Soon......</h5>
                                  </div>
                                  <div id="problem_id_9" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                      <blockquote class="card-blockquote">
                                          <div style="display: flex;">
                                              <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                              <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                          </div>
                                          <p>
                                          </p>
                                          <a target="_blank" href="#!" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                          <div class="input-group mt-3">

                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio2_p3" name="customRadio_p3" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio2_p3">Easy</label>
                                              </div>
                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio3_p3" name="customRadio_p3" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio3_p3">Medium</label>
                                              </div>
                                              <div class="ht-tm-element custom-control custom-radio">
                                                  <input type="radio" id="customRadio4_p3" name="customRadio_p3" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadio4_p3">Hard</label>
                                              </div>

                                          </div>
                                          <div class="input-group mt-3">
                                              <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                              <div class="input-group-append">
                                                  <button id="submit_p3" class="btn btn-outline-secondary" type="button">Submit</button>
                                              </div>
                                          </div>
                                      </blockquote>
                                  </div>
                              </div>
                          </div>
                      </div>
               </div>
             </div>

             <div style="margin-top: -2%;">
             <div class="jumbotron bg-transparent mb-0 pt-0 radius-0" id="myGroup" id="myGroup2">
                         <div class="row hackerFont">
                             <div class="col-md-12">
                                 <h4 style="margin-bottom:30px;">  &nbsp &nbsp &nbsp &nbsp Programming Challenges</h4>
                             </div>
                             <div class="col-md-4 mb-3">
                                 <div class="card category_web" style="width:370px; margin-left:0%;">
                                     <div class="card-header solved" data-target="#problem_id_10" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1">
                                         <h5>Key_Is_The_Key</h5>
                                     </div>
                                     <div id="problem_id_10" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                         <blockquote class="card-blockquote">
                                           <div style="display: flex;">
                                               <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                                 <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                             </div>
                                             <p> someone tried to smuggle this key. Is is valuable </br>flag-fomat: OneCTF{md5_flag}
                                             </p>
                                             <a target="_blank" href="key" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                             <div class="input-group mt-3">
                                                 <div class="custom-control custom-radio">
                                                     <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio1_p1" checked=false><p>Easy</p></label>
                                                 </div>
                                                 <div class="ht-tm-element custom-control custom-radio">
                                                     <input type="radio" id="customRadio2_p1" name="customRadio_p1" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio2_p1">Medium</label>
                                                 </div>
                                                 <div class="ht-tm-element custom-control custom-radio">
                                                     <input type="radio" id="customRadio3_p1" name="customRadio_p1" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio3_p1">Hard</label>
                                                 </div>
                                             </div>
                                             <div class="input-group mt-3">
                                                 <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id= "s10">
                                                 <div class="input-group-append">
                                                     <button id="submit_p1" class="btn btn-outline-secondary" type="button" onclick="valid10()">Submit</button>
                                                 </div>
                                             </div>
                                         </blockquote>
                                     </div>
                                 </div>
                             </div>


                             <div class="col-md-4 mb-3">
                                 <div class="card category_reversing" style="width:370px; margin-left:0%;">
                                     <div class="card-header" data-target="#problem_id_11" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                                           <h5>Ancient Language</h5>
                                     </div>
                                     <div id="problem_id_11" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                         <blockquote class="card-blockquote">
                                             <div style="display: flex;">
                                                 <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                                 <div class="pl-2"><anvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                             </div>
                                             <p> Can you read this ancient language, </br>This'll help you: <i style="color:#32CD32;">OneCTF{cf1561431bf0hak1s5h6aq5edtfb9tie}</i>
                                             </br>flag-fomat: OneCTF{md5_flag}
                                             </p>
                                             <a target="_blank" href="/ctf2/public/quests/Programming/ancient_lang/ancient_lang.zip" class="btn btn-outline-secondary btn" download><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                             <div class="input-group mt-3">

                                                 <div class="ht-tm-element custom-control custom-radio">
                                                     <input type="radio" id="customRadio2_p2" name="customRadio_p2" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio2_p2">Easy</label>
                                                 </div>
                                                 <div class="ht-tm-element custom-control custom-radio">
                                                     <input type="radio" id="customRadio3_p2" name="customRadio_p2" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio3_p2">Medium</label>
                                                 </div>
                                                 <div class="ht-tm-element custom-control custom-radio">
                                                     <input type="radio" id="customRadio4_p2" name="customRadio_p2" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio4_p2">Hard</label>
                                                 </div>

                                             </div>
                                             <div class="input-group mt-3">
                                                 <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id="s6">
                                                 <div class="input-group-append">
                                                     <button id="submit_p2" class="btn btn-outline-secondary" type="button" onclick="valid6()">Submit</button>
                                                 </div>
                                             </div>
                                         </blockquote>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4 mb-3">
                                 <div class="card category_pwning" style="width:370px; margin-left:0%;">
                                     <div class="card-header" data-target="#problem_id_12" data-toggle="collapse"  aria-expanded="false" aria-controls="problem_id_3">
                                         <h5>Coming Soon......</h5>
                                     </div>
                                     <div id="problem_id_12" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                         <blockquote class="card-blockquote">
                                             <div style="display: flex;">
                                                <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                                 <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                             </div>
                                             <p>
                                             </p>
                                             <a target="_blank" href="#!" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                             <div class="input-group mt-3">
                                                 <div class="custom-control custom-radio">
                                                     <input type="radio" id="customRadio1_p3" name="customRadio_p3" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio1_p3" aria-required="">Easy</label>
                                                 </div>
                                                 <div class="ht-tm-element custom-control custom-radio">
                                                     <input type="radio" id="customRadio2_p3" name="customRadio_p3" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio2_p3">Medium</label>
                                                 </div>
                                                 <div class="ht-tm-element custom-control custom-radio">
                                                     <input type="radio" id="customRadio3_p3" name="customRadio_p3" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio3_p3">Hard</label>
                                                 </div>

                                             </div>
                                             <div class="input-group mt-3">
                                                 <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                                 <div class="input-group-append">
                                                     <button id="submit_p3" class="btn btn-outline-secondary" type="button">Submit</button>
                                                 </div>
                                             </div>
                                         </blockquote>
                                     </div>
                                 </div>
                             </div>
                         </div>
                  </div>
                </div>


                <div style="margin-top: -2%;">
                <div class="jumbotron bg-transparent mb-0 pt-0 radius-0" id="myGroup" id="myGroup2">
                            <div class="row hackerFont">
                                <div class="col-md-12">
                                    <h4 style="margin-bottom:30px;">  &nbsp &nbsp &nbsp &nbsp Reversing Challenges</h4>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card category_web" style="width:370px; margin-left:0%;">
                                        <div class="card-header solved" data-target="#problem_id_13" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1">
                                            <h5>Marching Backwards</h5>
                                        </div>
                                        <div id="problem_id_13" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                            <blockquote class="card-blockquote">
                                              <div style="display: flex;">
                                                  <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                                </div>
                                                <p> Sometimes you have to go backwards </br>flag-fomat: OneCTF{md5_flag}
                                                </p>
                                                <a target="_blank" href="/ctf2/public/quests/Reverse/marching_back" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                                <div class="input-group mt-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1_p1" name="customRadio_p1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1_p1" checked=false><p>Easy</p></label>
                                                    </div>
                                                    <div class="ht-tm-element custom-control custom-radio">
                                                        <input type="radio" id="customRadio2_p1" name="customRadio_p1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2_p1">Medium</label>
                                                    </div>
                                                    <div class="ht-tm-element custom-control custom-radio">
                                                        <input type="radio" id="customRadio3_p1" name="customRadio_p1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3_p1">Hard</label>
                                                    </div>
                                                </div>
                                                <div class="input-group mt-3">
                                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" id="s9">
                                                    <div class="input-group-append">
                                                        <button id="submit_p1" class="btn btn-outline-secondary" type="button" onclick="valid9()">Submit</button>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 mb-3">
                                    <div class="card category_reversing" style="width:370px; margin-left:0%;">
                                        <div class="card-header" data-target="#problem_id_14" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                                              <h5>Coming Soon......</h5>
                                        </div>
                                        <div id="problem_id_14" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                            <blockquote class="card-blockquote">
                                                <div style="display: flex;">
                                                    <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                                    <div class="pl-2"><anvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                                </div>
                                                <p>
                                                </br>flag-fomat: OneCTF{md5_flag}
                                                </p>
                                                <a target="_blank" href="#" class="btn btn-outline-secondary btn" download><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                                <div class="input-group mt-3">

                                                    <div class="ht-tm-element custom-control custom-radio">
                                                        <input type="radio" id="customRadio2_p2" name="customRadio_p2" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2_p2">Easy</label>
                                                    </div>
                                                    <div class="ht-tm-element custom-control custom-radio">
                                                        <input type="radio" id="customRadio3_p2" name="customRadio_p2" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3_p2">Medium</label>
                                                    </div>
                                                    <div class="ht-tm-element custom-control custom-radio">
                                                        <input type="radio" id="customRadio4_p2" name="customRadio_p2" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio4_p2">Hard</label>
                                                    </div>

                                                </div>
                                                <div class="input-group mt-3">
                                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button id="submit_p2" class="btn btn-outline-secondary" type="button" >Submit</button>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card category_pwning" style="width:370px; margin-left:0%;">
                                        <div class="card-header" data-target="#problem_id_15" data-toggle="collapse"  aria-expanded="false" aria-controls="problem_id_3">
                                            <h5>Coming Soon......</h5>
                                        </div>
                                        <div id="problem_id_15" class="collapse card-body" data-parent="#myGroup" data-parent="#myGroup2">
                                            <blockquote class="card-blockquote">
                                                <div style="display: flex;">
                                                   <h6 class="solvers"><span class="color_danger">Difficulty:</span></h6>
                                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                                </div>
                                                <p>
                                                </p>
                                                <a target="_blank" href="#!" class="btn btn-outline-secondary btn"><span class="fa fa-mouse-pointer"></span>&nbspProceed!</a>

                                                <div class="input-group mt-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1_p3" name="customRadio_p3" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1_p3" aria-required="">Easy</label>
                                                    </div>
                                                    <div class="ht-tm-element custom-control custom-radio">
                                                        <input type="radio" id="customRadio2_p3" name="customRadio_p3" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2_p3">Medium</label>
                                                    </div>
                                                    <div class="ht-tm-element custom-control custom-radio">
                                                        <input type="radio" id="customRadio3_p3" name="customRadio_p3" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3_p3">Hard</label>
                                                    </div>

                                                </div>
                                                <div class="input-group mt-3">
                                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button id="submit_p3" class="btn btn-outline-secondary" type="button">Submit</button>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                   </div>





</div>

  <script>
  // function([string1, string2],target id,[color1,color2])
   consoleText(['One CTF.', 'Quests', '2020'], 'text',['#b32400','#b32400','#b32400']);

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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

function valid() {
  var x1;
  x1 = document.getElementById("s1").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "onectf{5eabe85ec9ba2ac17a0f65f4dcac2dc9}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid2() {
  var x1;
  x1 = document.getElementById("s2").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "onectf{d059de2edb157c31cbd475ea60e1abd9}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }

}

function valid3() {
  var x1;
  x1 = document.getElementById("s3").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "OneCTF{b2e3aa61aadf7f19d296b138e3877b8c}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }

}

function valid4() {
  var x1;
  x1 = document.getElementById("s4").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "oneCTF{P9/Y0VJZ8feSQv2MuRHq2+etfuYWlU+e8xW4DfRz5VvCBjLP2OwfJeSpSmP+SPPsrVu0vF}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }

}

function valid5() {
  var x1;
  x1 = document.getElementById("s5").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "OneCTF{af76f16743a63d09870b95bed91867fb}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid6() {
  var x1;
  x1 = document.getElementById("s6").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "onectf{c1aa7aeaabffhakk00hhgaaedtfbbtie}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid7() {
  var x1;
  x1 = document.getElementById("s7").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "oneCTF{241aff4722d6a1f886ec7fbb3cc9e1e1}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid8() {
  var x1;
  x1 = document.getElementById("s8").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "oneCTF{817e331e22628471324bd0402fb3dd1c}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid9() {
  var x1;
  x1 = document.getElementById("s9").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "oneCTF{20ecd8da71L20dde061af994f480973a}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid10() {
  var x1;
  x1 = document.getElementById("s10").value;

if(!x1)
{
  alert("Please enter the flag!");

}
 else if(x1 == "oneCTF{9ebd768073ebdde3eaf880de94ed7aff}")
 {
    alert("Congratulations");
  }
  else
  {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}











</script>





</body>
