function cima(){

  var  elem = document.getElementById("animacao");
  var  pos = 0;
  pos += elem.offsetTop;
  pos--;
  elem.style.top = pos + 'px';

}
function baixar(){
  var  elem = document.getElementById("animacao");
  var  pos = 0;
  pos += elem.offsetTop;

  if (pos == 350) {}else{
  pos++;
  elem.style.top = pos + 'px';  
  }
}

function direita(){
  var  elem = document.getElementById("animacao");
  var  pos = 0;
  pos += elem.offsetLeft;
  if (pos ==350) {}else{
    pos++;
    elem.style.left = pos + 'px';
  }
}
function esquerda(){
  var  elem = document.getElementById("animacao");
  var  pos = 0;
  pos += elem.offsetLeft;
  if (pos == 0) {}else{
     pos--;
     elem.style.left = pos + 'px';
  }
}
function definirY(){
  var  elem = document.getElementById("animacao");
  var pos = prompt("digite o valor do eixo y");
  if (pos > 350 || pos<0) {
    alert("posição invalida");
  }else{
    elem.style.top = pos + 'px';
  }

}
function definirX(){
  var  elem = document.getElementById("animacao");
  var pos = prompt("digite o valor do eixo x");
  if (pos > 350 || pos<0) {
    alert("posição invalida");
  }else{
    elem.style.left = pos + 'px';
  }
}