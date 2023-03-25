function oblicz(){
    var a = document.querySelector("input").value;
    
    while(a%4 != 0){
        a++
    };
    
    document.querySelector("span").innerHTML = "Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: " + a/4;
};