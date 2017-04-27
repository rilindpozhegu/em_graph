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
    <?php include 'navigation_bar_colored.php' ;?>


<!-- Header Section On About Page -->

<section class="cover_section_branding cover_text_all_h1_p" id="parallax_slide_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text_about_cover">
                <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s"><span>We build</span> inspiring platforms for inspiring<span> brands.</span></h1>
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">Our passion for design goes beyond beautiful imagery and into the mind of the consumer, where we believe good design should solve problems and position a brand so it stands out as well as stands for something.</p>
                <a href="portfolio_main.php"><button class="button_style_gray button_main button__aylen wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">Portfolio</button></a>
            </div> 
        </div>
    </div>
</section>



<!-- First Section Branding Services -->

<section class="get_free_mo_pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 get_freee_text">
                <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">We create <span>brands</span> that sell</h1>
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">You want to be the first thing people think about when they need the services you provide. You want to be unique and send the right image to consumers. At Emirates Graphic, we will help you create this strong and consistent identity.</p>
                <a href="get_started.php"><button class="button_style_red_md button_main button__aylen wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".5s">Get Started &nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
            </div>
            <div class="col-md-6" style="padding-top: 3%;">
                <img src="img/services/services_img11-01.png" class="img-responsive wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".3s">
            </div>
        </div>
    </div>
</section>


<!-- View Brand Guideline -->

<section class="view_brand_guideline_s">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <img src="img/services/services_marketing_cards-01.png" class="img-responsive wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".4s">
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">View a Brand Guideline</h1>
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">We care about our customers and their brands, we believe that having a strong brand identity is the key to success. We always try our best to be creative and design a corporate identity that will leave an amazing long-lasting impression.</p>
                <a href="Utopia Brand Guidelines.pdf" target="_blank"><button class="button_style_red_sm  button_main button__aylen wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">View</button></a>
            </div>
        </div>
    </div>
</section>


<!-- Second Section Website Page -->

<section class="second_section_websitep">
    <div class="container">
        <div class="row">
        <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">Importance of a <br>Unique Brand</h1>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                <img src="img/icons/website_icon1-01.svg">
                <h3>Establish an <br> Identity</h3>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">
                <img src="img/icons/website_icon3-01.svg">
                <h3>Send the Right <br> Message</h3>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                <img src="img/icons/branding_icon33-01.svg">
                <h3>Be <br> Different</h3>
            </div>
        </div>
    </div>
</section>


<!-- Three W's hover effect -->


<section class="three_circles_branding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 no_padding"> 
                <div class="w_s_panel">               
                    <h3>why</h3>
                    <p>Why your company does what it does is the reason people choose you over competitors. Allow us to help you define this reason and show it in the best way.</p>
                </div>
            </div>
            <div class="col-md-4 no_padding"> 
                <div class="w_s_panel">               
                    <h3>how</h3>
                    <p>Tell your customers about your superior methods and what sets you apart. Achieving your goals in the right way is essential and brand defining.</p>
                </div>
            </div>
            <div class="col-md-4 no_padding"> 
                <div class="w_s_panel">               
                    <h3>what</h3>
                    <p>Your customers need to be aware of precisely what you do. Positioning your brand properly is vital in competitive markets.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
    <?php include 'contact_form_email.php';?>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>

     <script type="text/javascript">
        $("#em_contact").submit(function(e) {

                var url = "mail.php"; // the script where you handle the form input

                $.ajax({
                       type: "POST",
                       url: url,
                       data: $("#em_contact").serialize()+ "&type=" + "normal", // serializes the form's elements.
                       beforeSend: function()
                       {
                            
                       },   
                       complete: function(data)
                        {
                            $.notify(data.responseText, "success");
                          
                        }

                     });

                e.preventDefault(); // avoid to execute the actual submit of the form.
            });

    </script>

</body>

</html>
