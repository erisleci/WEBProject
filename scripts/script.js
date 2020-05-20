let loginDritarja = document.getElementById("loginDisplay");
let xButton = document.getElementsByClassName("closeButton")[0];
let xButton1 = document.getElementsByClassName("closeButton")[1];

function closeLogin() {
    loginDritarja.style.display="none";
}

xButton.addEventListener("click",closeLogin);
xButton1.addEventListener("click",closeLogin);



function closeLogin() {
    loginDisplay.style.display="none";
}


let showLoginForm = document.getElementById("showLoginForm");

function showLoginFormFunction() {
    loginDisplay.style.display="flex";
    
    shfaqeLoginin();
}

showLoginForm.addEventListener("click",showLoginFormFunction);



let loginHapesira = document.querySelector(".loginArea");
let registerHapesira = document.querySelector(".registerArea");


let showRegistrationButton = document.getElementById("showRegistration");
let showLoginButton = document.getElementById("showLogin");


function shfaqeLoginin() {
    registerHapesira.style.display="none"
    loginHapesira.classList.add("popUp");
    loginHapesira.style.display="block"
}

function shfaqeRegjistrimin() {
    registerHapesira.style.display="block"
    loginHapesira.style.display="none"
}

showLoginButton.addEventListener("click",shfaqeLoginin);
showRegistrationButton.addEventListener("click",shfaqeRegjistrimin);
