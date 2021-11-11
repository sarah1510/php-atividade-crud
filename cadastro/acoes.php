<?php

    session_start();

    require("../database/conexao.php");

    function validarCampos(){
        $erros = [];

        //validação nome
        if ($_POST["nome"] == "" || !isset($_POST["nome"])) {
            
            $erros[] = "O CAMPO NOME É OBRIGATÓRIO";
        }

        //validação sobrenome
        if ($_POST["sobrenome"] == "" || !isset($_POST["sobrenome"])) {
            
            $erros[] = "O CAMPO SOBRENOME É OBRIGATÓRIO";
        }

        //validação email
        if ($_POST["email"] == "" || !isset($_POST["email"])) {
            
            $erros[] = "O CAMPO EMAIL É OBRIGATÓRIO";
        }

        //validação celular
        if ($_POST["celular"] == "" || !isset($_POST["celular"])) {
            
            $erros[] = "O CAMPO CELULAR É OBRIGATÓRIO";
        }

        return $erros;    
    }


    switch ($_POST["acao"]) {

        case 'inserir':
            $erros = validarCampos();

            if(count($erros) > 0) {
                $_SESSION["erros"] = $erros;
                header("location: cadastro/index.php");

                exit();
            }

            //Inserção de dados na base de dados do mysql
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $celular = $_POST["celular"];

            //Criação da instrução sql de inserção:
            $sql = "INSERT INTO tbl_pessoa 
                (nome, sobrenome, email, celular)
                VALUES ('$nome', '$sobrenome', '$email', '$celular')";

            $resultado = mysqli_query($conexao, $sql);

            header("location: index.php");

            break;



        
        default:
            # code...
            break;
    }

?>