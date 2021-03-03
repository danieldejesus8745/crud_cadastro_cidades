const form = document.querySelector('#registration-form');
const regEx = /[a-zãáéíóú\s]/gi;
const pElement = document.createElement('p');
let inputs = [];

form.addEventListener('submit', e => {
    e.preventDefault();

    inputs = [];
    const city = document.querySelector('#city');
    const cityState = document.querySelector('#city-state');
    const cityPopulation = document.querySelector('#city-population');
    validadeLength(city, 30);
    validateString(cityState);
    validateNumber(cityPopulation, 8);

    if (inputs.length === 3) {
        window.location.href = `app/model/city-registration.php?city=${inputs[0]}&citystate=${inputs[1]}&citypopulation=${inputs[2]}`;
    }
});

const validateString = inputValue => {
    try {
        if (inputValue.value.match(regEx).length !== inputValue.value.length) {
            pElement.textContent = 'Números e/ou caracteres especiais não são permitidos';
            inputValue.after(pElement);
        } else {
            inputs.push(inputValue.value);
        }
    } catch(e) {
        pElement.textContent = 'Números e/ou caracteres especiais não são permitidos';
        inputValue.after(pElement);
    }
}

const validadeLength = (inputValue, maxLength) => {
    if (inputValue.value.length > maxLength) {
        pElement.textContent = `Esse campo só aceita ${maxLength} caracteres`;
        inputValue.after(pElement);
    } else {
        blockSpaces(inputValue);
    }
}

const validateNumber = (number, maxLength) => {
    if (number.value.length > maxLength) {
        pElement.textContent = `Esse campo só aceita ${maxLength} caracteres`;
        inputValue.after(pElement);
    } else {
        inputs.push(number.value);
    }
}

const blockSpaces = inputValue => {
    if (inputValue.value === ' ' || inputValue.value[0] === ' ') {
        pElement.textContent = 'Esse campo não pode começar com espaço';
        inputValue.after(pElement);
    } else {
        validateString(inputValue);
    }
}