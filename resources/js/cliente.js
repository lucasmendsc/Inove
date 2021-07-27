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

window.comprar = function(idProduto, quantidadeProduto) {

    let quantidade = prompt("Digite a quantidade desejada:");

    if (quantidade > quantidadeProduto) {
        alert("Quantidade desejada maior que a disponível!");
    } else {
        let idCliente = sessionStorage.getItem("id_logado");
        let saldoCliente = sessionStorage.getItem("saldo_logado");
        let tk = $('#token').val();

        if (quantidade > saldoCliente) {
            alert("Quantidade maior que saldo! Revise seu pedido.");
        } else {
            $.ajax({
                type: "POST",
                url: "/transacao/adicionar",
                data: {
                    _token: tk,
                    id_produto: idProduto,
                    id_cliente: idCliente,
                    quantidade: quantidade,
                },
                success: function(data) {
                    alert("Transaçao efetuada com sucesso!");
                    sessionStorage.setItem("saldo_logado", parseInt(saldoCliente - quantidade));
                    location.reload();
                },

                error: function(dataa) {

                    console.log(dataa);

                }
            });
        }

    }

}