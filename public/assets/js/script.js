const slideWidth = document.querySelector(".card-choice").clientWidth + 50;

const slidesContainer = document.querySelector("#carousel");

// SLIDER BTN

const firstBtn = document.querySelector("#slider .slider-btn.fete");
const secondBtn = document.querySelector("#slider .slider-btn.gens");
const thirdBtn = document.querySelector("#slider .slider-btn.raison");
const fourthBtn = document.querySelector("#slider .slider-btn.ton");

firstBtn.addEventListener("click", () => {
    slidesContainer.scrollTo(0, 0);
});

secondBtn.addEventListener("click", () => {
    slidesContainer.scrollTo(slideWidth, 0);
});

thirdBtn.addEventListener("click", () => {
    slidesContainer.scrollTo(2 * slideWidth, 0);
});

fourthBtn.addEventListener("click", () => {
    slidesContainer.scrollTo(3 * slideWidth, 0);
});

// CHOICES

const sendChoices = document.querySelector("form#app");

function setExcuseChoice(excuse, value, slide, send = false) {
    const choiceBtn = document.querySelector(".grid-item#"+value);
    const input = document.querySelector('input#'+excuse);

    choiceBtn.addEventListener('click', function(e) {
        input.value = value;
        slidesContainer.scrollTo(slideWidth*slide, 0);
        if (send) {
            sendChoices.submit();
        }
    });
}

setExcuseChoice("fete", 'halloween', 1);
setExcuseChoice("fete", 'noel', 1);
setExcuseChoice("fete", 'nouvel-an', 1);
setExcuseChoice("fete", 'hanoucca', 1);

setExcuseChoice("gens", 'famille', 2);
setExcuseChoice("gens", 'partenaire', 2);
setExcuseChoice("gens", 'amis', 2);
setExcuseChoice("gens", 'collegues', 2);

setExcuseChoice("raison", 'travail', 3);
setExcuseChoice("raison", 'absurde', 3);
setExcuseChoice("raison", 'sante', 3);
setExcuseChoice("raison", 'politique', 3);

setExcuseChoice("ton", 'corpo', 4, true);
setExcuseChoice("ton", 'delicat', 4, true);
setExcuseChoice("ton", 'neutre', 4, true);
setExcuseChoice("ton", 'mechant', 4, true);
