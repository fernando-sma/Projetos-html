<?php

echo "<link rel='stylesheet' type='text/css' href='b/css/bootstrap.min.css'>
<script type='text/javascript' src='b/js/jquery.js'></script>
<script src='js/bootstrap.min.js'></script>
<link rel='stylesheet' type='text/css' href='estilo.css'>
";
$nomePessoa = $_POST['nome'];
$senhaa = $_POST['senhaa'];
$senhab = $_POST['senhab'];
$f =  md5($senhaa);
echo '<div id="barra">
   <center><h1><font face="Purisa"><div id = "titulo">Fernando imagens  </div></center></font></h1>';

if ($senhaa == $senhab) {
    echo $nomePessoa;


        if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
   // echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
   // echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
   // echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
   // echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) ;
 
        // Concatena a pasta com o nome
        $destino = '../img/' . $novoNome . '.' . $extensao;

 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
           // echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' <img src = "../img/' . $novoNome . ".". $extensao . '" width="250" height=""250/>';
            

        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo "<script> alert('Favor enviar uma imagem')";
}
else
    echo "<script> alert('Favor enviar uma imagem')";


        $nomeFinalDaImagem = $novoNome . "." .  $extensao;

        $mysqli = new mysqli("localhost","root","","teste");
        $mysqli->query("INSERT INTO `sistema`(`nome`, `senha`, `foto`) VALUES ('$nomePessoa','$f','$nomeFinalDaImagem')")or die("O bixim não deu certo");

}else{
    $message = "As senhas não coincidem";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'> window.location = 'index.html';</script>";
}


?>