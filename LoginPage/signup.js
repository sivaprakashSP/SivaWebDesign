function SignUp(name , email , pass){

    if((pass.includes('123')) && (name.length <= 12)){
        window.alert("Success");
        return true;
    }
    else{
        window.alert("Invalid");
        return false;
    }
}