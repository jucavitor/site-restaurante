<?php
// NESSE ARQUIVO IREI TRABALHAR COM AS PRINCIPAIS FUNÇÕES RELACIONADAS A BANCO DE DADOS.

include_once('config.php');
// 01 CADASTRAR USUARIO AO BANCO DE DADOS

function varifica_cliente($conexao,$nome,$telefone,$senha,$endereço,$email){

    $verifica = $conexao->prepare("SELECT validacao_cliente(?, ?)");
    $verifica->bind_param("ss",$email, $telefone);
    $verifica->execute();
    $verifica->bind_result($resultado);
    $verifica->fetch();
    $verifica->close();

    if ($resultado == 0 ){
        //pode inserir, já que nao tem no banco
        $inserir = $conexao->prepare("CALL inserir_cliente(?,?,?,?,?)");
        $inserir->bind_param("sssss", $nome,$telefone,$senha,$endereço,$email);
        if($inserir->execute()){
            print("Cliente Cadastrado com Sucesso!");
        }
        else{
            print("Erro ao cadastrar o Cliente". $inserir->error);
        }
    }   
    else{
        //não pode inserir, já possu e cadastro 
        print("Usuarios já cadastrados");
    }
}
?>