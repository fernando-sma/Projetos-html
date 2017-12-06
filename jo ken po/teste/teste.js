var nada = function (objeto) { return document.write("Tem nada  nesse(a) " + objeto); };
nada('mouse <br>');
var dobra = function (numero) { return document.write(Math.pow(numero, 100)); };
dobra(2);
function mudaCor(nome) {
    document.body.style.backgroundColor = nome;
}
function aleatorio(inferior, superior) {
    var numPossibilidades = superior - inferior;
    var aleat = Math.random() * numPossibilidades;
    aleat = Math.floor(aleat);
    return parseInt(inferior) + aleat;
}
function dar_cor_aleatoria() {
    var hexadecimal = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
    var cor_aleatoria = "#";
    for (var i = 0; i < 6; i++) {
        var posarray = aleatorio(0, hexadecimal.length);
        cor_aleatoria += hexadecimal[posarray];
    }
    return cor_aleatoria;
}
mudaCor(dar_cor_aleatoria());
location.reload();
