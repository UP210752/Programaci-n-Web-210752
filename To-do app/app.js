const userSelect = document.getElementById('select-users');
const userContainer = document.getElementById('user-container');
const taskContainer = document.getElementById('task-container');

let usuarios;
let tareas;

document.getElementById("select-users").addEventListener("change", function () {
    const userId = parseInt(this.value);
    const usuarioSeleccionado = usuarios.find(usuario => usuario.id === userId);
    if (usuarioSeleccionado) {
        document.getElementById("name").innerText = usuarioSeleccionado.firstname + " " + usuarioSeleccionado.lastname;
        document.getElementById("mail").innerText = usuarioSeleccionado.email;
    }
});

function getUsers() {
    return fetch("http://127.0.0.1:5500/usuarios.json")
        .then(function (response) {
            return response.json();
        })
        .then(function(data) {
            usuarios = data;
        });
}

function getTasks() {
    return fetch("http://127.0.0.1:5500/tareas.json")
        .then(function (response) {
            return response.json();
        })
        .then(function(data) {
            tareas = data;
        });
}

document.getElementById("btn_tareas").addEventListener("click", function () {
    debugger;
    const userId = parseInt(document.getElementById('select-users').value);
    const tasksUsuario = tareas.filter(task => task.userId === userId);
    document.getElementById('task-container').innerHTML = '';
    tasksUsuario.forEach(task => {
        const taskItem = document.createElement('li');
        taskItem.innerHTML = `<span>${task.title}</span> <input type="checkbox" ${task.completed ? 'checked' : ''}>`;
        document.getElementById('task-container').appendChild(taskItem);
    });
});

getUsers();
getTasks();
