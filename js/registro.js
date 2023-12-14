document.getElementById("loginBtn1").addEventListener("click", function() {
    document.getElementById("loginModal1").style.display = "block";
});

document.getElementsByClassName("close1")[0].addEventListener("click", function() {
    document.getElementById("loginModal1").style.display = "none";
});

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("nombre").value;
    var username = document.getElementById("apellido").value;
    var username = document.getElementById("mail").value;
    var password = document.getElementById("password").value;

});