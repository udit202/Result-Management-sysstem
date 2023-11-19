let login = document.getElementById("log");
let Reg = document.getElementById("Reg");
let logform = document.getElementById("loginForm");
let Regform = document.getElementById("registrationForm");
login.addEventListener('click', function(){
    Regform.style.display="none";
    logform.style.display="block";

});
Reg.addEventListener('click', function(){
    logform.style.display="none";
    Regform.style.display="block";

});







