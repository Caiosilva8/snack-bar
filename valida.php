<meta charset="utf-8">
<?php  /* codigo para invadir banco de dados com SQL injection ' OR 1='1*/
	
	include "conexao.php";

	if(isset($_POST['login'])){
		$login = htmlspecialchars($_POST['login'],ENT_QUOTES,'UTF-8');
		$senha = md5(htmlspecialchars($_POST['senha'],ENT_QUOTES,'UTF-8'));

		$sql = "select * from usuario where login = '$login' and senha = '$senha'";

		$testelogin = mysqli_query($conexao,$sql) or die (mysqli_error());

		$existe = mysqli_num_rows($testelogin);

		if($existe){
			if(!isset($_SESSION)){
				session_start();
			}
			$dados = mysqli_fetch_array($testelogin);
            
            $_SESSION['login'] = $login;
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['id'] = $dados['idUsuario'];
            $_SESSION['tipo'] = $dados['tipo'];
            
            if($_SESSION['tipo'] == 'adm'){
			    header('location:cpanel.php');
            }
            else{
                header('location: index.php');
            }
		}
		else{
			echo '<div class="alert alert-danger" role="alert"> Usuário ou senha inválidos </div';
		}
	}

?>