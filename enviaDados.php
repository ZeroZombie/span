<html>
<head>
</head>
<body>

<?php
    $conexao = mysql_connect("localhost","root","root");
               mysql_select_db("span");

    $nome = $_POST["txtNome"];
    $dnasc = $_POST["txtData"];
    $idade = $_POST["txtIdade"];
    $sexo = $_POST["radSexo"];
    $endereco = $_POST["txtEndereco"];
    $CEP = $_POST["txtCEP"];
    $bairro = $_POST["txtBairro"];
    $municipio = $_POST["txtMunicipio"];
    $tel1 = $_POST["txtTel1"];
    $tel2 = $_POST["txtTel2"];
    $email = $_POST["txtEmail"];
    $naturalidae = $_POST["txtNaturalidade"];
    $nacionalidade = $_POST["txtNacionalidade"];
    $escolaridade = $_POST["radEscolaridade"];
    $curso = $_POST["txtCurso"];
    $profissao = $_POST["txtProfissao"];
    $trabalhando = $_POST["radTrabA"];
    $aposentado = $_POST["radAposentado"];
    $estadoCivil = $_POST["radEC"];
    $arranjoDomiciliar = $_POST["radAD"];
    $numeroDomicilio = $_POST["txtNPD"];
    $pessoasRenda = $_POST["txtNPCR"];
    $tipoRenda = $_POST["radRMT"];
    $renda = $_POST["radRM"];
    $religiao = $_POST["txtReligiao"];
    $pergunta = $_POST["txtPergunta"];
    $altura = $_POST["txtAltura"];
    $peso = $_POST["txtPeso"];
    $sql = "INSERT INTO `individuo`(`nome`, `nasc`, `idade`, `sexo`, `naturalidade`, `nacionalidade`, `endereco`, `cep`, `bairro`, `municipio`, `telefone1`, `telefone2`, `email`, `escolaridade`, `curso`, `profissao`, `trabalha_atualmente`, `aposentado`, `estado_civil`, `arranjo_domiciliar`, `pessoas_m_domicilio`, `num_pessoas_renda`, `tipo_renda`, `renda_mensal`, `religiao`, `motivo_inscricao`, `altura`, `peso_inicio`, `peso_fim`) VALUES
     ('".$nome."','".$dnasc."','".$idade."','".$sexo."','".$naturalidade."','".$nacionalidade."','".$endereco."','".$CEP."','".$bairro."','".$municipio."','".$tel1."','".$tel2."','".$email."','".$escolaridade."','".$curso."','".$profissao."','".$trabalhando."','".$aposentado."','".$estadoCivil."','".$arranjoDomiciliar."','".$numeroDomicilio."','".$pessoasRenda."','".$tipoRenda."','".$renda."','".$religiao."','".$pergunta."','".$altura."','".$peso."')";
   
?>
</body>
</html>
