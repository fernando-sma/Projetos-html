export class carta{
    constructor (public tipo:string){};
    ativar(){
        document.write('A carta ' + this.tipo + ' foi ativada <br>');
    }
    descartar(){
        document.write('A carta ' + this.tipo + ' foi descartada <br>')
    }
    
}


