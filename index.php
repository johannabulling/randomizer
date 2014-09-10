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
          <a class="navbar-brand" href="#">randomizer.</a>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      <br/>
      <div class="row">
        <div class="col-xs-12 chosen">
          <button type="button" id="shuffle" class="btn btn-primary btn-lg">START RANDOMIZER</button>
          <input type="text" size="3" value="17" style="visibility: hidden;" />  
          <button type="button" id="show_all" class="btn btn-success btn-lg">DISPLAY ALL</button>
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


      <br/>
      <footer>
        <p>&copy; Company 2014</p>
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
            startfadein()
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
    }, 50);

     setTimeout(function(){
        $("div.trend_2").delay(200).fadeIn("slow", function () {
        $("div.trend_2").add();
        });
    }, 100);

     setTimeout(function(){
        $("div.trend_3").delay(200).fadeIn("slow", function () {
        $("div.trend_3").add();
        });
    }, 150);

     setTimeout(function(){
        $("div.trend_4").delay(200).fadeIn("slow", function () {
        $("div.trend_4").add();
        });
    }, 200);

     setTimeout(function(){
        $("div.trend_5").delay(200).fadeIn("slow", function () {
        $("div.trend_5").add();
        });
    }, 250);

     setTimeout(function(){
        $("div.trend_6").delay(200).fadeIn("slow", function () {
        $("div.trend_6").add();
        });
    }, 300);

     setTimeout(function(){
        $("div.trend_7").delay(200).fadeIn("slow", function () {
        $("div.trend_7").add();
        });
    }, 350);

     setTimeout(function(){
        $("div.trend_8").delay(200).fadeIn("slow", function () {
        $("div.trend_8").add();
        });
    }, 400);

     setTimeout(function(){
        $("div.trend_9").delay(200).fadeIn("slow", function () {
        $("div.trend_9").add();
        });
    }, 450);

     setTimeout(function(){
        $("div.trend_10").delay(200).fadeIn("slow", function () {
        $("div.trend_10").add();
        });
    }, 500);

     setTimeout(function(){
        $("div.trend_11").delay(200).fadeIn("slow", function () {
        $("div.trend_11").add();
        });
    }, 550);

     setTimeout(function(){
        $("div.trend_12").delay(200).fadeIn("slow", function () {
        $("div.trend_12").add();
        });
    }, 600);

     setTimeout(function(){
        $("div.trend_13").delay(200).fadeIn("slow", function () {
        $("div.trend_13").add();
        });
    }, 650);

     setTimeout(function(){
        $("div.trend_14").delay(200).fadeIn("slow", function () {
        $("div.trend_14").add();
        });
    }, 700);

     setTimeout(function(){
        $("div.trend_15").delay(200).fadeIn("slow", function () {
        $("div.trend_15").add();
        });
    }, 750);

     setTimeout(function(){
        $("div.trend_16").delay(200).fadeIn("slow", function () {
        $("div.trend_16").add();
        });
    }, 800);

     setTimeout(function(){
        $("div.trend_17").delay(200).fadeIn("slow", function () {
        $("div.trend_17").add();
        });
    }, 850);

     setTimeout(function(){
        $("div.trend_18").delay(200).fadeIn("slow", function () {
        $("div.trend_18").add();
        });
    }, 900);

     setTimeout(function(){
        $("div.trend_19").delay(200).fadeIn("slow", function () {
        $("div.trend_19").add();
        });
    }, 950);

     setTimeout(function(){
        $("div.trend_20").delay(200).fadeIn("slow", function () {
        $("div.trend_20").add();
        });
    }, 1000);
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