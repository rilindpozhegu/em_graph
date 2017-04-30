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

    <title>Cutting Edge Digital Marketing Agency Dubai - Emirates Graphic</title>
    <meta name="description" content="Emirates Graphic is one of the leading Digital Agency delivering all types of Digital Marketing, Branding & Development services in Dubai." />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="build/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar_colored.php';?>


<!-- Header Section On About Page -->

<section class="cover_pricing_services_page cover_text_all_h1_p" id="parallax_slide_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 desktop-d-n no_padding">
                <img src="img/mockups/pricing_mockup-top_mob-01.png" class="img-responsive">
            </div> 
            <div class="col-md-6 text_about_cover">
                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s"><span>Thank</span> you for your interest!</h1>
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">Our projects range from $5k-$35k depending on the scope. Create your own package below if you want an approximate price for your next project with Emirates Graphic:</p>                
                <a href="#lets_start_o"><button class="button_style_red_md hvr-icon-hang wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".5s">Let's Start</button></a>
            </div>   
        </div>
    </div>
</section>

<!-- First Section of Pricing Page -->

<section class="price_page_first_section" id="lets_start_o">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">The main factors that determine the scope of your project:</h2>
            <div class="col-md-3 col-xs-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">
                <img src="img/icons/package1-01.svg">
                <h3>Total<br>Number Of Pages</h3>
                <p>Smaller websites are often less pricey, but this also depends on the nature of the project and of each page.</p>
            </div>
            <div class="col-md-3 col-xs-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                <img src="img/icons/package2-01.svg">
                <h3>Number Of<br>Unique Templates</h3>
                <p>Price scales with how much of your site you would like to be completely customized. Websites made from modified versions of pre-existing templates are often less expensive.</p>
            </div>
            <div class="col-md-3 col-xs-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                <img src="img/icons/package3-01.svg">
                <h3>Rounds<br>of revisions</h3>
                <p>Each round of revision makes your website better but also comes at a cost. The more you want to tweak details, the pricier it will end up.</p>
            </div>
            <div class="col-md-3 col-xs-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">
                <img src="img/icons/package4-01.svg">
                <h3>Unique<br>Functionality</h3>
                <p>We can add unique and extraordinary features to your website, but they take time and resources to develop, and thus websites that feature many unique functionalities usually come out pricier.</p>
            </div>
            <div class="col-md-12 decide_btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".5s">
                <button  data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-angle-right" aria-hidden="true"></i> Decide Your Own Price</button>
            </div>
        </div>
    </div>
</section>



<!-- Get a free Mockup -->

<div class="col-md-12 arrow_horizontal_l mobile-d-n" style="height: 107px !important;"></div>
<div class="clearfix"></div>
<section class="get_free_mo_pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 get_freee_text">
                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">Get a <br><span>Free</span>Mockup</h1>
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">After receiving your input from the our initial call we will then have a mockup of the homepage of your new website within 4 business days.</p>
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">This mockup is just a preliminary draft and should we work together you will have ample opportunity to revise the design until it is just as you like it.</p>
                <a href="get_started.php"><button class="button_style_red_md button_main button__aylen wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".5s">Get Started &nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
            </div>
            <div class="col-md-5 col-md-offset-1 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".3s">
                <img src="img/mockups/pricing_swiss_mock-01.svg">
            </div>
        </div>
    </div>
</section>


<!-- Contact Form -->
    <?php include 'contact_form_email.php';?>
    <?php include 'pop_watch_portfolio.php';?>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>

    <script type="text/javascript">
        $("#em_contact").submit(function(e) {
             var name = "Dear " + $('#name').val();

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
                             $('#view_portfolio_pop').modal('show');
                           $('.modal-body h1').append(name);
                           $('#em_contact')[0].reset();
                          
                        }

                     });

                e.preventDefault(); // avoid to execute the actual submit of the form.
            });

    </script>

</body>

</html>
