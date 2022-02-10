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
      <!-- <section class="banner">
        <h1>About Company</h1>
      </section> -->
      <!-- history -->
      <section id="history">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
              <div class="col-lg-6 col-12">
                <h2 >Quality & Passion With Our Services</h2>
                <h4 class="mb-2">Departure performed exquisite</h4>
                <p class="mb-3 ">
                  SV GROUPS is active in the development of key sectors such as
                  infrastructure and energy, committing to the social and
                  economic progress of the country. Excellence is the foundation
                  of our mission to build sustainable environments that enhance
                  people’s lives by enabling the right people to capitalise on
                  state-of-the-art knowledge, resources and digital
                  technologies, providing solutions across the total
                  construction life cycle.
                </p>
                <p>
                  We are passionate about harnessing innovation as a positive
                  force for change and we instil this mindset culturally in
                  every element of our operations for projects delivery.
                </p>
                <!-- <img
                  class="signature my-4"
                  src="images/signature.svg"
                  alt="signature"
                /> -->
                <h4 class="mt-3">S.Venkatesh</h4>
                <h5>Chairman</h5>
              </div>
              <div class="col">
                <img src="images/img.jpg" alt="img" class="img-fluid history-img"/>
              </div>
            </div>
            <div class="list-card">
              <div class="row">
                <div class="col-5 col-sm">
                  <svg
                    width="49"
                    height="43"
                    viewBox="0 0 49 43"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M17.3 37.8333H24.5V23.698L14.9 15.5593L5.3 23.698V37.8333H12.5V28.5H17.3V37.8333ZM46.1 42.5H2.9C2.26348 42.5 1.65303 42.2542 1.20294 41.8166C0.752856 41.379 0.5 40.7855 0.5 40.1667V22.6363C0.499962 22.3029 0.573418 21.9734 0.715418 21.6699C0.857419 21.3664 1.06467 21.096 1.3232 20.877L10.1 13.436V2.83333C10.1 2.21449 10.3529 1.621 10.8029 1.18342C11.253 0.745833 11.8635 0.5 12.5 0.5H46.1C46.7365 0.5 47.347 0.745833 47.7971 1.18342C48.2471 1.621 48.5 2.21449 48.5 2.83333V40.1667C48.5 40.7855 48.2471 41.379 47.7971 41.8166C47.347 42.2542 46.7365 42.5 46.1 42.5ZM34.1 19.1667V23.8333H38.9V19.1667H34.1ZM34.1 28.5V33.1667H38.9V28.5H34.1ZM34.1 9.83333V14.5H38.9V9.83333H34.1ZM24.5 9.83333V14.5H29.3V9.83333H24.5Z"
                      fill="#3C4F6E"
                    />
                  </svg>
                  <span>50 +</span>
                  <p>Commercial Projects</p>
                </div>
                <div class="col-5 col-sm">
                  <svg
                    width="49"
                    height="43"
                    viewBox="0 0 49 43"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M36.5 38.2222H41.3V19.1111H26.9V38.2222H31.7V23.8889H36.5V38.2222ZM2.9 38.2222V2.38889C2.9 1.75532 3.15286 1.14769 3.60294 0.699689C4.05303 0.251686 4.66348 0 5.3 0H38.9C39.5365 0 40.147 0.251686 40.5971 0.699689C41.0471 1.14769 41.3 1.75532 41.3 2.38889V14.3333H46.1V38.2222H48.5V43H0.5V38.2222H2.9ZM12.5 19.1111V23.8889H17.3V19.1111H12.5ZM12.5 28.6667V33.4444H17.3V28.6667H12.5ZM12.5 9.55556V14.3333H17.3V9.55556H12.5Z"
                      fill="#3C4F6E"
                    />
                  </svg>
                  <span>110 +</span>
                  <p>Residential Projects</p>
                </div>
                <div class="col-5 col-sm">
                  <svg
                    width="49"
                    height="45"
                    viewBox="0 0 49 45"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M24.5 39.8951H28.8636V11.1448L42.8142 17.2045C43.2069 17.3752 43.5416 17.6589 43.7766 18.0206C44.0117 18.3823 44.1367 18.806 44.1364 19.2391V39.8951H48.5V44.3182H0.5V39.8951H4.86364V10.3708C4.86358 9.9429 4.986 9.52417 5.21603 9.16538C5.44607 8.8066 5.77385 8.52316 6.15964 8.34943L22.9662 0.777062C23.1325 0.702188 23.3146 0.670654 23.4959 0.685332C23.6773 0.70001 23.8521 0.760433 24.0046 0.861102C24.157 0.961771 24.2822 1.09949 24.3687 1.26172C24.4553 1.42395 24.5004 1.60554 24.5 1.78996V39.8951Z"
                      fill="#3C4F6E"
                    />
                  </svg>
                  <span>25 +</span>
                  <p>Industrial Projects</p>
                </div>
                <div class="col-5 col-sm">
                  <svg
                    width="49"
                    height="49"
                    viewBox="0 0 49 49"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M24.5 22.1C27.6826 22.1 30.7348 23.3643 32.9853 25.6147C35.2357 27.8652 36.5 30.9174 36.5 34.1V48.5H12.5V34.1C12.5 30.9174 13.7643 27.8652 16.0147 25.6147C18.2652 23.3643 21.3174 22.1 24.5 22.1ZM8.3912 29.3144C8.00926 30.6027 7.78364 31.9322 7.7192 33.2744L7.7 34.1V48.5H0.5V37.7C0.499528 35.6302 1.26327 33.633 2.64472 32.0917C4.02618 30.5504 5.92808 29.5733 7.9856 29.348L8.3936 29.3144H8.3912ZM40.6088 29.3144C42.7446 29.4446 44.7502 30.3847 46.2166 31.943C47.683 33.5012 48.4997 35.5603 48.5 37.7V48.5H41.3V34.1C41.3 32.4368 41.06 30.8312 40.6088 29.3144ZM8.9 14.9C10.4913 14.9 12.0174 15.5321 13.1426 16.6574C14.2679 17.7826 14.9 19.3087 14.9 20.9C14.9 22.4913 14.2679 24.0174 13.1426 25.1426C12.0174 26.2679 10.4913 26.9 8.9 26.9C7.3087 26.9 5.78258 26.2679 4.65736 25.1426C3.53214 24.0174 2.9 22.4913 2.9 20.9C2.9 19.3087 3.53214 17.7826 4.65736 16.6574C5.78258 15.5321 7.3087 14.9 8.9 14.9ZM40.1 14.9C41.6913 14.9 43.2174 15.5321 44.3426 16.6574C45.4679 17.7826 46.1 19.3087 46.1 20.9C46.1 22.4913 45.4679 24.0174 44.3426 25.1426C43.2174 26.2679 41.6913 26.9 40.1 26.9C38.5087 26.9 36.9826 26.2679 35.8574 25.1426C34.7321 24.0174 34.1 22.4913 34.1 20.9C34.1 19.3087 34.7321 17.7826 35.8574 16.6574C36.9826 15.5321 38.5087 14.9 40.1 14.9ZM24.5 0.5C27.0461 0.5 29.4879 1.51143 31.2882 3.31178C33.0886 5.11212 34.1 7.55392 34.1 10.1C34.1 12.6461 33.0886 15.0879 31.2882 16.8882C29.4879 18.6886 27.0461 19.7 24.5 19.7C21.9539 19.7 19.5121 18.6886 17.7118 16.8882C15.9114 15.0879 14.9 12.6461 14.9 10.1C14.9 7.55392 15.9114 5.11212 17.7118 3.31178C19.5121 1.51143 21.9539 0.5 24.5 0.5Z"
                      fill="#3C4F6E"
                    />
                  </svg>
                  <span>1000 +</span>
                  <p>Happy Customers</p>
                </div>
              </div>
            </div>
        </div>
      </section>
      <!-- carrer -->
      <section id="carrer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>Our Ventures</h1>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Introductions
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> A prominent Construction Company since 1987. SV GROUPS has marked its presence
                                    in
                                    premium urban scales and has rooted itself as a reputed Construction Company.
                                    Maintaining high standards by striking a balance between quality, finesse and
                                    has
                                    successful executed many residential and commercial projects. SV GROUPS is
                                    committed
                                    to explore new areas and dimensions in infrastructure development.</p>
                                    <p>SV GROUPS has grown swiftly to become one of the leading  Property Developers, helping shape skyline across the Residential, Commercial, Retail, Leisure & Hospitality sectors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Quality Management System
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ‘Quality Management System’ is a repository of processes and systems, which deﬁne all activities at SV GROUPS. The QMS ensures delivery of a quality product at optimum cost and minimum impact to the environment and society at large. QMS training is mandatory for all employees; upon qualiﬁcation they are QMS certiﬁed.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Project Review Management
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ‘Project Review Management’ is a monthly review process for ongoing projects. PICs (project-in-charge) prepare a progress report benchmarked against international best practices including project progress, project cost report, project inventory and project risks. Senior management presence at these forums enables quick resolution of project issues and provides impetus for speedy execution. The PRM rates all PPL projects on key parameters of progress, schedule, cost, quality, safety and housekeeping. Outstanding projects receive a commendation every month; best-in-class projects are awarded every quarter.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 side_block_container">
                        <div class="side_block mb-3">
                            <div>
                                <h3>SV Housing</h3>
                                <p>With in the realty industry, was established with the prime focus of developing next generation ...</p>
                                <a href="./about.php">
                                    <button class="btn-carrer btn">
                                        <svg width="21" height="12" viewBox="0 0 21 12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                            <div>
                                <img src="images/Frame 116.jpg" alt="img">
                            </div>
                        </div>
                        <div class="side_block">
                            <div>
                                <h3>AATHAVA Food Products</h3>
                                <p>The leading manufacturer and distributor of mango pulp and guava pulp....</p>
                                <a href="http://www.aathavafood.com/">
                                    <button class="btn-carrer btn">
                                        <svg width="21" height="12" viewBox="0 0 21 12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                            <div>
                                <img src="images/Frame 115.jpg" alt="img">
                            </div>
                        </div>
                </div>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- javascript -->
    
    <script>
        $(document).ready(function(){
            $(this).scrollTop(0);
        });
    </script>
  </body>
</html>
