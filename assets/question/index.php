<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Participate</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
       <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/wizard.css">
          <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet" />
           <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="participate d-flex align-items-center justify-content-center my-5 my-lg-0">
       <section class="wizard-section">
                                
                                    <div class="form-wizard">
                    <form action="" method="post" role="form">
                        
                        <fieldset class="wizard-fieldset show">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Please tell me whether you drink in a bar / restaurant?</h5>
                                   <div class="questions">
                                    <div class="form-group">
                                        <div class="wizard-form-radio">
                                            <input name="radio-name" id="question_yes" name="b2a" type="radio" value="yes">
                                            <label for="question_yes">Yes</label>
                                        </div>
                                        <div class="wizard-form-radio">
                                            <input name="radio-name" value="no" id="question_no" name="b2a" type="radio">
                                            <label for="question_no">No</label>
                                        </div>
                                    </div>
                                   </div>
                                    <div class="form-group two-btn clearfix">
                                        <a href="javascript:;" class="form-wizard-next-btn" style="float: right;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>That is all for today. Thank you for sharing valuable information. We will soon share the 3rd survey questionnaire with you. Have a nice day!!</h5>
                                    <div class="form-check">
                                      <input class="form-check-input" name="b2b[]" type="checkbox" value="Alone" id="alone">
                                      <label class="form-check-label" for="alone">
                                        Alone
                                      </label>
                                    </div>
                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Friends" id="friends">
                                          <label class="form-check-label" for="friends">
                                           Friends
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Boss / Seniors / Superiors" id="boss">
                                          <label class="form-check-label" for="boss">
                                           Boss / Seniors / Superiors
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Colleagues / Contemporaries" id="colleagues">
                                          <label class="form-check-label" for="colleagues">
                                           Colleagues / Contemporaries
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Team members / Juniors" id="team">
                                          <label class="form-check-label" for="team">
                                           Team members / Juniors
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Neighbour" id="Neighbour">
                                          <label class="form-check-label" for="neighbour">
                                           Neighbour
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Family (Spouse / Kids)" id="family">
                                          <label class="form-check-label" for="family">
                                           Family (Spouse / Kids)
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Parents / In laws" id="parents">
                                          <label class="form-check-label" for="parents">
                                           Parents / In laws
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Immediate family members (Siblings, and their families)" id="family_member">
                                          <label class="form-check-label" for="family_member">
                                           Immediate family members (Siblings, and their families)
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Relatives / Extended family" id="relative">
                                          <label class="form-check-label" for="relative">
                                           Relatives / Extended family
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Clients / Business Associates" id="clients_business">
                                          <label class="form-check-label" for="clients_business">
                                           Clients / Business Associates
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Partner / Girl Friend / Boy Friend" id="partner">
                                          <label class="form-check-label" for="partner">
                                           Partner / Girl Friend / Boy Friend
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <input class="form-check-input" name="b2b[]" type="checkbox" value="Others" id="b2b_other">
                                          <label class="form-check-label" for="b2b_other">
                                           Others
                                          </label>
                                    </div>
                                    <div class="form-group two-btn clearfix">
                                        <a href="javascript:;" class="form-wizard-next-btn" style="float: right;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>What is the name of this place where you drink most often?</h5>
                                   <div class="questions">
                                    <div class="form-group">
                                        <label><b>Outlet Name</b></label>
                                        <input type="text" class="form-control" name="b2c_outlet" placeholder="Ex: custom mart">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Location</b></label>
                                        <input type="text" class="form-control" name="b2c_location" placeholder="Ex: Delhi/Noida">
                                    </div>
                                   </div>
                                    <div class="form-group two-btn clearfix">
                                        <a href="javascript:;" class="form-wizard-next-btn" style="float: right;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>Please tell me the names of other pubs/ bars/ ahata where you drink alcoholic drinks?</h5>
                                   <div class="questions">
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 1</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: custom mart">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 2</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: Delhi/Noida">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 3</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: Delhi/Noida">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 4</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: Delhi/Noida">
                                    </div>
                                   </div>
                                    <div class="form-group two-btn clearfix">
                                        <a href="javascript:;" class="form-wizard-next-btn" style="float: right;">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>Please tell me the names of other pubs/ bars/ ahata where you drink alcoholic drinks?</h5>
                                   <div class="questions">
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 1</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: custom mart">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 2</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: Delhi/Noida">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 3</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: Delhi/Noida">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Outlet Name/ Location 4</b></label>
                                        <input type="text" class="form-control" name="b2d_outlet[]" placeholder="Ex: Delhi/Noida">
                                    </div>
                                   </div>
                                    <div class="form-group two-btn clearfix">
                                        <a href="javascript:;" class="form-wizard-next-btn" style="float: right;">Next</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset> 
                      
                    
                    </form>
                </div>
                              
                               
                            </section>
      </div>
  </div>



       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
$this->load->view('alert');
?>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!--  <script src="<?=base_url()?>assets/js/wizard.js"></script> -->
         <script>
           


                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function () {
                        "use strict";

                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.querySelectorAll(".needs-validation");

                        // Loop over them and prevent submission
                        Array.prototype.slice.call(forms).forEach(function (form) {
                            form.addEventListener(
                                "submit",
                                function (event) {
                                    if (!form.checkValidity()) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }

                                    form.classList.add("was-validated");
                                },
                                false
                            );
                        });
                    })();
                </script>

                <script>
                    jQuery(document).ready(function() {
    // click on next button
    jQuery('.form-wizard-next-btn').click(function() {
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        var next = jQuery(this);
        var nextWizardStep = true;
        parentFieldset.find('.wizard-required').each(function(){
            var thisValue = jQuery(this).val();

            if( thisValue == "") {
                jQuery(this).siblings(".wizard-form-error").slideDown();
                nextWizardStep = false;
            }
            else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
        if( nextWizardStep) {
            next.parents('.wizard-fieldset').removeClass("show","400");
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
            next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
            jQuery(document).find('.wizard-fieldset').each(function(){
                if(jQuery(this).hasClass('show')){
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        if(jQuery(this).attr('data-attr') == formAtrr){
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        }
    });
    //click on previous button
    jQuery('.form-wizard-previous-btn').click(function() {
        var counter = parseInt(jQuery(".wizard-counter").text());;
        var prev =jQuery(this);
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        prev.parents('.wizard-fieldset').removeClass("show","400");
        prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
        currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
        jQuery(document).find('.wizard-fieldset').each(function(){
            if(jQuery(this).hasClass('show')){
                var formAtrr = jQuery(this).attr('data-tab-content');
                jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                    if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                    }else{
                        jQuery(this).removeClass('active');
                    }
                });
            }
        });
    });
    //click on form submit button
    jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        parentFieldset.find('.wizard-required').each(function() {
            var thisValue = jQuery(this).val();
            if( thisValue == "" ) {
                jQuery(this).siblings(".wizard-form-error").slideDown();
            }
            else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
    });
    // focus on input field check empty or not
    jQuery(".form-control").on('focus', function(){
        var tmpThis = jQuery(this).val();
        if(tmpThis == '' ) {
            jQuery(this).parent().addClass("focus-input");
        }
        else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
        }
    }).on('blur', function(){
        var tmpThis = jQuery(this).val();
        if(tmpThis == '' ) {
            jQuery(this).parent().removeClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideDown("3000");
        }
        else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideUp("3000");
        }
    });
});

                </script>

</body>
</html>