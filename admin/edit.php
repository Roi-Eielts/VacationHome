<?php
error_reporting(0);
$id = $_GET["id"];
$sql = "SELECT * FROM huizen WHERE id = $id";
$uit = $conn->query($sql);
$derij = $uit->fetch_assoc();
$huis = $derij["huis"];
$oms = $derij["omschrijving"];
$pers = $derij["personen"];
$prijs = $derij["prijs"];

?>
<div class="container">
    <a href="admin_panel" class="tag">ga terug naar admin pannel</a>
    <?php
    if (isset($_POST['subm'])) {
        $idhuis = $id;
        $huisnaam = htmlspecialchars($_POST['huis']);
        $omschrijving = htmlspecialchars($_POST['omschrijving']);
        $aanpers = htmlspecialchars($_POST['aantalpers']);
        $prijsje = htmlspecialchars($_POST['prijs']);

        $resultaat = $conn->query("UPDATE `huizen` SET `huis` = '$huisnaam', `personen` = '$aanpers', `omschrijving` = '$omschrijving', `prijs` = '$prijsje' WHERE (`id` = '$idhuis');");

        echo "<h1>gegenevens zijn aangepast! u kunt nu naar de admin pannel</h1>";
    } else {?>
        <form action="" method="POST">
        <table style="width:50%;">
            <tr>
                <th><label>huis</label></th>
                <th><input name="huis" type="text" value="<?php echo "$huis"; ?>" style="width: 100%; height:38px; border-radius: 5px;"></th>
            </tr>
            <tr>
                <th><label> omschrijving</label></th>
                <th><input name="omschrijving" value="<?php echo "$oms"; ?>" type="text" rows="6" maxlength="3000" style="width: 100%; height: 38px;border-radius: 5px;"></th>
            </tr>
            <tr>
                <th><label>aantal personen</label></th>
                <th><input name="aantalpers" value="<?php echo "$pers"; ?>" style="width: 100%; height:38px; border-radius: 5px;"></th>
            </tr>
            <tr>
                <th><label>prijs</label></th>
                <th><input name="prijs" type="text" value="<?php echo "$prijs"; ?>" style="width: 100%; height:38px; border-radius: 5px;"></th>
            </tr>
        </table>
        <button type="submit" name="subm">edit de gegevens</button>
    </form>
    <?php } ?>
    
</div>