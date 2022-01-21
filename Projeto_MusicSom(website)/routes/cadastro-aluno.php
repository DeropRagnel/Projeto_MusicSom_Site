<?php
    ini_set('default_charset','UTF-8');
    include ("../models/conexao.php");
    include ("../models/bdtable-aluno.php");

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
    $PK_TB_ID_RESPONSAVEL = 1;
    $PK_TB_ID_CONTA = 1;


    $aniversario = $TB_DT_NAS_ALUNO;

    $aniversario = explode("/", $aniversario);

    $idade = (date("md", date("U", mktime(0, 0, 0, $aniversario[0], $aniversario[1], $aniversario[2]))) > date("md")
        ? ((date("Y") - $aniversario[2]) - 1)
        : (date("Y") - $aniversario[2]));

    if($idade<18)
    {
        $aviso="Menor_de_idade";
        
        header("Location: ../views/pag_cadastro_aluno.php?aviso=$aviso&curso=$PK_TB_ID_CURSO");

    }else{       
        if(inserirAluno($conexao, $TB_NOME_ALUNO, $TB_SOBRENOME_ALUNO, $TB_EMAIL_ALUNO, $TB_TELEFONE_ALUNO, $TB_DT_NAS_ALUNO, $TB_CPF_ALUNO, $TB_RG_ALUNO, $TB_CIDADE_ALUNO, $TB_BAIRRO_ALUNO, $TB_CEP_ALUNO, $TB_ENDERECO_ALUNO, $PK_TB_ID_CURSO, $TB_STATUS_ALUNO, $TB_DT_MATRICULA_ALUNO, $PK_TB_ID_RESPONSAVEL, $PK_TB_ID_CONTA))
        {
            header("Location: ../views/pag_confirm.php");
                
        }else{
            $msg=mysqli_error($conexao);
            echo ($msg);
        }
    }   
    
?>

