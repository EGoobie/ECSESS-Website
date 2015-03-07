<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Electrical, Computer, and Software Engineering Student Society</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
      <link href="/css/ecsessMain.css" rel="stylesheet">
      <link href="/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-scrollTo.js"></script>
    <script src="/js/waypoints.min.js"></script>
  </head>

  <body>
  <div id="wrap">

   <!-- NAVBAR
================================================== -->
    <div class="navbar-wrapper">


        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#"><img id="imgH" class="imgHeader" src="/pics/Ecsess-Logo-Test.svg"  alt="ECSESS"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right top-nav">
                <li id="home"><a href="#">Home</a></li>
                <li class="dropdown" id="council">
                   <a href="#" class="dropdown-toggle"  data-toggle="dropdown">Council <span class="caret"></span></a>
                  <ul class="dropdown-menu"  role="menu">
                    <li id="council"><a href="#">Meet the council</a></li>
                    <li><a href="#">Office Hours</a></li>
                    <li><a href="#">Archives</a></li>
                  </ul>
                </li>
                <li class="dropdown" id="events">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">CodeJam</a></li>
                    <li><a href="#">Ottawa Trip</a></li>
                    <li><a href="#">Coffee House</a></li>
                    <li><a href="#">More</a></li>
                  </ul>
                </li>
                 <li id="lounge"><a href="#" >The Lounge</a></li>
                <li id="clubs"><a href="#" >Clubs</a></li>
                  <li id=""><a href="#" >Photos</a></li>
                  <li id="merch"><a href="#" >Merchandise</a></li>
              </ul>
            </div>
            <nav id="councilMenu" class="navbar navbar-default navbar-lower navbar-right" style="display:none;" role="navigation">
              <div class="container">
                <div class="collapse navbar-collapse collapse-buttons">
                 <div class="container">
                  <ul class="nav navbar-nav navbar-right top-nav">
                    <li id="meetCouncil" class="active"><a href="#">Meet the council</a></li>
                    <li id="officeHours"><a href="#">Office Hours</a></li>
                    <li id="archives"><a href="#">Archives</a></li>
                  </ul>
                 </div>
                </div>
              </div>
            </nav>
            <nav id="eventsMenu" class="navbar navbar-default navbar-lower navbar-right" style="display:none;" role="navigation">
              <div class="container">
                <div class="collapse navbar-collapse collapse-buttons">
                 <div class="container">
                  <ul class="nav navbar-nav navbar-right top-nav">
                     <li id="codejam1" class="active"><a href="#">CodeJam</a></li>
                    <li id="ottawa1"><a href="#">Ottawa Trip</a></li>
                    <li id="coffeehouse1"><a href="#">Coffee House</a></li>
                    <li id="more1"><a href="#">More</a></li>
                  </ul>
                 </div>
                </div>
              </div>
            </nav>
          </div>
        </div>

      </div>
    </div>
    <script type="text/javascript">
      isLarge=false;
      $(document).ready(function () {
          if ($(window).width() <= 768) {

           /*$('#council').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
           window.location.hash = '#council';
           $( "#mainContent" ).load( "council.html" );
           $('#council').addClass('active');
            $('#home').removeClass('active');
            $('#events').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
           });*/
          }
          else {
            $('#council').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
              window.location.hash = '#council';
				      $( '#councilMenu' ).show();
              $( '#eventsMenu' ).hide();
              if($(window).width() >= 850 && !isLarge){
                isLarge=true;
                $('#imgH').animate({
                  "width": "+="+ 70
                },   "fast");
              }
              $( "#mainContent" ).hide().load( "council.html" ).fadeIn('500');
              $('#council').addClass('active');
              $('#home').removeClass('active');
            $('#events').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        $(window).resize(function() {
          if ($(window).width() <= 768) {

           /*$('#council').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#council';
           $( "#mainContent" ).load( "council.html" );
           $('#council').addClass('active');
            $('#home').removeClass('active');
            $('#events').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
           });*/
          }
          else {
            $('#council').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
              window.location.hash = '#council';
				      $( '#councilMenu' ).show();
              $( '#eventsMenu' ).hide();
              if($(window).width() >= 850 && !isLarge){
                isLarge=true;
                $('#imgH').animate({
                  "width": "+="+ 70
                },   "fast");
              }
              $( "#mainContent" ).load( "council.html" );
              $('#council').addClass('active');
              $('#home').removeClass('active');
            $('#events').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        });
		  });

     $(document).ready(function () {
          if ($(window).width() <= 768) {
           /*$('#events').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
           window.location.hash = '#events';
           $( "#mainContent" ).load( "events.html" );
           $('#events').addClass('active');
            $('#home').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
           });*/
          }
          else {
            $('#events').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
              window.location.hash = '#events';
			        $( '#eventsMenu' ).show();
              $( '#councilMenu' ).hide();
              if($(window).width() >= 850 && !isLarge){
                isLarge=true;
                $('#imgH').animate({
                  "width": "+="+ 70
                },   "fast");
              }
              $( "#mainContent" ).load( "events.html" );
             $('#events').addClass('active');
              $('#home').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        $(window).resize(function() {
          if ($(window).width() <= 768) {
            /*$('#events').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
            window.location.hash = '#events';
            $( "#mainContent" ).load( "events.html" );
           $('#events').addClass('active');
            $('#home').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
            });*/
          }
          else {
            $('#events').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
              window.location.hash = '#events';
			        $( '#eventsMenu' ).show();
              $( '#councilMenu' ).hide();
              if($(window).width() >= 850 && !isLarge){
                isLarge=true;
                $('#imgH').animate({
                  "width": "+="+ 70
                },   "fast");
              }
              $( "#mainContent" ).load( "events.html" );
              $('#events').addClass('active');
              $('#home').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        });
		  });


    $(document).ready(function () {
        if ($(window).width() <= 768) {
         $('#home').click(function(e){
				    e.preventDefault();
				    e.stopPropagation();
           window.location.hash = '#';
           $( "#mainContent" ).load( "carousel.php" );
         $('#home').addClass('active');
          $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
          });
        }
        else {
          $('#home').click(function(e){
				    //e.preventDefault();
				    //e.stopPropagation();
            window.location.hash = '#';
				    $( '#eventsMenu' ).hide();
            $( '#councilMenu' ).hide();
            if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
            $( "#mainContent" ).load( "carousel.php" );
            $('#home').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			    });
        }
      $(window).resize(function() {
        if ($(window).width() <= 768) {
         $('#home').click(function(e){
				    //e.preventDefault();
				    //e.stopPropagation();
           window.location.hash = '#';
           $( "#mainContent" ).load( "carousel.php" );
         $('#home').addClass('active');
          $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
          });
        }
        else {
          $('#home').click(function(e){
				    e.preventDefault();
				    e.stopPropagation();
            window.location.hash = '#';
				    $( '#eventsMenu' ).hide();
            $( '#councilMenu' ).hide();
            if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
            $( "#mainContent" ).load( "carousel.php" );
            $('#home').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			    });
        }
      });
		});

    $(document).ready(function () {
          if ($(window).width() <= 768) {
           $('#lounge').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#lounge';
             $( "#mainContent" ).load( "lounge.html" );
          $('#lounge').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
             });
          }
          else {
           $('#lounge').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#lounge';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
             $( "#mainContent" ).load( "lounge.html" );
             $('#lounge').addClass('active');
             $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        $(window).resize(function() {
          if ($(window).width() <= 768) {
           $('#lounge').click(function(e){
				      //e.preventDefault();
				     //e.stopPropagation();
             window.location.hash = '#lounge';
             $( "#mainContent" ).load( "lounge.html" );
           $('#lounge').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
           });
          }
          else {
           $('#lounge').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
             window.location.hash = '#lounge';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
            $( "#mainContent" ).load( "lounge.html" );
             $('#lounge').addClass('active');
             $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        });
		  });

     $(document).ready(function () {
          if ($(window).width() <= 768) {
           $('#clubs').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#clubs';
             $( "#mainContent" ).load( "clubs.html" );
           $('#clubs').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
             });
          }
          else {
           $('#clubs').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
             window.location.hash = '#clubs';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
             $( "#mainContent" ).load( "clubs.html" );
             $('#clubs').addClass('active');
             $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        $(window).resize(function() {
          if ($(window).width() <= 768) {
           $('#clubs').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#clubs';
             $( "#mainContent" ).load( "clubs.html" );
           $('#clubs').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
             });
          }
          else {
           $('#clubs').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
              window.location.hash = '#clubs';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             window.location.hash = '#clubs';
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
              $( "#mainContent" ).load( "clubs.html" );
             $('#clubs').addClass('active');
             $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#photos').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        });
		  });

    $(document).ready(function () {
          if ($(window).width() <= 768) {
           $('#photos').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#photos';
             $( "#mainContent" ).load( "photos.php" );
           $('#photos').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#merch').removeClass('active');
           });
          }
          else {
           $('#photos').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
             window.location.hash = '#photos';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
             $( "#mainContent" ).load( "photos.php" );
            $('#photos').addClass('active');
             $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        $(window).resize(function() {
          if ($(window).width() <= 768) {
          $('#photos').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
            window.location.hash = '#photos';
            $( "#mainContent" ).load( "photos.php" );
           $('#photos').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#merch').removeClass('active');
            });
          }
          else {
           $('#photos').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
             window.location.hash = '#photos';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
             $( "#mainContent" ).load( "photos.php" );
             $('#photos').addClass('active');
             $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#merch').removeClass('active');
			      });
          }
        });
		  });

     $(document).ready(function () {
          if ($(window).width() <= 768) {
           $('#merch').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#merch';
             $( "#mainContent" ).load( "merch.html" );
           $('#merch').addClass('active');
            $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
           });
          }
          else {
           $('#merch').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
              window.location.hash = '#merch';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
             $( "#mainContent" ).load( "merch.html" );
            $('#merch').addClass('active');
              $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
			      });
          }
        $(window).resize(function() {
          if ($(window).width() <= 768) {
          $('#merch').click(function(e){
				      //e.preventDefault();
				      //e.stopPropagation();
             window.location.hash = '#merch';
            $( "#mainContent" ).load( "merch.html" );
           $('#merch').addClass('active');
             $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
           });
          }
          else {
           $('#merch').click(function(e){
				      e.preventDefault();
				      e.stopPropagation();
              window.location.hash = '#merch';
				      $( '#eventsMenu' ).hide();
              $( '#councilMenu' ).hide();
             if($(window).width() >= 850 && isLarge){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
              }
             $( "#mainContent" ).load( "merch.html" );
             $('#merch').addClass('active');
              $('#events').removeClass('active');
            $('#council').removeClass('active');
            $('#home').removeClass('active');
            $('#lounge').removeClass('active');
            $('#clubs').removeClass('active');
            $('#photos').removeClass('active');
			      });
          }
        });
		  });

      //redirect
      $(window).load(function(event){
        var hash = window.location.hash;
        if (hash=='#council'){
          $( "#council" ).trigger( "click" );
        }
        if (hash=='#events'){
          $( "#events" ).trigger( "click" );
        }
        if (hash=='#lounge'){
          $( "#lounge" ).trigger( "click" );
        }
        if (hash=='#clubs'){
          $( "#clubs" ).trigger( "click" );
        }
        if (hash=='#photos'){
          $( "#photos" ).trigger( "click" );
        }
        if (hash=='#merch'){
          $( "#merch" ).trigger( "click" );
        }
        if (hash=='#councilOfficeHours'){
          $( "#council" ).trigger( "click" );
          $( "#officeHours" ).trigger( "click" ).delay( 1000 );
        }
        if (hash=='#councilArchives'){
          $( "#council" ).trigger( "click" );
          $( "#archives" ).trigger( "click" );
        }
        if (hash=='#ottawa'){
          $( "#events" ).trigger( "click" );
          $( "#ottawa1" ).trigger( "click" );
        }
        if (hash=='#coffeehouse'){
          $( "#events" ).trigger( "click" );
          $( "#coffeehouse1" ).trigger( "click" );
        }
        if (hash=='#more'){
          $( "#events" ).trigger( "click" );
          $( "#more1" ).trigger( "click" );
        }
      });


      //scrollTo council
      $(document).ready(function () {
         $('#meetCouncil').click(function(e){
             e.preventDefault();
             window.location.hash = '#council';

               $('html, body').animate({
                 scrollTop: 0
                }, 2000);

                //$('body').scrollTo('#bios');

             $('#meetCouncil').addClass('active');
              $('#officeHours').removeClass('active');
            $('#archives').removeClass('active');
			   });

        $('#officeHours').click(function(e){
              e.preventDefault();
              window.location.hash = '#councilOfficeHours';
                $('html, body').animate({
                 scrollTop: $("#officeHours1").offset().top -120
                }, 2000);

                //$('body').scrollTo('#officeHours');

             $('#officeHours').addClass('active');
              $('#meetCouncil').removeClass('active');
            $('#archives').removeClass('active');
			   });

        $('#archives').click(function(e){
              e.preventDefault();
              window.location.hash = '#councilArchives';

                $('html, body').animate({
                 scrollTop: $("#Archives").offset().top -120
                }, 2000);

                //$('body').scrollTo('#Archives');

             $('#archives').addClass('active');
              $('#meetCouncil').removeClass('active');
            $('#officeHours').removeClass('active');
			   });
		  });

      //council waypoints
      $(document).ready(function() {
        $('#officeHours1').waypoint(function(direction) {
          console.log("What up bitch");
          window.location.hash = '#councilOfficeHours';
          $('#officeHours').addClass('active');
          $('#meetCouncil').removeClass('active');
          $('#archives').removeClass('active');
        },{context:"#officeHours1"});
      });
      //scrollTo events


      $(document).ready(function () {
         $('#codejam1').click(function(e){
             e.preventDefault();
             window.location.hash = '#events';

               $('html, body').animate({
                 scrollTop: 0
                }, 2000);

                //$('body').scrollTo('#bios');

             $('#codejam1').addClass('active');
             $('#ottawa1').removeClass('active');
             $('#coffeehouse1').removeClass('active');
             $('#more1').removeClass('active');
			   });

        $('#ottawa1').click(function(e){
              e.preventDefault();
              window.location.hash = '#ottawa';
                $('html, body').animate({
                  scrollTop: $("#ottawa").offset().top -120
                }, 2000);

                //$('body').scrollTo('#officeHours');

             $('#ottawa1').addClass('active');
             $('#codejam1').removeClass('active');
             $('#coffeehouse1').removeClass('active');
             $('#more1').removeClass('active');
			   });

        $('#coffeehouse1').click(function(e){
              e.preventDefault();
              e.stopPropagation();
              window.location.hash = '#coffeehouse';

                $('html, body').animate({
                  scrollTop: $("#coffeehouse").offset().top -120
                }, 2000);

                //$('body').scrollTo('#Archives');

             $('#coffeehouse1').addClass('active');
             $('#codejam1').removeClass('active');
             $('#ottawa1').removeClass('active');
             $('#more1').removeClass('active');
			   });
        $('#more1').click(function(e){
              e.preventDefault();
              e.stopPropagation();
              window.location.hash = '#more';

                $('html, body').animate({
                 scrollTop: $("#more").offset().top -120
                }, 2000);

                //$('body').scrollTo('#Archives');

             $('#more1').addClass('active');
             $('#codejam1').removeClass('active');
             $('#ottawa1').removeClass('active');
             $('#coffeehouse1').removeClass('active');
			   });

		  });

    </script>
