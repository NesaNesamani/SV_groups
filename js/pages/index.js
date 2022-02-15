var statuscode;

$.validator.methods.email = function( value, element ) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
}

$( "#exploreform" ).validate({
    ignore: ".ignore",
    rules: {
      explore_yourname: {
        required: true,
  
      },explore_emailaddress: {
        required: true,
  
        email : true,
        required: true
      },
      explore_mobilenumber: {
        required: true,
  
            number: true,
            minlength: 10,
            maxlength: 10
      },
      explore_description:{
        required: true,
  
      }
    },
    messages: {
      explore_yourname: "Kindly enter your name",
      explore_emailaddress: {
        required: "Kindly enter your email address",
        email: "Enter valid format"
      }
      ,
      explore_mobilenumber: {
        required: "Kindly enter your mobile number",
        number: "Enter valid mobile number",
            minlength: "Enter valid mobile number",
            maxlength: "Enter valid mobile number"
      },
      explore_description : {
        required: "Kindly enter description",
      }
    },  
    submitHandler: function(form){
      let yourname = $('#explore_yourname').val();
      let emailaddress = $('#explore_emailaddress').val();
      let mobilenumber = $('#explore_mobilenumber').val();
      let description = $('#explore_description').val();
      let fordata = { yourname, emailaddress, mobilenumber, description };
      
      //Button load
      document.getElementById("explornow_submitbtn").disabled = true;
      document.getElementById("explornow_submitbtn").innerHTML = "Loading ..."; 
      sessionStorage.setItem('verifiedmobilenumber',mobilenumber);

      $.ajax({
        url: 'backend/enquirymail.php',
        data: fordata,
        method: 'GET',
        type: 'GET',
        success: function(SUCCESDATA){
            alert("Form Submitted");
            document.getElementById("exploreform").reset();
            document.getElementById("explornow_submitbtn").disabled = false;
            document.getElementById("explornow_submitbtn").innerHTML = "Submit"; 
        },
        error: function(ERRORDATA) {
        }
      });

    }
  });

  function homeRecaptcha(callbackvalue) {
    document.getElementById("homeRecaptcha").value = callbackvalue;
  };
  


//  Floor plan form start

  $("#floorplanform").submit(function(e) {
    e.preventDefault();
  }).validate({
    ignore: ".ignore",
    rules: {
      floorplan_yourname: {
        required: true,
  
        minlength: 3,
      },floorplan_emailaddress: {
        required: true,
  
        email : true,
      },
      floorplan_mobilenumber: {
        required: true,
  
            number: true,
            minlength: 10,
            maxlength: 10
      },
      floorplan_description:{
        required: true,
  
        minlength: 3,
      },
      floorplan: {
        required: true
      }
    },
    messages: {
      floorplan_yourname: {
        required: "Kindly enter your name",
        minlength: "Minimum 3 characters",
      },
      floorplan_emailaddress: {
        required: "Kindly enter your email address",
        email: "Enter valid format"
      }
      ,
      floorplan_mobilenumber: {
        required: "Kindly enter your mobile number",
        number: "Enter valid mobile number",
            minlength: "Enter valid mobile number",
            maxlength: "Enter valid mobile number"
      },
      floorplan_description: {
        required: "Kindly enter description",
        minlength: "Minimum 3 characters",
      }
    },  
    submitHandler: function(form){

        hideVerificationloadbtn();

        if($('#floorplan_mobilenumber').val() == sessionStorage.getItem('verifiedmobilenumber')){
          callFloorapi();
        }else{
          sendOtp(); 
        }

    }
  });
  
  function floorplanRecaptcha(callbackvalue) {
    document.getElementById("floorplanRecaptcha").value = callbackvalue;
  };

// Floor plan form end




//  Broucher form start

$( "#broucherform" ).submit(function(e) {
  e.preventDefault();
}).validate({
  ignore: ".ignore",
  rules: {
    broucherform_yourname: {
      required: true,

        minlength: 3,
    },broucherform_emailaddress: {
      required: true,

      email : true,
    },
    broucherform_mobilenumber: {
      required: true,

          number: true,
          minlength: 10,
          maxlength: 10
    },
    broucherform_description:{
      required: true,

        minlength: 3,
    }
  },
  messages: {
    broucherform_yourname: {
      required: "Kindly enter your name",
      minlength: "Minimum 3 characters",
    },
    broucherform_emailaddress: {
      required: "Kindly enter your email address",
      email: "Enter valid format"
    }
    ,
    broucherform_mobilenumber: {
      required: "Kindly enter your mobile number",
      number: "Enter valid mobile number",
          minlength: "Enter valid mobile number",
          maxlength: "Enter valid mobile number"
    },
    broucherform_description:{
      required: "Kindly enter description",
      minlength: "Minimum 3 characters",
    }
  },  
  submitHandler: function(form){

    hideVerificationloadbtn();
    
    if($('#broucherform_mobilenumber').val() == sessionStorage.getItem('verifiedmobilenumber')){
      callBroucherapi();
    }else{
      sendOtp(); 
    }

  }
});

function broucherformRecaptcha(callbackvalue) {
  document.getElementById("broucherformRecaptcha").value = callbackvalue;
};





// MOBILE OTP AND VALIDATION START

