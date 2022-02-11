<?php include('./include/config.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV Housing</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
  

<body>

    <header>
    <?php include('./include/navigation.php');?>
    </header>
    <?php include('./include/modal/mobileverification.php');?>
    <main>
      <!-- banner -->
      <section class="banner">
        <h1 class="text-center mt-5"> Career</h1>
      </section>
      <!-- Form -->
      <section id="form">
          <div class="container">
              <div class="form-container">
                    <form class="form_block" id="careerform" name="careerform">
                  <div class="form-group">
                      
                      <input class="form-control" type="text" placeholder="Name" name="career_yourname" id="career_yourname">
                  </div>
          
                  <div class="form-group">
                      <input class="form-control" type="number" placeholder="Contact Number" name="career_mobilenumber" id="career_mobilenumber">
                  </div>
          
                  <div class="form-group">
                      <input class="form-control" type="text" placeholder="Email" name="career_emailaddress"id="career_emailaddress">
                  </div>
          
                  <div class="form-group">
                      <select name="career_position" id="career_position">
                        <option value="" disabled selected>Select your option</option>
                        <option value="admin">Admin/HR</option>
                        <option value="accounts">Accounts</option>
                        <option value="architect">Architect</option>
                        <option value="marketing">Sales/Marketing</option>
                        <option value="engineer">Site supervisor/Engineer</option>
                        <option value="manager">Project Engineer/Manager</option>
                        <option value="purchase">Purchase</option>
                        <option value="tele-marketing">Tele-marketing</option>
                        <option value="others">others</option>
                      </select>
                  </div>

                  <div class="form_group mt-3">
                        <label for="resume" class="form-label">Attach Your Resume (PDF)</label><br>
                        <input style="height:10px" class="form-control form-control-lg mt-0" id="resume" name="resume" type="file">
                  </div>

                  <!-- <div 
                    class="g-recaptcha" 
                    data-sitekey="6LeCkMUdAAAAAOly8h1e4t4oIRlDODXWbBM5iUJ4"
                    data-callback="contactRecaptcha">
                  </div> -->

                  <input type="hidden" name="contactRecaptcha" id="contactRecaptcha" value="">
                  
                  
                  <button type="submit" id="careerbtn" class="cform-btn">
                      Submit
                      <svg class="arrow" width="18" height="10" viewBox="0 0 21 12"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z"></path>
                      </svg>
                  </button>

                  <button type="submit" id="careerbtn_load" class="cform-btn" style="display:none">
                      submitting ...
                  </button>

                    </form>
              </div>
          </div>
      </section>
    </main>

    <?php include ('./include/footer.php'); ?>

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/pages/career.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- javascript -->
    
    <script>
        $(document).ready(function(){
            $(this).scrollTop(0);
        });
    </script>
    
  </body>
</html>
