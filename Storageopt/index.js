function setnamevaluesindom(){
    var name = sessionStorage.getItem('name');
    if(!(name === undefined) && !(name === '') && !(name === null)){

        if(document.querySelector("#yourname")){
            document.querySelector("#yourname").value = name;
        }
        if(document.querySelector("#career_yourname")){
            document.querySelector("#career_yourname").value = name;
        }
        if(document.querySelector("#contact_yourname")){
            document.querySelector("#contact_yourname").value = name;
        }
        if(document.querySelector("#floorplan_yourname")){
            document.querySelector("#floorplan_yourname").value = name;
        }
        if(document.querySelector("#explore_yourname")){
            document.querySelector("#explore_yourname").value = name;
        }
        if(document.querySelector("#broucherform_yourname")){
            document.querySelector("#broucherform_yourname").value = name;
        }

    }
}


function setemailvaluesindom(){
    var email = sessionStorage.getItem('email');
    if(!(email === undefined) && !(email === '') && !(email === null)){

        if(document.querySelector("#emailaddress")){
            document.querySelector("#emailaddress").value = email;
        }
        if(document.querySelector("#career_emailaddress")){
            document.querySelector("#career_emailaddress").value = email;
        }
        if(document.querySelector("#contact_emailaddress")){
            document.querySelector("#contact_emailaddress").value = email;
        }
        if(document.querySelector("#floorplan_emailaddress")){
            document.querySelector("#floorplan_emailaddress").value = email;
        }
        if(document.querySelector("#explore_emailaddress")){
            document.querySelector("#explore_emailaddress").value = email;
        }   
        if(document.querySelector("#broucherform_emailaddress")){
            document.querySelector("#broucherform_emailaddress").value = email;
        }

    }
}

function setphonenumbervaluesindom(){
    var mobilenumber = sessionStorage.getItem('verifiedmobilenumber');
    if(!(mobilenumber === undefined) && !(mobilenumber === '') && !(mobilenumber === null)){
        if(document.querySelector("#mobilenumber")){
            document.querySelector("#mobilenumber").value = mobilenumber;
        }
        if(document.querySelector("#career_mobilenumber")){
            document.querySelector("#career_mobilenumber").value = mobilenumber;
        }
        if(document.querySelector("#contact_mobilenumber")){
            document.querySelector("#contact_mobilenumber").value = mobilenumber;
        }
        if(document.querySelector("#floorplan_mobilenumber")){
            document.querySelector("#floorplan_mobilenumber").value = mobilenumber;
        }
        if(document.querySelector("#explore_mobilenumber")){
            document.querySelector("#explore_mobilenumber").value = mobilenumber;
        }
        if(document.querySelector("#broucherform_mobilenumber")){
            document.querySelector("#broucherform_mobilenumber").value = mobilenumber;
        }
    }
}


setnamevaluesindom();
setemailvaluesindom();
setphonenumbervaluesindom();