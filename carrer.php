<?php ?>
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
    <main>
      <!-- banner -->
      <section class="banner">
        <h1>Career</h1>
      </section>
      <!-- Form -->
      <section id="form">
          <div class="container">
              <div class="form-container">
                    <form class="form_block">
                  <div class="form-group">
                      <label class="form-label" for="name">Name</label>
                      <input class="form-control" type="text" placeholder="Leslie Alexander" name="name">
                  </div>
          
                  <div class="form-group">
                      <label class="form-label" for="number">Contact Number</label>
                      <input class="form-control" type="number" placeholder="99808 78654" name="number">
                  </div>
          
                  <div class="form-group">
                      <label class="form-label" for="email">Email</label>
                      <input class="form-control" type="text" placeholder="example@mail.com" name="email">
                  </div>
          
                  <div class="form-group">
                      <label class="form-label" for="position">Position</label>
                      <select name="position" id="position">
                        <option value="job">job</option>
                        <option value="job2">job2</option>
                      </select>
                  </div>

                  <div class="form_group">
                      <label for="resume" class="form-label">Attach Your Resume</label>
                      <div class="input-group">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                        <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        <br>
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                  </div>
          
                  <button type="submit" class="cform-btn">
                      Submit
                      <svg class="arrow" width="18" height="10" viewBox="0 0 21 12"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z"></path>
                      </svg>
                  </button>
                    </form>
              </div>
          </div>
      </section>
    </main>

    <?php include ('./include/footer.php'); ?>

    <!-- javascript -->
    <script src="owlcarousel/jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- javascript -->
    
  </body>
</html>