window.onload = function() {
    const campoCep = document.querySelector('#cep');
    const cpnj = document.querySelector('#cnpj');
    const email = document.querySelector('#email');

    cpnj.addEventListener('change', (event) => {
        let cnpjj = cpnj.value;
        let tk = $('#token').val();
        $.ajax({
            type: "POST",
            url: "/empresa/verificarCnpj",
            data: {
                cnpj: cnpjj,
                _token: tk,
            },
            success: function(data) {
                console.log(data);
            },

            error: function(dataa) {

                console.log(dataa);

            }
        });

    });

    email.addEventListener('change', (event) => {

    });

    campoCep.addEventListener('change', (event) => {
        let cep = campoCep.value;

        const options = {
            method: 'GET',
            mode: 'cors',
            cache: 'default'
        }

        fetch(`https://viacep.com.br/ws/${cep}/json/`, options)
            .then(response => {
                response.json()
                    .then(data => preencherCampos(data))
            })
    });

    const preencherCampos = (result) => {
        for (const campo in result) {
            if (document.querySelector("#" + campo)) {
                document.querySelector("#" + campo).value = result[campo]
            }
        }
    }

    $("#cadastrar").click(function() {
        let nome = $('#nome').val();
        let razao = $('#razao').val();
        let cnpj = $('#cnpj').val();
        let email = $('#email').val();
        let rua = $('#logradouro').val();
        let bairro = $('#bairro').val();
        let numero = $('#numero').val();
        let complemento = $('#complemento').val();
        let cidade = $('#localidade').val();
        let estado = $('#uf').val();
        let cep = $('#cep').val();
        let telefone = $('#telefone').val();
        let tk = $('#token').val();

        $.ajax({
            type: "POST",
            url: "/empresa/adicionar",
            data: {
                nome: nome,
                razao: razao,
                cnpj: cnpj,
                email: email,
                rua: rua,
                bairro: bairro,
                numero: numero,
                complemento: complemento,
                cidade: cidade,
                estado: estado,
                cep: cep,
                telefone: telefone,
                _token: tk,
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