<?php
    function inserirResponsavel($conexao, $TB_NOME_COMPLETO_RESPONSAVEL, $TB_EMAIL_RESPONSAVEL, $TB_NUMERO_RESPONSAVEL)
    {
        $sql="insert into tb_responsavel values (default, 
        '$TB_NOME_COMPLETO_RESPONSAVEL',
        '$TB_EMAIL_RESPONSAVEL',
        '$TB_NUMERO_RESPONSAVEL')";

        return mysqli_query($conexao, $sql);
    }
?>