<?php
?>
<script>

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

</script>