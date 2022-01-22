<?php
    include("../config/config.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../lib/css/bootstrap/bootstrap.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <script type="text/javascript" src="../lib/js/jquery/jquery.js"></script>
        <script src="../lib/js/pooper.min.js"></script>
        <script src="../lib/js/bootstrap/bootstrap.bundle.js"></script>
        <script src="../lib/js/jquery/jquery.mask.min.js"></script>

        <title>Cadastro de usuário</title>
    </head>
    <body style="background-color:rgb(0, 37, 54);">
        <div class="container" style="background-color:rgba(151, 198, 226, 0.8);padding:5vh;margin-top:5vh;">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <h3>Cadastrar Usuário</h3>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <div class="dropdown dropleft">
                                <a href="<?php echo DIRPAGE.'index.php'; ?>" target=self class="btn btn-dark" >
                                   Sair
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>     
            <br>
            <form id="formulario">
                        <div class="form-group">
                            <input type="hidden" name="idCliente" id="idCliente">
                            <input name="nome" type="text" class="form-control-sm form-control mb-2" id="nome" placeholder="Nome Completo" required="" aria-required="true">
                        </div>
                        <div class="form-inline">
                            <div class="form-group">
                                <input name="cpf" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="cpf" placeholder="CPF" required="" aria-required="true" maxlength="11" onkeypress='return SomenteNumero(event)'>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="dataNasc" style="width: 13vh;">Data de Nascimento:</label><input id="dataNasc" name="dataNasc" class="form-control" type="date" required="" aria-required="true" style="width: 200px;">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="idade" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="idade" placeholder="Idade" aria-required="true" maxlength="3" onkeypress='return SomenteNumero(event)'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="cepCliente" id="cepCliente" type="text" class="form-control-sm form-control mb-2" id="cep" placeholder="CEP" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="endereco" id="endereco" type="text" class="form-control-sm form-control mb-2" id="endereco" placeholder="Endereço" required="" aria-required="true">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="telefone" type="text" class="form-control-sm form-control mb-2" id="telefone" placeholder="Telefone" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control-sm form-control mb-2" id="email" placeholder="E-mail" required="" aria-required="true">
                            <div id="msgErroemail" class="help-block with-errors"></div>
                        </div>

                        <br>
                        <div class="form-inline">
                            <div class="form-group">
                                <input name="username" type="text" class="form-control-sm form-control mb-2 mr-2 pr-5" id="username" placeholder="Usuario" required="" aria-required="true">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control-sm form-control mb-2" id="senha" placeholder="Senha" required="" aria-required="true" data-minleigth="6">
                            </div>
                        </div>

                        <br>
                        <div id="mostrarResult"></div>
                        <button id="salvar" type="submit" class="btn btn-outline-success">Cadastrar</button>
                    </form>
        </div>
    </body>
</html>


<script type="text/javascript">
     //FUNCOES DE VALIDACAO
    //Para campos numericos só aceitarem numeros
    function SomenteNumero(e) {
        var tecla = (window.event) ? event.keyCode : e.which;
        if ((tecla > 47 && tecla < 58)) return true;
        else {
            if (tecla == 8 || tecla == 0) return true;
            else return false;
        }
    };
    //MODAL CADASTRO
    $("#salvar").click(function adicionarCliente() {
        if ($('#nome').val() == '' ||
            $('#cpf').val() == '' ||
            $('#email').val() == '' ||
            $('#cepCliente').val() == '' ||
            $('#endereco').val() == '' ||
            $('#telefone').val() == '' ||
            $('#dataNasc').val() == ''||
            $('#username').val() == ''||
            $('#senha').val() == ''
        ) {

            if ($('#nome').val() == '') {
                $('#nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#cpf').val() == '') {
                $('#cpf').css({
                    'border-color': 'red'
                });
            };
            if ($('#cepCliente').val() == '') {
                $('#cepCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#endereco').val() == '') {
                $('#endereco').css({
                    'border-color': 'red'
                });
            };
            if ($('#telefone').val() == '') {
                $('#telefone').css({
                    'border-color': 'red'
                });
            };
            if ($('#dataNasc').val() == '') {
                $('#dataNasc').css({
                    'border-color': 'red'
                });
            };
            if ($('#email').val() == '') {
                $('#email').css({
                    'border-color': 'red'
                });
            }; 
            if ($('#username').val() == '') {
                $('#username').css({
                    'border-color': 'red'
                });
            }; 
            if ($('#senha').val() == '') {
                $('#senha').css({
                    'border-color': 'red'
                });
            }; 
            

            $('#mostrarResult').html("Insira todos os dados!");
        } else {
            var nome = $('#nome').val();
            var cpf = $('#cpf').val();
            var email = $('#email').val();
            var cep = $('#cepCliente').val();
            var endereco = $('#endereco').val();
            var telefone = $('#telefone').val();
            var data_nasc = $('#dataNasc').val();
            var idade = $('#idade').val();
            var username= $('#username').val();
            var senha = $('#senha').val();
            var url = '<?=DIRPAGE?>controllers/funcCadastro.php?&nome=' + nome + '&cpf=' + cpf + '&email=' + email + '&cep=' + cep + '&endereco=' 
            + endereco + '&telefone=' + telefone + '&data_nasc=' + data_nasc + '&idade=' + idade + '&username=' + username + '&senha=' + senha;

            $.get(url, function(dataReturn) {
                alert("Usuário cadastro no banco de dados!");
                $("#formulario input").val("");
            });
        }

    });
    
    $(document).ready(function() {

        //CEP
        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#endereco").val("");
        }
        //Quando o campo cep perde o foco.
        $("#cepCliente").blur(function() {
            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');
            //Verifica se campo cep possui valor informado.
            if (cep != "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                //Valida o formato do CEP.
                if (validacep.test(cep)) {
                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#endereco").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#endereco").val('Rua: ' + dados.logradouro + ' - Bairro: ' + dados.bairro + ' - Cidade: ' + dados.localidade + ' - UF: ' + dados.uf);
                        } 
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } 
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            }
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });

        //Calculo Data de Nascimento e preenchimento na Idade
        document.getElementById("dataNasc").addEventListener('change', function() {
        var data = new Date(this.value);
        if(data.getFullYear() > 1900)
            document.getElementById("idade").value = calcularAno(this.value);
        });

        function calcularAno(data) {
            var dob = new Date(data);
            var dataAtual = new Date();
            var anoAtual = dataAtual.getFullYear();
            var aniversarioAno = new Date(anoAtual, dob.getMonth(), dob.getDate());
            var age = anoAtual - dob.getFullYear();
            if(aniversarioAno > dataAtual) {
                age--;
            }
            return age;
        }

        function calcular(data) {
            var data = document.form.dataNasc.value;
            alert(data);
            var partes = data.split("/");
            var junta = partes[2]+"-"+partes[1]+"-"+partes[0];
            document.form.idade.value = (calcularAno(junta));
        }
    });


</script>
