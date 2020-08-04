function validate(pass , confirmpass){
    if(pass == confirmpass){
        alert("Correct password")
        return true;
    }
    else{
        alert("Password must be same!!");
        return false;
    }
}
function verify(num){
    if(num.length==10){
        alert("Entered a valid number");
        return true;
    }
    else if(num.length<10){
        alert("Entered an invalid number");
        return false;
    }
}