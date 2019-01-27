function SignUpValidForm() {
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let error;
    if (name.value === "") {
        window.alert("Please enter your name.");
        name.style.border = "1px solid red";
        name.focus();
        return false;
    }

    if (email.value === "" || email.value.indexOf("@", 0) < 0 || email.value.indexOf(".", 0) < 0) {
        email.style.border = "1px solid red";
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (password.value === "") {
        password.style.border = "1px solid red";
        window.alert("Please enter your password");
        password.focus();
        return false;
    }
    return true;

}
function LogInValidForm(){
    let email = document.getElementById("email");
    let password = document.getElementById("password");

    if (email.value === "" || email.value.indexOf("@", 0) < 0 || email.value.indexOf(".", 0) < 0) {
        email.style.border = "1px solid red";
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (password.value === "") {
        password.style.border = "1px solid red";
        window.alert("Please enter your password");
        password.focus();
        return false;
    }
    return true;
}