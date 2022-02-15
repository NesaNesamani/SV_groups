<?php include('./include/config.php');?>
<!DOCTYPE html>
<html lang="en">

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

<!-- The Modal -->
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

        <div id="showcase">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="images/Frame 99.jpg" alt="img">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/Frame 100.jpg" alt="img">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/Frame 101.jpg" alt="img">
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-circle-left" class="svg-inline--fa fa-arrow-circle-left fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor" d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zm28.9-143.6L209.4 288H392c13.3 0 24-10.7 24-24v-16c0-13.3-10.7-24-24-24H209.4l75.5-72.4c9.7-9.3 9.9-24.8.4-34.3l-11-10.9c-9.4-9.4-24.6-9.4-33.9 0L107.7 239c-9.4 9.4 9.4 24.6 0 33.9l132.7 132.7c9.4 9.4 24.6 9.4 33.9 0l11-10.9c9.5-9.5 9.3-25-.4-34.3z"></path>
                        </svg>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-circle-right" class="svg-inline--fa fa-arrow-circle-right fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor" d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"></path>
                        </svg>
                    </button> -->
                    <!-- form -->
                    <!-- <form class="form_block" id="exploreform" name="exploreform">
                            <input class="form-control" type="text" placeholder="Name" name="explore_yourname" id="explore_yourname">

                            <input class="form-control" type="number" placeholder="Contact Number" name="explore_mobilenumber" id="explore_mobilenumber">

                            <input class="form-control" type="text" placeholder="Email" name="explore_emailaddress" id="explore_emailaddress" >

                            <textarea class="form-control" placeholder="Description" name="explore_description" id="explore_description"></textarea>

                            <div 
                                class="g-recaptcha" 
                                data-sitekey="6LeCkMUdAAAAAOly8h1e4t4oIRlDODXWbBM5iUJ4"
                                data-callback="homeRecaptcha">
                            </div>
                            <input type="hidden" name="homeRecaptcha" id="homeRecaptcha" value="">

                            <button id="explornow_submitbtn" class="form-btn" type="submit" value="Submit">
                                Explore Now
                                <svg class="arrow" width="18" height="10" viewBox="0 0 21 12"
                                xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z"></path>
                                </svg>
                        </button>
                    </form> -->
                </div>
            </div>

        </div>
        <!-- about -->
        <section id="about">
            <div class="container">
                <div class="about-1">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="iframe-container">
                              <iframe src="https://www.youtube.com/embed/HZCNTnIeLRw?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col d-flex align-items-center">
                            <div class="content">
                                <div class="scroll">
                                <h3><b>SV GRANDUR</b></h3>
                                <h4>Apartments in Electronic City</h4>
                                    <p>SV GRANDUR offers a various choice of beautifully appointed 2 BHK and 3BHK apartments. We focus mainly on long term durability and lasting style without Common Walls. A defined unique formwork is utilized for the project as resulting in the strengthened building structure, accurate in dimensions, with high tolerances and quality of a finished concrete surface.</p>
                                    <p>Built with 100% Concrete Walls and significantly architected for 82% of open space. It is well ventilated with natural light & air, as there is no multi-storey buildings nearby. Ventilation of each flat maximize the breathtaking vistas.</p>
                                    <p>Curtains of glass around you will achieve a wonderful sense of space and light. Ease yourself into a resort-style of community where every corner is created to accommodate a delightful living experience. The nearby METRO STATION saves your time of travel and makes you spend more time with your beloved. Every detail has been carefully considered and designed with privacy, safety, and beauty in mind.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-2">
                    <div class="row">
                        <div class="col-sm-3 col-6" id="masterPlanopenBtn">
                            <article class="card">
                                <div class="card_img"></div>
                                <div class="card_info">
                                    <svg class="icon" width="83" height="83" viewBox="0 0 83 83"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M62.0425 41.2926C65.558 37.7802 68.1131 33.4241 69.4632 28.6415C70.8133 23.8588 70.9131 18.8097 69.7532 13.9774L80.1075 9.53695C80.4232 9.40159 80.7676 9.34675 81.1098 9.37735C81.452 9.40795 81.7812 9.52303 82.068 9.71226C82.3547 9.9015 82.59 10.159 82.7526 10.4616C82.9153 10.7641 83.0003 11.1024 83 11.4459V70.55L53.95 83L29.05 70.55L2.89255 81.7592C2.57679 81.8945 2.23237 81.9493 1.89018 81.9187C1.548 81.8881 1.21877 81.7731 0.932037 81.5838C0.645304 81.3946 0.410044 81.1371 0.247369 80.8345C0.084694 80.532 -0.000304844 80.1937 8.21494e-07 79.8502V20.7502L12.9854 15.1851C12.0717 19.8562 12.321 24.6804 13.7112 29.2325C15.1014 33.7846 17.59 37.9248 20.9575 41.2885L41.5 61.8351L62.0425 41.2926ZM56.1744 35.4246L41.5 50.0906L26.8256 35.4204C23.9242 32.5183 21.9485 28.821 21.1483 24.796C20.3481 20.7711 20.7593 16.5992 22.33 12.808C23.9007 9.01678 26.5603 5.7764 29.9725 3.49661C33.3847 1.21682 37.3963 0 41.5 0C45.6037 0 49.6153 1.21682 53.0275 3.49661C56.4397 5.7764 59.0993 9.01678 60.67 12.808C62.2407 16.5992 62.6519 20.7711 61.8517 24.796C61.0515 28.821 59.0758 32.5183 56.1744 35.4204V35.4246Z">
                                        </path>
                                    </svg>
                                    <h3 class="card_title">Master Plan</h3>
                                    <button class="card_btn" >
                                        <svg width="18" height="10" viewBox="0 0 21 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z" />
                                        </svg>
                                    </button>
                                </div>
                            </article>
                        </div>

                        <div class="col-sm-3 col-6">
                        <a href="https://goo.gl/maps/5MoJdNBcGHZmKgHu9" target="_blank">  
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
                                              
                                            <button class="card_btn" >
                                                <svg width="18" height="10" viewBox="0 0 21 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z" />
                                            </svg>
                                        </button>
                                    
                                </div>
                            </article>
                            </a>
                        </div>
                        <div class="col-sm-3 col-6" data-bs-toggle="modal" data-bs-target="#broucherform-modal">
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
                                    <button class="card_btn" >
                                        <svg width="18" height="10" viewBox="0 0 21 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 6.75H0V5.25H15V0L21 6L15 12V6.75Z" />
                                        </svg>
                                    </button>
                                </div>
                            </article>

                        </div>
                        <div class="col-sm-3 col-6" data-bs-toggle="modal" data-bs-target="#floorplanform-modal">

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
                                    
                                    <button class="card_btn" >
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

                <div class="about-3 text-center">
                    <h3>Why Choose Us</h3>
                    <p> The prime focus of developing next generation Residential and Commercial
                        spaces.
                        Promoted by a team that has more than 3 decades of experience in the realty business.</p>
                    <ul class="list_block">
                        <li>
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.4 18.6667H12V11.599L7.2 7.52967L2.4 11.599V18.6667H6V14H8.4V18.6667ZM22.8 21H1.2C0.88174 21 0.576515 20.8771 0.351472 20.6583C0.126428 20.4395 7.18444e-09 20.1428 7.18444e-09 19.8333V11.0682C-1.87545e-05 10.9015 0.0367091 10.7367 0.107709 10.585C0.178709 10.4332 0.282333 10.298 0.4116 10.1885L4.8 6.468V1.16667C4.8 0.857247 4.92643 0.560501 5.15147 0.341709C5.37652 0.122916 5.68174 0 6 0H22.8C23.1183 0 23.4235 0.122916 23.6485 0.341709C23.8736 0.560501 24 0.857247 24 1.16667V19.8333C24 20.1428 23.8736 20.4395 23.6485 20.6583C23.4235 20.8771 23.1183 21 22.8 21ZM16.8 9.33333V11.6667H19.2V9.33333H16.8ZM16.8 14V16.3333H19.2V14H16.8ZM16.8 4.66667V7H19.2V4.66667H16.8ZM12 4.66667V7H14.4V4.66667H12Z"
                                    fill="#3C4F6E" />
                            </svg>
                            Professional Builder
                        </li>
                        <li>
                            <svg width="25" height="27" viewBox="0 0 25 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.45016 14.4398L6.76286 16.8694L8.55431 14.9885L6.23909 12.5615L8.02801 10.6832L10.342 13.1115L12.1309 11.2332L9.81946 8.80356L11.6084 6.92524L13.9186 9.35616L15.7087 7.47652L13.3948 5.04825L16.9739 1.29161C17.2111 1.04258 17.5329 0.902681 17.8684 0.902681C18.2038 0.902681 18.5256 1.04258 18.7628 1.29161L24.1296 6.92657C24.3668 7.17568 24.5 7.51349 24.5 7.86573C24.5 8.21797 24.3668 8.55578 24.1296 8.80489L8.02801 25.7111C7.79076 25.9601 7.46902 26.1 7.13355 26.1C6.79807 26.1 6.47634 25.9601 6.23909 25.7111L0.872317 20.0761C0.635138 19.827 0.501898 19.4892 0.501898 19.137C0.501898 18.7847 0.635138 18.4469 0.872317 18.1978L4.45016 14.4398ZM15.185 21.9531L20.553 16.3182L23.8879 19.8198V25.456H18.5212L15.185 21.9531ZM4.45016 10.6819L0.871052 6.92524C0.753422 6.80187 0.660106 6.65537 0.596439 6.4941C0.532771 6.33284 0.5 6.15999 0.5 5.98542C0.5 5.81085 0.532771 5.63799 0.596439 5.47673C0.660106 5.31547 0.753422 5.16896 0.871052 5.04559L4.45016 1.28895C4.68741 1.03992 5.00915 0.900024 5.34462 0.900024C5.6801 0.900024 6.00184 1.03992 6.23909 1.28895L9.81946 5.04559L4.45016 10.6819Z"
                                    fill="#3C4F6E" />
                            </svg>
                            Advanced Tools
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.8 4.8H19.2V19.2H4.8V4.8ZM4.8 0H7.2V3.6H4.8V0ZM4.8 20.4H7.2V24H4.8V20.4ZM0 4.8H3.6V7.2H0V4.8ZM0 16.8H3.6V19.2H0V16.8ZM20.4 4.8H24V7.2H20.4V4.8ZM20.4 16.8H24V19.2H20.4V16.8ZM16.8 0H19.2V3.6H16.8V0ZM16.8 20.4H19.2V24H16.8V20.4Z"
                                    fill="#3C4F6E" />
                            </svg>
                            Vasthu Complaint
                        </li>
                        <li>
                            <svg width="20" height="26" viewBox="0 0 20 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 7.96721L12.6422 14.2037L19.5 14.743L14.2755 19.136L15.8713 25.7059L10 22.1856L4.12868 25.7059L5.7245 19.136L0.5 14.743L7.35778 14.2037L10 7.96721ZM5.00526 0V11.0315H2.50789V0H5.00526ZM17.4921 0V11.0315H14.9947V0H17.4921ZM11.2487 0V6.12862H8.75131V0H11.2487Z"
                                    fill="#3C4F6E" />
                            </svg>
                            Certified Experience
                        </li>
                        <li>
                            <svg width="24" height="26" viewBox="0 0 24 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.642 12.1965L21.7079 12.0988C21.5475 12.0828 21.3989 12.0072 21.2915 11.8869L21.2332 11.8287L21.1964 11.7549C20.5551 10.4727 19.606 9.33881 18.375 8.38472L18.3497 8.36529L18.3271 8.34275C18.2673 8.28316 18.2204 8.21194 18.1893 8.13349C18.1581 8.05505 18.1434 7.97105 18.146 7.88669L18.149 7.83183L18.3102 6.34954C18.3886 5.64332 18.4699 4.87748 18.443 4.71545L18.4392 4.68796C18.4387 4.68229 18.4375 4.6767 18.4357 4.67132C18.4024 4.65958 18.3671 4.65413 18.3318 4.65526L18.3142 4.65335C18.0885 4.64554 17.6685 4.68586 16.9149 4.91012C17.0451 5.92754 16.9414 6.96126 16.6118 7.93257C16.2822 8.90389 15.7353 9.7872 15.0128 10.5153H15.2431C15.3778 10.5153 15.507 10.5688 15.6023 10.664C15.6975 10.7593 15.751 10.8885 15.751 11.0232C15.751 11.1579 15.6975 11.2871 15.6023 11.3824C15.507 11.4776 15.3778 11.5311 15.2431 11.5311H5.11568C4.98097 11.5311 4.85177 11.4776 4.75652 11.3824C4.66126 11.2871 4.60775 11.1579 4.60775 11.0232C4.60775 10.8885 4.66126 10.7593 4.75652 10.664C4.85177 10.5688 4.98097 10.5153 5.11568 10.5153H5.33098C4.70184 9.88337 4.20646 9.1312 3.87441 8.30364C2.8197 9.07781 1.9252 10.0493 1.24051 11.1641L0.79492 12.013C0.339047 12.959 0.0634921 13.9217 0 14.7985V15.2334C0 17.0175 0.617778 18.7445 1.7661 20.2288C1.84627 20.3204 1.89613 20.4345 1.9088 20.5555C1.92148 20.6765 1.89636 20.7984 1.83689 20.9046L1.81511 20.9463L1.78559 20.9814C0.855556 22.1933 0.908762 23.8337 1.91219 24.8914C2.22155 25.2211 2.59477 25.4845 3.00915 25.6654C3.42353 25.8464 3.87039 25.9411 4.32254 25.9438H4.44375C5.33968 25.9438 6.17632 25.6298 6.79975 25.0347L7.60184 24.2785C7.66125 24.2203 7.73181 24.1747 7.80927 24.1445C7.88674 24.1143 7.96952 24.1 8.05264 24.1026H8.11162L8.16876 24.1233C9.77103 24.503 11.4331 24.5582 13.057 24.2857L13.1 24.293H13.1437C13.2257 24.2866 13.3082 24.2975 13.3857 24.325C13.4633 24.3526 13.5342 24.3961 13.5938 24.4528L14.2033 25.0148C14.8379 25.6035 15.6622 25.9458 16.5271 25.9799C17.3808 26.022 18.2203 25.7499 18.887 25.2151C19.4048 24.7918 19.7646 24.2061 19.9079 23.5528C20.0513 22.8996 19.9699 22.217 19.677 21.6158C19.635 21.5559 19.6078 21.4868 19.5977 21.4143C19.5875 21.3419 19.5948 21.268 19.6189 21.1989V21.0629L19.7395 20.9177C20.327 20.2701 20.8168 19.5404 21.1937 18.7514L21.2317 18.6733L21.2944 18.612C21.403 18.4919 21.5523 18.4164 21.7135 18.4001L22.6422 18.3024C23.0134 18.2643 23.3574 18.0904 23.6081 17.814C23.8587 17.5376 23.9983 17.1782 24 16.8051V13.694C23.9983 13.3208 23.8587 12.9614 23.608 12.685C23.3573 12.4085 23.0132 12.2346 22.642 12.1965Z"
                                    fill="#3C4F6E" />
                                <path
                                    d="M6.90782 10.5152H13.4593C15.0466 9.37239 15.9535 7.65392 15.9535 5.76134C15.9413 4.2349 15.3286 2.77463 14.248 1.69644C13.1674 0.618245 11.7058 0.00882332 10.1793 1.0951e-05C8.94801 -0.00238869 7.74831 0.389635 6.75602 1.11864C5.76372 1.84764 5.03099 2.87529 4.6652 4.051C4.29942 5.22671 4.3198 6.48867 4.72338 7.65195C5.12695 8.81523 5.89249 9.81868 6.90782 10.5152ZM9.36896 3.46763H8.31271C8.17799 3.46763 8.0488 3.41412 7.95354 3.31886C7.85828 3.2236 7.80477 3.09441 7.80477 2.95969C7.80477 2.82498 7.85828 2.69579 7.95354 2.60053C8.0488 2.50527 8.17799 2.45176 8.31271 2.45176H12.0045C12.1392 2.45176 12.2684 2.50527 12.3637 2.60053C12.4589 2.69579 12.5125 2.82498 12.5125 2.95969C12.5125 3.09441 12.4589 3.2236 12.3637 3.31886C12.2684 3.41412 12.1392 3.46763 12.0045 3.46763H11.1623C11.2639 3.64779 11.3432 3.83969 11.3983 4.03906H12.0045C12.1392 4.03906 12.2684 4.09257 12.3637 4.18783C12.4589 4.28309 12.5125 4.41228 12.5125 4.547C12.5125 4.68171 12.4589 4.8109 12.3637 4.90616C12.2684 5.00142 12.1392 5.05493 12.0045 5.05493H11.3983C11.3013 5.47743 11.073 5.85835 10.7461 6.14302C10.4192 6.4277 10.0105 6.60151 9.57867 6.6395L11.3019 8.27893C11.3503 8.32474 11.3891 8.37963 11.4163 8.44045C11.4434 8.50128 11.4583 8.56686 11.4601 8.63345C11.4619 8.70003 11.4506 8.76633 11.4268 8.82853C11.403 8.89074 11.3671 8.94765 11.3213 8.99601C11.2755 9.04437 11.2206 9.08323 11.1598 9.11038C11.099 9.13753 11.0334 9.15243 10.9668 9.15424C10.9002 9.15604 10.8339 9.14471 10.7717 9.1209C10.7095 9.09708 10.6526 9.06125 10.6043 9.01544L7.96388 6.51798C7.89006 6.44694 7.83895 6.35561 7.81701 6.25553C7.79507 6.15545 7.80328 6.05112 7.84061 5.95571C7.87794 5.8603 7.9427 5.77809 8.02673 5.71947C8.11076 5.66085 8.21027 5.62845 8.31271 5.62636H9.36909C9.7788 5.62636 10.1356 5.43588 10.3173 5.05493H8.31271C8.17799 5.05493 8.0488 5.00142 7.95354 4.90616C7.85828 4.8109 7.80477 4.68171 7.80477 4.547C7.80477 4.41228 7.85828 4.28309 7.95354 4.18783C8.0488 4.09257 8.17799 4.03906 8.31271 4.03906H10.3173C10.2223 3.86988 10.0849 3.72829 9.91867 3.62812C9.75246 3.52796 9.56309 3.47266 9.36909 3.46763H9.36896Z"
                                    fill="#3C4F6E" />
                            </svg>
                            Affordable Prices
                        </li>
                        <li>

                            <svg width="22" height="27" viewBox="0 0 22 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.5569 4.6804C17.4741 4.42816 14.5873 3.11092 12.4013 0.924869L11.8408 0.336316C11.6166 0.112105 11.3083 0 11 0C10.6917 0 10.3834 0.112105 10.1592 0.336316L9.59866 0.924869C7.41261 3.11092 4.5259 4.42816 1.443 4.6804C0.826423 4.73645 0.349976 5.24092 0.349976 5.8575V9.24869C0.349976 16.3674 4.21761 22.9816 10.4114 26.4849C10.5796 26.597 10.8038 26.625 11 26.625C11.1962 26.625 11.3923 26.569 11.5885 26.4849C17.7823 22.9816 21.65 16.3674 21.65 9.24869V5.8575C21.65 5.24092 21.1735 4.73645 20.5569 4.6804ZM16.1288 11.0424L10.8879 16.7317C10.6637 16.9559 10.3554 17.0961 10.0471 17.1241H10.0191C9.71076 17.1241 9.40248 17.012 9.17826 16.7878L6.2355 13.7889C5.78708 13.3405 5.78708 12.5838 6.2355 12.1354C6.68392 11.687 7.44063 11.687 7.88905 12.1354L9.99103 14.2374L14.3912 9.44487C14.8396 8.96842 15.5683 8.9404 16.0447 9.36079C16.5212 9.80921 16.5492 10.5659 16.1288 11.0424Z"
                                    fill="#3C4F6E" />
                            </svg>
                            Safety
                        </li>
                    </ul>
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
        <!-- carrer -->
        <section id="carrer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Our Ventures</h1>
                    </div>
                    <div class="col-12 col-md-6 side_block_container">
                            <div class="side_block">
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
                            
                    </div>
                    <div class="col-12 col-md-6 side_block_container">
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
        <!-- testimonials -->
        <section id="testimonials">
            <div class="testimonials container">
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
    <script src="js/pages/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- javascript -->

    <script>
        $(document).ready(function(){
            $(this).scrollTop(0);
        });
    </script>

</body>

</html>