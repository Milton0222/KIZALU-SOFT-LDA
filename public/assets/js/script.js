// Captura o elemento do submenu e o link "Cadastrar"
const submenu = document.querySelector('.submenu');
const submenuTrigger = document.getElementById('submenu-trigger');

// Adiciona um ouvinte de eventos de clique ao link "Cadastrar"
submenuTrigger.addEventListener('click', function (e) {
  e.preventDefault(); // Impede que o link seja seguido

  // Alterna a classe "visible" no submenu para mostrar ou ocultar
  submenu.classList.toggle('visible');
});



// Captura elementos do HTML
const usuarioModal = document.getElementById('usuarioModal');
const produtoModal = document.getElementById('produtoModal');
const objectoModal = document.getElementById('objectoModal');
const mesasModal = document.getElementById('mesasModal');
const igredienteModal = document.getElementById('igredienteModal');
const overlay = document.getElementById('overlay');


const openUsuarioModal = document.getElementById('openUsuarioModal');
const openProdutoModal = document.getElementById('openProdutoModal');
const openObjectoModal = document.getElementById('openObjectoModal');
const openMesasModal = document.getElementById('openMesasModal');
const openIgredienteModal = document.getElementById('openIgredienteModal');


const closeUsuarioModal = document.getElementById('closeUsuarioModal');
const closeProdutoModal = document.getElementById('closeProdutoModal');
const closeObjectoModal = document.getElementById('closeObjectoModal');
const closeMesasModal = document.getElementById('closeMesasModal');
const closeIgredienteModal = document.getElementById('closeIgredienteModal');

// Função para abrir modais
function openModal(modal) {
    modal.style.display = 'block';
    overlay.style.display = 'block';
}

// Função para fechar modais
function closeModal(modal) {
    modal.style.display = 'none';
    overlay.style.display = 'none';
}

// Event listeners para abrir e fechar modais
openUsuarioModal.addEventListener('click', () => {
    openModal(usuarioModal);
});

closeUsuarioModal.addEventListener('click', () => {
    closeModal(usuarioModal);
});

openProdutoModal.addEventListener('click', () => {
    openModal(produtoModal);
});

closeProdutoModal.addEventListener('click', () => {
    closeModal(produtoModal);
});

openObjectoModal.addEventListener('click', () => {
    openModal(objectoModal);
});

closeObjectoModal.addEventListener('click', () => {
    closeModal(objectoModal);
});

openMesasModal.addEventListener('click', () => {
    openModal(mesasModal);
});

closeMesasModal.addEventListener('click', () => {
    closeModal(mesasModal);
});

openIgredienteModal.addEventListener('click', () => {
    openModal(igredienteModal);
});

closeIgredienteModal.addEventListener('click', () => {
    closeModal(igredienteModal);
});

