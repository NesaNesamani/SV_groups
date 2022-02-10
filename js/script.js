var CommonStatuscode;

$.validator.methods.email = function( value, element ) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
}

$(document).ready(function () {
  var owl = $("#first_slider")
  owl.owlCarousel({
    items: 2,
    autoplayTimeout: 4000,
    loop: true,
    center: true,
    margin: 20,
    nav: false,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      600: {
        item:2,
      },
      426: {
        items: 1,
      },
      375: {
        items: 1,
      },
      320: {
        items: 1,
      },
      0: {
        items: 1,
      },
    },
  })
})

$(document).ready(function () {
  var owl = $("#second_slider")
  owl.owlCarousel({
    items: 3,
    loop: true,
    margin: 20,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: false,
    responsiveClass: true,
    dots: false,
    responsive: {
      600: {
        item:3,
        nav: false,
      },
      476: {
        items: 1,
        nav: false,
      },
      375: {
        items: 1,
        nav: false,
      },
      320: {
        items: 1,
        nav: false,
      },
      0: {
        items: 1,
        nav: false,
      },
    },
  })
})

$(document).ready(function () {
  "use strict"

  var c,
    currentScrollTop = 0,
    navbar = $(".navbar"),
    btn = $(".ani-b2")

  $(window).scroll(function () {
    var a = $(window).scrollTop()
    var b = navbar.height()

    currentScrollTop = a

    if (c < currentScrollTop && a > 2*b) {
      // if (c < currentScrollTop) {

      navbar.addClass("scrollUp")
      btn.addClass("scrollUp")
      // } else if (c > currentScrollTop) {
    } else if (c > currentScrollTop && !(a <= b)) {
      navbar.removeClass("scrollUp")
      btn.removeClass("scrollUp")
    }
    c = currentScrollTop
  })
})

function FormInvalidMessageEmail(textbox) {
  if (!textbox.value) {
    textbox.style.color = "black";
    textbox.setCustomValidity("Please Enter Email Id");
  } else if (textbox.validity.patternMismatch) {
    textbox.style.color = "rgb(255, 66, 66)";
    textbox.setCustomValidity("Please Enter Valid Email Id");
  } else {
    textbox.style.color = "black";
    textbox.setCustomValidity("");
  }
}

function FormInvalidMessageName(textbox) {
  if (!textbox.value) {
    textbox.style.color = "black";
    textbox.setCustomValidity("Please Enter Name");
  } else if (textbox.validity.tooShort) {
    textbox.style.color = "rgb(255, 66, 66)";
    textbox.setCustomValidity("Name should be min 3 characters");
  } else {
    textbox.style.color = "black";
    textbox.setCustomValidity("");
  }
}

function FormInvalidMessagePhone(textbox) {
  if (!textbox.value) {
    textbox.style.color = "black";
    textbox.setCustomValidity("Please Enter Mobile No");
  } else if (textbox.validity.rangeUnderflow) {
    textbox.style.color = "rgb(255, 66, 66)";
    textbox.setCustomValidity("Please Enter Valid Mobile No");
  } else {
    textbox.style.color = "black";
    textbox.setCustomValidity("");
  }
}

function FormInvalidMessagePurpose(select) {
  if (select.validity.valueMissing) {
    select.setCustomValidity("Please Select Purpose");
  } else {
    select.setCustomValidity("");
  }
}


$.validator.methods.email = function( value, element ) {
  return this.optional( element ) || /[a-z]+@[a-z]+\.[a-z]+/.test( value );
}


$( "#enquiryform" ).submit(function(e) {
  e.preventDefault();
}).validate({
  ignore: ".ignore",
  rules: {
    yourname: {
      required: true,

      minlength: 3,
    },emailaddress: {
      required: true,

      email : true
    },
    mobilenumber: {
      required: true,

		  number: true,
		  minlength: 10,
		  maxlength: 10
    },
    description:{
      required: true,

      minlength: 3,
    }
  },
  messages: {
    yourname: {
      required: "Kindly enter your name",
      minlength: "Minimum 3 characters",
    },
    emailaddress: {
      required: "Kindly enter your email address",
      email: "Enter valid format"
    }
    ,
    mobilenumber: {
      required: "Kindly enter your mobile number",
      number: "Enter valid mobile number",
		  minlength: "Enter valid mobile number",
		  maxlength: "Enter valid mobile number"
    },
    description : {
      required: "Kindly enter description",
      minlength: "Minimum 3 characters",
    }
  },  
  submitHandler: function(form){
    CommonhideVerificationloadbtn();

    if($('#mobilenumber').val() == sessionStorage.getItem('verifiedmobilenumber')){
      CommoncallApicall();
    }else{
      CommonsendOtp(); 
    }
  }
});

function recaptchaCallback(callbackvalue) {
  document.getElementById("hiddenRecaptcha").value = callbackvalue;
};



// MOBILE OTP AND VALIDATION START

