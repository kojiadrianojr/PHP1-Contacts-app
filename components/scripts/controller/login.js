//BUTTONS
const buttonComponent = (props) => {
    let button = document.createElement('button');
    button.setAttribute('id', props.id);
    button.setAttribute('type', props.type);
    button.className = `${props.class}`;
    button.setAttribute('name', props.name);
    button.setAttribute('value', props.value);
    return button;
}

let loginButtons = [{
    type: 'submit',
    id: 'loginBtn',
    class: 'btn login',
    name: 'Login',
    value: 'login'
},{
    type: 'button',
    id: 'register',
    class: 'btn',
    name: 'Register',
    value: 'register'
}]

//LOGIN FORM
let loginForm = [{
    type: 'text',
    placeholder: 'Username',
    name: 'username',
    id: 'inputusername',
},{
    type: 'password',
    placeholder: 'Password',
    name: 'password',
    id: 'inputpass'
}]


const inputComponent = (props) => {
    let input = document.createElement('input');
    input.setAttribute('type', props.type);
    input.setAttribute('placeholder', props.placeholder);
    input.setAttribute('name', props.name);
    input.setAttribute('id', props.id);
    input.className = 'form-control';
    return input;
}

loginForm.map( form => {
    let node = document.createElement('div');
    let nodeTitle = document.createElement('label');
    let textNode = document.createTextNode(form.placeholder);
    let inputDiv = document.createElement('div');
    let input = inputComponent(form);
    node.className = 'form-group row';
    nodeTitle.setAttribute('for', form.id);
    nodeTitle.className += 'col-sm-2 col-form-label';
    nodeTitle.appendChild(textNode);
    inputDiv.className = 'col-sm-10';
    node.appendChild(nodeTitle);
    node.appendChild(inputDiv);
    inputDiv.appendChild(input);
    document.querySelector('.forms').appendChild(node);
})

let buttonGroup = document.createElement('div');
document.querySelector('.forms').appendChild(buttonGroup);

loginButtons.map(btn => {
    let textNode = document.createTextNode(btn.name);
    let button = buttonComponent(btn);
    buttonGroup.className = 'form-group flex-container';
    button.appendChild(textNode);
    buttonGroup.appendChild(button);
})








