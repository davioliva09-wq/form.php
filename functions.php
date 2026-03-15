<?php
session_start()
?>
<script>

let usuarioLogado = <?php echo isset($_SESSION['usuario_logado']) ? 'true' : 'false'; ?>;

function matricula(){
    window.location.href = "cadastro.php";
}

function voltar(){
    window.location.href = "index.php";
}

function veri(instrumento){

if(!usuarioLogado){
    window.location.href = "login.php";
}else{
    window.location.href = instrumento + "aula" + ".php";
}

}

    

</script>