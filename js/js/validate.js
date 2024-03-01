function validatename(Name){
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/ ;
     
    if(!regName.test(Name)){
        return false;
    }else{
        return true;
    }
}

function validateuname(Name){
    var regName = /^[a-zA-Z]+[a-zA-Z]+$/ ;
     
    if(!regName.test(Name)){
        return false;
    }else{
        return true;
    }
}


function validateEmail(email){
        
    let regex = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;

    // alert(regex.test(em));

    if(regex.test(email)){
        //alert('Success');
        return true;
    } else {
        //alert('Please enter a valid email');
        return false;
    }
 }

 /*function validatePhoneNumber(phoneNumber) {
    // Use a regular expression to check if the phone number is in the correct format
    var regPhoneNumber = /^[1-9]{1}+[0-9]{9} $/;

    if (!regPhoneNumber.test(phoneNumber)) {
        alert('Please enter a valid phone number with 10 digits');
        return false;
    } else {
        return true;
    }
}
*/






 

