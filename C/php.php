<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>
<form name="loljinha" method="post" action="index.html">
	<center><fieldset id="A">
		<legend><fieldset>Seu pedido</fieldset></legend>
<?php
echo "<center><img src='NS.jpg'/><br><br>";
echo "Nintendo Switch Red'n Blue</center><br>";
echo "<br><label>Dados Pessoais</label><br> ";
echo "Seu nome: ".$_POST['nome'];
echo "<br>Seu email: ".$_POST['email'];
echo "<br>Seu CPF: ".$_POST['cpf'];
echo "<br><br><label>Cartão de Crédito</label><br>";
echo "Número do cartão: ".$_POST['cartao'];
echo "<br>Bandeira do cartão: ".$_POST['bandeira'];
?>
	<center><br><button type="submit">Voltar as compras</button></center>
	</fieldset></center>
</body>
</html>