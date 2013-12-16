<!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
<head>
<title>Validação de CPF e CNPJ</title>

<script src="js/checkCPF.js"></script>
<script src="js/checkCNPJ.js"></script>

</head>
<body>

<form id="frmCadastro" name="frmCadastro" method="post" action="up">   

    <label for="cpf">CPF:</label><br />
    <input name="cpf" type="text" class="cpf" id="cpf" size="15" maxlength="11" onKeyPress="return Apenas_Numeros(event);" onBlur="validaCPF(this);" /><br />
    <br />
    <label for="cnpj">CNPJ:</label><br />
    <input name="cnpj" type="text" id="cnpj" onBlur="ValidarCNPJ(frmCadastro.cnpj);"  onKeyPress="return txtBoxFormat(this.id, '99.999.999/9999-99',event);" maxlength="18" /><br />
     <br />  
    <div>
        <input type="submit" value="CADASTRAR" onclick="return false;"/>
    </div>

</form>   
  
</body>
</html>