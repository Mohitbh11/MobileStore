var pass = /^.*(?=.{6,15})(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z0-9!@#$%]+$/;


function validate(form) {
    if (document.form.userid.value == "") {
        alert("Please Insert User Id");
        document.form.userid.focus();
        return false;
    }
    
    if (document.form.username.value == "") {
        alert("Please Insert User Name");
        document.form.userid.focus();
        return false;
    }
    
    if (document.form.email.value == "") {
        alert("Please Insert Email Id");
        document.form.userid.focus();
        return false;
    }

    if (document.form.mobno.value == "") {
        alert("Please Insert Mobile Number");
        document.form.userid.focus();
        return false;
    }

    if(document.form.password.value == "") {
        alert("Please Insert Password");
        document.form.password.focus();
        return false;
    }
    
    if (document.form.password.value != document.form.password.value.match(pass)) {
        alert("Password Is Too Short Or Not Contain Alpha-Numeric-Symbol");
        document.form.password.focus();
        return false;
    }
    
    

    return (true);
}