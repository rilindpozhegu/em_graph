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

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color: #0B1016" ng-controller="QuestionareCtrl">


<!-- NavigationBar -->
    <?php include 'navigation_bar_colored.php';?>


<section class="questionnaire_section">
    <div class="container">
  
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">GO</a>
        <p>Start</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-0" type="button" class="btn btn-default btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
        <p>Step 3</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
        <p>Step 4</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-5" type="button" class="btn btn-default btn-circle">5</a>
        <p>Step 5</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-6" type="button" class="btn btn-default btn-circle">6</a>
        <p>Step 6</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-7" type="button" class="btn btn-default btn-circle">7</a>
        <p>Step 7</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post" class="pyetsor">

    <div class="row setup-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s" id="step-1">
        <div class="col-md-12">
            <h1>understanding your business.</h1>
            <p>In order to maximize our effectiveness when running your new marketing campaign, we’ll need to better understand your vision. Please answer the following questions to the best of your ability.</p>      
            <div class="col-md-12 questions_button_section">  
                <button class="button_style_red_md  button_main button__aylen nextBtn" type="button" >Next <i class="fa fa-angle-right"></i></button>
            </div> 
        </div>   
    </div>

    <div class="row setup-content wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".2s" id="step-0">
        <div class="col-md-12">
            <div class="col-md-5" style="padding-top: 5%;">
                <h1 class="title_question_nr">01</h1>
                <h3>What are your main <br> company goals for this <br> marketing campaign? </h3>
            </div> 
            <div class="col-md-6 col-md-offset-1">  
                  <label>
                    <input type="checkbox" ng-model="step1.check1" ng-true-value="'Brand growth'" ng-false-value="undefined" class="option-input checkbox" />
                    Brand growth 
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check2" ng-true-value="'Establish and differentiate your business from the competition'" ng-false-value="undefined" class="option-input checkbox" />
                    Establish and differentiate your business from the competition 
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check3" ng-true-value="'Become more accessible'" ng-false-value="undefined" class="option-input checkbox" />
                    Become more accessible 
                  </label><br>
                  <label>
                   <input type="checkbox" ng-model="step1.check4" ng-true-value="'Raise awareness'" ng-false-value="undefined" class="option-input checkbox" />
                    Raise awareness
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check5" ng-true-value="'Drive-in leads and generate business'" ng-false-value="undefined" class="option-input checkbox" />
                    Drive-in leads and generate business 
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check6" ng-true-value="'Explore an untapped/new market'" ng-false-value="undefined" class="option-input checkbox" />
                    Explore an untapped/new market 
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check7" ng-true-value="'Create/start/continue a dialog with your audience/clients/potential leads'" ng-false-value="undefined" class="option-input checkbox" />
                    Create/start/continue a dialog with your audience/clients/potential leads
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check8" ng-true-value="'Improve your online customer satisfaction'" ng-false-value="undefined" class="option-input checkbox" />
                    Improve your online customer satisfaction
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check9" ng-true-value="'Increase communication with existing clients and potential clients'" ng-false-value="undefined" class="option-input checkbox" />
                    Increase communication with existing clients and potential clients  
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step1.check10" ng-true-value="'Generate a new source of income via social media'" ng-false-value="undefined" class="option-input checkbox" />
                    Generate a new source of income via social media 
                  </label>
            </div>
                <div class="col-md-12 questions_button_section">  
                    <button class="button_style_red_md  button_main button__aylen nextBtn" type="button" ng-click="answer('step1', step1)" >Next <i class="fa fa-angle-right"></i></button>
                </div>  
        </div>
    </div>
    <div class="row setup-content wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".2s" id="step-2">
        <div class="col-md-12">
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">02</h1>
                <h3>For this marketing campaign,<br> what is your target audience's<br> age range ? </h3>
            </div>
            <div class="col-md-3 col-md-offset-1" style="padding-top: 2%;">                
      
                  <label>
                    <input type="checkbox" ng-model="step2.check2" ng-true-value="'Young Adults 18-25'" ng-false-value="undefined" class="option-input checkbox"/>
                    Young Adults 18-25 
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step2.check3" ng-true-value="'General 20-35'" ng-false-value="undefined" class="option-input checkbox"/>
                    General 20-35
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step2.check4" ng-true-value="'Adults 19-45'" ng-false-value="undefined" class="option-input checkbox"/>
                    Adults 19-45 
                  </label><br>
                  <label>
                    <input type="checkbox" ng-model="step2.check5" ng-true-value="'Mature 35-65'" ng-false-value="undefined" class="option-input checkbox"/>
                    Mature 35-65
                  </label><br>
                  <label>
            </div>
            <div class="col-md-3">
                <input type="" ng-model="step2.costum" placeholder="costum value" class="input_costum">
            </div>
            <div class="col-md-12 questions_button_section">  
                <button class="button_style_red_md  button_main button__aylen nextBtn" type="button" ng-click="answer('step2', step2)">Next <i class="fa fa-angle-right"></i></button>
            </div>  
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-md-12">
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">03</h1>
                <h3>What gender are you wanting<br>to target in this marketing<br>campaign? </h3>
            </div>

            <div class="col-md-3 col-md-offset-3" style="padding-top: 4%;"  >                
                  <label>
                    <input  type="radio" class="option-input radio"  ng-model="step3.check1" value="All" />
                    All
                  </label><br>
                  <label>
                    <input  type="radio" class="option-input radio" ng-model="step3.check1" value="Female"  />
                    Female
                  </label><br>
                  <label>
                    <input  type="radio" class="option-input radio"  ng-model="step3.check1" value="Male"/>
                    Male
                  </label>
            </div>      
            <div class="col-md-12 questions_button_section">  
                <button class="button_style_red_md  button_main button__aylen nextBtn" type="button" ng-click="answer('step3', step3)">Next <i class="fa fa-angle-right"></i></button>
            </div> 
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-md-12">
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">04</h1>
                <h3>In what language(s) are you<br>looking to communicate with<br> your audience?</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 8%;">     
                  <label>
                    <input  type="radio" class="option-input radio" ng-model="step4.check1" value="English"/>
                    English
                  </label><br>
                  <label>
                    <input  type="radio" class="option-input radio" ng-model="step4.check1" value="French"/>
                    French
                  </label>               
            </div>  
            <div class="clearfix"></div>
            <div class="col-md-5" style="padding-top: 2%;">
                <h1 class="title_question_nr">04.1</h1>
                <h3>What is your preferred means to<br> be contacted by your clients?</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">     
                  <label>
                    <input type="checkbox" class="option-input checkbox"  ng-model="step4.check3" ng-true-value="'04.1: By Phone'" ng-false-value="undefined"/>
                    By Phone
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox"  ng-model="step4.check4" ng-true-value="'04.1: Email via website'" ng-false-value="undefined"/>
                    Email via website
                  </label><br>  
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step4.check5" ng-true-value="'04.1: Social Networking'" ng-false-value="undefined"/>
                    Social Networking
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox"  ng-model="step4.check6" ng-true-value="'04.1: No Real Preference'" ng-false-value="undefined"/>
                    No Real Preference
                  </label>                   
            </div> 
            <div class="clearfix"></div>
            <div class="col-md-5" style="padding-top: 2%;">
                <h1 class="title_question_nr">04.2</h1>
                <h3>Does your business seek to reach;</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 3%;">     
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step4.check7" ng-true-value="'04.1: Local Markets'" ng-false-value="undefined"/>
                    Local Markets
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step4.check8" ng-true-value="'04.1: Regional Markets'" ng-false-value="undefined"/>
                    Regional Markets
                  </label>  <br>  
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step4.check9" ng-true-value="'04.1: National Markets'" ng-false-value="undefined"/>
                    National Markets
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step4.check10" ng-true-value="'04.1: International Markets'" ng-false-value="undefined"/>
                    International Markets
                  </label>     
                  <textarea ng-model="step4.description" placeholder="Feel free to tell us more" rows="3"></textarea>              
            </div> 

            <div class="col-md-12 questions_button_section">  
                <button class="button_style_red_md  button_main button__aylen nextBtn" type="button" ng-click="answer('step4', step4)">Next <i class="fa fa-angle-right"></i></button>
            </div>  
        </div>
    </div>

    <div class="row setup-content" id="step-5">
        <div class="col-md-12">
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">05</h1>
                <h3>Which of the following from<br> the list below describes your<br> target customer's employment status?</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">                
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step5.check1" ng-true-value="'Employed, (1-39 hours per week)'" ng-false-value="undefined"/>
                    Employed, (1-39 hours per week)
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step5.check2" ng-true-value="'Employed, (40 hours or more per week)'" ng-false-value="undefined"/>
                    Employed, (40 hours or more per week)
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step5.check3" ng-true-value="'Not Employed (Looking for work)'" ng-false-value="undefined"/>
                    Not Employed (Looking for work)
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step5.check4" ng-true-value="'Self-employed'" ng-false-value="undefined"/>
                    Self-employed
                  </label><br>
                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step5.check5" ng-true-value="'Retired'" ng-false-value="undefined"/>
                    Retired
                  </label>
            </div>
            <div class="clearfix"></div> 
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">05.1</h1>
                <h3>Do you have any specific individuals,<br> companies or organizations you’d <br>like to target?</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">                
                  <label>
                    <input type="checkbox" class="option-input checkbox"   ng-model="step5.check6" ng-true-value="'05.1: Specific Individuals. Ex: individuals that speak French'" ng-false-value="undefined"/>
                    Specific Individuals. Ex: individuals that speak French
                  </label><br>
                  <textarea placeholder="Tell us more about your vision" rows="3"  ng-model="step5.check7"></textarea><br>

                  <label>
                    <input type="checkbox" class="option-input checkbox" ng-model="step5.check8" ng-true-value="'05.1: Specific Companies or Corporations. Ex: Restaurants specialized in French Cuisine)'" ng-false-value="undefined"/>
                    Specific Companies or Corporations. Ex: Restaurants specialized in French Cuisine)
                  </label><br>
                  <textarea ng-model="step5.vision"placeholder="Tell us more about your vision" rows="3"></textarea><br>
            </div>   


            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">05.2</h1>
                <h3>What is your target industry?</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">    
                  <textarea ng-model="step5.vision2" placeholder="Tell us more about your vision" rows="3"></textarea><br>
            </div>    
            <div class="col-md-12 questions_button_section">  
                <button class="button_style_red_md  button_main button__aylen nextBtn" type="button" ng-click="answer('step5', step5)">Next <i class="fa fa-angle-right"></i></button>
            </div> 
        </div>
    </div>
    <div class="row setup-content" id="step-6">
        <div class="col-md-12">
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">06</h1>
                <h3>Where is your business truly excellent?</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">                
                  <textarea ng-model="step6.Q1" rows="3" placeholder="Tell us more about your vision"></textarea>
            </div>
            <div class="clearfix"></div> 
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">06.1</h1>
                <h3>What aspects of your business do you want the campaign to focus on?</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">      
                  <textarea ng-model="step6.Q2" rows="3" placeholder="Tell us more about your vision"></textarea><br>
            </div>   
            <div class="clearfix"></div>
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">06.2</h1>
                <h3>Who is your ideal client? Please describe<br> in detail. (interests, industries,<br> credentials etc.)</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">    
                  <textarea ng-model="step6.Q3" placeholder="Tell us more about your vision"></textarea><br>
            </div>    
            <div class="col-md-12 questions_button_section">  
            </div> 
            <div class="clearfix"></div>
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">06.3</h1>
                <h3>Who is your ideal client? Please describe<br> in detail. (interests, industries,<br> credentials etc.)</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">    
                  <textarea ng-model="step6.Q4" placeholder="Tell us more about your vision"></textarea><br>
            </div>    
            <div class="col-md-12 questions_button_section">  
            </div> 
            <div class="clearfix"></div>
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">06.4</h1>
                <h3>Who is your ideal client? Please describe<br> in detail. (interests, industries,<br> credentials etc.)</h3>
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 4%;">    
                  <textarea ng-model="step6.Q5" placeholder="Tell us more about your vision"></textarea><br>
            </div>    
            <div class="col-md-12 questions_button_section">  
                <button class="button_style_red_md  button_main button__aylen nextBtn" type="button" ng-click="answer('step6', step6)" >Next <i class="fa fa-angle-right"></i></button>
            </div> 
        </div>
    </div>

    <div class="row setup-content submit_in" id="step-7">
        <div class="col-md-12">
            <div class="col-md-5" style="padding-top: 0%;">
                <h1 class="title_question_nr">07</h1>
                <!-- <h3>What gender are you wanting<br>to target in this marketing<br>campaign? </h3> -->
            </div>

            <div class="col-md-4 col-md-offset-2" style="padding-top: 0%;">   
                  <input type="" ng-model="contact.name" placeholder="Name" required><br>   
                  <input type="" ng-model="contact.phone" placeholder="Phone" required><br>   
                  <input type="" ng-model="contact.email" placeholder="Email" required>
            </div>      
            <div class="col-md-12 questions_button_section">  
                <button class="button_style_red_md  button_main button__aylen" type="button" ng-click=submitButton(contact) >Submit <i class="fa fa-angle-right"></i></button>
            </div> 
        </div>
    </div>
  </form>
  
</div>
</section>


<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
    </script>
</body>

</html>
