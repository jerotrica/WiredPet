
<select>
        <option value="0">Selección:</option>
<?php

require("../../modelo/bbdd/consulta.php");
$consulta = new consulta;
$sql = "SELECT * FROM tipomascota";
$prueba=$consulta->getRegistros($sql);
if ($prueba->num_rows > 0) {
    // output data of each row
    while($row = $prueba->fetch_array()) {
        echo '<option value="'.$row["idTIPOMASCOTA"].'">'.$row["NombreTipo"].'</option>';
    }
} else {
    echo "0 results";
}
?>
</select>




