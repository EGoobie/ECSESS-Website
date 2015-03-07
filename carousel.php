
<!-- Carousel================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>


      <div class="carousel-inner">

        <!--SLIDE 1 -->
        <div class="item active">
            <!--PLACE IMAGE FILEPATH HERE -->
            <img src="/pics/lounge.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <div class="carousel-background">
                <!--TITLE HERE -->
                <h1>ECSESS Lounge</h1>
                <!--DESCRIPTION HERE -->
                <p>Come hang out and enjoy our newly reorganized lounge!</p>
              </div>
              <p><a class="btn btn-lg btn-main" href="#lounge" id="lounge2" role="button">Check it out!</a></p>
            </div>
          </div>
        </div>

        <!--SLIDE 2 -->
        <div class="item">
            <!--PLACE IMAGE FILEPATH HERE -->
            <img src="/pics/bluespub.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <div class="carousel-background">
                <!--TITLE HERE -->
                <h1>Blues Pub!</h1>
                <!--DESCRIPTION HERE -->
                <p>Twice a year, ECSESS hosts Blues Pub!</p>
              </div>
              <p><a class="btn btn-lg btn-main" href="#more" id="more2" role="button">Learn more</a></p>
            </div>
          </div>
        </div>

        <!--SLIDE 3 -->
        <div class="item">
            <!--PLACE IMAGE FILEPATH HERE -->
            <img src="/pics/coffeehouse.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <div class="carousel-background">
                <!--TITLE HERE -->
                <h1>ECSESS Coffee House!</h1>
                <!--DESCRIPTION HERE -->
                <p>Twice a year, come and enjoy a nice cup of coffee and a great atmosphere!</p>
              </div>
              <p><a class="btn btn-lg btn-main" href="#coffeehouse" id="coffeehouse2" role="button">Learn More</a></p>

            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="fa fa-chevron-right"></span></a>
    </div><!-- /.carousel -->

     <div class="container">
        <div class="row">
            <div class="col-md-8" id="newsFeed">

            </div>

            <div class="col-md-4" >
               <div id="calendar" class="embed-responsive embed-responsive-16by9">

                </div>
            </div>
        </div>
     </div>

     <script type="text/javascript" src="<?php echo $fbfeed_path ?>/core/js/cff.js"></script>
     <script type="text/javascript">
      $(document).ready(function () {
         $( "#newsFeed" ).load( "/newsFeed.php" );
         $( "#calendar" ).load( "/calendar.html" );
		  });

      $(document).ready(function () {
        $('#lounge2').click(function(e){
            $( "#lounge" ).trigger( "click" );
			   });
        $('#more2').click(function(e){
            $( "#events" ).trigger( "click" );
            $( "#more1" ).trigger( "click" );
			  });
        $('#coffeehouse2').click(function(e){
            $( "#events" ).trigger( "click" );
            $( "#coffeehouse1" ).trigger( "click" );
			  });
      });
     </script>
