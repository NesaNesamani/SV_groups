var statuscode;
//FORM VALIDATION START
$.validator.methods.email = function( value, element ) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
}

$( "#contactusform" ).submit(function(e) {
  e.preventDefault();
}).validate({
    ignore: ".ignore",
    rules: {
      contact_yourname: {
        required: true,
  
        minlength: 3,
      },contact_emailaddress: {
        required: true,
  
        email : true,
        required: true
      },
      contact_mobilenumber: {
        required: true,
  
            number: true,
            minlength: 10,
            maxlength: 10
      },
      contact_description: {
        required: true,
  
        minlength: 3,
      }
    },
    messages: {
      contact_yourname: {
        required: "Kindly enter your name",
        minlength: "Minimum 3 characters",
      },
      contact_emailaddress: {
        required: "Kindly enter your email address",
        email: "Enter valid format"
      }
      ,
      contact_mobilenumber: {
        required: "Kindly enter your mobile number",
        number: "Enter valid mobile number",
            minlength: "Enter valid mobile number",
            maxlength: "Enter valid mobile number"
      },
      contact_description: {
        required: "Kindly enter description",
        minlength: "Minimum 3 characters",
      }
    },  
    submitHandler: function(){
      hideVerificationloadbtn();
      if($('#contact_mobilenumber').val() == sessionStorage.getItem('verifiedmobilenumber')){
        callApicall();
      }else{
        sendOtp();
      }
    }
});

function contactRecaptcha(contactRecaptcha) {
  document.getElementById("contactRecaptcha").value = contactRecaptcha;
};

// FORM VALIDATION END



  // MOBILE OTP AND VALIDATION START

  function MobileModalStatis(){
    $('#mobileverfication-modal').modal({backdrop: 'static', keyboard: false})  
  }

  setTimeout(function() {
    MobileModalStatis()
  },3000);
  

  document.getElementById("submitotp").addEventListener("click",function(e) {
    
    if(window.location.href.includes("contact-us.php") && !document.querySelector("#form-modal").classList.contains("show")){
      
      document.getElementById("otpnotification").innerHTML="";

      let otp_input = document.getElementById("otp_input").value;
      let formData = { statuscode,otp_input };
      console.log("verify3");
      $.ajax({
        url: 'backend/api.php?verifyotp=true',
        data: formData,
        method: 'POST',
        type: 'POST',
        success: function(data){
          let { Status , Details } = JSON.parse(data);
          if(Status == "Success"){
            callApicall();
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
    
    if(window.location.href.includes("contact-us.php") && !document.querySelector("#form-modal").classList.contains("show")){
      

      document.getElementById("otpnotification").innerHTML="";

      let mobilenumber = $('#contact_mobilenumber').val();
      let formData = { mobilenumber };
  
      $.ajax({
        url: 'backend/api.php?sendotptouser=true',
        data: formData,
        method: 'POST',
        type: 'POST',
        success: function(data){
          let { Status , Details } = JSON.parse(data);
          if(Status == "Success"){
            statuscode = Details;
            document.getElementById("otpnotification").innerHTML="OTP re-sent successfull";
          }else{
            statuscode = "";
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

  function sendOtp(){
    document.getElementById("otpnotification").innerHTML="";

    let mobilenumber = $('#contact_mobilenumber').val();
    let formData = { mobilenumber };

    $.ajax({
      url: 'backend/api.php?sendotptouser=true',
      data: formData,
      method: 'POST',
      type: 'POST',
      success: function(data){
        let { Status , Details } = JSON.parse(data);
        if(Status == "Success"){
          statuscode = Details;
          $('#mobileverfication-modal').modal('toggle');
        }else{
          statuscode = "";
          document.getElementById("otpnotification").innerHTML=Details;
        }
      },
      error: function(data) {
        console.log("SEND OTP TO USER FAILURE");
        console.log(data);
      }
    });
  }

  function showVerificationloadbtn(){
    document.getElementById("submitotp").style.display = "none";
    document.getElementById("resendotp").style.display = "none";
    document.getElementById("cancelmobileverification").style.display = "none";
    document.getElementById("verification_btn").style.display = "block";
}

function hideVerificationloadbtn(){
    document.getElementById("submitotp").style.display = "block";
    document.getElementById("resendotp").style.display = "block";
    document.getElementById("cancelmobileverification").style.display = "block";
    document.getElementById("verification_btn").style.display = "none";
}

  function hideModal(){
    statuscode="";
    document.getElementById("otpnotification").innerHTML="";
    document.getElementById("otp_input").value="";
    hideVerificationloadbtn();
    $('#mobileverfication-modal').modal('hide');
  }

  document.getElementById("cancelmobileverification").addEventListener("click",function(e) {
    if(window.location.href.includes("contact-us.php") && !document.querySelector("#form-modal").classList.contains("show")){
      hideModal();
    };
  });
  
  
  function callApicall() {
    
    showVerificationloadbtn();
    
    let yourname = $('#contact_yourname').val();
    let mobilenumber = $('#contact_mobilenumber').val();
    let emailaddress = $('#contact_emailaddress').val();
    let description = $('#contact_description').val();
  
    let fordata = { yourname,mobilenumber,emailaddress,description };
    
    sessionStorage.setItem('verifiedmobilenumber',mobilenumber);

     $.ajax({
      url: 'backend/enquirymail.php',
      data: fordata,
      method: 'GET',
      type: 'GET',
      success: function(data){
        alert("Form Submitted");
        console.log("SAVE FORM SUCCESS");
        console.log(data);
        document.getElementById("contactusform").reset();
        document.getElementById("otpnotification").innerHTML="Form submitted";
        setTimeout(function() {
          hideModal();
        },2000);
      },
      error: function(data) {
        hideVerificationloadbtn();
        console.log("OTP FAILURE");
        console.log(data);
      }
    });

  }
  // MOBILE OTP AND VALIDATION END