function changetitlecolor() {
    document.getElementById("header").style.fontFamily = "Verdana, Geneva, Tahoma, sans-serif";
}

const NewHeader = document.getElementById("header");
const NewButton = document.getElementById("button1");
const Div1 = document.getElementById("div1");

NewButton.addEventListener("click", function(){
    NewHeader.innerHTML = "Devil May Cry 5";
    NewHeader.style.textShadow = "0 0 10px white";
    Div1.style.backgroundColor = "rgb(72,0,0)"
    NewHeader.style.color = "white";
})