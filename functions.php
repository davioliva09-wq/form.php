<?php
// functions.php - APENAS FUNÇÕES PHP

function exibirErro($erro) {
    if($erro) {
        return true;
    }
    return false;
}
?>

<script>
// Controle de login (PHP → JS)
let usuarioLogado = <?php echo isset($_SESSION['usuario_logado']) ? 'true' : 'false'; ?>;

// Alternar cor
function efeito() {
    const body = document.body;
    const letras = document.querySelector('h1');

    if (body.style.backgroundColor === '' || body.style.backgroundColor === 'white') {
        body.style.backgroundColor = '#000';
        if (letras) letras.style.color = '#bbbbf9';
    } else {
        body.style.backgroundColor = '#fff';
        if (letras) letras.style.color = 'black';
    }
}

// Mostrar / esconder senha
function toggleSenha() {
    const input = document.getElementById('senha');
    const botao = document.getElementById('btnToggle');

    if (!input || !botao) return;

    if (input.type === 'password') {
        input.type = 'text';
        botao.innerText = 'Esconder';
    } else {
        input.type = 'password';
        botao.innerText = 'Mostrar';
    }
}

// Redirecionamentos
function matricula(){
    window.location.href = "cadastro.php";
}

function voltar(){
    window.location.href = "index.php";
}

// Verificação de acesso
function veri(instrumento) {
    if (!usuarioLogado) {
        window.location.href = 'login.php'; 
        return;
    }

    switch(instrumento) {
        case 'Clarinete': 
            window.location.href = 'ClarineteAula.php'; 
            break;
        case 'Sax':
            window.location.href = 'SaxAula.php'; 
            break;
        case 'Violino': 
            window.location.href = 'violinaula.php';
            break;
        default:
            console.log('Instrumento não reconhecido');
    }
}

// Evento botão senha
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('btnToggle');
    if (btn) {
        btn.addEventListener('click', toggleSenha);
    }
});
</script>