function login() {
    
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    
    var cEmail = "b.murphy@admin.lboro.ac.uk";
    var cPassword = "loughborough";
    
    if(email.value == cEmail){
        
        if(password.value = cPassword){
            window.location = 'form.html';
        }
    }
    else {
        window.alert('Incorrect username or Password.');
    }
}