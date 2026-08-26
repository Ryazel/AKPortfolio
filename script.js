let name = "Neil Armstrong"
console.log("Username: " + name);

function changetitle() {
    document.getElementById("title").innerHTML =
    "I Learned it";
}

function changecolor() {
    document.getElementById("title").style.color = "darkblue";
}

function changeall() {
    document.getElementById("body").style.backgroundImage = "url('images/senator-armstrong.gif')";
    document.getElementById("title").style.fontSize = "65px";
    document.getElementById("title").innerHTML = "Nanomachines Son!";
    document.getElementById("title").style.color = "red";
}

function changebg() {
    document.getElementById("body").style.backgroundColor = "darkblue"
}

function changeparagraphsize() {
    document.getElementById("paragraph").style.fontSize = "30px";
}

function changebuttonsize() {
    document.getElementById("mainbutton").style.padding = " 20px 30px";
}

function changebuttonborder() {
    document.getElementById("mainbutton").style.borderRadius = "80px"
}

function changebuttoncolor() {
    document.getElementById("mainbutton").style.backgroundColor = "white"
}