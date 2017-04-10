<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Tab Logo -->
    <link rel="icon" href="img/emirates-transparent-logo-01.png">

    <title>Emirates Graphic</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="build/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar_colored.php';?>

    <div id="map"></div>

<section class="information_contact_section">
    <div class="container">
        <div class="col-md-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
            <p>Cluster Y, Swiss Tower, 34th Floor, Office 15</p>
            <p>Jumeirah Lake Towers, Dubai, UAE</p>
        </div>
        <div class="col-md-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">
            <p>Tel : +372 (546) 05000 </p>
            <p>Mob : +971 (050) 912 4567</p>
        </div>
        <div class="col-md-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
            <p>info@emiratesgraphic.com</p>
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

            <div class="col-md-10 col-md-offset-1">
              <div class="col-md-6 no_padding">  
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">                
                    <div class="group_inputs">      
                      <input type="text" required class="input_style">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Name</label>
                    </div>
                </div>
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">            
                    <div class="group_inputs">      
                      <input type="text" required class="input_style">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Phone</label>
                    </div>                    
                </div>
                </div>
                <div class="col-md-6 no_padding">                
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">                
                    <div class="group_inputs">      
                      <input type="text" required class="input_style">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Email</label>
                    </div>
                </div>
                <div class="col-md-12 input_size wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">            
                    <div class="group_inputs">      
                      <input type="text" required class="input_style">
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="label_string">Website</label>
                    </div>                    
                </div>
                </div>
                  <div class="col-md-12 input_size_textarea wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">                            
                      <div class="group_inputs textarea">      
                        <input type="text" required class="input_style">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label_string">Tell us about your project</label>
                      </div>    
                  </div>

                <div class="col-md-12">
                    <button class="button_style_red_sm wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Send</button>                
                </div>

            </div>

            <!-- <div class="col-md-2"></div> -->
        </div>
    </div>     
</section>
</div>
<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
    <script>
      function initMap() {
        var uluru = {lat: 25.0779267, lng: 55.1527393};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
        scrollwheel: false,
          center: uluru,styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]}]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6V1PFtdP3xYfm9KQuKR618IS28g50FNY&callback=initMap">
    </script>
</body>

</html>
