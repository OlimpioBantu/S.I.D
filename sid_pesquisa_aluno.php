<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<!-- <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css"> -->

<html>
		<head>   <title>S.i.D - Sistema de Importação de Dados</title>  </head> 
						<link rel="stylesheet" href="css.css" media="all"/>	
 	<body>										
					<table border = 4 width = 45%> <!--tamanho das bordas da tabela-->
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<tr>			
		<th>Disciplinas</th>
		<th>Notas das Disciplinas</th>		
		<th>Docente</th>
		<th>email Professor</th>
							
<p align = "middle">  <h1>Resultado da Pesquisa Por Alunos</h1> </p>
<p align = "middle"> <input type="button" onClick="document.location='formulario_fatec.php'" value="  Retornar  "><br />
			<form method="post" action="sid_lista_aluno.php">	
				<br>
					<input type="text" name="txtPesquisa">
						<input type="submit" value="Pesquisar">
			</form>
<br>  <br>

<?php
include "sid_conecta_fatec.php"; 
header('Content-Type: text/html; charset=UTF-8');

$sql = " SELECT nome_aluno,  count(*) FROM notas_disciplinas FROM 
			WHERE nome_aluno<>'' GROUP BY nome_aluno
HAVING COUNT(*) > 1 ";


/*  SELECT emp_cnpj, count(*)FROM empresa WHERE  emp_cnpj <> ''GROUP BY emp_cnpj HAVING COUNT(*) > 1 

      ou 
	  
para exibir apenas um registro duplicado digite assim:

SELECT emp_cnpj, count(*) FROM empresa WHERE emp_cnpj ” GROUP BY emp_cnpj HAVING COUNT(*) > 1 LIMIT = 1; 
					OU

SELECT * FROM tabela WHERE campo IN ( SELECT campo FROM tabela GROUP BY campo HAVING count(*) > 1) ORDER BY lista de campos
					OU
					Com esta query por exemplo vamos selecionar o emails que se repetem, e após isso removê-los.

SELECT DISTINCT id, email FROM minhatabela GROUP BY email HAVING count(email) > 1

?> */