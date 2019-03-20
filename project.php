<?php
include 'Projectdb.php';
if(isset($_POST["submit"]))
{
    $dataTime = date("Y-m-d H:i:s");
    $naam = $_POST['txtnaam'];
    $bnaam = $_POST['txtbnaam'];
    $mail = $_POST['txtmail'];
    $tele = $_POST['txttele'];
    $remark = $_POST['txtopmerking'];


    $query= "INSERT INTO gegevens (bnaam,  naam, email, telefoon, opmerking, datum)
             VALUES ('$bnaam', '$naam', '$mail', '$tele', '$remark',now())";

    $stm = $con->prepare($query);

    if($stm->execute()){
        echo "succes";
    } else {
        echo "Something wrong!";
    }
}
?>