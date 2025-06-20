<?php
// NESSE ARQUIVO IREI TRABALHAR COM AS PRINCIPAIS FUNÇÕES RELACIONADAS A BANCO DE DADOS.

include_once('config.php');
// 01 CADASTRAR USUARIO AO BANCO DE DADOS

function verifica_cliente($conexao,$nome,$telefone,$senha,$endereço,$email){

   $verifica = $conexao->prepare("CALL valicacao_cliente(?, ?)");
    $verifica->bind_param("ss",$email, $telefone);
    $verifica->execute();
    $resultado = $verifica->get_result();
    $verifica->close();

    if ($resultado->num_rows == 0 ){
        //pode inserir, já que nao tem no banco
        $inserir = $conexao->prepare("CALL inserir_cliente(?,?,?,?,?)");
        $inserir->bind_param("sssss", $nome,$telefone,$senha,$endereço,$email);
        if($inserir->execute()){
           // print("Cliente Cadastrado com Sucesso!");
            return "sucesso";
        }
        else{
            //print("Erro ao cadastrar o Cliente". $inserir->error);
            return "erro". $erro;
        }
    }   
    else{
        //não pode inserir, já possu e cadastro 
        //print("Usuarios já cadastrados");
        return "Ja_cadastrado";
    }   
}
?>