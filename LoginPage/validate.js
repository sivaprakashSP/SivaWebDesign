function validate(user , pass){
    if((pass.includes('123')) && (user.length > 12)){
        window.alert("Success")
    }
    else{
        window.alert("Invalid")
    }
}