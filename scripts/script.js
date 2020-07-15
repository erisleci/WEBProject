let loginDritarja = document.getElementById("loginDisplay");
let xButton = document.getElementsByClassName("closeButton")[0];
let xButton1 = document.getElementsByClassName("closeButton")[1];

function closeLogin() {
    loginDritarja.style.display = "none";
}

xButton.addEventListener("click", closeLogin);
xButton1.addEventListener("click", closeLogin);

function closeLogin() {
    loginDisplay.style.display = "none";
}

let showLoginForm = document.getElementById("showLoginForm");

function showLoginFormFunction() {
    loginDisplay.style.display = "flex";

    shfaqeLoginin();
}

showLoginForm.addEventListener("click", showLoginFormFunction);

let loginHapesira = document.querySelector(".loginArea");
let registerHapesira = document.querySelector(".registerArea");

let showRegistrationButton = document.getElementById("showRegistration");
let showLoginButton = document.getElementById("showLogin");

function shfaqeLoginin() {
    registerHapesira.style.display = "none";
    loginHapesira.classList.add("popUp");
    loginHapesira.style.display = "block";
}

function shfaqeRegjistrimin() {
    registerHapesira.style.display = "block";
    loginHapesira.style.display = "none";
}

showLoginButton.addEventListener("click", shfaqeLoginin);
showRegistrationButton.addEventListener("click", shfaqeRegjistrimin);

/*SLIDER */

const carouselslide = document.querySelector('.carousel-slide');
const carouselimages = document.querySelectorAll('.carousel-slide img');

const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//counter
let counter = 1;
const size = carouselimages[0].clientWidth;

carouselslide.style.transform = 'translateX(' + (-size * counter) + 'px)';

nextBtn.addEventListener('click', () => {
    if (counter >= carouselimages.length - 1) return;
    carouselslide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselslide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click', () => {
    if (counter <= 0) return;
    carouselslide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselslide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

//me u  kthy ne fillim
carouselslide.addEventListener('transitionend', () => {
    if (carouselimages[counter].id == "lastClone") {
        carouselslide.style.transition = "none";
        counter = carouselimages.length - 2;
        carouselslide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }

    if (carouselimages[counter].id == "firstClone") {
        carouselslide.style.transition = "none";
        counter = carouselimages.length - counter;
        carouselslide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
});

/* Validation */

/* Login Validation */

let loginEmail = document.getElementById("email");
let loginPassword = document.getElementById("password");
let butoniKyqjes = document.getElementById("loginButton");
let errorFieldLogin = document.querySelector(".errorsDivLogin");
butoniKyqjes.addEventListener("click", testo);

function testo() {
    if (loginEmail.value == "") {
        errorFieldLogin.innerHTML = "Email nuk mund te jete i zbrazet";
        return;
    }
    if (loginPassword.value == "") {
        errorFieldLogin.innerHTML = "Password nuk mund te jete i zbrazet";
        return;
    }

    errorFieldLogin.innerHTML = "SUCCESS!";
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

let emailRegex = /^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

butoniRegjistrimit.addEventListener("click", testoRegjistrimin);

function testoRegjistrimin() {
    //EMRI
    if (emri.value.length < 2) {
        errorFieldRegister.innerHTML = "Emri duhet ti permbaje se paku 3 shkronja";
        return;
    }

    if (emriValidation.test(emri.value)) {
        errorFieldRegister.innerHTML =
            "Emri nuk mund te permbaje numra apo simbole";
        return;
    }

    //MBIEMRI
    if (mbiemri.value.length < 2) {
        errorFieldRegister.innerHTML =
            "Mbiemri duhet ti permbaje se paku 3 shkronja";
        return;
    }

    if (emriValidation.test(mbiemri.value)) {
        errorFieldRegister.innerHTML =
            "Mbiemri nuk mund te permbaje numra apo simbole";
        return;
    }

    //EMAIL ADDRESS
    if (imellaRegjistrimit.value.trim() == "") {
        errorFieldRegister.innerHTML = "Email nuk mund te jete i zbrazet";
        return;
    }

    if (!emailRegex.test(imellaRegjistrimit.value)) {
        errorFieldRegister.innerHTML = "EMAIL nuk eshte ne formatin e duhur";
        return;
    }

    //Password
    if (fjalekalimi.value == "") {
        errorFieldRegister.innerHTML = "Password Nuk mund te jete i zbrazet";
        return;
    }
    if (fjalekalimi.value.length < 6) {
        errorFieldRegister.innerHTML =
            "PASSWORD  Duhet te jete se paku 6 karaktere";
        return;
    }
    let passRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;

    if (!fjalekalimi.value.match(passRegex)) {
        errorFieldRegister.innerHTML =
            "Password duhet te permbaje se paku nje shkronje te madhe dhe nje simbol.";
        return;
    }

    if (!(fjalekalimi.value == konfirmoFjalekalimin.value)) {
        errorFieldRegister.innerHTML = "Passwordi nuk eshte i njejte";
        return;
    }

    errorFieldRegister.innerHTML = "SUCCESS!";
}

const butoniSubscribe = document.getElementById("subscribeButton");
const kutiaSubscribe = document.getElementById("subscribeBox");

butoniSubscribe.addEventListener("click", subscribe);

function subscribe() {
    if (kutiaSubscribe.value == "") {
        alert("Email nuk mund te jete i zbrazet");
        return;
    }

    if (!emailRegex.test(kutiaSubscribe.value)) {
        alert("Email nuk eshte ne formatin e duhur");
        return;
    }

    alert("Success!");
}
