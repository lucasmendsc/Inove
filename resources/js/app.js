require('./bootstrap');

$("#logar").click(function() {
    let email = $('#email').val();
    let senha = $('#senha').val();
    let tk = $('#token').val();

    if (email == "adm" && senha == "adm") {
        sessionStorage.setItem("id_logado", "adm");
    } else {
        $.ajax({
            type: "POST",
            url: "/cliente/logar",
            data: {
                _token: tk,
                email: email,
                senha: senha,
            },
            success: function(data) {
                if (data) {
                    sessionStorage.setItem("id_logado", data['id']);
                    sessionStorage.setItem("saldo_logado", parseInt(data['saldo']));
                    setTimeout(function() {
                        window.location.href = "cliente/produtos";
                    }, 500);
                }
            },

            error: function(dataa) {

                console.log(dataa);

            }
        });
    }
});

function deslogar() {
    sessionStorage.setItem("id_logado", "");
    sessionStorage.setItem("saldo_logado", 0);
    setTimeout(function() {
        window.location.href = "/index";
    }, 500);
}