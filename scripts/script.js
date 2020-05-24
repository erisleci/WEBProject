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


let slideIndex = 0;
let slides = document.getElementsByClassName("Slides");
if(slides.length != 0) {
    function showSlides() {
      let i;
      
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
    showSlides();
}

    
 


/* Validation */

   /* Login Validation */

   
   let loginEmail = document.getElementById("email");
   let loginPassword = document.getElementById("password");
   let butoniKyqjes = document.getElementById("loginButton");
   let errorFieldLogin = document.querySelector(".errorsDivLogin");
   butoniKyqjes.addEventListener('click', testo);

   function testo() {
        
        if(loginEmail.value == "") {
            errorFieldLogin.innerHTML="Email nuk mund te jete i zbrazet"
            return;
        }
        if(loginPassword.value == "") {
            errorFieldLogin.innerHTML="Password nuk mund te jete i zbrazet";
            return;
        }

        errorFieldLogin.innerHTML="SUCCESS!"
   }


   /* Registration validation */

   let emri = document.getElementById("firstName");
   let mbiemri = document.getElementById("lastName");
   let imellaRegjistrimit = document.getElementById("registerEmail");
   let fjalekalimi = document.getElementById("registerPassword");
   let konfirmoFjalekalimin = document.getElementById("confirmPassword");
   let butoniRegjistrimit = document.getElementById("registerButton");
   let errorFieldRegister = document.querySelector(".errorsDivRegister");
  // butoniKyqjes.addEventListener("click", testoRegjistrimin);

   let emriValidation = /[0-9.,!@#$%^&*()_-]+/;
   
   
   
   butoniRegjistrimit.addEventListener("click", testoRegjistrimin);

   function testoRegjistrimin() {
        
    //EMRI
        if(emri.value.length < 2) {
            errorFieldRegister.innerHTML="GABIM EMRI: Emri duhet ti permbaje se paku 3 shkronja";
            return;
        }
   
        if(emriValidation.test(emri.value)) {
            errorFieldRegister.innerHTML="GABIM EMRI: Emri nuk mund te permbaje numra apo simbole";
            return;
        } 
        
    //MBIEMRI
        if(mbiemri.value.length < 2) {
            errorFieldRegister.innerHTML="GABIM MBIEMRI: Emri duhet ti permbaje se paku 3 shkronja";
            return;
        }
   
        if(emriValidation.test(mbiemri.value)) {
            errorFieldRegister.innerHTML="GABIM MBIEMRI: Emri nuk mund te permbaje numra apo simbole";
            return;
        }
     
    //EMAIL ADDRESS
        if(imellaRegjistrimit.value.length= 0) {
            errorFieldRegister.innerHTML="Email nuk mund te jete i zbrazet";
            return;
        }

        let emailRegex = /[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}/
        if(!emailRegex.test(imellaRegjistrimit.value)) {
            errorFieldRegister.innerHTML="GABIM EMAIL: Nuk eshte ne formatin e duhur";
            return;
        }

     //Password
        if(fjalekalimi.value == "") {
            errorFieldRegister.innerHTML="GABIM PASSWORD: Nuk mund te jete i zbrazet";
            return;
        }
        if(fjalekalimi.value.length < 6) {
            errorFieldRegister.innerHTML="GABIM PASSWORD: Duhet te jete se paku 6 karaktere";
            return;
        }
        let passRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;

        if(!fjalekalimi.value.match(passRegex)) {
            errorFieldRegister.innerHTML="GABIM PASSWORD: Password duhet te permbaje se paku nje shkronje te madhe dhe nje simbol.";
            return;
        }

        if(!(fjalekalimi.value == konfirmoFjalekalimin.value)) {
            errorFieldRegister.innerHTML="Passwordi nuk eshte i njejte"
            return;
        }

        errorFieldRegister.innerHTML="SUCCESS!";
    }
   
    

   
   