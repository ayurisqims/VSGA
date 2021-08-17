
function val_login() {

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "user" && password == "123") {
        alert('Anda berhasil login !');
    } else if (username != "" || password !="") {
        alert('Email atau password salah !');
    }else{
        alert('Masukkan email dan password Anda !');
    }
}
