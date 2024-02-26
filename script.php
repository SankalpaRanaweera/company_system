<?php
require "./dbconnection.php";
function executeAddQueries($con)
{
    // First SQL query
    $stmt = $con->prepare("INSERT INTO data (Team_no, Style_no, Production_start_date, QCD, Peoduct_basket,Chassies_operations,Chassies_new_operations,Chassies_precentage,factory) VALUES (?, ?, ?, ?, ?,?,?,?,?)");
    $stmt->bind_param("sssssssss", $_POST['teamnum'], $_POST['stylenum'], $_POST['startdate'], $_POST['qcd'], $_POST['PB'], $_POST['chasy1'], $_POST['chasy2'], $_POST['chasy3'], $_POST['factory']);
    $stmt->execute();
    // Second SQL query
    $team = mysqli_real_escape_string($con, $_POST['teamnum']);
    $style = mysqli_real_escape_string($con, $_POST['stylenum']);
    $factory = mysqli_real_escape_string($con, $_POST['factory']);
    $stmt = $con->prepare("UPDATE data SET Activity_data = ? WHERE Style_no=$style AND Team_no=$team  AND factory=$factory");
    $dataList = (object) [];
    // Outer loop
    for ($i = 1; $i <= 127; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            // Insert 4 values
            $value = "$i.$j";
            $dataList['data'][$i]['No'] = $i;
            $dataList['data'][$i]['Who'] = $_POST[$i . '1'];
            $dataList['data'][$i]['Activity'] = $_POST[$i . '2'];
            $dataList['data'][$i]['Root cause'] = $_POST[$i . '3'];
            $dataList['data'][$i]['Additiona info'] = $_POST[$i . '4'];
        }
    }
    echo $dataList;
    $dataString = json_encode($dataList);
    $stmt->bind_param("s", $dataString);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $con->close();
}
function executeUpdateQueries($con)
{
    // First SQL query
    $stmt = $con->prepare("UPDATE stat crew SET(Team_no =?, Style_no=?, Production_start_date=?, QCD=?, Peoduct_basket=?,Chassies_operations=?,Chassies_new_operations=?,Chassies_precentage=?,factory=?)");
    $stmt->bind_param("sssssssss", $_POST['teamnum'], $_POST['stylenum'], $_POST['startdate'], $_POST['qcd'], $_POST['PB'], $_POST['chasy1'], $_POST['chasy2'], $_POST['chasy3'], $_POST['factory']);
    $stmt->execute();
    // Second SQL query
    $team = mysqli_real_escape_string($con, $_POST['teamnum']);
    $style = mysqli_real_escape_string($con, $_POST['stylenum']);
    $factory = mysqli_real_escape_string($con, $_POST['factory']);
    $stmt = $con->prepare("UPDATE data SET Activity_data = ? WHERE Style_no=$style AND Team_no=$team AND factory=$factory");
    $dataList = (object) [];
    // Outer loop
    for ($i = 1; $i <= 127; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            // Insert 4 values
            $value = "$i.$j";
            $dataList['data'][$i]['No'] = $i;
            $dataList['data'][$i]['Who'] = $_POST[$i . '1'];
            $dataList['data'][$i]['Activity'] = $_POST[$i . '2'];
            $dataList['data'][$i]['Root cause'] = $_POST[$i . '3'];
            $dataList['data'][$i]['Additiona info'] = $_POST[$i . '4'];
        }
    }
    echo $dataList;
    $dataString = json_encode($dataList);
    $stmt->bind_param("s", $dataString);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $con->close();
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
    $stmt = $con->prepare("SELECT * from `data` where Team_no=? or Style_no=? or factory=?");
    $stmt->bind_param("sss", $teamNum, $styleNum, $factory);
    $stmt->execute();
    $res = $stmt->get_result();
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body>
    <table border=1>";
    while ($row = $res->fetch_assoc()) {
        echo "
        <tr>
        <td>" . $row['Year and Month'] . "</td>
        <td>" . $row['Team_no'] . "</td>
        <td>" . $row['Style_no'] . "</td>
        <td>" . $row['factory'] . "</td>
        <td><a href='./update.php?id=" . $row['id'] . "&request=update'><button>Update Button</button></a></td>
        <td><a href='./delete.php?id=" . $row['id'] . "&request=delete'><button>Delete Button</button></a></td>
        </tr>";
    }
    // Close the statement and the connection
    $stmt->close();
    $con->close();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        executeAddQueries($con);
        header("Location :./home.html");
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['request'] = 'update') {
        executeSearchQueries($con);
    }
    if ($_GET['request'] = 'delete') {
        echo "update";
        // executeUpdateQueries($con);
        // header("Location :./home.html");
    }
    if (isset($_GET['deleteB'])) {
        echo "delete";
        // executeUpdateQueries($con);
        // header("Location :./home.html");
    }
}
?>