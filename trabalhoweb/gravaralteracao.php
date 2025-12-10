<?php
    include ("connect.php");
?>

<?php

    $dado=$_POST;
    if(!empty($dado)){
        
        if($dado["tipo"] === "alt"){

            $id = $dado["id"];
            $n=$dado["nome"];
            $t=$dado["tel"]; 
            $d=$dado["obs"];
        
            $sqlalt = "UPDATE contatos 
                       SET nome='$n', tel='$t', obs='$d' 
                       WHERE id=$id";
            $conn->query($sqlalt);
        }
        header("Location:" . "inicial.php");
    }
?>