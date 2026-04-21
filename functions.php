<?php
session_start();
?>
<script>

function efeito() {
    const body = document.querySelector('body');
    const letras = document.querySelector('h1');

    if (body.style.backgroundColor === '' || body.style.backgroundColor === 'rgb(255, 255, 255)') {
        body.style.backgroundColor = '#000';
        letras.style.color = 'rgb(187, 187, 249)';
    } else {
        body.style.backgroundColor = '#fff';
        letras.style.color = 'black';
    }
    alert('cor mudada');
}



function most(){

const mud = document.querySelector('.senha')

const botao = document.querySelector('.botao')
if(mud.getAttribute ('type') === 'password'){
    mud.setAttribute ('type', 'text');
botao.innerText = 'esconder'}
else {
        mud.type = 'password'
        botao.innerText = 'mostrar'
        
    }

}



//utilizar o innerTetxt para a tag <button>



let usuarioLogado = <?php echo isset($_SESSION['usuario_logado']) ? 'true' : 'false'; ?>;

function matricula(){
    window.location.href = "cadastro.php";
}

function voltar(){
    window.location.href = "index.php";
}

function veri(instrumento) {
    if (!usuarioLogado) {
        window.location.href = 'login.php'; 
    } else {
        switch(instrumento) {
            case 'Clarinete': 
                window.location.href = 'ClarineteAula.php'; 
                break;
            case 'Sax': // Added missing value
                window.location.href = 'SaxAula.php'; 
                break;
            case 'Violino': 
                window.location.href = 'ClarineteAula.php'; 
                break;
            default:
                console.log('Instrumento não reconhecido');
        }
    }
}




    

/*function dadosCurso($curso){

switch($curso){

    case "Clarinete":
        $nomeCurso = "Curso de Clarinete";
        $valor = "R$ 100,00";
    break;

    case "Sax":
        $nomeCurso = "Curso de Sax";
        $valor = "R$ 120,00";
    break;

    case "Violino":
        $nomeCurso = "Curso de Violino";
        $valor = "R$ 150,00";
    break;

    default:
        $nomeCurso = "Curso desconhecido";
        $valor = "R$ 0,00";
}

return [$nomeCurso, $valor];
}*/




function javalielson(){
    const bot = document.querySelector('.botao')
    const k = document.querySelector('.senha')

    if(k.type === 'password'){
        k.type = 'text';
        bot.innerText = 'esconder'

    } 
    else{
        k.type = 'password';
        bot.innerText = 'mostrar';
    }
}
</script>