var anterior = 0;
var anteriorP = 0;
var proxima = 0;
var imgs = ["<img src='/img/bike.jpeg' />", "<img src='img/violao.jfif' />", "<img src='img/bike.jpeg' />"];

function imganterior(){
    while(anterior < (anteriorP+1)){
        document.getElementById("imgopc").src = imgs[anterior];
        anterior++;
    }
}