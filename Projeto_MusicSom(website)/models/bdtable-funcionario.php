<?php
    function inserirFuncionario($conexao, $TB_NOME_FUNCIONARIO, $TB_SOBRENOME_FUNCIONARIO, $TB_EMAIL_FUNCIONARIO, $TB_TELEFONE_FUNCIONARIO, $TB_DT_NAS_FUNCIONARIO, $TB_CPF_FUNCIONARIO, $TB_RG_FUNCIONARIO, $TB_CIDADE_FUNCIONARIO, $TB_BAIRRO_FUNCIONARIO, $TB_CEP_FUNCIONARIO, $TB_ENDERECO_FUNCIONARIO, $TB_ESTADO_CIVIL_FUNCIONARIO, $TB_NOME_CURRICULO_FUNCIONARIO, $TB_CURRICULO_FUNCIONARIO, $PK_TB_ID_CARGO, $TB_STATUS_FUNCIONARIO, $TB_DT_ADMISSAO_FUNCIONARIO, $PK_TB_ID_CURSO, $PK_TB_ID_CONTA)
    {
        $sql="insert into tb_funcionario values (default, 
        '$TB_NOME_FUNCIONARIO',
        '$TB_SOBRENOME_FUNCIONARIO',
        '$TB_EMAIL_FUNCIONARIO',
        '$TB_TELEFONE_FUNCIONARIO',
        '$TB_DT_NAS_FUNCIONARIO',
        '$TB_CPF_FUNCIONARIO',
        '$TB_RG_FUNCIONARIO',
        '$TB_CIDADE_FUNCIONARIO',
        '$TB_BAIRRO_FUNCIONARIO',
        '$TB_CEP_FUNCIONARIO',
        '$TB_ENDERECO_FUNCIONARIO',
        '$TB_ESTADO_CIVIL_FUNCIONARIO',
        '$TB_NOME_CURRICULO_FUNCIONARIO',
        '$TB_CURRICULO_FUNCIONARIO',
        '$PK_TB_ID_CARGO',
        '$TB_STATUS_FUNCIONARIO', 
        '$TB_DT_ADMISSAO_FUNCIONARIO',
        '$PK_TB_ID_CURSO',
        '$PK_TB_ID_CONTA')";

        return mysqli_query($conexao, $sql);
    }
?>