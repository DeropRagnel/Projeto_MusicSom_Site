<?php
    ini_set('default_charset','UTF-8');
    
    include ("../models/conexao.php");
    include ("../models/bdtable-funcionario.php");

    $TB_NOME_FUNCIONARIO = $_POST['input_nome'];
    $TB_SOBRENOME_FUNCIONARIO = $_POST['input_sobrenome'];
    $TB_EMAIL_FUNCIONARIO = $_POST['input_email'];
    $TB_TELEFONE_FUNCIONARIO = $_POST['input_telefone'];
    $TB_DT_NAS_FUNCIONARIO = date("d/m/Y", strtotime($_POST['input_dtnasc']));
    $TB_CPF_FUNCIONARIO = $_POST['input_cpf'];
    $TB_RG_FUNCIONARIO = $_POST['input_rg'];
    $TB_CIDADE_FUNCIONARIO = $_POST['input_cidade'];
    $TB_BAIRRO_FUNCIONARIO = $_POST['input_bairro'];
    $TB_CEP_FUNCIONARIO = $_POST['input_cep'];
    $TB_ENDERECO_FUNCIONARIO = $_POST['input_endereco'];
    $TB_ESTADO_CIVIL_FUNCIONARIO = $_POST['input_estdcivil'];  
    $PK_TB_ID_CARGO = 2;
    $TB_STATUS_FUNCIONARIO = 'Inativo';
    $TB_DT_ADMISSAO_FUNCIONARIO = NULL;
    $PK_TB_ID_CURSO = 1;
    $PK_TB_ID_CONTA = 1;

    $extensao = strtolower(substr($_FILES['input_curriculo']['name'], -4));
    $TB_NOME_CURRICULO_FUNCIONARIO = md5(time()) . $extensao; 
    $diretorio = "upload/";

    move_uploaded_file($_FILES['input_curriculo']['tmp_name'], $diretorio.$TB_NOME_CURRICULO_FUNCIONARIO);

    $TB_CURRICULO_FUNCIONARIO = addslashes(file_get_contents($_FILES['input_curriculo']['tmp_name']));

    if(inserirFuncionario($conexao, $TB_NOME_FUNCIONARIO, $TB_SOBRENOME_FUNCIONARIO, $TB_EMAIL_FUNCIONARIO, $TB_TELEFONE_FUNCIONARIO, $TB_DT_NAS_FUNCIONARIO, $TB_CPF_FUNCIONARIO, $TB_RG_FUNCIONARIO, $TB_CIDADE_FUNCIONARIO, $TB_BAIRRO_FUNCIONARIO, $TB_CEP_FUNCIONARIO, $TB_ENDERECO_FUNCIONARIO, $TB_ESTADO_CIVIL_FUNCIONARIO, $TB_NOME_CURRICULO_FUNCIONARIO, $TB_CURRICULO_FUNCIONARIO, $PK_TB_ID_CARGO, $TB_STATUS_FUNCIONARIO, $TB_DT_ADMISSAO_FUNCIONARIO, $PK_TB_ID_CURSO, $PK_TB_ID_CONTA))
    {
        header("Location: ../views/pag_confirm.php");
    }else{
        $msg=mysqli_error($conexao);
        echo ($msg);
    }
?>