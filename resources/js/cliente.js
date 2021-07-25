window.onload = function() {
    $("#cadastrar").click(function() {
        let nome = $('#nome').val();
        let email = $('#email').val();
        let cpf = $('#cpf').val();
        let senha = $('#senha').val();
        let tk = $('#token').val();

        $.ajax({
            type: "POST",
            url: "/cliente/adicionar",
            data: {
                _token: tk,
                nome: nome,
                email: email,
                cpf: cpf,
                senha: senha,
            },
            success: function(data) {
                console.log(data);
            }
        });
    });

    $("#logar").click(function() {

        let email = $('#email').val();
        let senha = $('#senha').val();
        let tk = $('#token').val();

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
                    sessionStorage.setItem("id_cliente", data);
                }
            }
        });

    });

    function deslogar() {
        sessionStorage.setItem("id_cliente", "");
    }
}