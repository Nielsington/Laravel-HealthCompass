import './bootstrap';

const addButton = document.getElementById('addMood');
const xScrollCards = document.getElementById('cards-container');

const moodFormSwitch = () => {

    const moodContainer = document.querySelector('#mood-container');
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

    addButton.style.display = 'none';

    const form = document.createElement("form");
    form.setAttribute("id", 'moodForm');
    form.setAttribute("action", '/submit-mood');
    form.setAttribute("method", 'post');

    const label = document.createElement("label");
    label.innerHTML = "How you feelin' buddy?";
    label.setAttribute("for", "mood")

    const csrfField = document.createElement('input');
    csrfField.type = 'hidden';
    csrfField.name = '_token';
    csrfField.value = csrfToken;
    form.appendChild(csrfField);

    const input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", "mood");
    input.setAttribute("id", "mood");
    input.setAttribute("placeholder", "Enter mood");

    const submitBtn = document.createElement("button");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("id", "saveMood");
    submitBtn.textContent = "Save";

    moodContainer.appendChild(form);
    form.appendChild(label);
    form.appendChild(input);
    form.appendChild(submitBtn);
}

xScrollCards.addEventListener('wheel', (e)=> {
    e.preventDefault();
    xScrollCards.scrollLeft += e.deltaY;
});

addButton.addEventListener('click', ()=>{
    moodFormSwitch();
});