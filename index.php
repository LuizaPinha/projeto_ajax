<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <script src="jquery-3.5.1.js"></script>
		
		<script>
			$(document).ready(function() {
				$('#estado').click(function() {

                    var estado = $('#estado').val();

					$.post( 'ferramenta.php', 
							{parametro: estado},
							function (dado, status) {
								$('#resultado').html(dado);
					});
				});
			});
		</script>
</head>
<body>
    <fieldset>
        <form action="processo.php" method="POST">
            <p>
                <label>Informe o nome:</label>
                <input type="text" name="nome" id="nome"/>
            </p>
            <p>
            <label>Selecione o seu estado</label>
            
                <?php
                    include "abertura_conexao.inc";

                    $SQL = "SELECT id, nome FROM estados";

                    // Executa o comando SQL
                    $dados_recuperados = mysqli_query($con, $SQL);

                    if(mysqli_num_rows($dados_recuperados) > 0){
                        echo'<select name="estado" id="estado">
                                <option>Escolha seu estado</option>';
                            
                        while( ($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
                                
                            echo '<option value="'.$resultado['id'].'">'.$resultado['nome'].'</option>';
                        }
                            echo '</select>';
                        }

                    mysqli_close($con);
                            
                ?>
            </p>
            <div id="resultado"></div>
            <p>
                <label>Deixe o seu e-mail:</label>
                <input type="text" name="email" id="email"/>
            </p>
            <input type="submit" value="Enviar"/>
        </form>
    </fieldset>
</body>
</html>