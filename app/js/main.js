$(function() {
    mostrar_registro();
    mostrar_login();
    login_registro();
})



var login_registro = function() {
    $("#formLogin").submit(function(e) {
        e.preventDefault();
        Notiflix.Block.Standard('#formLogin', 'Loading...');
    })
}