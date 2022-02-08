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

    <?php include('./include/modal/floorplanform.php');?>
    <?php include('./include/modal/broucherform.php');?>
    <?php include('./include/modal/mobileverification.php');?>
    
        <!-- lightbox -->
        <div id="masterPlanlightmodal" class="lightbox-modal">
    <span class="lightboxclose">&times;</span>
    <img class="lightbox-content" id="lightbox-image">
        <div class="caption">
        <a download="./images/img.jpg" href="./images/img.jpg" class="downloadplan" >Download</a> 
    </div>
    </div>
    
    <main id="proj">
        <!-- banner -->
        <!-- <section class="banner">
        <h1 class="pt-4 pt-xs-0">Projects</h1>
        </section> -->
      <!-- about -->
      <section id="about ">
        <div class="container">
          <div class="about-1 pb-0">
              <div class="row">
                <div class="iframe-container-about">
                    <iframe src="https://www.youtube.com/embed/HZCNTnIeLRw?rel=0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="row pt-5">
                      <div class="info">
                      <h4><b>SV GANDUR</b></h4>
                                <h5>Apartments in Electronic City</h5>
                          <p class="mb-4">SV GRANDUR offers a various choice of beautifully appointed 2 BHK and 3BHK
                              apartments. We
                              focus mainly on long term durability and lasting style without Common Walls. A
                              defined
                              unique formwork is utilized for the project as resulting in the strengthened
                              building
                              structure, accurate in dimensions, with high tolerances and quality of a finished
                              concrete surface.</p>

                          <p>Curtains of glass around you will achieve a wonderful sense of space and light. Ease
                              yourself into a resort-style of community where every corner is created to
                              accommodate a
                              delightful living experience. The nearby METRO STATION saves your time of travel and
                              makes you spend more time with your beloved. Every detail has been carefully
                              considered
                              and designed with privacy, safety, and beauty in mind.</p>
                      </div>
              </div>
          </div>
          <div class="about-2">
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <article class="card">
                                <div class="card_img"></div>
                                <div class="card_info">
                                    <svg class="icon" width="83" height="83" viewBox="0 0 83 83"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M62.0425 41.2926C65.558 37.7802 68.1131 33.4241 69.4632 28.6415C70.8133 23.8588 70.9131 18.8097 69.7532 13.9774L80.1075 9.53695C80.4232 9.40159 80.7676 9.34675 81.1098 9.37735C81.452 9.40795 81.7812 9.52303 82.068 9.71226C82.3547 9.9015 82.59 10.159 82.7526 10.4616C82.9153 10.7641 83.0003 11.1024 83 11.4459V70.55L53.95 83L29.05 70.55L2.89255 81.7592C2.57679 81.8945 2.23237 81.9493 1.89018 81.9187C1.548 81.8881 1.21877 81.7731 0.932037 81.5838C0.645304 81.3946 0.410044 81.1371 0.247369 80.8345C0.084694 80.532 -0.000304844 80.1937 8.21494e-07 79.8502V20.7502L12.9854 15.1851C12.0717 19.8562 12.321 24.6804 13.7112 29.2325C15.1014 33.7846 17.59 37.9248 20.9575 41.2885L41.5 61.8351L62.0425 41.2926ZM56.1744 35.4246L41.5 50.0906L26.8256 35.4204C23.9242 32.5183 21.9485 28.821 21.1483 24.796C20.3481 20.7711 20.7593 16.5992 22.33 12.808C23.9007 9.01678 26.5603 5.7764 29.9725 3.49661C33.3847 1.21682 37.3963 0 41.5 0C45.6037 0 49.6153 1.21682 53.0275 3.49661C56.4397 5.7764 59.0993 9.01678 60.67 12.808C62.2407 16.5992 62.6519 20.7711 61.8517 24.796C61.0515 28.821 59.0758 32.5183 56.1744 35.4204V35.4246Z">
                                        </path>
                                    </svg>
                                    <h3 class="card_title">Master plan</h3>
                                    <button class="card_btn" id="masterPlanopenBtn">
                                        <svg width="18" height="10" viewBox="0 0 21 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z" />
                                        </svg>
                                    </button>
                                </div>
                            </article>
                        </div>

                        <div class="col-sm-3 col-6">
                            <article class="card">
                                <div class="card_img"></div>
                                <div class="card_info">
                                    <svg class="icon" width="77" height="83" viewBox="0 0 77 92"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M65.7238 65.0537L38.5 92L11.2762 65.0537C5.89196 59.7242 2.22524 52.9341 0.739749 45.5419C-0.745743 38.1498 0.0167126 30.4876 2.9307 23.5244C5.84469 16.5611 10.7793 10.6096 17.1106 6.42226C23.4419 2.23496 30.8854 0 38.5 0C46.1146 0 53.5581 2.23496 59.8894 6.42226C66.2207 10.6096 71.1553 16.5611 74.0693 23.5244C76.9833 30.4876 77.7457 38.1498 76.2602 45.5419C74.7748 52.9341 71.108 59.7242 65.7238 65.0537ZM38.5 46.5757C40.7691 46.5757 42.9452 45.6835 44.5497 44.0954C46.1542 42.5072 47.0555 40.3533 47.0555 38.1073C47.0555 35.8614 46.1542 33.7074 44.5497 32.1193C42.9452 30.5312 40.7691 29.6389 38.5 29.6389C36.2309 29.6389 34.0548 30.5312 32.4503 32.1193C30.8458 33.7074 29.9444 35.8614 29.9444 38.1073C29.9444 40.3533 30.8458 42.5072 32.4503 44.0954C34.0548 45.6835 36.2309 46.5757 38.5 46.5757Z">
                                        </path>
                                    </svg>
                                    <h3 class="card_title">Location Map</h3>
                                        <a href="https://goo.gl/maps/5MoJdNBcGHZmKgHu9" target="_blank">        
                                            <button class="card_btn" >
                                                <svg width="18" height="10" viewBox="0 0 21 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </article>

                        </div>
                        <div class="col-sm-3 col-6 ">
                            <article class="card">
                                <div class="card_img"></div>
                                <div class="card_info">
                                    <svg class="icon" width="70" height="79" viewBox="0 0 70 79"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M66.1111 78.75H3.88889C2.85749 78.75 1.86834 78.3352 1.13903 77.5967C0.409721 76.8583 0 75.8568 0 74.8125V3.9375C0 2.89321 0.409721 1.89169 1.13903 1.15327C1.86834 0.414842 2.85749 0 3.88889 0H66.1111C67.1425 0 68.1317 0.414842 68.861 1.15327C69.5903 1.89169 70 2.89321 70 3.9375V74.8125C70 75.8568 69.5903 76.8583 68.861 77.5967C68.1317 78.3352 67.1425 78.75 66.1111 78.75ZM19.4444 19.6875V27.5625H50.5556V19.6875H19.4444ZM19.4444 35.4375V43.3125H50.5556V35.4375H19.4444ZM19.4444 51.1875V59.0625H38.8889V51.1875H19.4444Z">
                                        </path>
                                    </svg>
                                    <h3 class="card_title">Broucher</h3>
                                    <button class="card_btn" data-bs-toggle="modal" data-bs-target="#broucherform-modal">
                                        <svg width="18" height="10" viewBox="0 0 21 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z" />
                                        </svg>
                                    </button>
                                </div>
                            </article>

                        </div>
                        <div class="col-sm-3 col-6">

                            <article class="card">
                                <div class="card_img"></div>
                                <div class="card_info">
                                    <svg class="icon" width="90" height="83" viewBox="0 0 90 83"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M81.8182 74.7H90V83H0V74.7H8.18182V4.15C8.18182 3.04935 8.61282 1.99378 9.38002 1.21551C10.1472 0.437231 11.1878 0 12.2727 0H77.7273C78.8122 0 79.8528 0.437231 80.62 1.21551C81.3872 1.99378 81.8182 3.04935 81.8182 4.15V74.7ZM28.6364 37.35V45.65H40.9091V37.35H28.6364ZM28.6364 20.75V29.05H40.9091V20.75H28.6364ZM28.6364 53.95V62.25H40.9091V53.95H28.6364ZM49.0909 53.95V62.25H61.3636V53.95H49.0909ZM49.0909 37.35V45.65H61.3636V37.35H49.0909ZM49.0909 20.75V29.05H61.3636V20.75H49.0909Z">
                                        </path>
                                    </svg>
                                    <h3 class="card_title">Floor Plan</h3>
                                    
                                    <button class="card_btn" data-bs-toggle="modal" data-bs-target="#floorplanform-modal">
                                        <svg width="18" height="10" viewBox="0 0 21 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z" />
                                        </svg>
                                    </button>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>
        </div>
      </section>

      <!-- project -->
    <section id="projects">
        <div class="container">
            <h3>Completed projects</h3>
            <div class="owl-carousel owl-theme" id="first_slider">
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 102.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 104.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 106.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 109.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 110.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 111.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 112.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 113.jpg" alt="img">
                </div>
                <div class="item">
                    <img src="images/SV_Groups_2.O/Frame 114.jpg" alt="img">
                </div>
            </div>
            
        </div>
    </section>

    <!-- testimonials -->
    <section id="testimonials">
            <div class="testimonials container">
                <h3>TESTIMONIALS</h3>
                <div class=" owl-carousel owl-theme" id="second_slider">
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>One of the best Quality construction apartment in Phase 2 Electronic City. Value for Money. Sales team members always respond for all queries</p>
                        <h4>S Satish</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>Quality of construction is amazing. Sales team is well informed and able to help as required. They are making good progress.</p>
                        <h4>Balagi Rajamanickam</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>Excellent infrastructure and amenities. Construction Quality is very superior, the management and staff all are very co operative.</p>
                        <h4>J C Ganesh Kumar</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>Quality mind person & Construction quality is high and technology. The team is very polite & respectful to customers. Special thanks to the SV GROUPS team for bringing up the best property at an affordable price.</p>
                        <h4>A Nagaraj</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>Amazing infrastructure in SV GRANDUR and good work from SV GROUPS. Congratulations to the team and please continue to develop new projects for people’s benefit.</p>
                        <h4>C Karthikeyan</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>This place is good from outside and inside. Flats are super with ventilation. I like the flats. The Best apartment I Have visited so far. Very well built.</p>
                        <h4>S Raghavendra Rao</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>Nice Society. Looks very modern with all amenities. Management is very friendly and helpful.</p>
                        <h4>Karthik Krishna Arige</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>Very good construction quality and nice sales team. The quality of the work done is clearly better than many apartments around the area and equivalent to top builders in Bangalore.</p>
                        <h4>M Muthiah</h4>
                    </div>
                    <div class="item">
                        <img class="icon" src="images/Screenshot 2021-10-27 at 14.50 3.svg" alt="svg">
                        <p>I liked the construction quality and behavior. I went on the occasion of Temple inauguration day and booked it within 2 days.Construction quality is very good.</p>
                        <h4>Som Nath Mishra</h4>
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
    <script src="js/pages/project.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- javascript -->
    
    <script>
        $(document).ready(function(){
            $(this).scrollTop(0);
        });
    </script>
  </body>
</html>
