function addRequired() {
    document.getElementById("in_name").required = true;
    document.getElementById("numTel").required = true;
    document.getElementById("in_mail").required = true;
    document.getElementById("in_pwd").required = true;
    document.getElementById("in_pwdc").required = true;
}

function removeRequired() {
    document.getElementById("in_name").required = false;
    document.getElementById("numTel").required = false;
    document.getElementById("in_pwdc").required = false;
}

function connx() {
    removeRequired();
    document.getElementById("in_name").style.display = document.getElementById('numTel').style.display = document.getElementById("in_pwdc").style.display = "none";
    document.getElementById("main_container").style.height = "18em";
    document.getElementById("header").innerHTML = "Connectez-vous"
    document.getElementById("but1").style.backgroundColor = "#2e7d32"
    document.getElementById("but2").style.backgroundColor = "rgb(135, 202, 135)"

}

function ins() {
    addRequired();
    document.getElementById("in_name").style.display = document.getElementById('numTel').style.display = document.getElementById("in_pwdc").style.display = "block";
    document.getElementById("main_container").style.height = "27em";
    document.getElementById("header").innerHTML = "Inscrivez-vous"
    document.getElementById("but2").style.backgroundColor = "#2e7d32"
    document.getElementById("but1").style.backgroundColor = "rgb(135, 202, 135)"
    document.getElementById("error-email").style.display = "none";
    document.getElementById('in_sub').value = "S'inscrire";
}