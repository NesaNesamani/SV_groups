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
      <!-- info -->
      <section class="banner">
        <h1 class="text-center mt-5"> Contact Us</h1>
      </section>
        <div class="container cinfo">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 ">
                    <h5>PHONE</h5>
                    <p>Head Office:<br> 080- 29505657</p>
                    <p>Sales Office:<br> +91-9845001343, 9845001560</p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 ">
                    <h5>E-MAIL</h5>
                    <p>admin@svgroups.in</p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 ">
                    <div class="row">
                        <h5>Address</h5>
                        <p>No.89, 3rd Floor V.M.Cosma, Karthik <br>Nagar, Marathahalli, Outer Ring Road,<br>
                            Bangalore – 560 037.</p>
                    </div>
                </div>
            </div>
        </div>
      <!-- Form -->
      <section id="form">
          <div class="container">
              <div class="form-container">
                    <form class="form_block" id="contactusform" name="contactusform">
                  <div class="form-group">
                        <input class="form-control" type="text" placeholder="Name" name="contact_yourname" id="contact_yourname">
                  </div>
          
                  <div class="form-group">
                      <input class="form-control" type="number" placeholder="Contact Number" name="contact_mobilenumber" id="contact_mobilenumber">
                  </div>
          
                  <div class="form-group">
                      <input class="form-control" type="text" placeholder="Email" name="contact_emailaddress"id="contact_emailaddress">
                  </div>

                  <div class="form-group">
                        <textarea style="margin-top: 15px" class="form-control" placeholder="Description" name="contact_description" id="contact_description"></textarea>
                  </div>

                  <!-- <div 
                    class="g-recaptcha" 
                    data-sitekey="6LeCkMUdAAAAAOly8h1e4t4oIRlDODXWbBM5iUJ4"
                    data-callback="contactRecaptcha">
                  </div> -->

                  <input type="hidden" name="contactRecaptcha" id="contactRecaptcha" value="">
          
                  <button type="submit" id="contactbtn" class="cform-btn">
                        Explore Now
                        <svg class="arrow" width="18" height="10" viewBox="0 0 21 12" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z"></path>
                        </svg>
                  </button>

                  <button type="submit" id="contactbtn_load" class="cform-btn">
                        Loading ...
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
    <script src="Storageopt/index.js"></script>
    <script src="js/script.js"></script>
    <script src="js/pages/contactus.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- javascript -->
    
    <script>
        $(document).ready(function(){
            $(this).scrollTop(0);
        });
    </script>
    
  </body>
</html>
