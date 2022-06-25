<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Participate</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
          <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet" />
           <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="participate d-flex align-items-center justify-content-center my-5 my-lg-0">
       <div class="container-fluid">
           <div class="page-wrapper">

            <div class="page-content">

              



                <div class="row">

                    <div class="col-xl-5 mx-auto">

                       

                        <div class="card border-top border-0 border-4 border-info">
                            <div class="top-title d-flex align-items-center justify-content-between  my-lg-0">
                             <h5 class="mb-0 text-info">Participate</h5>
                             <a href="<?=base_url('logout')?>"><img src="https://findicons.com/files/icons/1786/oxygen_refit/128/gnome_panel_force_quit.png"></a>

                         </div>
                            <div class="card-body">

                                <div class="border p-4 rounded">

                                  

                                   



                                    

                                    <form method="post" action="<?=base_url('participate')?>" class="row mt-1 g-3 needs-validation" novalidate>

                                   
                                      

                                            

                                           <div class="form-group">
                                                <label for="phone"

                                                class="col-form-label">Mobile</label>
                                                <input type="text" onKeyPress="return numberKey(event,value)" id="phone" value="<?=set_value('phone')?>" pattern="^[789]\d{9,9}$" minlength="10" maxlength="10" class="form-control" name="phone" 

                                                    placeholder="Phone Number" required>
                                                     <div class="invalid-feedback">Please enter the phone number</div>
                                                    <div class="invalid-feedback"><?=form_error('phone')?></div> 
                                                </div>
                                        
                                          <div class="form-group">
                                                <label for="respondent_name"
                                                class="col-form-label">Respondent Name</label>
                                                <input type="text" onKeyPress="return alpha(event,value)" id="respondent_name" value="<?=set_value('respondent_name')?>" class="form-control" name="respondent_name" 
                                                    placeholder="Respondent Name" minlength="4" maxlength="40" required>
                                                    <div class="invalid-feedback">Please enter the respondent name</div>
                                                    <div class="invalid-feedback"><?=form_error('respondent_name')?></div> 

                                            </div>

                                         <div class="form-group">
                                                <label for="empanelment_number"

                                                class="col-form-label">Empanelment number</label>
                                                <input type="text" onKeyPress="return numberKey(event,value)" id="empanelment_number" value="<?=set_value('empanelment_number')?>" class="form-control" minlength="4" maxlength="12" name="empanelment_number" 

                                                    placeholder="Empanelment Number" required>
                                                     <div class="invalid-feedback">Please enter the empanelment number</div>
                                                    <div class="invalid-feedback"><?=form_error('empanelment_number')?></div> 

                                          

                                        </div>

                                          <div class="form-group">

                                            <label for="market"

                                                class="col-sm-12 col-form-label">Market</label>
                                            <div class="col-sm-12">
                                                
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="market" required id="inlineRadio1"value="bangalore" /> 
                                              <label class="form-check-label" for="inlineRadio1">Bangalore</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input  class="form-check-input" type="radio" name="market" required id="inlineRadio2" value="kolhapur" />
                                              <label class="form-check-label" for="inlineRadio2">Kolhapur</label>
                                              <div class="invalid-feedback radio-err">Please choose the market</div>
                                                    <div class="invalid-feedback radio-err"><?=form_error('market')?></div>
                                            </div>
                                               
                                            </div> 
                                            

                                        </div>

                                         <div class="form-group">

                                            <label for="language"

                                                class="col-sm-12 col-form-label">Language</label>
                                            <div class="col-sm-12">
                                                
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="language" required id="english"value="english" /> 
                                              <label class="form-check-label" for="english">English</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input  class="form-check-input" type="radio" name="language" required id="marathi" value="marathi" />
                                              <label class="form-check-label" for="marathi">Marathi</label>
                                               
                                            </div> 
                                               <div class="form-check form-check-inline">
                                              <input  class="form-check-input" type="radio" name="language" required id="kannada" value="kannada" />
                                              <label class="form-check-label" for="kannada">Kannada</label>
                                              
                                                    <div class="invalid-feedback radio-err">Please choose the language</div>
                                                    <div class="invalid-feedback radio-err"><?=form_error('language')?></div>
                                            </div>
                                           
                                            </div>

                                            
                                        </div>
                                        <div class="row mt-3">

                                          

                                            <div class="col-sm-12">
                                             
                                                <input type="submit" class="btn btn-info" name="add_employee" value="Submit" />

                                                <button onclick="history.back()" class="btn btn-danger">Back</button>

                                            </div>

                                        </div>



                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>





            </div>

        </div>
       </div>



       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
$this->load->view('alert');
?>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
       <script src="<?=base_url('assets/js/validation.js')?>"></script>
       

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
</div>
</body>
</html>