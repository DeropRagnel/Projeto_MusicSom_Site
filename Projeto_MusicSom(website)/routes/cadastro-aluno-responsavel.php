<?php
    ini_set('default_charset','UTF-8');

    include ("../models/conexao.php");
    include ("../models/bdtable-responsavel.php");
    include ("../models/bdtable-aluno.php");

    $TB_NOME_COMPLETO_RESPONSAVEL = $_POST['input_nome-resp'];
    $TB_EMAIL_RESPONSAVEL = $_POST['input_email-resp'];
    $TB_NUMERO_RESPONSAVEL = $_POST['input_tel-resp'];

    if(inserirResponsavel($conexao, $TB_NOME_COMPLETO_RESPONSAVEL, $TB_EMAIL_RESPONSAVEL, $TB_NUMERO_RESPONSAVEL))
    {
        $TB_NOME_ALUNO = $_POST['input_nome'];
        $TB_SOBRENOME_ALUNO = $_POST['input_sobrenome'];
        $TB_EMAIL_ALUNO = $_POST['input_email'];
        $TB_TELEFONE_ALUNO = $_POST['input_tel'];
        $TB_DT_NAS_ALUNO = date("d/m/Y", strtotime($_POST['input_dtnasc']));
        $TB_CPF_ALUNO = $_POST['input_cpf'];
        $TB_RG_ALUNO = $_POST['input_rg'];
        $TB_CIDADE_ALUNO = $_POST['input_cidade'];
        $TB_BAIRRO_ALUNO = $_POST['input_bairro'];
        $TB_CEP_ALUNO = $_POST['input_cep'];
        $TB_ENDERECO_ALUNO = $_POST['input_endereco'];
        $PK_TB_ID_CURSO = $_POST['input_curso'];
        $TB_STATUS_ALUNO = 'Inativo';
        $TB_DT_MATRICULA_ALUNO = NULL;
        $PK_TB_ID_RESPONSAVEL = mysqli_insert_id($conexao);
        $PK_TB_ID_CONTA = 1;

        if(inserirAluno($conexao, $TB_NOME_ALUNO, $TB_SOBRENOME_ALUNO, $TB_EMAIL_ALUNO, $TB_TELEFONE_ALUNO, $TB_DT_NAS_ALUNO, $TB_CPF_ALUNO, $TB_RG_ALUNO, $TB_CIDADE_ALUNO, $TB_BAIRRO_ALUNO, $TB_CEP_ALUNO, $TB_ENDERECO_ALUNO, $PK_TB_ID_CURSO, $TB_STATUS_ALUNO, $TB_DT_MATRICULA_ALUNO, $PK_TB_ID_RESPONSAVEL, $PK_TB_ID_CONTA))
        {
            header("Location: ../views/pag_confirm.php");
            
        }else{
            $msg=mysqli_error($conexao);
            echo ($msg);
        }
    }else{
        $msg=mysqli_error($conexao);
        echo ($msg);
    }
?>