<?php

$id = $_GET["id"];
$maincur = $_POST["maincur"];
$mainbis = $_POST["mainbis"];
$offcur = $_POST["offcur"];
$offbis = $_POST["offbis"];
$headcur = $_POST["headcur"];
$headbis = $_POST["headbis"];
$bodycur = $_POST["bodycur"];
$bodybis = $_POST["bodybis"];
$handscur = $_POST["handscur"];
$handsbis = $_POST["handsbis"];
$legscur = $_POST["legscur"];
$legsbis = $_POST["legsbis"];
$feetcur = $_POST["feetcur"];
$feetbis = $_POST["feetbis"];
$earringscur = $_POST["earringscur"];
$earringsbis = $_POST["earringsbis"];
$necklacecur = $_POST["necklacecur"];
$necklacebis = $_POST["necklacebis"];
$braceletcur = $_POST["braceletcur"];
$braceletbis = $_POST["braceletbis"];
$ring1cur = $_POST["ring1cur"];
$ring1bis = $_POST["ring1bis"];
$ring2cur = $_POST["ring2cur"];
$ring2bis = $_POST["ring2bis"];

$table = "gear" . $id;

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Update Mainhand
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$maincur', bis = '$mainbis' WHERE slot = 1");
    $sql->execute();
    echo "Updated Entry Mainhand";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
echo "Update Offhand";
echo "<br>";
echo $offcur;

//Update Offhand
if ($offcur == 0 || $offbis == 0){
    try{
        $stmt = $conn->prepare("UPDATE $table SET current = NULL, bis = NULL WHERE slot = 2");
        $stmt->execute();
        echo "Updated Entry Offhand";
        echo "<br>";
    } catch (PDOException $e) {
        echo $stmt . "<br>" . $e->getMessage();
    }
} else {
    try{
        $stmt = $conn->prepare("UPDATE $table SET current = '$offcur', bis = '$offbis' WHERE slot = 2");
        $stmt->execute();
        echo "Updated Entry Offhand";
        echo "<br>";
    } catch (PDOException $e) {
        echo $stmt . "<br>" . $e->getMessage();
    }

}

//Update Head
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$headcur', bis = '$headbis' WHERE slot = 3");
    $sql->execute();
    echo "Updated Entry Hand";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
//Update Body
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$bodycur', bis = '$bodybis' WHERE slot = 4");
    $sql->execute();
    echo "Updated Entry Body";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
//Update Hands
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$handscur', bis = '$handsbis' WHERE slot = 5");
    $sql->execute();
    echo "Updated Entry Hands";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
//Update Legs
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$legscur', bis = '$legsbis' WHERE slot = 6");
    $sql->execute();
    echo "Updated Entry Legs";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
//Update Feet
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$feetcur', bis = '$feetbis' WHERE slot = 7");
    $sql->execute();
    echo "Updated Entry Feet";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//Update Earrings
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$earringscur', bis = '$earringsbis' WHERE slot = 8");
    $sql->execute();
    echo "Updated Entry Earrings";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//Update Necklace
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$necklacecur', bis = '$necklacebis' WHERE slot = 9");
    $sql->execute();
    echo "Updated Entry Necklace";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//Update Bracelet
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$braceletcur', bis = '$braceletbis' WHERE slot = 10");
    $sql->execute();
    echo "Updated Entry BRacelet";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//Update Ring 1
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$ring1cur', bis = '$ring1bis' WHERE slot = 11");
    $sql->execute();
    echo "Updated Entry Ring 1";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//Update Ring 2
try{
    $sql = $conn->prepare("UPDATE $table SET current = '$ring2cur', bis = '$ring2bis' WHERE slot = 12");
    $sql->execute();
    echo "Updated Entry Ring 2";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

header('Location: /index.php?page=gear&id=' . $id);
die();

echo $id;
echo "<br>";
echo $maincur;
echo "<br>";
echo $mainbis;
echo "<br>";
echo $offcur;
echo "<br>";
echo $offbis;
echo "<br>";
echo $headcur;
echo "<br>";
echo $headbis;
echo "<br>";
echo $bodycur;
echo "<br>";
echo $bodybis;
echo "<br>";
echo $handscur;
echo "<br>";
echo $handsbis;
echo "<br>";
echo $legscur;
echo "<br>";
echo $legsbis;
echo "<br>";
echo $feetcur;
echo "<br>";
echo $feetbis;
echo "<br>";
echo $earringscur;
echo "<br>";
echo $earringsbis;
echo "<br>";
echo $necklacecur;
echo "<br>";
echo $necklacebis;
echo "<br>";
echo $braceletcur;
echo "<br>";
echo $braceletbis;
echo "<br>";
echo $ring1cur;
echo "<br>";
echo $ring1bis;
echo "<br>";
echo $ring2cur;
echo "<br>";
echo $ring2bis;
echo "<br>";

