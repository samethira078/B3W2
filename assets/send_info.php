<?php
session_start();
/* Je kunt alleen hoofdletter, kleine letters en cijfers toevoegen, min 1, max 25 letters */
$pattern = "/^[a-zA-Z0-9]{1,25}$/";
$foutcode = "Vul dit juist in. Cijfer/Letter";
$a1_placeholder = $a2_placeholder = $a3_placeholder = $a4_placeholder = $a5_placeholder = $a6_placeholder = $a7_placeholder = "";
$i = 0;
$hide = "";
$display = "none";

/* Er moet POST data verzonden zijn */
if($_SERVER['REQUEST_METHOD'] === "POST"){
    /* Persoon heeft op submit gedrukt */
    if(isset($_POST["submit"])){
        /* Moet matchen met pattern */
        preg_match($pattern, $_POST["1a"]) == TRUE ? ($_SESSION["a1"] = $_POST["1a"] AND $i++) : $a1_placeholder = $foutcode;
        preg_match($pattern, $_POST["2a"]) == TRUE ? ($_SESSION["a2"] = $_POST["2a"] AND $i++) : $a2_placeholder = $foutcode;
        preg_match($pattern, $_POST["3a"]) == TRUE ? ($_SESSION["a3"] = $_POST["3a"] AND $i++) : $a3_placeholder = $foutcode;
        preg_match($pattern, $_POST["4a"]) == TRUE ? ($_SESSION["a4"] = $_POST["4a"] AND $i++) : $a4_placeholder = $foutcode;
        preg_match($pattern, $_POST["5a"]) == TRUE ? ($_SESSION["a5"] = $_POST["5a"] AND $i++) : $a5_placeholder = $foutcode;
        preg_match($pattern, $_POST["6a"]) == TRUE ? ($_SESSION["a6"] = $_POST["6a"] AND $i++) : $a6_placeholder = $foutcode;
        preg_match($pattern, $_POST["7a"]) == TRUE ? ($_SESSION["a7"] = $_POST["7a"] AND $i++) : $a7_placeholder = $foutcode;
        /* Als alle velden correct zijn ingevuld */
        if($i == 7){
           $hide = "none"; 
           $display = "block";
        }
        
    }
}

session_destroy();