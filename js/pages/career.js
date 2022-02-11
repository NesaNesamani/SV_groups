var statuscode;

//FORM VALIDATION START
$.validator.methods.email = function( value, element ) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
}


$("#careerform").submit(function(e) {
  e.preventDefault();
}).validate({
    ignore: ".ignore",
    rules: {
      career_yourname: {
        required: true,
  
        minlength: 3,
      },career_emailaddress: {
        required: true,
  
        email : true,
        required: true
      },
      career_mobilenumber: {
        required: true,
  
            number: true,
            minlength: 10,
            maxlength: 10
      },
      career_position:{
        required: true,
      },
      resume:{
        required: true,
        extension: "pdf"
      },
    },
    messages: {
      career_yourname: {
        required: "Kindly enter your name",
        minlength: "Minimum 3 characters",
      },
      career_emailaddress: {
        required: "Kindly enter your email address",
        email: "Enter valid format"
      }
      ,
      career_mobilenumber: {
        required: "Kindly enter your mobile number",
        number: "Enter valid mobile number",
            minlength: "Enter valid mobile number",
            maxlength: "Enter valid mobile number"
      },
      career_position : {
        required: "Kindly choose description",
      },
    },  
    submitHandler: function(){
      hideVerificationloadbtn();

      if($('#career_mobilenumber').val() == sessionStorage.getItem('verifiedmobilenumber')){
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
  

  function hide_careerpage_btn_load(){
    document.getElementById("careerbtn_load").style.display = "none";
    document.getElementById("careerbtn").style.display = "block";
  }
  hide_careerpage_btn_load();
  
  function show_careerpage_btn_load(){
    document.getElementById("careerbtn").style.display = "none";
    document.getElementById("careerbtn_load").style.display = "block";
  }
  

  document.getElementById("submitotp").addEventListener("click",function(e) {
    
    let pagevalue = window.location.href.includes('carrer.php');
    let isEnquiryopen = document.querySelector("#form-modal").classList.contains("show");
    if(pagevalue && !isEnquiryopen){

      document.getElementById("otpnotification").innerHTML="";

      let otp_input = document.getElementById("otp_input").value;
      let formData = { statuscode,otp_input };

      console.log("verify2");

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
    
    let pagevalue = window.location.href.includes('carrer.php');
    let isEnquiryopen = document.querySelector("#form-modal").classList.contains("show");
    if(pagevalue && !isEnquiryopen){
      
  
    document.getElementById("otpnotification").innerHTML="";

    let mobilenumber = $('#career_mobilenumber').val();
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

    let mobilenumber = $('#career_mobilenumber').val();
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
    let pagevalue = window.location.href.includes('carrer.php');
    let isEnquiryopen = document.querySelector("#form-modal").classList.contains("show");
    if(pagevalue && !isEnquiryopen){
      hideModal();
    };
  });
  
  
  function callApicall() {

    showVerificationloadbtn();
    show_careerpage_btn_load();

    var formData = new FormData();

    let props = $('#resume').prop('files');
		let file = props[0];
     
    formData.append("career_yourname", $('#career_yourname').val())
    formData.append("career_emailaddress", $('#career_emailaddress').val());
    formData.append("career_mobilenumber", $('#career_mobilenumber').val());
    formData.append("career_position", $('#career_position').val());
    formData.append("resume", file,"resume.pdf");

    sessionStorage.setItem('verifiedmobilenumber',$('#career_mobilenumber').val());
    
    //Button load
    // document.getElementById("cancelmobileverification").disabled = true;
    
     $.ajax({
      url: 'backend/career.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST',
      success: function(data){
        hide_careerpage_btn_load();
        alert("Form Submitted");
        console.log("SAVE FORM SUCCESS");
        document.getElementById("careerform").reset();
        document.getElementById("otpnotification").innerHTML="Form submitted";
        setTimeout(function() {
          hideModal();
        },2000);
      },
      error: function(data) {
        hide_careerpage_btn_load();
        hideVerificationloadbtn();
        console.log("OTP FAILURE");
        console.log(data);
      }
    });
  }

  // MOBILE OTP AND VALIDATION END