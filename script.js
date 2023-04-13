function first_nameValidation(first_name){
    var letters = /^[A-Za-z]+$/;
    if (!first_name.match(letters) || first_name.length == 0) {
        return true;
    }
    return false;
}

function last_nameValidation(last_name){
    var letters = /^[A-Za-z]+$/;
    if (!last_name.match(letters)) {
        return true;
    }
    return false;
}


function mobileValidation(mobile) {
    var phoneFormat = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
    if (!mobile.match(phoneFormat)) {
        return true;
    }
    return false;
}


function emailValidation(em){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!em.match(mailformat)) {
        return true;
    }
    return false;
}


function formvalidation(){

    var first_name = document.getElementById("first_name");
    var last_name = document.getElementById("last_name");
    var em = document.getElementById("em");
    var phn = document.getElementById("mobile");


    if (first_nameValidation(first_name.value)) {
        alert('First Name must have alphabet characters only');
        first_name.focus();
        return false;
    }
    else if (last_nameValidation(last_name.value)) {
        alert('Last Name must have alphabet characters only');
        last_name.focus();
        return false;
    }
    else if (emailValidation(em.value)) {
        alert("You have entered an invalid email address!");
        em.focus();
        return false;
    } else if (mobileValidation(mobile.value)) {
        alert("Please Enter a valid Mobile No !!");
        mobile.focus();
        return false;
    }
    
    alert("Contest Form Successfully Submitted.");
    // window.location.reload()
    return true;
}