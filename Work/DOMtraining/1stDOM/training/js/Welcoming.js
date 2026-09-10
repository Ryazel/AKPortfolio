const buttons = document.getElementById("submit");

buttons.addEventListener("click", function () {
    let Names = document.getElementById("Name").value;
    let Klass = document.getElementById("Class").value;
    alert("Welcome, " + Names + " From " + Klass);
});

buttons.addEventListener("mousedown", function(){
    buttons.classList.add("pressed");
});

buttons.addEventListener("mouseup", function(){
    buttons.classList.remove("pressed");
});