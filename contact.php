<!DOCTYPE html>
<html lang="en" ng-app="emirates">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Tab Logo -->
    <link rel="icon" href="img/emirates-transparent-logo-01.png">

    <title>Cutting Edge Digital Marketing Agency Dubai - Emirates Graphic</title>
    <meta name="description" content="Emirates Graphic is one of the leading Digital Agency delivering all types of Digital Marketing, Branding & Development services in Dubai." />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="build/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ng-controller="ContactCtrl">


<!-- NavigationBar -->
    <?php include 'navigation_bar_colored.php';?>

    <div id="map"></div>

<section class="information_contact_section">
    <div class="container">
        <div class="col-md-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
            <p><i class="fa fa-location-arrow" aria-hidden="true"></i> Cluster Y, Swiss Tower, 34th Floor, Office 15</p>
            <p>Jumeirah Lake Towers, Dubai, UAE</p>
        </div>
        <div class="col-md-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">
            <p><i class="fa fa-phone" aria-hidden="true"></i> Tel : +372 (546) 05000 </p>
            <p> &nbsp;<i class="fa fa-mobile" aria-hidden="true"></i>  Mob : +971 (050) 912 4567</p>
        </div>
        <div class="col-md-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
            <p><i class="fa fa-envelope" aria-hidden="true"></i> info@emiratesgraphic.com</p>
        </div>
    </div>
</section>
<!-- Contact Form -->
<div class="contact_page_inputs">
<section class="contact_forms_section">
    <div class="container">
        <div class="row">
           <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Ask Us <span>Anything</span></h2>
           <!-- <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Send us an email by entering your details and any comments you may have in the form.</p> -->
            <!-- <div class="col-md-2"></div> -->
            <form id="em_contact">
            <div class="col-md-10 col-md-offset-1">
              <div class="col-md-6 no_padding">  
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">                
                    <div class="group_inputs">      
                      <input type="text" required class="input_style" name="name" id="name">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Name</label>
                    </div>
                </div>
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">            
                    <div class="group_inputs">      
                      <input type="text" required class="input_style" name="phone">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Phone</label>
                    </div>                    
                </div>
                </div>
                <div class="col-md-6 no_padding">                
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">                
                    <div class="group_inputs">      
                      <input type="email" required class="input_style" name="email">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Email</label>
                    </div>
                </div>
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">            
                    <div class="group_inputs">      
                      <input type="text" required class="input_style" name="website">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Website</label>
                    </div>                    
                </div>
                </div>
                  <div class="col-md-12 input_size_textarea wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">                            
                      <div class="group_inputs textarea">      
                        <input type="text" required class="input_style" name="description">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label_string">Tell us about your project</label>
                      </div>    
                  </div>

                <div class="col-md-12">
                    <button class="button_style_red_sm wow fadeInUp button_main button__aylen"  type="submit" data-wow-duration="1s" data-wow-delay=".5s">Send</button>                
                </div>
            </div>
            </form>

            <!-- <div class="col-md-2"></div> -->
        </div>
    </div>     
</section>
</div>


<?php include 'pop_watch_portfolio.php';?>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script>
      function initMap() {
        var uluru = {lat: 25.0779267, lng: 55.1527393};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
        scrollwheel: false,
          center: uluru,styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]}]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script type="text/javascript">
        $("#em_contact").submit(function(e) {

          var name = "Dear " + $('#name').val();

                var url = "mail.php"; // the script where you handle the form input

                $.ajax({
                       type: "POST",
                       url: url,
                       data: $("#em_contact").serialize()+ "&type=" + "special", // serializes the form's elements.
                       beforeSend: function()
                       {
                            
                       },   
                       complete: function(data)
                        {
                           $('#view_portfolio_pop').modal('show');
                           $('.modal-body h1').append(name);
                            $('#em_contact')[0].reset();
                          
                        }

                     });

                e.preventDefault(); // avoid to execute the actual submit of the form.
            });

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6V1PFtdP3xYfm9KQuKR618IS28g50FNY&callback=initMap">
    </script>
</body>

</html>
