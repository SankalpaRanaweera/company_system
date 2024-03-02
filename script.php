<?php
require "./dbconnection.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);

function executeAddQueries($con)
{
    //find the next id
    $stmt = $con->prepare("SELECT id from data ORDER BY id desc LIMIT 1;");
    $stmt->execute();
    $result = $stmt->get_result();
    $number = $result->fetch_assoc();
    $id1 = $number['id'] + 1;
    // First SQL query
    $stmt = $con->prepare("INSERT INTO data (Team_no, Style_no, Production_start_date, QCD, Peoduct_basket,Chassies_operations,Chassies_new_operations,Chassies_precentage,factory) VALUES (?, ?, ?, ?, ?,?,?,?,?)");
    $stmt->bind_param("sssssssss", $_POST['teamnum'], $_POST['stylenum'], $_POST['startdate'], $_POST['qcd'], $_POST['PB'], $_POST['chasy1'], $_POST['chasy2'], $_POST['chasy3'], $_POST['factory']);
    $stmt->execute();
    // Second SQL query
    $stmt = $con->prepare("UPDATE data SET Activity_data = ? WHERE id='$id1'");
    $data = [];
    for ($i = 1; $i <= 127; $i++) {
        // Insert 4 values
        // $value = "$i.$j";
        $json = json_encode((object) null);
        $element = json_decode($json);
        $element->No = $i;
        $element->Who = $_POST[$i . '_1'];
        $element->Activity = $_POST[$i . '_2'];
        $element->Date = $_POST[$i . '_3'];
        $element->{'Root cause'} = $_POST[$i . '_4'];
        // $newjson = json_encode($element);
        array_push($data, $element);

    }
    $datalist['data'] = $data;
    $dataString = json_encode($datalist);
    $stmt->bind_param("s", $dataString);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $con->close();
    header('Location: ./');
}
function executeUpdateQueries($con)
{
    $id2 = $_POST['idforUpdate'];
    // First SQL query
    $stmt = $con->prepare("UPDATE data SET Team_no =?, Style_no=?, Production_start_date=?, QCD=?, Peoduct_basket=?,Chassies_operations=?,Chassies_new_operations=?,Chassies_precentage=?,factory=? WHERE id='$id2'");
    $stmt->bind_param("sssssssss", $_POST['teamnum'], $_POST['stylenum'], $_POST['startdate'], $_POST['qcd'], $_POST['PB'], $_POST['chasy1'], $_POST['chasy2'], $_POST['chasy3'], $_POST['factory']);
    $stmt->execute();
    // Second SQL query
    $stmt = $con->prepare("UPDATE data SET Activity_data = ? WHERE id='$id2'");
    $data = [];
    for ($i = 1; $i <= 127; $i++) {
        // Insert 4 values
        // $value = "$i.$j";
        $json = json_encode((object) null);
        $element = json_decode($json);
        $element->No = $i;
        $element->Who = $_POST[$i . '_1'];
        $element->Activity = $_POST[$i . '_2'];
        $element->Date = $_POST[$i . '_3'];
        $element->{'Root cause'} = $_POST[$i . '_4'];
        // $newjson = json_encode($element);
        array_push($data, $element);

    }
    $datalist['data'] = $data;
    $dataString = json_encode($datalist);
    $stmt->bind_param("s", $dataString);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $con->close();
    header('Location: ./');
}
function executeSearchQueries($con)
{
    $factory = $_GET['factory'];
    $teamNum = $_GET['teamnum'];
    $styleNum = $_GET['stylenum'];
    // Temporary search values
    $month = "February";
    $year = "2024";
    // First SQL query
    if ($factory == '' && $teamNum == '' && $styleNum == '')
        $stmt = $con->prepare("SELECT * FROM data ORDER BY id DESC LIMIT 20");
    else {
        $stmt = $con->prepare("SELECT * from `data` where Team_no=? and Style_no=? and factory=?");
        $stmt->bind_param("sss", $teamNum, $styleNum, $factory);
    }
    $stmt->execute();
    $res = $stmt->get_result();
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link href='allcss.css' rel='stylesheet' type='text/css'/>
    </head>
    <body bgcolor='gray'>
    <table border=2 class='scripttable'>";
    while ($row = $res->fetch_assoc()) {
        echo "
        <tr>
        <td class='scripttd1'>" . $row['factory'] . "</td>
        <td class='scripttd2'>" . $row['Team_no'] . "</td>
        <td class='scripttd3'>" . $row['Style_no']."</td>
        <td class='scripttd4'><a href='./update.php?id=" . $row['id'] . "&request=update'><button class='script4'>Update</button></a></td>
        <td class='scripttd5'><a href='./delete.php?id=" . $row['id'] . "&request=Delete'><button  class='script5'>Delete</button></a></td>
        </tr>";
    }
    echo" </body> </html>";
    // Close the statement and the connection
    $stmt->close();
    $con->close();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        executeAddQueries($con);
        // header('Location : /home.html');
    } else if (isset($_POST['update'])) {
        executeUpdateQueries($con);

    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['search'])) {
        executeSearchQueries($con);
    }
}
?>



