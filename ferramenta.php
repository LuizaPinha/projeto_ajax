<?php
	include("abertura_conexao.inc");
	
    $par = $_POST['parametro'];
    
    $mostrar = "<label>Selecione a sua cidade:</label>
                <select name=\"cidade\" id=\"cidade\">
                <option>Informe a cidade</option>";
                
	if($par != "") {
		
		$SQL = "SELECT id, nome FROM cidades WHERE id_estado = '$par%'";

        $resultado = mysqli_query($con, $SQL);			
	
		while(($registro = mysqli_fetch_assoc($resultado)) != NULL) {
            $mostrar .= '<option value="'.$registro['id'].'">'.$registro['nome'].'</option>';
		}
	}
    
    $mostrar .= "</select>";
    
    echo $mostrar;

	mysqli_close($con);
    
?>