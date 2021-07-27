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

    $("#editar").click(function() {
        let nome = $('#nome').val();
        let email = $('#email').val();
        let cpf = $('#cpf').val();
        let senha = $('#senha').val();
        let saldo = $('#saldo').val();
        let id = $('#id').val();
        let tk = $('#token').val();

        $.ajax({
            type: "POST",
            url: "/cliente/edit",
            data: {
                _token: tk,
                id: id,
                nome: nome,
                email: email,
                cpf: cpf,
                senha: senha,
                saldo: saldo,
            },
            success: function(data) {
                console.log(data);
            },

            error: function(dataa) {

                console.log(dataa);

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

window.deletarCliente = function(idCliente) {
    var resultado = confirm("Deseja excluir esse cliente?");
    if (resultado) {
        $.ajax({
            type: "GET",
            url: "/cliente/deletar" + idCliente,
            success: function(data) {
                alert("O cliente foi excluído!");
                location.reload();
                return false;
            },

            error: function(dataa) {

                console.log(dataa);

            }
        });
    }
}