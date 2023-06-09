
function clearError(){
    errors=document.getElementsByClassName('form-error');

    for(let item of errors){
        item.innerHTML="";
    }
}
function validate(){
    clearError();
    var fname=document.getElementById('fname').value;
    var lname=document.getElementById('lname').value;
    var clgid=document.getElementById('cid').value;
    var password=document.getElementById('password').value;
    var cpassword=document.getElementById('cpassword').value;
    

    //first name
    if(fname==""){
        document.getElementById('fname-error').innerHTML="** please enter your first name";
        return false;
    }
    if(fname.length<3 || fname.length>15){
        document.getElementById('fname-error').innerHTML="** firstname must be greater than 3 and less than 15";
        return false;
    }

    //last name
    if(lname==""){
        document.getElementById('lname-error').innerHTML="** please enter your last name";
        return false;
    }
    if(lname.length<3 || lname.length>15){
        document.getElementById('lname-error').innerHTML="** lastname must be greater than 3 and less than 15";
        return false;
    }
    //college id

    if(clgid==""){
        document.getElementById('collegeid-error').innerHTML="** please enter your college id";
        return false;
    }
    if(clgid.length!=8){
        document.getElementById('collegeid-error').innerHTML="** collegeid must be length in 8 character";
        return false;
    }

    //password
    if(password==""){
        document.getElementById('password-error').innerHTML="** please enter your password";
        return false;
    }
    if(password.length <5 || password.length>15){
        document.getElementById('password-error').innerHTML="** password  length must be in between 5 to 15 character";
        return false;
    }

    // conform password
    if(cpassword==""){
        document.getElementById('cpassword-error').innerHTML="** please enter your conformpassword";
        return false;
    }
    if(cpassword!=password){
        document.getElementById('cpassword-error').innerHTML="** password not matched";
        return false;
    }
   

}