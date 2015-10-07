<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Career Seeker</title>


  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }

  </style>


  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

      // accordion
      $('.ui.accordion')
        .accordion()
      ;


    })
  ;

  </script>

</head>
  

<body>


<!-- Following Menu -->
<div class="ui inverted top fixed hidden menu">
  <div class="ui container">
    <a class="item" href="<?php echo site_url('default1'); ?>">Home</a>
    <a class="item" href="#about">About</a>
    <a class="item" href="#contact">Contact us</a>
 

    <div class="right menu">

  </div>

      <div class="item">
        <div class="ui primary test button" id="LogInButton1" style="width:200px">Log in</div>
      </div>
    </div>
  </div>
</div>


<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item" href="<?php echo site_url('default1'); ?>">Home</a>
  <a class="item">About</a>
  <a class="item">Contact Us</a>
  <a class="item">Login</a>
</div>

<!-- MENU -->

<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui inverted large secondary pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="item" href="#home">Home</a>
        <a class="item" href="#about">About</a>
        <a class="item" href="#contact">Contact us</a>
        
        <div class="right menu">
        

        <button class=" ui inverted blue basic submit button" id="LogInButton2" style="width:200px;">Log in</button>
        </div>
      </div>

    </div>


<!-- BODY -->

    <!-- banner start BANNER -->
    <!-- ================ -->
    <div id="home" class="banner">
      <div class="banner-image">
        <img class="banner-image" src="<?php echo base_url(); ?>assets/images/bg/homepage.jpg"/>
      </div>
     
        <div class="banner-caption">
            <div class="ui text vertical center aligned container">
              <h1 class="ui inverted header">Career Seeker</h1>
                <h4><i>A Web Application For Finding Jobs, Job Matching And Monitoring The Department Of Computer And Information Sciences Alumni With SMS And Email Notifications.</i></h4>
                
            </div>

        </div>

     </div>
    <!-- banner end -->


  </div>

<!-- CONTENT -->

</br>
  <div id="about" class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Our Objective</h3>
          <p>The goal of this project is to develop Career Seeker: A Web Application for Finding Jobs, Job Matching and Monitoring the Department of Computer and Information Sciences Alumni With SMS and Email Notifications that will strengthen the partnership of the department and company linkages by giving them proficient alumni for employment.</p>
          <h3 class="ui header">This study specifically aims to: </h3>
          <ul>
          <li><p>Design and develop an online system that enables the alumni to find a job.</p></li></br>
<li><p>Notify the alumni via SMS and or Email notifications for every job matched based on the skills on their portfolios.</p></li></br>
<li><p>Aid the Department of Computer and Information Sciences in tracking the alumni and getting feedback from the employers.</p></li></br>
<li><p>Test and evaluate the effectiveness of the system.</p></li>
           </ul>
        </div>
        <div class="six wide right floated column">
          <img src="<?php echo base_url(); ?>assets/images/team.jpg" class="ui large bordered rounded image">
        </div>
      </div>





  <div id="contact" class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="align-left">
        <div class="column">
          <h3>Contact Us</h3>
         <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="1300" height="443" src="https://maps.google.com/maps?hl=en&q=University of San Carlos,Nasipit,Talamban,Cebu City&ie=UTF8&t=satellite&z=19&iwloc=B&output=embed"></iframe>
        </div>
      </div>
    </div>

    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"Find Us</h3>
          <p>That is what they all say about us</p>
        </div>
        
      </div>
    </div>

        <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"Call Us</h3>
          <p>That is what they all say about us</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <div id="careers" class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Careers</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Case Studies</a>
      </h4>
      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div>


<!-- FOOTER -->

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>


</body>

</html>
