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
            <!--Mobile menu-->
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
                <!--data-menu types: "main": on main bar "child": is part of a child menu -->
                <!--data-family types: "single": no children "parent": has children -->
                <li id="home" data-menu="main" data-family="single" class="active"><a href="#">Home</a></li>
                <li class="dropdown" id="council" data-menu="main" data-family="parent">
                   <a href="#" class="dropdown-toggle"  data-toggle="dropdown" >Council <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li id="meetCouncilM" data-menu="child"><a  href="#">Meet the council</a></li>
                    <li id="officeHoursM" data-menu="child"><a  href="#">Office Hours</a></li>
                    <li id="archivesM" data-menu="child"><a  href="#">Archives</a></li>
                  </ul>
                </li>
                <li class="dropdown" id="events" data-menu="main" data-family="parent">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li id="codejamM" data-menu="child"><a href="#">CodeJam</a></li>
                    <li id="ottawaM" data-menu="child"><a href="#">Ottawa Trip</a></li>
                    <li id="coffeehouseM" data-menu="child"><a href="#">Coffee House</a></li>
                    <li id="moreM" data-menu="child"><a href="#">More</a></li>
                  </ul>
                </li>
                 <li id="lounge" data-menu="main" data-family="single"><a href="#" >The Lounge</a></li>
                <li id="clubs" data-menu="main" data-family="single"><a href="#" >Clubs</a></li>
                  <li id="photos" data-menu="main" data-family="single"><a href="#" >Photos</a></li>
                  <!--<li id="merch" data-menu="main" data-family="single"><a href="#" >Merchandise</a></li>-->
              </ul>
            </div><!--End mobile menu-->

            <nav id="councilMenu" data-menuType="parent" class="navbar navbar-default navbar-lower navbar-right" style="display:none;" role="navigation">
              <div class="container">
                <div class="collapse navbar-collapse collapse-buttons">
                 <div class="container">
                  <ul class="nav navbar-nav navbar-right top-nav">
                    <li id="meetCouncil" data-default="active" data-menu="child" data-parent="#council"><a href="#">Meet the council</a></li>
                    <li id="officeHours" data-menu="child" data-parent="#council"><a href="#">Office Hours</a></li>
                    <li id="archives" data-menu="child" data-parent="#council"><a href="#">Archives</a></li>
                  </ul>
                 </div>
                </div>
              </div>
            </nav>
            <nav id="eventsMenu" data-menuType="parent" class="navbar navbar-default navbar-lower navbar-right" style="display:none;" role="navigation">
              <div class="container">
                <div class="collapse navbar-collapse collapse-buttons">
                 <div class="container">
                  <ul class="nav navbar-nav navbar-right top-nav">
                     <li id="codejam" data-default="active" data-menu="child" data-parent="#events"><a href="#">CodeJam</a></li>
                    <li id="ottawa" data-menu="child" data-parent="#events"><a href="#">Ottawa Trip</a></li>
                    <li id="coffeehouse" data-menu="child" data-parent="#events"><a href="#">Coffee House</a></li>
                    <li id="more" data-menu="child" data-parent="#events"><a href="#">More</a></li>
                  </ul>
                 </div>
                </div>
              </div>
            </nav>
          </div>
        </div>

      </div>
    </div>
    <div id="mainContent"></div>
    <script type="text/javascript">

       //variable which holds current state of the logo
       var isLarge=false;

       //add active class to current active parent menu
       $.fn.mainActive = function() {
           $('.navbar-wrapper').find("[data-menu='main']").removeClass('active');
           $(this).addClass('active');
       }

       //add active class to current active child menu
       $.fn.childActive = function() {
           $('.navbar-wrapper').find("[data-menu='child']").removeClass('active');
           $(this).addClass('active');
       }

       //function which toggles the size of the logo based on the navbar size
       $.fn.toggleLogo = function() {
           var menuFam= $(this).attr('data-family');
            if($(window).width() >= 850 && !isLarge && menuFam==='parent'){
                isLarge=true;
                $('#imgH').animate({
                  "width": "+="+ 70
                },   "fast");
           }
           else if($(window).width() >= 850 && isLarge && menuFam==='single'){
                isLarge=false;
                $('#imgH').animate({
                  "width": "-="+ 70
                },   "fast");
          }
       }

       //A function which scrolls to the desired content on a page
       $.fn.scrollToDiv = function() {
           if($(this).attr('data-default')==='active'){
               $('html, body').animate({
                 scrollTop: 0
                }, 2000);
           }
           else{
              $('html, body').animate({
                 scrollTop: $(this).offset().top -120
              }, 2000);
           }
       }

       //A function which toggles opens a certain dropdown menu and closes all others
        $.fn.toggleDropdown = function() {
           $('.dropdown').removeClass('open');
           $(this).addClass('open');
       }

        //A function which toggles opens a certain dropdown menu and closes all others
        $.fn.closeDropdown = function() {
           $('.dropdown').removeClass('open');
       }

      // this function is responsible for the navigation behaviour of the entire site. It dynamically loads content and changes
      // the hash location so the page is never reloaded, it just loads in the correct content.
      // for this to work properly, a line must be removed from bootstrap.min.js : find "removeClass("open")" and remove the word open from the first found item
      $.fn.navigate = function() {
          //check if on a mobile device or collapsed screen
          if ($(window).width() <= 768) {
             //check if the item which was clicked is a main menu item
             if($(this).attr('data-menu')==='main'){
                //get the id of the clicked item
                var select= $(this).attr('id');
                //generate the hash location to be added to the url
                var hashLoc= "#".concat(select);
                console.log(hashLoc);
                //update window location
                window.location.hash = hashLoc;

                //generate the content filename from the selected id. Thus the desired content must be named "id".html
                var filename= select.concat(".html");
                console.log(filename);
                console.log("in mobile section");

                //Check if item clicked has any children
                if($(this).attr('data-family')==='single'){
                    console.log("in single");
                    //hide all child menus
                    $('.navbar-wrapper').find("[data-menuType='parent']").hide();
                    //hide mobile menus
                    $('.dropdown-menu').hide();
                    //set current tab as active
                    $(this).mainActive();
                    //load page content
                    $( "#mainContent" ).load( filename );

                    //trigger the mobile menu dropdown to close
                    $("button.navbar-toggle").click();

                }
                else{
                    //Ends up here if item clicked has children
                    console.log("in parent");
                    //hide all child menus
                    $('.navbar-wrapper').find("[data-menuType='parent']").hide();

                    //trigger the mobile menu dropdown to close
                    $("button.navbar-toggle").click();

                    //opens the dropdown menu of the parent item which was clicked, closes all others
                    $(this).toggleDropdown();

                    //set current tab as active
                    $(this).mainActive();

                    //load page content
                    $( "#mainContent" ).load( filename );

                }
              }
              //check if clicked item is a child
              else if($(this).attr('data-menu')==='child'){
                  //get the corresponding id of the child item
                  var str =$(this).attr('id');

                  //since two items cannot have the same id, all mobile menu items are have the same id as their fullscreen counterparts with an added M at the end
                  //this removes the M to allow for the same behaviour as the fullscreen version.
                  str = str.substring(0, str.length - 1);
                  //generate the hash location to be added to the url
                  var hashLoc= "#".concat(str);
                  //update window location
                  window.location.hash = hashLoc;
                  console.log("in mobile child");

                  //trigger mobile dropdown menu to close
                  $("button.navbar-toggle").click();

                  //scroll to active div
                  $(hashLoc).scrollToDiv();

              }
          }
          else{
              //Ends up in here if screen is full size

              //get clicked item id
              var select= $(this).attr('id');

              //generate the hash location to be added to the url
              var hashLoc= "#".concat(select);
              console.log(hashLoc);
              //update window location
              window.location.hash = hashLoc;

              //generate content filename from id, thus content must be named "id".html
              var filename= select.concat(".html");
              console.log(filename);

              //checks if the clicked item is a main menu item
              if($(this).attr('data-menu')==='main'){
                console.log("in main section");
                //checks if the main menu item has no children
                if($(this).attr('data-family')==='single'){
                    console.log("in single");
                    //hide all child menus
                    $('.navbar-wrapper').find("[data-menuType='parent']").hide();
                    //hide mobile menus
                    $('.dropdown-menu').hide();
                    //set current tab as active
                    $(this).mainActive();
                    //toggle logo size
                    $(this).toggleLogo();
                    //load page content
                    $( "#mainContent" ).load( filename );
                }
                else{
                    //ends up in here if clicked item has children
                    console.log("in parent");
                    //hide all child menus
                    $('.navbar-wrapper').find("[data-menuType='parent']").hide();
                    //hide mobile menus
                    $('.dropdown-menu').hide();
                    //set current tab as active
                    $(this).mainActive();
                    //set default child active (first item in the list)
                    $('.navbar-wrapper').find("[data-default='active']").childActive();//addClass('active'); //HERE
                    //load page content
                    $( "#mainContent" ).load( filename );

                    //generates the id of the child menu by adding the word Menu to the id of the main parent item.
                    //therefore the child menu must have an id of  idMenu where id is the id of the corresponding main parent item
                    var menuID= hashLoc.concat("Menu");
                    //toggle logo size
                    $(this).toggleLogo();
                    //show the child menu
                    $(menuID).show();
                }
              }
              //checks if the clicked item is a child item
              else if($(this).attr('data-menu')==='child'){
                  console.log("in child");
                  //add active class
                  $(this).childActive();
                  //scroll to active div
                  $(this).scrollToDiv();

              }
          }

      };


      $(window).load(function(event){
        var hash = window.location.hash;
        console.log("we should be here");
        //if mobile screen & if child, concat MAIN
        if ($(window).width() <= 768) {
            if($(hash).attr('data-menu')==='child'){
                var hashM=hash.concat('M');
                var parentID= $(hashM).attr('data-parent');
                $(parentID).click();
                $(hashM).click().delay( 1000 );
                console.log("click mobile child");
               $("button.navbar-toggle").click();
            }
            else if($(hash).attr('data-menu')==='parent'||$(hash).attr('data-menu')==='main'){
                $(hash).click();
                console.log("click mobile main");
               //$("button.navbar-toggle").click();
            }
        }
        else{
            //else no issues
            var parentID= $(hash).attr('data-parent');
            $(parentID).click();
            console.log("click");
            $(hash).click();

        }
      });

     //Click trigger events for all links in the navigation system. Also prevents default bootstrap actions from occuring

      //MAIN LINKS
     $("#council").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#council").navigate();
      });
      $("#events").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#events").navigate();
      });
      $("#lounge").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#lounge").navigate();
      });
      $("#clubs").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#clubs").navigate();
      });

      $("#photos").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#photos").navigate();
      });

      /*$("#merch").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#merch").navigate();
      });*/

      $("#home").click(function(e) {
        window.location.href = "http://ecsess.mcgilleus.ca";
         /*e.preventDefault();
       e.stopPropagation();
         $("#home").navigate();*/
      });

       //CHILD MENU LINKS
       $("#officeHours").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#officeHours").navigate();
      });

      $("#meetCouncil").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#meetCouncil").navigate();
      });

      $("#officeHours").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#officeHours").navigate();
      });

      /*$("#archives").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#archives").navigate();
      });*/

      $("#codejam").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#codejam").navigate();
      });

      $("#ottawa").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#ottawa").navigate();
      });

      $("#coffeehouse").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#coffeehouse").navigate();
      });

      $("#more").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#more").navigate();
      });

      //MOBILE CHILD LINKS


       $("#officeHoursM").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#officeHoursM").navigate();
      });

      $("#meetCouncilM").click(function(e)  {
         e.preventDefault();
       e.stopPropagation();
         $("#meetCouncilM").navigate();
      });


      /*$("#archivesM").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#archivesM").navigate();
      });*/

      $("#codejamM").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#codejamM").navigate();
      });

      $("#ottawaM").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#ottawaM").navigate();
      });

      $("#coffeehouseM").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#coffeehouseM").navigate();
      });

      $("#moreM").click(function(e) {
         e.preventDefault();
       e.stopPropagation();
         $("#moreM").navigate();
      });


    </script>
