var anterior = 0;
var anteriorP = 0;
var proxima = 4;
var proximaP = 4;
var imgs = ["img/bike.jpeg", "img/violao.jfif", "img/carro.jfif", "img/mae.jpg", "img/pai.jfif"];

function imganterior(){
    while(anterior < (anteriorP+1)){
        document.getElementById("imgopc").src = imgs[anterior];
        document.getElementById("imgopc").style.width = "300px";
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
        document.getElementById("imgopc").style.width = "300px";
        proxima--;
    }
    proximaP--;
    if (proximaP < 0){
        proximaP = 4;
        proxima = 4;
    }
}

