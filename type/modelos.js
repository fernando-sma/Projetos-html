"use strict";
exports.__esModule = true;
var carta = /** @class */ (function () {
    function carta(tipo) {
        this.tipo = tipo;
    }
    ;
    carta.prototype.ativar = function () {
        document.write('A carta ' + this.tipo + ' foi ativada <br>');
    };
    carta.prototype.descartar = function () {
        document.write('A carta ' + this.tipo + ' foi descartada <br>');
    };
    return carta;
}());
exports.carta = carta;
