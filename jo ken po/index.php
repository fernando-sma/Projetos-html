<html>
<head>
	<title>Pedra, papel e tesoura</title>
</head>
<body>

<!--
<script>
    function pega_tempo(){
    alert("Duração da faixa: "+document.getElementById("demo").duration);
    } 
    function alertaPausa(){
    alert("Olá!\nPor que pausou? Clique Play pra tocar o resto!");
    }
 </script>
    <!--
    <audio id="demo" controls onpause="alertaPausa()">
    <source src="arquivo.ogg" type="audio/ogg"> 
    <source src="mus1.mp3">
    Seu navegador não suporta áudio em HTML5, atualize-o.
    </audio>
-->


<audio src="mus1.mp3" id="demo" onpause="alertaPausa()"></audio>
    <div>
    <button onclick="document.getElementById('demo').play()">►</button>
    <button onclick="document.getElementById('demo').pause()">||</button>
    <button onclick="document.getElementById('demo').volume+=0.1">▲</button>
    <button onclick="document.getElementById('demo').volume-=0.1">▼</button>
    <button onmousedown="document.getElementById('demo').currentTime+=2">»</button>
    <button onmousedown="document.getElementById('demo').currentTime-=2">«</button>
    </div> 
    <button onclick="pega_tempo()" type="button">CLIQUE-ME</button>
  


</html>

<?php
	
	?>