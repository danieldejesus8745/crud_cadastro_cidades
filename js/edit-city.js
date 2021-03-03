const form = document.querySelector('#edit-form');
const regEx = /[a-zãáéíóú\s]/gi;
const pElement = document.createElement('p');
let id = document.querySelector('#id').value;
let inputs = [id];

form.addEventListener('submit', e => {
    e.preventDefault();

    inputs = [id];
    const city = document.querySelector('#city');
    const cityState = document.querySelector('#city-state');
    const cityPopulation = document.querySelector('#city-population');
    validadeLength(city, 30);
    validateString(cityState);
    validateNumber(cityPopulation, 8);

    if (inputs.length === 4) {
        window.location.href = `app/model/edit-city.php?id=${inputs[0]}&city=${inputs[1]}&citystate=${inputs[2]}&citypopulation=${inputs[3]}`;
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