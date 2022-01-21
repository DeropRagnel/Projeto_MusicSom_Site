<?php
    function inserirAluno($conexao, $TB_NOME_ALUNO, $TB_SOBRENOME_ALUNO, $TB_EMAIL_ALUNO, $TB_TELEFONE_ALUNO, $TB_DT_NAS_ALUNO, $TB_CPF_ALUNO, $TB_RG_ALUNO, $TB_CIDADE_ALUNO, $TB_BAIRRO_ALUNO, $TB_CEP_ALUNO, $TB_ENDERECO_ALUNO, $PK_TB_ID_CURSO, $TB_STATUS_ALUNO, $TB_DT_MATRICULA_ALUNO, $PK_TB_ID_RESPONSAVEL, $PK_TB_ID_CONTA)
    {
        $sql="insert into tb_aluno values (default, 
        '$TB_NOME_ALUNO',
        '$TB_SOBRENOME_ALUNO',
        '$TB_EMAIL_ALUNO',
        '$TB_TELEFONE_ALUNO',
        '$TB_DT_NAS_ALUNO',
        '$TB_CPF_ALUNO',
        '$TB_RG_ALUNO',
        '$TB_CIDADE_ALUNO',
        '$TB_BAIRRO_ALUNO',
        '$TB_CEP_ALUNO',
        '$TB_ENDERECO_ALUNO',
        '$PK_TB_ID_CURSO',
        '$TB_STATUS_ALUNO',
        '$TB_DT_MATRICULA_ALUNO',
        '$PK_TB_ID_RESPONSAVEL',
        '$PK_TB_ID_CONTA')";

        return mysqli_query($conexao, $sql);
    }
?>