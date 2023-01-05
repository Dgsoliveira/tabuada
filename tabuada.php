<?php
function calculadora(){
    if (isset($_POST['value']) && $_POST['value'] != "") {
        $value = $_POST['value'];
        for ($i = 1; $i <= 10; $i++) {
            $soma = $i * $value;
            echo $i . " x " . $value . " = " . $soma . "<br/>";
            echo "<br/>";
        }
        echo ' <a href="index.php">
        <button type="button" name="limpar" value="Limpar" style="background-color:#b84cf3;width:80px;color:white;height:30px;font-weight: bold;padding: 2px;"> Limpar </button>
        </a>';
    }
    if (isset($_POST['value']) && $_POST['value'] == "") {
        echo "digite um numero para verificar a tabuada ";
    }
    if (isset($_POST['limpar'])) {
        $soma = "";
        $i = "";
        $value = "";
        $soma = "";
    }
}
