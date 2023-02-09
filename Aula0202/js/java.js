var anterior = 0;
var anteriorP = 0;
var proxima = 4;
var proximaP = 4;
var imgs = ["img/pai.jpg", "img/mae.jpg", "img/carro.jpg",  "img/bike.jpeg", "img/violao.jpg"];

function imganterior(){
    while(anterior < (anteriorP+1)){
        document.getElementById("imgopc").src = imgs[anterior];
        anterior++;
    }

    anteriorP++;
    if (anteriorP > 4){
        anteriorP = 0;
        anterior = 0;
    }

}

function proximg(){
    while(proxima > (proximaP-1)){
        document.getElementById("imgopc").src = imgs[proxima];
        proxima--;
    }
    proximaP--;
    if (proximaP < 0){
        proximaP = 4;
        proxima = 4;
    }
}

