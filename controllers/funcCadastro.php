<?php 

require '../model/dbConexao.php';

if(isset($_GET['id'])){
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['nome'])){
    $nome           = $_GET['nome'];
    $cpf 			= $_GET['cpf'];
    $email 			= $_GET['email'];
    $cep 			= $_GET['cep'];
    $endereco 		= $_GET['endereco'];
    $telefone 		= $_GET['telefone'];
    $data_nasc	    = $_GET['data_nasc'];
    $idade	    = $_GET['idade'];
    $username	    = $_GET['username'];
    $senha	    = $_GET['senha'];
    
}
    $sql = "INSERT INTO usuario(nome,cpf,email,cep,endereco,telefone,data_nasc,idade,username,senha) 
    VALUES ('$nome','$cpf','$email','$cep','$endereco','$telefone','$data_nasc','$idade','$username','$senha')";

 		if(mysqli_query($conn,$sql)){
           $result =  'Salvo com Sucesso!';
		}
		else
		{	
            $result = "Erro! ".mysqli_error($conn);
		}

echo $result;

?>
