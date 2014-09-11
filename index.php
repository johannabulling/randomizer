<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Randomizer.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: -70px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
  <div class="future-background" id="future-background"></div>
  <center>
      <!--[if lt IE 7]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-certificate small-glyphicon"></span> Trendyfizer</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Wildcard/wildcard.html">WILDCARD</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      <br/>
      <div class="row">
        <div class="col-xs-12 chosen visible-sm visible-md visible-lg">
          <button type="button" id="shuffle" class="btn btn-primary btn-lg">START RANDOMIZER</button>
          <input type="text" size="3" value="27" style="visibility: hidden;" />  
          <button type="button" id="show_all" class="btn btn-success btn-lg">DISPLAY ALL</button>
        </div>

        <div class="col-xs-12 chosen visible-xs">
          <button type="button" id="shuffle" class="btn btn-primary btn-lg btn-block">START RANDOMIZER</button>
          <input type="text" size="3" value="27" style="visibility: hidden;" />  
          <button type="button" id="show_all" class="btn btn-success btn-lg btn-block">DISPLAY ALL</button>
        </div>

      </div>

      <br><br>

      <div class="future-message" id="future-message">
        Go. Create your future with fuffr! 
      </div>

      <!-- Trend 1 -->
      <?php include 'trend_1.php';  ?>

      <!-- Trend 2 -->
      <?php include 'trend_2.php';  ?>

      <!-- Trend 3 -->
      <?php include 'trend_3.php';  ?>

      <!-- Trend 4 -->
      <?php include 'trend_4.php';  ?>

      <!-- Trend 5 -->
      <?php include 'trend_5.php';  ?>

      <!-- Trend 6 -->
      <?php include 'trend_6.php';  ?>

      <!-- Trend 7 -->
      <?php include 'trend_7.php';  ?>

      <!-- Trend 8 -->
      <?php include 'trend_8.php';  ?>

      <!-- Trend 9 -->
      <?php include 'trend_9.php';  ?>

      <!-- Trend 10 -->
      <?php include 'trend_10.php';  ?>

      <!-- Trend 11 -->
      <?php include 'trend_11.php';  ?>

      <!-- Trend 12 -->
      <?php include 'trend_12.php';  ?>

      <!-- Trend 13 -->
      <?php include 'trend_13.php';  ?>

      <!-- Trend 14 -->
      <?php include 'trend_14.php';  ?>

      <!-- Trend 15 -->
      <?php include 'trend_15.php';  ?>

      <!-- Trend 16 -->
      <?php include 'trend_16.php';  ?>

      <!-- Trend 17 -->
      <?php include 'trend_17.php';  ?>

      <!-- Trend 18 -->
      <?php include 'trend_18.php';  ?>

      <!-- Trend 19 -->
      <?php include 'trend_19.php';  ?>

      <!-- Trend 20 -->
      <?php include 'trend_20.php';  ?>

      <!-- Trend 21 -->
      <?php include 'trend_21.php';  ?>

      <!-- Trend 22 -->
      <?php include 'trend_22.php';  ?>

      <!-- Trend 23 -->
      <?php include 'trend_23.php';  ?>

      <!-- Trend 24 -->
      <?php include 'trend_24.php';  ?>

      <!-- Trend 25 -->
      <?php include 'trend_25.php';  ?>

      <!-- Trend 26 -->
      <?php include 'trend_26.php';  ?>

      <!-- Trend 27 -->
      <?php include 'trend_27.php';  ?>

      <!-- Trend 28 -->
      <?php include 'trend_28.php';  ?>

      <!-- Trend 29 -->
      <?php include 'trend_29.php';  ?>

      <!-- Trend 30 -->
      <?php include 'trend_30.php';  ?>


      <br/>
      <footer>
        <div class="row">
          <div class="col-xs-12 footer">
            <p>Hyper Island Student Project 2014</p>
          </div>
        </div>
      </footer>
    </center>
  </div> <!-- /container -->        

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

  <script src="js/vendor/bootstrap.min.js"></script>

  <script src="js/main.js"></script>

  <!-- Shuffle Trends Script -->
  <script>
    function shuffle(array) {
        var m = array.length,
            t, i;

        // While there remain elements to shuffle…
        while (m) {

            // Pick a remaining element…
            i = Math.floor(Math.random() * m--);

            // And swap it with the current element.
            t = array[m];
            array[m] = array[i];
            array[i] = t;
        }

        return array;
    }

    $(function () {
        $("#shuffle").click(function () {
            $('#future-background').css('visibility','visible').hide().fadeIn(500, function() {
            var $all = $("div.trend").show();
            $(shuffle($all).slice(0, $("input").val())).hide();
            $('.trend').addClass('col-xs-12 col-md-4 chosen').removeClass('col-xs-12 col-md-3 col-sm-6');
            });
        });
    });


    $(function () {
        $("#show_all").click(function () {
            // var $all = $("div.trend").show();
            var $all = $("div.trend").hide();
            $('.trend').addClass('col-xs-12 col-md-3 col-sm-6').removeClass('col-xs-12 col-md-4');
            $('#future-background').css('visibility','hidden').fadeIn();
            startfadein();
        });
    });
  </script>

  <script type="text/javascript">

  function fadein_chosen() {
    setTimeout(function(){
        $("div.future-background").delay(100).fadeIn("slow", function () {
        $("div.future-background").add();
        });
    }, 50);
  };

  function startfadein() {
     setTimeout(function(){
        $("div.trend_1").delay(100).fadeIn("slow", function () {
        $("div.trend_1").add();
        });
    }, 0);

     setTimeout(function(){
        $("div.trend_2").delay(100).fadeIn("slow", function () {
        $("div.trend_2").add();
        });
    }, 30);

     setTimeout(function(){
        $("div.trend_3").delay(100).fadeIn("slow", function () {
        $("div.trend_3").add();
        });
    }, 60);

     setTimeout(function(){
        $("div.trend_4").delay(100).fadeIn("slow", function () {
        $("div.trend_4").add();
        });
    }, 90);

     setTimeout(function(){
        $("div.trend_5").delay(100).fadeIn("slow", function () {
        $("div.trend_5").add();
        });
    }, 120);

     setTimeout(function(){
        $("div.trend_6").delay(100).fadeIn("slow", function () {
        $("div.trend_6").add();
        });
    }, 150);

     setTimeout(function(){
        $("div.trend_7").delay(100).fadeIn("slow", function () {
        $("div.trend_7").add();
        });
    }, 180);

     setTimeout(function(){
        $("div.trend_8").delay(100).fadeIn("slow", function () {
        $("div.trend_8").add();
        });
    }, 210);

     setTimeout(function(){
        $("div.trend_9").delay(100).fadeIn("slow", function () {
        $("div.trend_9").add();
        });
    }, 240);

     setTimeout(function(){
        $("div.trend_10").delay(100).fadeIn("slow", function () {
        $("div.trend_10").add();
        });
    }, 280);

     setTimeout(function(){
        $("div.trend_11").delay(100).fadeIn("slow", function () {
        $("div.trend_11").add();
        });
    }, 310);

     setTimeout(function(){
        $("div.trend_12").delay(100).fadeIn("slow", function () {
        $("div.trend_12").add();
        });
    }, 340);

     setTimeout(function(){
        $("div.trend_13").delay(100).fadeIn("slow", function () {
        $("div.trend_13").add();
        });
    }, 370);

     setTimeout(function(){
        $("div.trend_14").delay(100).fadeIn("slow", function () {
        $("div.trend_14").add();
        });
    }, 420);

     setTimeout(function(){
        $("div.trend_15").delay(100).fadeIn("slow", function () {
        $("div.trend_15").add();
        });
    }, 450);

     setTimeout(function(){
        $("div.trend_16").delay(100).fadeIn("slow", function () {
        $("div.trend_16").add();
        });
    }, 480);

     setTimeout(function(){
        $("div.trend_17").delay(100).fadeIn("slow", function () {
        $("div.trend_17").add();
        });
    }, 510);

     setTimeout(function(){
        $("div.trend_18").delay(100).fadeIn("slow", function () {
        $("div.trend_18").add();
        });
    }, 540);

     setTimeout(function(){
        $("div.trend_19").delay(100).fadeIn("slow", function () {
        $("div.trend_19").add();
        });
    }, 570);

     setTimeout(function(){
        $("div.trend_20").delay(100).fadeIn("slow", function () {
        $("div.trend_20").add();
        });
    }, 1000);

     setTimeout(function(){
        $("div.trend_21").delay(100).fadeIn("slow", function () {
        $("div.trend_21").add();
        });
    }, 1050);

     setTimeout(function(){
        $("div.trend_22").delay(100).fadeIn("slow", function () {
        $("div.trend_22").add();
        });
    }, 1100);

 setTimeout(function(){
        $("div.trend_23").delay(100).fadeIn("slow", function () {
        $("div.trend_23").add();
        });
    }, 1150);

 setTimeout(function(){
        $("div.trend_24").delay(100).fadeIn("slow", function () {
        $("div.trend_24").add();
        });
    }, 1200);

 setTimeout(function(){
        $("div.trend_25").delay(100).fadeIn("slow", function () {
        $("div.trend_25").add();
        });
    }, 1250);

setTimeout(function(){
        $("div.trend_26").delay(100).fadeIn("slow", function () {
        $("div.trend_26").add();
        });
    }, 1300);

setTimeout(function(){
        $("div.trend_27").delay(100).fadeIn("slow", function () {
        $("div.trend_27").add();
        });
    }, 1350);

setTimeout(function(){
        $("div.trend_28").delay(100).fadeIn("slow", function () {
        $("div.trend_28").add();
        });
    }, 1400);

setTimeout(function(){
        $("div.trend_29").delay(100).fadeIn("slow", function () {
        $("div.trend_29").add();
        });
    }, 1450);

setTimeout(function(){
        $("div.trend_30").delay(100).fadeIn("slow", function () {
        $("div.trend_30").add();
        });
    }, 1500);

setTimeout(function(){
        $("div.footer").delay(100).fadeIn("slow", function () {
        $("div.footer").add();
        });
    }, 1530);

  };

  $(document).ready(function(){
    startfadein();
  });

  </script>

  <script type="text/javascript">
  //   function fadeContent() {
  //     $(".container .trend:hidden:first").fadeIn(500).delay(2000, function() {
  //       $(this).appendTo($(this).parent());
  //         fadeContent();
  //         });
  //       }
  //   fadeContent();
  </script>

  <!-- Alternative Randomization Logic -->
  <script type="text/javascript">
    // var arr = []
    //   while(arr.length < 4){
    //     var randomnumber=Math.ceil(Math.random()*100)
    //     var found=false;
    //     for(var i=0;i<arr.length;i++){
    //       if(arr[i]==randomnumber){found=true;break}
    //     }
    //     if(!found)arr[arr.length]=randomnumber;
    //   }

    //   var singlenumber = Math.floor(Math.random() * (21 - 1) ) + 1;
    //   document.write(singlenumber);
    </script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>

  </body>
</html>
