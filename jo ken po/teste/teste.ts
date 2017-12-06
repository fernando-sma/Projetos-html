let nada = (objeto) => document.write(`Tem nada  nesse(a) ${objeto}`);
nada('mouse <br>');

let dobra = (numero: number) => document.write(Math.pow(numero,100));
dobra(2);

function mudaCor (nome:string){
    document.body.style.backgroundColor = nome;
}

function aleatorio(inferior,superior){
    let numPossibilidades = superior - inferior
  let   aleat = Math.random() * numPossibilidades
    aleat = Math.floor(aleat)
    return parseInt(inferior) + aleat
 } 

function dar_cor_aleatoria(){
   let hexadecimal = new Array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F")
    let cor_aleatoria = "#";
    for (let i=0;i<6;i++){
     let  posarray = aleatorio(0,hexadecimal.length)
       cor_aleatoria += hexadecimal[posarray]
    }
    return cor_aleatoria
 } 

 
    mudaCor(dar_cor_aleatoria());
   
    location.reload();



