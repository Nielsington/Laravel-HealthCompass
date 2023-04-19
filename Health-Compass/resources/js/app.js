import './bootstrap';

const addButton = document.getElementById('addMood');


const moodFormSwitch = () => {

    const moodContainer = document.querySelector('#mood-container');

    addButton.style.display = 'none';

    const form = document.createElement("form");
    form.setAttribute("id", 'moodForm');
    form.setAttribute("action", '/submit-mood');
    form.setAttribute("method", 'post');

    const label = document.createElement("label");
    label.innerHTML = "How you feelin' buddy?";
    label.setAttribute("for", "moodInput")

    const input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", "moodInput");
    input.setAttribute("id", "moodInput");

    const submitBtn = document.createElement("button");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("id", "saveMood");
    submitBtn.textContent = "Save";

    moodContainer.appendChild(form);
    form.appendChild(label);
    form.appendChild(input);
    form.appendChild(submitBtn);
}

addButton.addEventListener('click', ()=>{
    moodFormSwitch();
})
