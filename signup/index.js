function ValidateEmail(inputText) {
    console.log(inputText.value);
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.value.match(mailformat)) {
        console.log("Valid email address!");
        document.getElementById("email").style.display = "none";
        document.getElementById("inputEmail4").focus();
        return true;
    }
    else {
        console.log("InValid email address!");
        document.getElementById("email").style.display = "block";
        document.getElementById("inputEmail4").focus();
        return false;
    }
}
function ValidatePh(inputPhoneNo) {
    var phoneno = /^[6-9]\d{9}$/;
    if (document.getElementById("inputPhoneNo").value.match(phoneno)) {
        console.log("Valid phone number!");
        document.getElementById("phno1").style.display = "none";
        document.getElementById("inputPhoneNo").focus();
        return true;
    }
    else {
        console.log("Invalid phone number!");
        document.getElementById("phno1").style.display = "block";
        document.getElementById("inputPhoneNo").focus();
        return false;
    }
}
function check() {
    var c = 0
    if (document.getElementById("fname").value == "") {
        document.getElementById("firstname").style.display = "block";
        c++;
        console.log(c);

    }
    else {
        document.getElementById("firstname").style.display = "none";

        console.log(c);

    }
    if (document.getElementById("lname").value == "") {
        document.getElementById("lastname").style.display = "block";
        c++;
        console.log(c);
    }
    else {
        document.getElementById("lastname").style.display = "none";

        console.log(c);
    }
    if (document.getElementById("inputEmail4").value == "") {
        document.getElementById("emailblank").style.display = "block";
        c++;
        console.log(c);
    }
    else {
        document.getElementById("emailblank").style.display = "none";

        console.log(c);
    }

    if (document.getElementById("inputPassword4").value == "") {
        document.getElementById("passwd1").style.display = "block";

        c++;
        console.log(c);
    }
    else {
        document.getElementById("passwd1").style.display = "none";

    }
    if (document.getElementById("inputAddress").value == "") {
        document.getElementById("address").style.display = "block";

        c++;
        console.log(c);
    }
    else {
        document.getElementById("address").style.display = "none";

        console.log(c);
    }
    if (document.getElementById("inputPhoneNo").value == "") {
        document.getElementById("phno").style.display = "block";

        c++;
        console.log(c);
    }
    else {
        document.getElementById("phno").style.display = "none";

        console.log(c);
    }
    if (document.getElementById("inputCity").value == "") {
        document.getElementById("city").style.display = "block";
        c++;
        console.log(c);
    }
    else {
        document.getElementById("city").style.display = "none";

        console.log(c);
    }
    if (document.getElementById("inputState").value == "") {
        document.getElementById("state").style.display = "block";

        c++;
        console.log(c);
    }
    else {
        document.getElementById("state").style.display = "none";

        console.log(c);
    }
    if (document.getElementById("inputZip").value == "") {
        document.getElementById("zip").style.display = "block";
        c++;
        console.log(c);
    }
    else {
        document.getElementById("zip").style.display = "none";

        console.log(c);
    }
    if (document.getElementById("inputPassword42").value == "") {
        document.getElementById("pass2").style.display = "block";

        c++;
        console.log(c);
    }
    else {
        document.getElementById("pass2").style.display = "none";

        console.log(c);
    }
    if (document.getElementById("inputPassword4").value != document.getElementById("inputPassword42").value) {
        document.getElementById("pass3").style.display = "block";
        c++;
    }
    else {
        document.getElementById("pass3").style.display = "none";

    }
    if (document.getElementById("birthday").value == "") {
        document.getElementById("bday").style.display = "block";

        c++;
        console.log(c);
    }
    else {
        document.getElementById("bday").style.display = "none";

        console.log(c);
    }

    if (c > 0) {
        return false;
    }

}