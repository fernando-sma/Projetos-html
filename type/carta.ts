import {carta} from './modelos';

let buracoNegro = new carta('Buraco negro');
console.log(buracoNegro);
buracoNegro.ativar();

class monstro extends carta {
    nome: string;
    atk: number;
    constructor(){
        super('Monstro');
    }
    ativar(){
        document.write('a carta ' + this.nome + ' com '+ this.atk + ' de ataque foi ativada <br>')
    }
}

document.write('k');

let soitsu = new monstro();
soitsu.nome = 'Soitsu';
soitsu.atk = 0;
soitsu.ativar();
 