function CommonMobileModalStatis(){
  $('#mobileverfication-modal').modal({backdrop: 'static', keyboard: false})  
}

setTimeout(function() {
  CommonMobileModalStatis()
},3000);





document.getElementById("submitotp").addEventListener("click",function(e) {
  if(document.querySelector("#form-modal").classList.contains("show")){

    document.getElementById("otpnotification").innerHTML="";

    let otp_input = document.getElementById("otp_input").value;
    let formData = { statuscode :CommonStatuscode,otp_input };

    console.log("formData");
    console.log(formData);
    console.log("verify1");

    $.ajax({
      url: 'backend/api.php?verifyotp=true',
      data: formData,
      method: 'POST',
      type: 'POST',
      success: function(data){
        let { Status , Details } = JSON.parse(data);
        if(Status == "Success"){
          CommoncallApicall();
        }else{
          document.getElementById("otpnotification").innerHTML=Details;
        }
      },
      error: function(data) {
        console.log("SUBMIT FAILURE");
        console.log(data);
      }
    });
  
  };
});

document.getElementById("resendotp").addEventListener("click",function(e) {
  
    if(document.querySelector("#form-modal").classList.contains("show")){
    
      document.getElementById("otpnotification").innerHTML="";

      let mobilenumber = $('#mobilenumber').val();
      let formData = { mobilenumber };

      $.ajax({
        url: 'backend/api.php?sendotptouser=true',
        data: formData,
        method: 'POST',
        type: 'POST',
        success: function(data){
          let { Status , Details } = JSON.parse(data);
          if(Status == "Success"){
            CommonStatuscode = Details;
            document.getElementById("otpnotification").innerHTML="OTP re-sent successfull";
          }else{
            CommonStatuscode = "";
            document.getElementById("otpnotification").innerHTML=Details;
          }
        },
        error: function(data) {
          console.log("SEND OTP TO USER FAILURE");
          console.log(data);
        }
      });
    };
});

function CommonsendOtp(){
  document.getElementById("otpnotification").innerHTML="";

  let mobilenumber = $('#mobilenumber').val();
  let formData = { mobilenumber };

  $.ajax({
    url: 'backend/api.php?sendotptouser=true',
    data: formData,
    method: 'POST',
    type: 'POST',
    success: function(data){
      let { Status , Details } = JSON.parse(data);
      if(Status == "Success"){
        CommonStatuscode = Details;
        $('#mobileverfication-modal').modal('toggle');
      }else{
        CommonStatuscode = "";
        document.getElementById("otpnotification").innerHTML=Details;
      }
    },
    error: function(data) {
      console.log("SEND OTP TO USER FAILURE");
      console.log(data);
    }
  });
}

function CommonshowVerificationloadbtn(){
  document.getElementById("submitotp").style.display = "none";
  document.getElementById("resendotp").style.display = "none";
  document.getElementById("cancelmobileverification").style.display = "none";
  document.getElementById("verification_btn").style.display = "block";
}

function CommonhideVerificationloadbtn(){
  document.getElementById("submitotp").style.display = "block";
  document.getElementById("resendotp").style.display = "block";
  document.getElementById("cancelmobileverification").style.display = "block";
  document.getElementById("verification_btn").style.display = "none";
}

function CommonhideModal(){
  CommonStatuscode="";
  document.getElementById("otpnotification").innerHTML="";
  document.getElementById("otp_input").value="";
  CommonhideVerificationloadbtn();
  $('#mobileverfication-modal').modal('hide');
}

document.getElementById("cancelmobileverification").addEventListener("click",function(e) {
  if(document.querySelector("#form-modal").classList.contains("show")){
    CommonhideModal();
  };
});


function CommoncallApicall() {

  CommonshowVerificationloadbtn();

  let yourname = $('#yourname').val();
  let emailaddress = $('#emailaddress').val();
  let mobilenumber = $('#mobilenumber').val();
  let description = $('#description').val();
  let fordata = { yourname,emailaddress,mobilenumber,description };

  //Button load
  document.getElementById("enquiryform_submitbtn").disabled = true;
  document.getElementById("enquiryform_submitbtn").innerHTML = "Loading ..."; 
  sessionStorage.setItem('verifiedmobilenumber',mobilenumber);
   $.ajax({
    url: 'backend/enquirymail.php',
    data: fordata,
    method: 'GET',
    type: 'GET',
    success: function(data){
      $('#form-modal').modal('hide');
      document.getElementById("enquiryform").reset();
      document.getElementById("enquiryform_submitbtn").disabled = false;
      document.getElementById("enquiryform_submitbtn").innerHTML = "Submit"; 
      alert("Form Submitted");
      setTimeout(function() {
        CommonhideModal();
      },2000);
    },
    error: function(data) {
      CommonhideVerificationloadbtn();
      console.log("OTP FAILURE");
      console.log(data);
    }
  });
}

// MOBILE OTP AND VALIDATION END









