"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
exports.__esModule = true;
var modelos_1 = require("./modelos");
var buracoNegro = new modelos_1.carta('Buraco negro');
console.log(buracoNegro);
buracoNegro.ativar();
var monstro = /** @class */ (function (_super) {
    __extends(monstro, _super);
    function monstro() {
        return _super.call(this, 'Monstro') || this;
    }
    monstro.prototype.ativar = function () {
        document.write('a carta ' + this.nome + ' com ' + this.atk + ' de ataque foi ativada <br>');
    };
    return monstro;
}(modelos_1.carta));
document.write('k');
var soitsu = new monstro();
soitsu.nome = 'Soitsu';
soitsu.atk = 0;
soitsu.ativar();
