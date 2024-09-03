<?php     
    $id = $_GET["id"];

    $remove1 = "DELETE FROM afbeeldingen WHERE (huis_id=$id)";
    if($result1 = $conn -> query($remove1) == true) {
        $remove2 = "delete from huizen where (id=$id)";
        $result2 = $conn -> query($remove2);
    }
    
    
?>