function MobileModalStatis(){
  $('#mobileverfication-modal').modal({backdrop: 'static', keyboard: false})  
}

setTimeout(function() {
  MobileModalStatis()
},3000);


document.getElementById("submitotp").addEventListener("click",function(e) {
  if((window.location.href.includes("index.php") || !window.location.href.includes(".php")) && !document.querySelector("#form-modal").classList.contains("show")){

  document.getElementById("otpnotification").innerHTML="";

  let otp_input = document.getElementById("otp_input").value;
  let formData = { statuscode,otp_input };

  console.log(!document.querySelector("#form-modal").classList.contains("show"));
  console.log("verify4");

  $.ajax({
    url: 'backend/api.php?verifyotp=true',
    data: formData,
    method: 'POST',
    type: 'POST',
    success: function(data){
      let { Status , Details } = JSON.parse(data);
      if(Status == "Success"){
        
          if($('#broucherform-modal').hasClass('show')){
              callBroucherapi();
          }else{
              callFloorapi();
          }

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
  
  if((window.location.href.includes("index.php") || !window.location.href.includes(".php")) && !document.querySelector("#form-modal").classList.contains("show")){
    
    document.getElementById("otpnotification").innerHTML="";

    let mobilenumber="";
  
    if($('#broucherform-modal').hasClass('show')){
        mobilenumber = $('#broucherform_mobilenumber').val();
    }else{
        mobilenumber = $('#floorplan_mobilenumber').val();
    }
    
  
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

  let mobilenumber="";
  
  if($('#broucherform-modal').hasClass('show')){
      mobilenumber = $('#broucherform_mobilenumber').val();
  }else{
      mobilenumber = $('#floorplan_mobilenumber').val();
  }

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
  if((window.location.href.includes("index.php") || !window.location.href.includes(".php")) && !document.querySelector("#form-modal").classList.contains("show")){
    hideModal();
  };
});


function callBroucherapi() {
  
  showVerificationloadbtn();
  
  let yourname = $('#broucherform_yourname').val();
  let emailaddress = $('#broucherform_emailaddress').val();
  let mobilenumber = $('#broucherform_mobilenumber').val();
  let description = $('#broucherform_description').val();

  let fordata = { yourname,emailaddress,mobilenumber,description  };

  //Button load
  document.getElementById("broucher_submitbtn").disabled = true;
  document.getElementById("broucher_submitbtn").innerHTML = "Loading ...";
  sessionStorage.setItem('verifiedmobilenumber', mobilenumber);

   $.ajax({
    url: 'backend/brouchermail.php',
    data: fordata,
    method: 'GET',
    type: 'GET',
    success: function(data){
      $('#broucherform-modal').modal('hide');
      document.getElementById("broucherform").reset();
      document.getElementById("broucher_submitbtn").disabled = false;
      document.getElementById("broucher_submitbtn").innerHTML = "Submit"; 
      alert("Form Submitted");
       //After mail sent
       let filepath = './asset/brochure.pdf';
       window.open(filepath, '_blank');
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


function callFloorapi() {
  
  showVerificationloadbtn();
  
  let floorplan_yourname = $('#floorplan_yourname').val();
  let floorplan_emailaddress = $('#floorplan_emailaddress').val();
  let floorplan_mobilenumber = $('#floorplan_mobilenumber').val();
  let floorplan_description = $('#floorplan_description').val();
  let twobhk = document.getElementById('2bhk').checked;
  let type

  if(twobhk) { type = "2bhk" } else { type = "3bhk"}

  
  let fordata = { floorplan_yourname,floorplan_emailaddress,floorplan_mobilenumber,floorplan_description,type };


  //Button load
  document.getElementById("floorplan_submitbtn").disabled = true;
  document.getElementById("floorplan_submitbtn").innerHTML = "Loading ..."; 
  sessionStorage.setItem('verifiedmobilenumber', floorplan_mobilenumber);

   $.ajax({
    url: 'backend/floorplanmail.php',
    data: fordata,
    method: 'GET',
    type: 'GET',
    success: function(data){
      alert("Form Submitted");
      $('#floorplanform-modal').modal('hide');
      document.getElementById("floorplanform").reset();
      document.getElementById("floorplan_submitbtn").disabled = false;
      document.getElementById("floorplan_submitbtn").innerHTML = "Submit"; 

      if(twobhk) {
          window.open("./asset/2BHKFILE.pdf", '_blank');
      } else {
          window.open("./asset/3BHK.zip", '_blank');
      }

      setTimeout(function() {
        hideModal();
      },2000);
    },
    error: function(data) {
      hideVerificationloadbtn();
    }
  });

}

// MOBILE OTP AND VALIDATION END

//  Broucher form end

// Home page lightbox strat

      // Get the modal
      let modal = document.getElementById("masterPlanlightmodal");

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      let masterPlanopenBtn = document.getElementById("masterPlanopenBtn");
      let modalImg = document.getElementById("lightbox-image");
      
      masterPlanopenBtn.onclick = function(){
        modal.style.display = "block";
        modalImg.src = "./asset/masterplan.jpg";
      }

      // Get the <span> element that closes the modal
      let span = document.getElementsByClassName("lightboxclose")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() { 
        modal.style.display = "none";
      }

// Home page lightbox End