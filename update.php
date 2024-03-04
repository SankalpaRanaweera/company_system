
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="allcss.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="gray">
  <form action="script.php" method="post">
    <?php
    require "./dbconnection.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if ($_GET['request'] = 'update') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM data where id='$id'";
        $res = mysqli_query($con, $sql);

        if (mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_assoc($res);
          $data = json_decode($row['Activity_data']);
        } ?>
        <input type="text" name="idforUpdate" hidden value="<?php echo $id ?>">
        <lable>Factory</lable>
        <input type="text" name="factory" class="f9" value="<?php echo $row['factory'] ?>" /><br /><br />
        <lable>Team Num</lable>
        <input type="text" name="teamnum" class="f1" value="<?php echo $row['Team_no'] ?>" /><br /><br />
        <lable>Style Num</lable>
        <input type="text" name="stylenum" class="f2" value="<?php echo $row['Style_no'] ?>" /><br /><br />
        <lable>Production Start Date</lable>
        <input type="date" name="startdate" class="f3" value="<?php echo $row['Production_start_date'] ?>" /><br /><br />
        <lable>QCD</lable>
        <input type="text" name="qcd" class="f4" value="<?php echo $row['QCD'] ?>" /><br /><br />
        <lable>Product Basket</lable>
        <select name="PB" class="f8">
          <option selected value="<?php echo $row['Peoduct_basket'] ?>">
            <?php echo $row['Peoduct_basket'] ?>
          </option>
          <option value="a">a</option>
          <option value="a">a</option>
          <option value="a">a</option>
        </select>
        <br /><br />
        <label>Chassies</label>
        <input type="text" name="chasy1" class="f5" value="<?php echo $row['Chassies_operations'] ?>" />
        <input type="text" name="chasy2" class="f6" value="<?php echo $row['Chassies_new_operations'] ?>" />
        <input type="text" name="chasy3" class="f7" value="<?php echo $row['Chassies_precentage'] ?>" />
        <table border="1">
          <tr>
            <th>Number</th>
            <th>Day</th>
            <th>Day types</th>
            <th>Activity</th>
            <th>Main Responsibility</th>
            <th>Team</th>
            <th>Person</th>
            <th>Activity</th>
            <th>Date</th>
            <th>Root Cause</th>
          </tr>
          <tr>
            <td>1</td>
            <td>13Day</td>
            <td>13D</td>
            <td>Planned styles material in house</td>
            <td>MERCH</td>
            <td>Merch</td>
            <td><input type="text" name="1.1" class="1.1" value="<?php echo $data->data[0]->Who ?>" /></td>
            <td>
              <select name="1.2">
                <option selected value="<?php echo $data->data[0]->Activity ?>">
                  <?php echo $data->data[0]->Activity ?>
                </option>
                <option value="N/A">N/A</option>
                <option value="NO">NO</option>
                <option value="YES">YES</option>
              </select>
            </td>
            <td><input type="date" name="1.3" class="1.3" value="<?php echo $data->data[0]->Date ?>" /></td>
            <td><input type="text" name="1.4" class="1.4" value="<?php echo $data->data[0]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>2</td>
            <td>13Day</td>
            <td>13D</td>
            <td>Freez th plan</td>
            <td>PLAN</td>
            <td>Plan</td>
            <td><input type="text" name="2.1" class="2.1" value="<?php echo $data->data[1]->Who ?>" /></td>
            <td>
              <select name="2.2">
                <option selected value="<?php echo $data->data[1]->Activity ?>">
                  <?php echo $data->data[1]->Activity ?>
                </option>
                <option value="N/A">N/A</option>
                <option value="NO">NO</option>
                <option value="YES">YES</option>
              </select>
            </td>
            <td><input type="date" name="2.3" class="2.3" value="<?php echo $data->data[1]->Date ?>" /></td>
            <td><input type="text" name="2.4" class="2.4" value="<?php echo $data->data[1]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>3</td>
            <td>13Day</td>
            <td>13D</td>
            <td>sample recevive</td>
            <td>TEC</td>
            <td>(FN)-Pilot Evaluator</td>

            <td><input type="text" name="3.1" class="3.1" value="<?php echo $data->data[2]->Who ?>" /></td>
            <td>
              <select name="3.2">
                <option selected value="<?php echo $data->data[2]->Activity ?>">
                  <?php echo $data->data[2]->Activity ?>
                </option>
                <option value="N/A">N/A</option>
                <option value="NO">NO</option>
                <option value="YES">YES</option>
              </select>
            </td>
            <td><input type="date" name="3.3" class="3.3" value="<?php echo $data->data[2]->Date ?>" /></td>
            <td><input type="text" name="3.4" class="3.4" value="<?php echo $data->data[2]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>4</td>
            <td>13Day</td>
            <td>13D</td>
            <td>patter received</td>
            <td>TEC</td>
            <td>Pilot Evaluator(FN)</td>
            <td><input type="text" name="4.1" class="4.1" value="<?php echo $data->data[3]->Who ?>" /></td>
            <td>
              <select name="4.2">
                <option selected value="<?php echo $data->data[3]->Activity ?>">
                  <?php echo $data->data[3]->Activity ?>
                </option>
                <option value="N/A">N/A</option>
                <option value="NO">NO</option>
                <option value="YES">YES</option>
              </select>
            </td>
            <td><input type="date" name="4.3" class="4.3" value="<?php echo $data->data[3]->Date ?>" /></td>
            <td><input type="text" name="4.4" class="4.4" value="<?php echo $data->data[3]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>5</td>
            <td>13Day</td>
            <td>13D</td>
            <td>2 pc cut pannels</td>
            <td>TEC</td>
            <td>Tech/ Pilot Evaluator (FN)</td>
            <td><input type="text" name="5.1" class="5.1" value="<?php echo $data->data[4]->Who ?>" /></td>
            <td>
              <select name="5.2">
                <option selected value="<?php echo $data->data[4]->Activity ?>">
                  <?php echo $data->data[4]->Activity ?>
                </option>
                <option value="N/A">N/A</option>
                <option value="NO">NO</option>
                <option value="YES">YES</option>
              </select>
            </td>
            <td><input type="date" name="5.3" class="5.3" value="<?php echo $data->data[4]->Date ?>" /></td>
            <td><input type="text" name="5.4" class="5.4" value="<?php echo $data->data[4]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>6</td>
            <td>10Day</td>
            <td>10D</td>
            <td>Standard Vedio sharig</td>
            <td>IE</td>
            <td>COST IE \G.TECH</td>
            <td><input type="text" name="6.1" class="6.1" value="<?php echo $data->data[5]->Who ?>" /></td>
<td>
<select name="6.2">
<option selected value="<?php echo $data->data[5]->Activity ?>">
<?php echo $data->data[5]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="6.3" class="6.3" value="<?php echo $data->data[5]->Date ?>" /></td>
<td><input type="text" name="6.4" class="6.4" value="<?php echo $data->data[5]->{'Root cause'} ?>" /></td>
      </tr>
           
          <tr>
            <td>7</td>
            <td>10Day</td>
            <td>10D</td>
            <td>method video</td>
            <td>IE</td>
            <td>COST IE \G.TECH</td>
            <td><input type="text" name="7.1" class="7.1" value="<?php echo $data->data[6]->Who ?>" /></td>
<td>
<select name="7.2">
<option selected value="<?php echo $data->data[6]->Activity ?>">
<?php echo $data->data[6]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="7.3" class="7.3" value="<?php echo $data->data[6]->Date ?>" /></td>
<td><input type="text" name="7.4" class="7.4" value="<?php echo $data->data[6]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>8</td>
            <td>10Day</td>
            <td>10D</td>
            <td>Risk Analysis meeting</td>
            <td>TEC</td>
            <td>Tech \ IE \ Mech</td>
            <td><input type="text" name="8.1" class="8.1" value="<?php echo $data->data[7]->Who ?>" /></td>
<td>
<select name="8.2">
<option selected value="<?php echo $data->data[7]->Activity ?>">
<?php echo $data->data[7]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="8.3" class="8.3" value="<?php echo $data->data[7]->Date ?>" /></td>
<td><input type="text" name="8.4" class="8.4" value="<?php echo $data->data[7]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>9</td>
            <td>10Day</td>
            <td>10D</td>
            <td>Ensure all Critical Machines,Attachments,folders</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="9.1" class="9.1" value="<?php echo $data->data[8]->Who ?>" /></td>
<td>
<select name="9.2">
<option selected value="<?php echo $data->data[8]->Activity ?>">
<?php echo $data->data[8]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="9.3" class="9.3" value="<?php echo $data->data[8]->Date ?>" /></td>
<td><input type="text" name="9.4" class="9.4" value="<?php echo $data->data[8]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>10</td>
            <td>10Day</td>
            <td>10D</td>
            <td>Pattern accuracy against the 2pcs</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="10.1" class="10.1" value="<?php echo $data->data[9]->Who ?>" /></td>
<td>
<select name="10.2">
<option selected value="<?php echo $data->data[9]->Activity ?>">
<?php echo $data->data[9]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="10.3" class="10.3" value="<?php echo $data->data[9]->Date ?>" /></td>
<td><input type="text" name="10.4" class="10.4" value="<?php echo $data->data[9]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>11</td>
            <td>10Day</td>
            <td>10D & 9D</td>
            <td>2pcs complete</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="11.1" class="11.1" value="<?php echo $data->data[10]->Who ?>" /></td>
<td>
<select name="11.2">
<option selected value="<?php echo $data->data[10]->Activity ?>">
<?php echo $data->data[10]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="11.3" class="11.3" value="<?php echo $data->data[10]->Date ?>" /></td>
<td><input type="text" name="11.4" class="11.4" value="<?php echo $data->data[10]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>12</td>
            <td>9Day</td>
            <td>9D</td>
            <td>share the coments in conclusion meeting with development Team</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="12.1" class="12.1" value="<?php echo $data->data[11]->Who ?>" /></td>
<td>
<select name="12.2">
<option selected value="<?php echo $data->data[11]->Activity ?>">
<?php echo $data->data[11]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="12.3" class="12.3" value="<?php echo $data->data[11]->Date ?>" /></td>
<td><input type="text" name="12.4" class="12.4" value="<?php echo $data->data[11]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>13</td>
            <td>9Day</td>
            <td>9D</td>
            <td>
              Identify critical operations\Critical attachments\folders\Preventive
              actions
            </td>
            <td>M\c</td>
            <td>Mechanics</td>
            <td><input type="text" name="13.1" class="13.1" value="<?php echo $data->data[12]->Who ?>" /></td>
<td>
<select name="13.2">
<option selected value="<?php echo $data->data[12]->Activity ?>">
<?php echo $data->data[12]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="13.3" class="13.3" value="<?php echo $data->data[12]->Date ?>" /></td>
<td><input type="text" name="13.4" class="13.4" value="<?php echo $data->data[12]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>14</td>
            <td>9Day</td>
            <td>9D</td>
            <td>ensure pattern accuracy (cut marks, shape, measurments, etc)</td>
            <td>TEC</td>
            <td>Pilot Evaluator(FN)</td>
            <td><input type="text" name="14.1" class="14.1" value="<?php echo $data->data[13]->Who ?>" /></td>
<td>
<select name="14.2">
<option selected value="<?php echo $data->data[13]->Activity ?>">
<?php echo $data->data[13]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="14.3" class="14.3" value="<?php echo $data->data[13]->Date ?>" /></td>
<td><input type="text" name="14.4" class="14.4" value="<?php echo $data->data[13]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>15</td>
            <td>9Day</td>
            <td>9D</td>
            <td>Handover meeting - to factory</td>
            <td>Dev</td>
            <td>Technician\dev</td>
            <td><input type="text" name="15.1" class="15.1" value="<?php echo $data->data[14]->Who ?>" /></td>
<td>
<select name="15.2">
<option selected value="<?php echo $data->data[14]->Activity ?>">
<?php echo $data->data[14]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="15.3" class="15.3" value="<?php echo $data->data[14]->Date ?>" /></td>
<td><input type="text" name="15.4" class="15.4" value="<?php echo $data->data[14]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>16</td>
            <td>8Day</td>
            <td>8D</td>
            <td>Fabric and trims in house</td>
            <td>STR</td>
            <td>Stores\Merchant</td>
            <td><input type="text" name="16.1" class="16.1" value="<?php echo $data->data[15]->Who ?>" /></td>
<td>
<select name="16.2">
<option selected value="<?php echo $data->data[15]->Activity ?>">
<?php echo $data->data[15]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="16.3" class="16.3" value="<?php echo $data->data[15]->Date ?>" /></td>
<td><input type="text" name="16.4" class="16.4" value="<?php echo $data->data[15]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>17</td>
            <td>8Day</td>
            <td>8D</td>
            <td>Received material accuracy</td>
            <td>INS</td>
            <td>Fabric Inspection</td>
            <td><input type="text" name="17.1" class="17.1" value="<?php echo $data->data[16]->Who ?>" /></td>
<td>
<select name="17.2">
<option selected value="<?php echo $data->data[16]->Activity ?>">
<?php echo $data->data[16]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="17.3" class="17.3" value="<?php echo $data->data[16]->Date ?>" /></td>
<td><input type="text" name="17.4" class="17.4" value="<?php echo $data->data[16]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>18</td>
            <td>8Day</td>
            <td>8D</td>
            <td>STW,GSD & OBD PATTERN HANDOVER(RPM checking)</td>
            <td>IE</td>
            <td>COST IE</td>
            <td><input type="text" name="18.1" class="18.1" value="<?php echo $data->data[17]->Who ?>" /></td>
<td>
<select name="18.2">
<option selected value="<?php echo $data->data[17]->Activity ?>">
<?php echo $data->data[17]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="18.3" class="18.3" value="<?php echo $data->data[17]->Date ?>" /></td>
<td><input type="text" name="18.4" class="18.4" value="<?php echo $data->data[17]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>19</td>
            <td>8Day</td>
            <td>8D</td>
            <td>Fabric relaxing for - Pilot</td>
            <td>CUT</td>
            <td>Cutting</td>
            <td><input type="text" name="19.1" class="19.1" value="<?php echo $data->data[18]->Who ?>" /></td>
<td>
<select name="19.2">
<option selected value="<?php echo $data->data[18]->Activity ?>">
<?php echo $data->data[18]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="19.3" class="19.3" value="<?php echo $data->data[18]->Date ?>" /></td>
<td><input type="text" name="19.4" class="19.4" value="<?php echo $data->data[18]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>20</td>
            <td>7Day</td>
            <td>7D</td>
            <td>PP meeting</td>
            <td>TEC</td>
            <td>Pilot Evaluator</td>
            <td><input type="text" name="20.1" class="20.1" value="<?php echo $data->data[19]->Who ?>" /></td>
<td>
<select name="20.2">
<option selected value="<?php echo $data->data[19]->Activity ?>">
<?php echo $data->data[19]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="20.3" class="20.3" value="<?php echo $data->data[19]->Date ?>" /></td>
<td><input type="text" name="20.4" class="20.4" value="<?php echo $data->data[19]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>21</td>
            <td>7Day</td>
            <td>7D</td>
            <td>Pilot cut complete</td>
            <td>CUT</td>
            <td>Cutting</td>
            <td><input type="text" name="21.1" class="21.1" value="<?php echo $data->data[20]->Who ?>" /></td>
<td>
<select name="21.2">
<option selected value="<?php echo $data->data[20]->Activity ?>">
<?php echo $data->data[20]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="21.3" class="21.3" value="<?php echo $data->data[20]->Date ?>" /></td>
<td><input type="text" name="21.4" class="21.4" value="<?php echo $data->data[20]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>22</td>
            <td>7Day</td>
            <td>7D</td>
            <td>Pilot Samples stitch\size set start</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="22.1" class="22.1" value="<?php echo $data->data[21]->Who ?>" /></td>
<td>
<select name="22.2">
<option selected value="<?php echo $data->data[21]->Activity ?>">
<?php echo $data->data[21]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="22.3" class="22.3" value="<?php echo $data->data[21]->Date ?>" /></td>
<td><input type="text" name="22.4" class="22.4" value="<?php echo $data->data[21]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>23</td>
            <td>7Day</td>
            <td>7D</td>
            <td>Planned styles material in house</td>
            <td>PLAN</td>
            <td>plan</td>
            <td><input type="text" name="23.1" class="23.1" value="<?php echo $data->data[22]->Who ?>" /></td>
<td>
<select name="23.2">
<option selected value="<?php echo $data->data[22]->Activity ?>">
<?php echo $data->data[22]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="23.3" class="23.3" value="<?php echo $data->data[22]->Date ?>" /></td>
<td><input type="text" name="23.4" class="23.4" value="<?php echo $data->data[22]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>24</td>
            <td>6Day</td>
            <td>6D</td>
            <td>Floor layout & product flow directions(Format STAT-F5)</td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="24.1" class="24.1" value="<?php echo $data->data[23]->Who ?>" /></td>
<td>
<select name="24.2">
<option selected value="<?php echo $data->data[23]->Activity ?>">
<?php echo $data->data[23]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="24.3" class="24.3" value="<?php echo $data->data[23]->Date ?>" /></td>
<td><input type="text" name="24.4" class="24.4" value="<?php echo $data->data[23]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>25</td>
            <td>6Day</td>
            <td>6D</td>
            <td>Issue-machine requirment</td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="25.1" class="25.1" value="<?php echo $data->data[24]->Who ?>" /></td>
<td>
<select name="25.2">
<option selected value="<?php echo $data->data[24]->Activity ?>">
<?php echo $data->data[24]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="25.3" class="25.3" value="<?php echo $data->data[24]->Date ?>" /></td>
<td><input type="text" name="25.4" class="25.4" value="<?php echo $data->data[24]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>26</td>
            <td>6Day</td>
            <td>6D</td>
            <td>Name Allocation"with operator Grading</td>
            <td>IE</td>
            <td>IE\Sup\QA\MC\Tech</td>
            <td><input type="text" name="26.1" class="26.1" value="<?php echo $data->data[25]->Who ?>" /></td>
<td>
<select name="26.2">
<option selected value="<?php echo $data->data[25]->Activity ?>">
<?php echo $data->data[25]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="26.3" class="26.3" value="<?php echo $data->data[25]->Date ?>" /></td>
<td><input type="text" name="26.4" class="26.4" value="<?php echo $data->data[25]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>27</td>
            <td>6Day</td>
            <td>6D</td>
            <td>
              plan-Focus training Plan & start training for critical
              operations(Format STAT-F6)
            </td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="27.1" class="27.1" value="<?php echo $data->data[26]->Who ?>" /></td>
<td>
<select name="27.2">
<option selected value="<?php echo $data->data[26]->Activity ?>">
<?php echo $data->data[26]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="27.3" class="27.3" value="<?php echo $data->data[26]->Date ?>" /></td>
<td><input type="text" name="27.4" class="27.4" value="<?php echo $data->data[26]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>28</td>
            <td>6Day</td>
            <td>6D</td>
            <td>Cut pannels from similar fabricsfor Focus training</td>
            <td>PROD</td>
            <td>Production\Cutting manager</td>
            <td><input type="text" name="28.1" class="28.1" value="<?php echo $data->data[27]->Who ?>" /></td>
<td>
<select name="28.2">
<option selected value="<?php echo $data->data[27]->Activity ?>">
<?php echo $data->data[27]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="28.3" class="28.3" value="<?php echo $data->data[27]->Date ?>" /></td>
<td><input type="text" name="28.4" class="28.4" value="<?php echo $data->data[27]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>29</td>
            <td>6Day</td>
            <td>6D</td>
            <td>Are critical machines, folders ,attachments Set for the bulk</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="29.1" class="29.1" value="<?php echo $data->data[28]->Who ?>" /></td>
<td>
<select name="29.2">
<option selected value="<?php echo $data->data[28]->Activity ?>">
<?php echo $data->data[28]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="29.3" class="29.3" value="<?php echo $data->data[28]->Date ?>" /></td>
<td><input type="text" name="29.4" class="29.4" value="<?php echo $data->data[28]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>30</td>
            <td>5Day</td>
            <td>5D</td>
            <td>
              layout discussion - Confirem - machines
              requirment\foot\gude\attachments\availability
            </td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="30.1" class="30.1" value="<?php echo $data->data[29]->Who ?>" /></td>
<td>
<select name="30.2">
<option selected value="<?php echo $data->data[29]->Activity ?>">
<?php echo $data->data[29]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="30.3" class="30.3" value="<?php echo $data->data[29]->Date ?>" /></td>
<td><input type="text" name="30.4" class="30.4" value="<?php echo $data->data[29]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>31</td>
            <td>5Day</td>
            <td>5D</td>
            <td>plan change internal</td>
            <td></td>
            <td>operation</td>
            <td><input type="text" name="31.1" class="31.1" value="<?php echo $data->data[30]->Who ?>" /></td>
<td>
<select name="31.2">
<option selected value="<?php echo $data->data[30]->Activity ?>">
<?php echo $data->data[30]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="31.3" class="31.3" value="<?php echo $data->data[30]->Date ?>" /></td>
<td><input type="text" name="31.4" class="31.4" value="<?php echo $data->data[30]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>32</td>
            <td>5Day</td>
            <td>5D</td>
            <td>plan change External</td>
            <td></td>
            <td>planing</td>
            <td><input type="text" name="32.1" class="32.1" value="<?php echo $data->data[31]->Who ?>" /></td>
<td>
<select name="32.2">
<option selected value="<?php echo $data->data[31]->Activity ?>">
<?php echo $data->data[31]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="32.3" class="32.3" value="<?php echo $data->data[31]->Date ?>" /></td>
<td><input type="text" name="32.4" class="32.4" value="<?php echo $data->data[31]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>33</td>
            <td>5Day</td>
            <td>5D</td>
            <td>
              layout & constuction discussion meeting -critical\non critical
              operations
            </td>
            <td>TEC</td>
            <td>IE\Sup\QA\MC\Tech</td>
            <td><input type="text" name="33.1" class="33.1" value="<?php echo $data->data[32]->Who ?>" /></td>
<td>
<select name="33.2">
<option selected value="<?php echo $data->data[32]->Activity ?>">
<?php echo $data->data[32]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="33.3" class="33.3" value="<?php echo $data->data[32]->Date ?>" /></td>
<td><input type="text" name="33.4" class="33.4" value="<?php echo $data->data[32]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>34</td>
            <td>5Day</td>
            <td>5D</td>
            <td>Mechanic Special notes in"Singhala Language"notes</td>
            <td>M\C</td>
            <td>Mechanic Special note</td>
            <td><input type="text" name="34.1" class="34.1" value="<?php echo $data->data[33]->Who ?>" /></td>
<td>
<select name="34.2">
<option selected value="<?php echo $data->data[33]->Activity ?>">
<?php echo $data->data[33]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="34.3" class="34.3" value="<?php echo $data->data[33]->Date ?>" /></td>
<td><input type="text" name="34.4" class="34.4" value="<?php echo $data->data[33]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>35</td>
            <td>5Day</td>
            <td>5D</td>
            <td>Allocate same Technican did the Pilot allocate for the Bulk</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="35.1" class="35.1" value="<?php echo $data->data[34]->Who ?>" /></td>
<td>
<select name="35.2">
<option selected value="<?php echo $data->data[34]->Activity ?>">
<?php echo $data->data[34]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="35.3" class="35.3" value="<?php echo $data->data[34]->Date ?>" /></td>
<td><input type="text" name="35.4" class="35.4" value="<?php echo $data->data[34]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>36</td>
            <td>5Day</td>
            <td>5D</td>
            <td>Allocate same Mechanic did the Pilot allocate for the Bulk</td>
            <td>Mec</td>
            <td>Mechanic</td>
            <td><input type="text" name="36.1" class="36.1" value="<?php echo $data->data[35]->Who ?>" /></td>
<td>
<select name="36.2">
<option selected value="<?php echo $data->data[35]->Activity ?>">
<?php echo $data->data[35]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="36.3" class="36.3" value="<?php echo $data->data[35]->Date ?>" /></td>
<td><input type="text" name="36.4" class="36.4" value="<?php echo $data->data[35]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>37</td>
            <td>5Day</td>
            <td>5D</td>
            <td>Pilot Apraisal meeting</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="37.1" class="37.1" value="<?php echo $data->data[36]->Who ?>" /></td>
<td>
<select name="37.2">
<option selected value="<?php echo $data->data[36]->Activity ?>">
<?php echo $data->data[36]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="37.3" class="37.3" value="<?php echo $data->data[36]->Date ?>" /></td>
<td><input type="text" name="37.4" class="37.4" value="<?php echo $data->data[36]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>38</td>
            <td>5Day</td>
            <td>5D</td>
            <td>Fabric Relaxing for - Bulk cut</td>
            <td>CUT</td>
            <td>Cutting manager</td>
            <td><input type="text" name="38.1" class="38.1" value="<?php echo $data->data[37]->Who ?>" /></td>
<td>
<select name="38.2">
<option selected value="<?php echo $data->data[37]->Activity ?>">
<?php echo $data->data[37]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="38.3" class="38.3" value="<?php echo $data->data[37]->Date ?>" /></td>
<td><input type="text" name="38.4" class="38.4" value="<?php echo $data->data[37]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>39</td>
            <td>5Day</td>
            <td>5D</td>
            <td>Updated Skill matrix use to select operators</td>
            <td>IE</td>
            <td>IE\Sup\TECH\QA\MC</td>
            <td><input type="text" name="39.1" class="39.1" value="<?php echo $data->data[38]->Who ?>" /></td>
<td>
<select name="39.2">
<option selected value="<?php echo $data->data[38]->Activity ?>">
<?php echo $data->data[38]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="39.3" class="39.3" value="<?php echo $data->data[38]->Date ?>" /></td>
<td><input type="text" name="39.4" class="39.4" value="<?php echo $data->data[38]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>40</td>
            <td>5Day</td>
            <td>5D</td>
            <td>Focus training completed - critical operations</td>
            <td>IE</td>
            <td>IE\Sup\TECH\QA\MC</td>
            <td><input type="text" name="40.1" class="40.1" value="<?php echo $data->data[39]->Who ?>" /></td>
<td>
<select name="40.2">
<option selected value="<?php echo $data->data[39]->Activity ?>">
<?php echo $data->data[39]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="40.3" class="40.3" value="<?php echo $data->data[39]->Date ?>" /></td>
<td><input type="text" name="40.4" class="40.4" value="<?php echo $data->data[39]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>41</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Bulk cut Proceed</td>
            <td>CUT</td>
            <td>Cutting manager</td>
            <td><input type="text" name="41.1" class="41.1" value="<?php echo $data->data[40]->Who ?>" /></td>
<td>
<select name="41.2">
<option selected value="<?php echo $data->data[40]->Activity ?>">
<?php echo $data->data[40]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="41.3" class="41.3" value="<?php echo $data->data[40]->Date ?>" /></td>
<td><input type="text" name="41.4" class="41.4" value="<?php echo $data->data[40]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>42</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Issue fabric for machines setting</td>
            <td>CUT</td>
            <td>Cutting manager</td>
            <td><input type="text" name="42.1" class="42.1" value="<?php echo $data->data[41]->Who ?>" /></td>
<td>
<select name="42.2">
<option selected value="<?php echo $data->data[41]->Activity ?>">
<?php echo $data->data[41]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="42.3" class="42.3" value="<?php echo $data->data[41]->Date ?>" /></td>
<td><input type="text" name="42.4" class="42.4" value="<?php echo $data->data[41]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>43</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Cut\Threads\Trims - row materials arrange to the new styel</td>
            <td>PROD</td>
            <td>Team leader\Supervisor</td>
            <td><input type="text" name="43.1" class="43.1" value="<?php echo $data->data[42]->Who ?>" /></td>
<td>
<select name="43.2">
<option selected value="<?php echo $data->data[42]->Activity ?>">
<?php echo $data->data[42]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="43.3" class="43.3" value="<?php echo $data->data[42]->Date ?>" /></td>
<td><input type="text" name="43.4" class="43.4" value="<?php echo $data->data[42]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>44</td>
            <td>4Day</td>
            <td>4D</td>
            <td>
              Internal\External machines identification -write the list Bar code
              No:(Follow the format)
            </td>
            <td>M\C</td>
            <td>Mechanic/IE</td>
            <td><input type="text" name="44.1" class="44.1" value="<?php echo $data->data[43]->Who ?>" /></td>
<td>
<select name="44.2">
<option selected value="<?php echo $data->data[43]->Activity ?>">
<?php echo $data->data[43]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="44.3" class="44.3" value="<?php echo $data->data[43]->Date ?>" /></td>
<td><input type="text" name="44.4" class="44.4" value="<?php echo $data->data[43]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>45</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Create space Back side of the line</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="45.1" class="45.1" value="<?php echo $data->data[44]->Who ?>" /></td>
<td>
<select name="45.2">
<option selected value="<?php echo $data->data[44]->Activity ?>">
<?php echo $data->data[44]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="45.3" class="45.3" value="<?php echo $data->data[44]->Date ?>" /></td>
<td><input type="text" name="45.4" class="45.4" value="<?php echo $data->data[44]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>46</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Machines - search and Bring to one place seacrh external</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="46.1" class="46.1" value="<?php echo $data->data[45]->Who ?>" /></td>
<td>
<select name="46.2">
<option selected value="<?php echo $data->data[45]->Activity ?>">
<?php echo $data->data[45]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="46.3" class="46.3" value="<?php echo $data->data[45]->Date ?>" /></td>
<td><input type="text" name="46.4" class="46.4" value="<?php echo $data->data[45]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>47</td>
            <td>4Day</td>
            <td>4D</td>
            <td>"Red Tag - Waiting for Machine setting Running setting</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="47.1" class="47.1" value="<?php echo $data->data[46]->Who ?>" /></td>
<td>
<select name="47.2">
<option selected value="<?php echo $data->data[46]->Activity ?>">
<?php echo $data->data[46]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="47.3" class="47.3" value="<?php echo $data->data[46]->Date ?>" /></td>
<td><input type="text" name="47.4" class="47.4" value="<?php echo $data->data[46]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>48</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Line internal machines -"Yellow Tag" inline selected machines</td>
            <td>M\C</td>
            <td>Mechanic/IE</td>
            <td><input type="text" name="48.1" class="48.1" value="<?php echo $data->data[47]->Who ?>" /></td>
<td>
<select name="48.2">
<option selected value="<?php echo $data->data[47]->Activity ?>">
<?php echo $data->data[47]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="48.3" class="48.3" value="<?php echo $data->data[47]->Date ?>" /></td>
<td><input type="text" name="48.4" class="48.4" value="<?php echo $data->data[47]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>49</td>
            <td>4Day</td>
            <td>4D</td>
            <td>
              Power supply, Ai supplyMachine lights,Thotili(dust collectors)
            </td>
            <td>ELEC</td>
            <td>Electrician</td>
            <td><input type="text" name="49.1" class="49.1" value="<?php echo $data->data[48]->Who ?>" /></td>
<td>
<select name="49.2">
<option selected value="<?php echo $data->data[48]->Activity ?>">
<?php echo $data->data[48]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="49.3" class="49.3" value="<?php echo $data->data[48]->Date ?>" /></td>
<td><input type="text" name="49.4" class="49.4" value="<?php echo $data->data[48]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>50</td>
            <td>4Day</td>
            <td>4D</td>
            <td>1,2,3,4…Set in order - brought critical machine</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="50.1" class="50.1" value="<?php echo $data->data[49]->Who ?>" /></td>
<td>
<select name="50.2">
<option selected value="<?php echo $data->data[49]->Activity ?>">
<?php echo $data->data[49]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="50.3" class="50.3" value="<?php echo $data->data[49]->Date ?>" /></td>
<td><input type="text" name="50.4" class="50.4" value="<?php echo $data->data[49]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>51</td>
            <td>4Day</td>
            <td>4D</td>
            <td>
              Machines list - give to supervisor\Roving QC\Team Leader to bring
              needles
            </td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="51.1" class="51.1" value="<?php echo $data->data[50]->Who ?>" /></td>
<td>
<select name="51.2">
<option selected value="<?php echo $data->data[50]->Activity ?>">
<?php echo $data->data[50]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="51.3" class="51.3" value="<?php echo $data->data[50]->Date ?>" /></td>
<td><input type="text" name="51.4" class="51.4" value="<?php echo $data->data[50]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>52</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Needles handover the needles to Mechanic</td>
            <td>SUP</td>
            <td>Supervisor\RQC\Team leader</td>
            <td><input type="text" name="52.1" class="52.1" value="<?php echo $data->data[51]->Who ?>" /></td>
<td>
<select name="52.2">
<option selected value="<?php echo $data->data[51]->Activity ?>">
<?php echo $data->data[51]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="52.3" class="52.3" value="<?php echo $data->data[51]->Date ?>" /></td>
<td><input type="text" name="52.4" class="52.4" value="<?php echo $data->data[51]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>53</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Pattern boards readyness - nested Patterns</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="53.1" class="53.1" value="<?php echo $data->data[52]->Who ?>" /></td>
<td>
<select name="53.2">
<option selected value="<?php echo $data->data[52]->Activity ?>">
<?php echo $data->data[52]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="53.3" class="53.3" value="<?php echo $data->data[52]->Date ?>" /></td>
<td><input type="text" name="53.4" class="53.4" value="<?php echo $data->data[52]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>54</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Pattern boards readyness-nested Patterns</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="54.1" class="54.1" value="<?php echo $data->data[53]->Who ?>" /></td>
<td>
<select name="54.2">
<option selected value="<?php echo $data->data[53]->Activity ?>">
<?php echo $data->data[53]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="54.3" class="54.3" value="<?php echo $data->data[53]->Date ?>" /></td>
<td><input type="text" name="54.4" class="54.4" value="<?php echo $data->data[53]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>55</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Measurement charts readyness</td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="55.1" class="55.1" value="<?php echo $data->data[54]->Who ?>" /></td>
<td>
<select name="55.2">
<option selected value="<?php echo $data->data[54]->Activity ?>">
<?php echo $data->data[54]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="55.3" class="55.3" value="<?php echo $data->data[54]->Date ?>" /></td>
<td><input type="text" name="55.4" class="55.4" value="<?php echo $data->data[54]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>56</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Preseting Plan (before 12 noon)</td>
            <td>IE</td>
            <td>IE\Technician</td>
            <td><input type="text" name="56.1" class="56.1" value="<?php echo $data->data[55]->Who ?>" /></td>
<td>
<select name="56.2">
<option selected value="<?php echo $data->data[55]->Activity ?>">
<?php echo $data->data[55]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="56.3" class="56.3" value="<?php echo $data->data[55]->Date ?>" /></td>
<td><input type="text" name="56.4" class="56.4" value="<?php echo $data->data[55]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>57</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Conversion kits\folder\attachments (Machine kit Readyness)</td>
            <td>M\C</td>
            <td>Spairpart store</td>
            <td><input type="text" name="57.1" class="57.1" value="<?php echo $data->data[56]->Who ?>" /></td>
<td>
<select name="57.2">
<option selected value="<?php echo $data->data[56]->Activity ?>">
<?php echo $data->data[56]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="57.3" class="57.3" value="<?php echo $data->data[56]->Date ?>" /></td>
<td><input type="text" name="57.4" class="57.4" value="<?php echo $data->data[56]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>58</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Fugai tag "previous learnings" (Machine kit readyness)</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="58.1" class="58.1" value="<?php echo $data->data[57]->Who ?>" /></td>
<td>
<select name="58.2">
<option selected value="<?php echo $data->data[57]->Activity ?>">
<?php echo $data->data[57]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="58.3" class="58.3" value="<?php echo $data->data[57]->Date ?>" /></td>
<td><input type="text" name="58.4" class="58.4" value="<?php echo $data->data[57]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>59</td>
            <td>4Day</td>
            <td>4D</td>
            <td>
              set the 1st operation and confirm machine readyiness by technician
            </td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="59.1" class="59.1" value="<?php echo $data->data[58]->Who ?>" /></td>
<td>
<select name="59.2">
<option selected value="<?php echo $data->data[58]->Activity ?>">
<?php echo $data->data[58]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="59.3" class="59.3" value="<?php echo $data->data[58]->Date ?>" /></td>
<td><input type="text" name="59.4" class="59.4" value="<?php echo $data->data[58]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>60</td>
            <td>4Day</td>
            <td>4D</td>
            <td>set the machine with actual fabric\theard\trims</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="60.1" class="60.1" value="<?php echo $data->data[59]->Who ?>" /></td>
<td>
<select name="60.2">
<option selected value="<?php echo $data->data[59]->Activity ?>">
<?php echo $data->data[59]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="60.3" class="60.3" value="<?php echo $data->data[59]->Date ?>" /></td>
<td><input type="text" name="60.4" class="60.4" value="<?php echo $data->data[59]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>61</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Set the RPM and operational real "ply hight"</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="61.1" class="61.1" value="<?php echo $data->data[60]->Who ?>" /></td>
<td>
<select name="61.2">
<option selected value="<?php echo $data->data[60]->Activity ?>">
<?php echo $data->data[60]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="61.3" class="61.3" value="<?php echo $data->data[60]->Date ?>" /></td>
<td><input type="text" name="61.4" class="61.4" value="<?php echo $data->data[60]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>62</td>
            <td>4Day</td>
            <td>4D</td>
            <td>
              "Blue Tag" waiting for technician set every pending machine for
              technician check.
            </td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="62.1" class="62.1" value="<?php echo $data->data[61]->Who ?>" /></td>
<td>
<select name="62.2">
<option selected value="<?php echo $data->data[61]->Activity ?>">
<?php echo $data->data[61]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="62.3" class="62.3" value="<?php echo $data->data[61]->Date ?>" /></td>
<td><input type="text" name="62.4" class="62.4" value="<?php echo $data->data[61]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>63</td>
            <td>4Day</td>
            <td>4D</td>
            <td>Focus training completed - critical operations</td>
            <td>IE</td>
            <td>IE\Sup\TECH\QA\MC</td>
            <td><input type="text" name="63.1" class="63.1" value="<?php echo $data->data[62]->Who ?>" /></td>
<td>
<select name="63.2">
<option selected value="<?php echo $data->data[62]->Activity ?>">
<?php echo $data->data[62]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="63.3" class="63.3" value="<?php echo $data->data[62]->Date ?>" /></td>
<td><input type="text" name="63.4" class="63.4" value="<?php echo $data->data[62]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>64</td>
            <td>3Day</td>
            <td>3D</td>
            <td>Thread size\colour & trims(check againts trim cards)</td>
            <td>RQC</td>
            <td>Tech\RQC</td>
            <td><input type="text" name="64.1" class="64.1" value="<?php echo $data->data[63]->Who ?>" /></td>
<td>
<select name="64.2">
<option selected value="<?php echo $data->data[63]->Activity ?>">
<?php echo $data->data[63]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="64.3" class="64.3" value="<?php echo $data->data[63]->Date ?>" /></td>
<td><input type="text" name="64.4" class="64.4" value="<?php echo $data->data[63]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>65</td>
            <td>3Day</td>
            <td>3D</td>
            <td>
              maintain the "Presetting record sheet"fill the Real
              dutrations(format STAT F8)
            </td>
            <td>IE</td>
            <td>M\c\Tech\RQC\IE</td>
            <td><input type="text" name="65.1" class="65.1" value="<?php echo $data->data[64]->Who ?>" /></td>
<td>
<select name="65.2">
<option selected value="<?php echo $data->data[64]->Activity ?>">
<?php echo $data->data[64]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="65.3" class="65.3" value="<?php echo $data->data[64]->Date ?>" /></td>
<td><input type="text" name="65.4" class="65.4" value="<?php echo $data->data[64]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>66</td>
            <td>3Day</td>
            <td>3D</td>
            <td>7.30am start 1st operator training in preset machine 1</td>
            <td>TEC</td>
            <td>Tech\IE\Sup</td>
            <td><input type="text" name="66.1" class="66.1" value="<?php echo $data->data[65]->Who ?>" /></td>
<td>
<select name="66.2">
<option selected value="<?php echo $data->data[65]->Activity ?>">
<?php echo $data->data[65]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="66.3" class="66.3" value="<?php echo $data->data[65]->Date ?>" /></td>
<td><input type="text" name="66.4" class="66.4" value="<?php echo $data->data[65]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>67</td>
            <td>3Day</td>
            <td>3D</td>
            <td>RQC - All operations need to check and confirm Mock-up</td>
            <td>RQC</td>
            <td>RQC\TECH</td>
            <td><input type="text" name="67.1" class="67.1" value="<?php echo $data->data[66]->Who ?>" /></td>
<td>
<select name="67.2">
<option selected value="<?php echo $data->data[66]->Activity ?>">
<?php echo $data->data[66]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="67.3" class="67.3" value="<?php echo $data->data[66]->Date ?>" /></td>
<td><input type="text" name="67.4" class="67.4" value="<?php echo $data->data[66]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>68</td>
            <td>3Day</td>
            <td>3D</td>
            <td>
              BQC\AQL auditor- every critical operation need to check and confirm
              the mockup
            </td>
            <td>BQC</td>
            <td>BUYER QC</td>
            <td><input type="text" name="68.1" class="68.1" value="<?php echo $data->data[67]->Who ?>" /></td>
<td>
<select name="68.2">
<option selected value="<?php echo $data->data[67]->Activity ?>">
<?php echo $data->data[67]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="68.3" class="68.3" value="<?php echo $data->data[67]->Date ?>" /></td>
<td><input type="text" name="68.4" class="68.4" value="<?php echo $data->data[67]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>69</td>
            <td>3Day</td>
            <td>3D</td>
            <td>Machine setting-RFT-Right First Time</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="69.1" class="69.1" value="<?php echo $data->data[68]->Who ?>" /></td>
<td>
<select name="69.2">
<option selected value="<?php echo $data->data[68]->Activity ?>">
<?php echo $data->data[68]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="69.3" class="69.3" value="<?php echo $data->data[68]->Date ?>" /></td>
<td><input type="text" name="69.4" class="69.4" value="<?php echo $data->data[68]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>70</td>
            <td>3Day</td>
            <td>3D</td>
            <td>
              operator training -in Presetting 1st day(according to Presetting
              plan)
            </td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="70.1" class="70.1" value="<?php echo $data->data[69]->Who ?>" /></td>
<td>
<select name="70.2">
<option selected value="<?php echo $data->data[69]->Activity ?>">
<?php echo $data->data[69]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="70.3" class="70.3" value="<?php echo $data->data[69]->Date ?>" /></td>
<td><input type="text" name="70.4" class="70.4" value="<?php echo $data->data[69]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>71</td>
            <td>3Day</td>
            <td>3D</td>
            <td>
              Motivate Pllanned 10 operators to complete Presetting 50pcs within 1
              hour
            </td>
            <td>PM\sup</td>
            <td>PM\Supervisor</td>
            <td><input type="text" name="71.1" class="71.1" value="<?php echo $data->data[70]->Who ?>" /></td>
<td>
<select name="71.2">
<option selected value="<?php echo $data->data[70]->Activity ?>">
<?php echo $data->data[70]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="71.3" class="71.3" value="<?php echo $data->data[70]->Date ?>" /></td>
<td><input type="text" name="71.4" class="71.4" value="<?php echo $data->data[70]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>72</td>
            <td>3Day</td>
            <td>3D</td>
            <td>Engineer Work stations best motion Economy (day-1)</td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="72.1" class="72.1" value="<?php echo $data->data[71]->Who ?>" /></td>
<td>
<select name="72.2">
<option selected value="<?php echo $data->data[71]->Activity ?>">
<?php echo $data->data[71]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="72.3" class="72.3" value="<?php echo $data->data[71]->Date ?>" /></td>
<td><input type="text" name="72.4" class="72.4" value="<?php echo $data->data[71]->{'Root cause'} ?>" /></td>


          </tr>
          <tr>
            <td>73</td>
            <td>3Day</td>
            <td>3D</td>
            <td>45% -Efficiency-each newly trained Operator Efficiency</td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="73.1" class="73.1" value="<?php echo $data->data[72]->Who ?>" /></td>
<td>
<select name="73.2">
<option selected value="<?php echo $data->data[72]->Activity ?>">
<?php echo $data->data[72]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="73.3" class="73.3" value="<?php echo $data->data[72]->Date ?>" /></td>
<td><input type="text" name="73.4" class="73.4" value="<?php echo $data->data[72]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>74</td>
            <td>3Day</td>
            <td>3D</td>
            <td>
              STW - technician operator training.(required asign a separate
              person)
            </td>
            <td>TEC</td>
            <td>M\c\Tech</td>
            <td><input type="text" name="74.1" class="74.1" value="<?php echo $data->data[73]->Who ?>" /></td>
<td>
<select name="74.2">
<option selected value="<?php echo $data->data[73]->Activity ?>">
<?php echo $data->data[73]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="74.3" class="74.3" value="<?php echo $data->data[73]->Date ?>" /></td>
<td><input type="text" name="74.4" class="74.4" value="<?php echo $data->data[73]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>75</td>
            <td>3Day</td>
            <td>3D</td>
            <td>
              Presetting target minimum set 10 machines and train 10 operators per
              day.
            </td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="75.1" class="75.1" value="<?php echo $data->data[74]->Who ?>" /></td>
<td>
<select name="75.2">
<option selected value="<?php echo $data->data[74]->Activity ?>">
<?php echo $data->data[74]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="75.3" class="75.3" value="<?php echo $data->data[74]->Date ?>" /></td>
<td><input type="text" name="75.4" class="75.4" value="<?php echo $data->data[74]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>76</td>
            <td>3Day</td>
            <td>3D</td>
            <td>
              Visualize Status - waiting for Mechanic\waiting for
              Technician\preset completed
            </td>
            <td>IE</td>
            <td>M\c\Tech\IE</td>
            <td><input type="text" name="76.1" class="76.1" value="<?php echo $data->data[75]->Who ?>" /></td>
<td>
<select name="76.2">
<option selected value="<?php echo $data->data[75]->Activity ?>">
<?php echo $data->data[75]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="76.3" class="76.3" value="<?php echo $data->data[75]->Date ?>" /></td>
<td><input type="text" name="76.4" class="76.4" value="<?php echo $data->data[75]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>77</td>
            <td>3Day</td>
            <td>3D</td>
            <td>Re-Schedule - before 7.15 pm -Schedule pre-setting plan</td>
            <td>IE</td>
            <td>M\c\Tech\RQC\IE</td>
            <td><input type="text" name="77.1" class="77.1" value="<?php echo $data->data[76]->Who ?>" /></td>
<td>
<select name="77.2">
<option selected value="<?php echo $data->data[76]->Activity ?>">
<?php echo $data->data[76]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="77.3" class="77.3" value="<?php echo $data->data[76]->Date ?>" /></td>
<td><input type="text" name="77.4" class="77.4" value="<?php echo $data->data[76]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>78</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              maintain the "Presetting record sheet"fill the Real
              dutrations(format STAT F8)
            </td>
            <td>RQC</td>
            <td>M\c\Tech\RQC\IE</td>
            <td><input type="text" name="78.1" class="78.1" value="<?php echo $data->data[77]->Who ?>" /></td>
<td>
<select name="78.2">
<option selected value="<?php echo $data->data[77]->Activity ?>">
<?php echo $data->data[77]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="78.3" class="78.3" value="<?php echo $data->data[77]->Date ?>" /></td>
<td><input type="text" name="78.4" class="78.4" value="<?php echo $data->data[77]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>79</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              7.30am start 1st operator training in preset machines for the 2nd
              day
            </td>
            <td>TEC</td>
            <td>Tech\IE\Sup</td>
            <td><input type="text" name="79.1" class="79.1" value="<?php echo $data->data[78]->Who ?>" /></td>
<td>
<select name="79.2">
<option selected value="<?php echo $data->data[78]->Activity ?>">
<?php echo $data->data[78]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="79.3" class="79.3" value="<?php echo $data->data[78]->Date ?>" /></td>
<td><input type="text" name="79.4" class="79.4" value="<?php echo $data->data[78]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>80</td>
            <td>2Day</td>
            <td>2D</td>
            <td>RQC - All operations need to check and confirm Mock-up</td>
            <td>RQC</td>
            <td>RQC\TECH</td>
            <td><input type="text" name="80.1" class="80.1" value="<?php echo $data->data[79]->Who ?>" /></td>
<td>
<select name="80.2">
<option selected value="<?php echo $data->data[79]->Activity ?>">
<?php echo $data->data[79]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="80.3" class="80.3" value="<?php echo $data->data[79]->Date ?>" /></td>
<td><input type="text" name="80.4" class="80.4" value="<?php echo $data->data[79]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>81</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              BQC-every critical operation need to check and confirm the mockup
            </td>
            <td>BQC</td>
            <td>BUYER QC</td>
            <td><input type="text" name="81.1" class="81.1" value="<?php echo $data->data[80]->Who ?>" /></td>
<td>
<select name="81.2">
<option selected value="<?php echo $data->data[80]->Activity ?>">
<?php echo $data->data[80]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="81.3" class="81.3" value="<?php echo $data->data[80]->Date ?>" /></td>
<td><input type="text" name="81.4" class="81.4" value="<?php echo $data->data[80]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>82</td>
            <td>2Day</td>
            <td>2D</td>
            <td>Machine setting-RFT-Right First Time</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="82.1" class="82.1" value="<?php echo $data->data[81]->Who ?>" /></td>
<td>
<select name="82.2">
<option selected value="<?php echo $data->data[81]->Activity ?>">
<?php echo $data->data[81]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="82.3" class="82.3" value="<?php echo $data->data[81]->Date ?>" /></td>
<td><input type="text" name="82.4" class="82.4" value="<?php echo $data->data[81]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>83</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              operator training -in Presetting 2nd day (according to Presetting
              plan)
            </td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="83.1" class="83.1" value="<?php echo $data->data[82]->Who ?>" /></td>
<td>
<select name="83.2">
<option selected value="<?php echo $data->data[82]->Activity ?>">
<?php echo $data->data[82]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="83.3" class="83.3" value="<?php echo $data->data[82]->Date ?>" /></td>
<td><input type="text" name="83.4" class="83.4" value="<?php echo $data->data[82]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>84</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              STW - technician operator training.(required asign a separate
              person)
            </td>
            <td>TEC</td>
            <td>M\c\Tech</td>
            <td><input type="text" name="84.1" class="84.1" value="<?php echo $data->data[83]->Who ?>" /></td>
<td>
<select name="84.2">
<option selected value="<?php echo $data->data[83]->Activity ?>">
<?php echo $data->data[83]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="84.3" class="84.3" value="<?php echo $data->data[83]->Date ?>" /></td>
<td><input type="text" name="84.4" class="84.4" value="<?php echo $data->data[83]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>85</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              Motivate Pllanned 10 operators to complete Presetting 50pcs within 1
              hour
            </td>
            <td>SUP</td>
            <td>Supervisor</td>
            <td><input type="text" name="85.1" class="85.1" value="<?php echo $data->data[84]->Who ?>" /></td>
<td>
<select name="85.2">
<option selected value="<?php echo $data->data[84]->Activity ?>">
<?php echo $data->data[84]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="85.3" class="85.3" value="<?php echo $data->data[84]->Date ?>" /></td>
<td><input type="text" name="85.4" class="85.4" value="<?php echo $data->data[84]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>86</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              Engineer Work stations best motion Economy (day 2 preset machines)
            </td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="86.1" class="86.1" value="<?php echo $data->data[85]->Who ?>" /></td>
<td>
<select name="86.2">
<option selected value="<?php echo $data->data[85]->Activity ?>">
<?php echo $data->data[85]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="86.3" class="86.3" value="<?php echo $data->data[85]->Date ?>" /></td>
<td><input type="text" name="86.4" class="86.4" value="<?php echo $data->data[85]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>87</td>
            <td>2Day</td>
            <td>2D</td>
            <td>45% -Efficiency-each newly trained Operator Efficiency</td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="87.1" class="87.1" value="<?php echo $data->data[86]->Who ?>" /></td>
<td>
<select name="87.2">
<option selected value="<?php echo $data->data[86]->Activity ?>">
<?php echo $data->data[86]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="87.3" class="87.3" value="<?php echo $data->data[86]->Date ?>" /></td>
<td><input type="text" name="87.4" class="87.4" value="<?php echo $data->data[86]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>88</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              Presetting target minimum set 10 machines and train 10 operators per
              day.
            </td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="88.1" class="88.1" value="<?php echo $data->data[87]->Who ?>" /></td>
<td>
<select name="88.2">
<option selected value="<?php echo $data->data[87]->Activity ?>">
<?php echo $data->data[87]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="88.3" class="88.3" value="<?php echo $data->data[87]->Date ?>" /></td>
<td><input type="text" name="88.4" class="88.4" value="<?php echo $data->data[87]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>89</td>
            <td>2Day</td>
            <td>2D</td>
            <td>
              Visualize Status-waiting for Mechanic\waiting for Technician\preset
              completed
            </td>
            <td>IE</td>
            <td>M\c\Tech\IE</td>
            <td><input type="text" name="89.1" class="89.1" value="<?php echo $data->data[88]->Who ?>" /></td>
<td>
<select name="89.2">
<option selected value="<?php echo $data->data[88]->Activity ?>">
<?php echo $data->data[88]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="89.3" class="89.3" value="<?php echo $data->data[88]->Date ?>" /></td>
<td><input type="text" name="89.4" class="89.4" value="<?php echo $data->data[88]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>90</td>
            <td>2Day</td>
            <td>2D</td>
            <td>Re-Schedule - before 7.15 pm -Schedule pre-setting plan</td>
            <td>IE</td>
            <td>M\c\Tech\RQC\IE</td>
            <td><input type="text" name="90.1" class="90.1" value="<?php echo $data->data[89]->Who ?>" /></td>
<td>
<select name="90.2">
<option selected value="<?php echo $data->data[89]->Activity ?>">
<?php echo $data->data[89]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="90.3" class="90.3" value="<?php echo $data->data[89]->Date ?>" /></td>
<td><input type="text" name="90.4" class="90.4" value="<?php echo $data->data[89]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>91</td>
            <td>1Day</td>
            <td>1D</td>
            <td>closeup plan</td>
            <td>IE</td>
            <td>IE\TECH\Mech</td>
            <td><input type="text" name="91.1" class="91.1" value="<?php echo $data->data[90]->Who ?>" /></td>
<td>
<select name="91.2">
<option selected value="<?php echo $data->data[90]->Activity ?>">
<?php echo $data->data[90]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="91.3" class="91.3" value="<?php echo $data->data[90]->Date ?>" /></td>
<td><input type="text" name="91.4" class="91.4" value="<?php echo $data->data[90]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>92</td>
            <td>1Day</td>
            <td>1D</td>
            <td>Feeding plan make (balance input and WIP for each machine)</td>
            <td>IE</td>
            <td>IE\TECH\Mech</td>
            <td><input type="text" name="92.1" class="92.1" value="<?php echo $data->data[91]->Who ?>" /></td>
<td>
<select name="92.2">
<option selected value="<?php echo $data->data[91]->Activity ?>">
<?php echo $data->data[91]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="92.3" class="92.3" value="<?php echo $data->data[91]->Date ?>" /></td>
<td><input type="text" name="92.4" class="92.4" value="<?php echo $data->data[91]->{'Root cause'} ?>" /></td>

          </tr>

          <tr>
            <td>93</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              maintain the "Presetting record sheet"fill the Real dutrations
              (format STAT F8)
            </td>
            <td>IE</td>
            <td>M\c\Tech\RQC\IE</td>
            <td><input type="text" name="93.1" class="93.1" value="<?php echo $data->data[92]->Who ?>" /></td>
<td>
<select name="93.2">
<option selected value="<?php echo $data->data[92]->Activity ?>">
<?php echo $data->data[92]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="93.3" class="93.3" value="<?php echo $data->data[92]->Date ?>" /></td>
<td><input type="text" name="93.4" class="93.4" value="<?php echo $data->data[92]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>94</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              7.30am start 1st operator training in preset machines for the 3rd
              day
            </td>
            <td>TEC</td>
            <td>Tech\IE\Sup</td>
            <td><input type="text" name="94.1" class="94.1" value="<?php echo $data->data[93]->Who ?>" /></td>
<td>
<select name="94.2">
<option selected value="<?php echo $data->data[93]->Activity ?>">
<?php echo $data->data[93]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="94.3" class="94.3" value="<?php echo $data->data[93]->Date ?>" /></td>
<td><input type="text" name="94.4" class="94.4" value="<?php echo $data->data[93]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>95</td>
            <td>1Day</td>
            <td>1D</td>
            <td>RQC-All operations need to check and confirm Mock-up</td>
            <td>RQC</td>
            <td>RQC\TECH</td>
            <td><input type="text" name="95.1" class="95.1" value="<?php echo $data->data[94]->Who ?>" /></td>
<td>
<select name="95.2">
<option selected value="<?php echo $data->data[94]->Activity ?>">
<?php echo $data->data[94]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="95.3" class="95.3" value="<?php echo $data->data[94]->Date ?>" /></td>
<td><input type="text" name="95.4" class="95.4" value="<?php echo $data->data[94]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>96</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              BQC - every critical operation need to check and confirm the mockup
            </td>
            <td>RQC</td>
            <td>BUYER QC</td>
            <td><input type="text" name="96.1" class="96.1" value="<?php echo $data->data[95]->Who ?>" /></td>
<td>
<select name="96.2">
<option selected value="<?php echo $data->data[95]->Activity ?>">
<?php echo $data->data[95]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="96.3" class="96.3" value="<?php echo $data->data[95]->Date ?>" /></td>
<td><input type="text" name="96.4" class="96.4" value="<?php echo $data->data[95]->{'Root cause'} ?>" /></td>

          </tr>

          <tr>
            <td>97</td>
            <td>1Day</td>
            <td>1D</td>
            <td>Machine setting-RFT-Right First Time</td>
            <td>M\C</td>
            <td>Mechanic</td>
            <td><input type="text" name="97.1" class="97.1" value="<?php echo $data->data[96]->Who ?>" /></td>
<td>
<select name="97.2">
<option selected value="<?php echo $data->data[96]->Activity ?>">
<?php echo $data->data[96]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="97.3" class="97.3" value="<?php echo $data->data[96]->Date ?>" /></td>
<td><input type="text" name="97.4" class="97.4" value="<?php echo $data->data[96]->{'Root cause'} ?>" /></td>

          </tr>

          <tr>
            <td>98</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              operator training -in Presetting 3rd day (according to Presetting
              plan)
            </td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="98.1" class="98.1" value="<?php echo $data->data[97]->Who ?>" /></td>
<td>
<select name="98.2">
<option selected value="<?php echo $data->data[97]->Activity ?>">
<?php echo $data->data[97]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="98.3" class="98.3" value="<?php echo $data->data[97]->Date ?>" /></td>
<td><input type="text" name="98.4" class="98.4" value="<?php echo $data->data[97]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>99</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              Motivate Pllanned 10 operators to complete Presetting 50pcs within 1
              hour
            </td>
            <td>SUP</td>
            <td>Supervisor</td>
            <td><input type="text" name="99.1" class="99.1" value="<?php echo $data->data[98]->Who ?>" /></td>
<td>
<select name="99.2">
<option selected value="<?php echo $data->data[98]->Activity ?>">
<?php echo $data->data[98]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="99.3" class="99.3" value="<?php echo $data->data[98]->Date ?>" /></td>
<td><input type="text" name="99.4" class="99.4" value="<?php echo $data->data[98]->{'Root cause'} ?>" /></td>

          </tr>

          <tr>
            <td>100</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              Engineer Work stations best motion Economy (day -3 pre-set machines)
            </td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="100.1" class="100.1" value="<?php echo $data->data[99]->Who ?>" /></td>
<td>
<select name="100.2">
<option selected value="<?php echo $data->data[99]->Activity ?>">
<?php echo $data->data[99]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="100.3" class="100.3" value="<?php echo $data->data[99]->Date ?>" /></td>
<td><input type="text" name="100.4" class="100.4" value="<?php echo $data->data[99]->{'Root cause'} ?>" /></td>

          </tr>

          <tr>
            <td>101</td>
            <td>1Day</td>
            <td>1D</td>
            <td>45% -Efficiency - each newly trained Operator Efficiency</td>
            <td>IE</td>
            <td>IE</td>
            <td><input type="text" name="101.1" class="101.1" value="<?php echo $data->data[100]->Who ?>" /></td>
<td>
<select name="101.2">
<option selected value="<?php echo $data->data[100]->Activity ?>">
<?php echo $data->data[100]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="101.3" class="101.3" value="<?php echo $data->data[100]->Date ?>" /></td>
<td><input type="text" name="101.4" class="101.4" value="<?php echo $data->data[100]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>102</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              STW-technician operator training.(required asign a separate person)
            </td>
            <td>TEC</td>
            <td>M\c\Tech</td>
            <td><input type="text" name="102.1" class="102.1" value="<?php echo $data->data[101]->Who ?>" /></td>
<td>
<select name="102.2">
<option selected value="<?php echo $data->data[101]->Activity ?>">
<?php echo $data->data[101]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="102.3" class="102.3" value="<?php echo $data->data[101]->Date ?>" /></td>
<td><input type="text" name="102.4" class="102.4" value="<?php echo $data->data[101]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>103</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              Presetting target minimum set 10 machines and train 10 operators per
              day.
            </td>
            <td>TEC</td>
            <td>Technician</td>
            <td><input type="text" name="103.1" class="103.1" value="<?php echo $data->data[102]->Who ?>" /></td>
<td>
<select name="103.2">
<option selected value="<?php echo $data->data[102]->Activity ?>">
<?php echo $data->data[102]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="103.3" class="103.3" value="<?php echo $data->data[102]->Date ?>" /></td>
<td><input type="text" name="103.4" class="103.4" value="<?php echo $data->data[102]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>104</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              Visualize Status-waiting for Mechanic\waiting for Technician\preset
              completed
            </td>
            <td>IE</td>
            <td>M\c\Tech\IE</td>
            <td><input type="text" name="104.1" class="104.1" value="<?php echo $data->data[103]->Who ?>" /></td>
<td>
<select name="104.2">
<option selected value="<?php echo $data->data[103]->Activity ?>">
<?php echo $data->data[103]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="104.3" class="104.3" value="<?php echo $data->data[103]->Date ?>" /></td>
<td><input type="text" name="104.4" class="104.4" value="<?php echo $data->data[103]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>105</td>
            <td>1Day</td>
            <td>1D</td>
            <td>
              start Back to Back QCO 1st operator finishes , (QCO -Quick Change
              Over)
            </td>
            <td>IE</td>
            <td>M\c\Tech\RQC\IE</td>
            <td><input type="text" name="105.1" class="105.1" value="<?php echo $data->data[104]->Who ?>" /></td>
<td>
<select name="105.2">
<option selected value="<?php echo $data->data[104]->Activity ?>">
<?php echo $data->data[104]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="105.3" class="105.3" value="<?php echo $data->data[104]->Date ?>" /></td>
<td><input type="text" name="105.4" class="105.4" value="<?php echo $data->data[104]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>106</td>
            <td>1Day</td>
            <td>1D</td>
            <td>Take Production from 1st hour from every changed operator.</td>
            <td>IE</td>
            <td>Tech\Sup\IE</td>
            <td><input type="text" name="106.1" class="106.1" value="<?php echo $data->data[105]->Who ?>" /></td>
<td>
<select name="106.2">
<option selected value="<?php echo $data->data[105]->Activity ?>">
<?php echo $data->data[105]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="106.3" class="106.3" value="<?php echo $data->data[105]->Date ?>" /></td>
<td><input type="text" name="106.4" class="106.4" value="<?php echo $data->data[105]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>107</td>
            <td>Last 3 Day</td>
            <td>L3</td>
            <td>FN-20%\FR-25%\Line Repeat-30%</td>
            <td></td>
            <td>Last 3 days(Before)</td>
            <td><input type="text" name="107.1" class="107.1" value="<?php echo $data->data[106]->Who ?>" /></td>
<td>
<select name="107.2">
<option selected value="<?php echo $data->data[106]->Activity ?>">
<?php echo $data->data[106]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="107.3" class="107.3" value="<?php echo $data->data[106]->Date ?>" /></td>
<td><input type="text" name="107.4" class="107.4" value="<?php echo $data->data[106]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>108</td>
            <td>Last 3 Day</td>
            <td>L2</td>
            <td>FN-40%\FR-45%\Line Repeat-50%</td>
            <td></td>
            <td>Last 2 days(Before)</td>
            <td><input type="text" name="108.1" class="108.1" value="<?php echo $data->data[107]->Who ?>" /></td>
<td>
<select name="108.2">
<option selected value="<?php echo $data->data[107]->Activity ?>">
<?php echo $data->data[107]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="108.3" class="108.3" value="<?php echo $data->data[107]->Date ?>" /></td>
<td><input type="text" name="108.4" class="108.4" value="<?php echo $data->data[107]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>109</td>
            <td>Last 3 Day</td>
            <td>L1</td>
            <td>FN-60%\FR-62%\Line Repeat-65%</td>
            <td></td>
            <td>Last 1 days(Before)</td>
            <td><input type="text" name="109.1" class="109.1" value="<?php echo $data->data[108]->Who ?>" /></td>
<td>
<select name="109.2">
<option selected value="<?php echo $data->data[108]->Activity ?>">
<?php echo $data->data[108]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="109.3" class="109.3" value="<?php echo $data->data[108]->Date ?>" /></td>
<td><input type="text" name="109.4" class="109.4" value="<?php echo $data->data[108]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>110</td>
            <td>New 1st Day</td>
            <td>N1</td>
            <td>(Bra -20%,25%,30%)-(Non Bra - 30%, 32%, 35%)</td>
            <td>PM \IEM</td>
            <td>1st day (New)</td>
            <td><input type="text" name="110.1" class="110.1" value="<?php echo $data->data[109]->Who ?>" /></td>
<td>
<select name="110.2">
<option selected value="<?php echo $data->data[109]->Activity ?>">
<?php echo $data->data[109]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="110.3" class="110.3" value="<?php echo $data->data[109]->Date ?>" /></td>
<td><input type="text" name="110.4" class="110.4" value="<?php echo $data->data[109]->{'Root cause'} ?>" /></td>
          </tr>

          <tr>
            <td>111</td>
            <td>New 1st Day</td>
            <td>N1</td>
            <td>Clear all operator Method & Qulity deficulties</td>
            <td>TEC</td>
            <td>1st day (New)</td>
            <td><input type="text" name="111.1" class="111.1" value="<?php echo $data->data[110]->Who ?>" /></td>
<td>
<select name="111.2">
<option selected value="<?php echo $data->data[110]->Activity ?>">
<?php echo $data->data[110]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="111.3" class="111.3" value="<?php echo $data->data[110]->Date ?>" /></td>
<td><input type="text" name="111.4" class="111.4" value="<?php echo $data->data[110]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>112</td>
            <td>New 1st Day</td>
            <td>N1</td>
            <td>Hourly Production Followup</td>
            <td>Sup</td>
            <td>1st day (New)</td>
            <td><input type="text" name="112.1" class="112.1" value="<?php echo $data->data[111]->Who ?>" /></td>
<td>
<select name="112.2">
<option selected value="<?php echo $data->data[111]->Activity ?>">
<?php echo $data->data[111]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="112.3" class="112.3" value="<?php echo $data->data[111]->Date ?>" /></td>
<td><input type="text" name="112.4" class="112.4" value="<?php echo $data->data[111]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>113</td>
            <td>New 1st Day</td>
            <td>N1</td>
            <td>Full Line capacity - Bottle necks clear</td>
            <td>IE</td>
            <td>1st day (New)</td>
            <td><input type="text" name="113.1" class="113.1" value="<?php echo $data->data[112]->Who ?>" /></td>
<td>
<select name="113.2">
<option selected value="<?php echo $data->data[112]->Activity ?>">
<?php echo $data->data[112]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="113.3" class="113.3" value="<?php echo $data->data[112]->Date ?>" /></td>
<td><input type="text" name="113.4" class="113.4" value="<?php echo $data->data[112]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>114</td>
            <td>New 1st Day</td>
            <td>N1</td>
            <td>Increse Random checks - Assure Quality</td>
            <td>RQC</td>
            <td>1st day (New)</td>
            <td><input type="text" name="114.1" class="114.1" value="<?php echo $data->data[113]->Who ?>" /></td>
<td>
<select name="114.2">
<option selected value="<?php echo $data->data[113]->Activity ?>">
<?php echo $data->data[113]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="114.3" class="114.3" value="<?php echo $data->data[113]->Date ?>" /></td>
<td><input type="text" name="114.4" class="114.4" value="<?php echo $data->data[113]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>115</td>
            <td>New 1st Day</td>
            <td>N1</td>
            <td>Machines Re-setting - Quick responding</td>
            <td>M\C</td>
            <td>1st day (New)</td>
            <td><input type="text" name="115.1" class="115.1" value="<?php echo $data->data[114]->Who ?>" /></td>
<td>
<select name="115.2">
<option selected value="<?php echo $data->data[114]->Activity ?>">
<?php echo $data->data[114]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="115.3" class="115.3" value="<?php echo $data->data[114]->Date ?>" /></td>
<td><input type="text" name="115.4" class="115.4" value="<?php echo $data->data[114]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>116</td>
            <td>New 2st Day</td>
            <td>N2</td>
            <td>(Bra-40%,42%,45%) - (Non Bra-45%,47%,50%)</td>
            <td>PM\IEM</td>
            <td>2nd Day (New)</td>
            <td><input type="text" name="116.1" class="116.1" value="<?php echo $data->data[115]->Who ?>" /></td>
<td>
<select name="116.2">
<option selected value="<?php echo $data->data[115]->Activity ?>">
<?php echo $data->data[115]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="116.3" class="116.3" value="<?php echo $data->data[115]->Date ?>" /></td>
<td><input type="text" name="116.4" class="116.4" value="<?php echo $data->data[115]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>117</td>
            <td>New 2st Day</td>
            <td>N2</td>
            <td>Clear all operator Method & Qulity deficulties</td>
            <td>TEC</td>
            <td>2st day (New)</td>
            <td><input type="text" name="117.1" class="117.1" value="<?php echo $data->data[116]->Who ?>" /></td>
<td>
<select name="117.2">
<option selected value="<?php echo $data->data[116]->Activity ?>">
<?php echo $data->data[116]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="117.3" class="117.3" value="<?php echo $data->data[116]->Date ?>" /></td>
<td><input type="text" name="117.4" class="117.4" value="<?php echo $data->data[116]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>118</td>
            <td>New 2st Day</td>
            <td>N2</td>
            <td>Hourly Production Followup</td>
            <td>Sup</td>
            <td>2st day (New)</td>
            <td><input type="text" name="118.1" class="118.1" value="<?php echo $data->data[117]->Who ?>" /></td>
<td>
<select name="118.2">
<option selected value="<?php echo $data->data[117]->Activity ?>">
<?php echo $data->data[117]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="118.3" class="118.3" value="<?php echo $data->data[117]->Date ?>" /></td>
<td><input type="text" name="118.4" class="118.4" value="<?php echo $data->data[117]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>119</td>
            <td>New 2st Day</td>
            <td>N2</td>
            <td>Production Material Consumption confirmation</td>
            <td>PM</td>
            <td>2st day (New)</td>
            <td><input type="text" name="119.1" class="119.1" value="<?php echo $data->data[118]->Who ?>" /></td>
<td>
<select name="119.2">
<option selected value="<?php echo $data->data[118]->Activity ?>">
<?php echo $data->data[118]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="119.3" class="119.3" value="<?php echo $data->data[118]->Date ?>" /></td>
<td><input type="text" name="119.4" class="119.4" value="<?php echo $data->data[118]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>120</td>
            <td>New 2st Day</td>
            <td>N2</td>
            <td>Bottle necks clear</td>
            <td>IE</td>
            <td>2st day (New)</td>
            <td><input type="text" name="120.1" class="120.1" value="<?php echo $data->data[119]->Who ?>" /></td>
<td>
<select name="120.2">
<option selected value="<?php echo $data->data[119]->Activity ?>">
<?php echo $data->data[119]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="120.3" class="120.3" value="<?php echo $data->data[119]->Date ?>" /></td>
<td><input type="text" name="120.4" class="120.4" value="<?php echo $data->data[119]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>121</td>
            <td>New 2st Day</td>
            <td>N2</td>
            <td>Assure Quality</td>
            <td>RQC</td>
            <td>2st day (New)</td>
            <td><input type="text" name="121.1" class="121.1" value="<?php echo $data->data[120]->Who ?>" /></td>
<td>
<select name="121.2">
<option selected value="<?php echo $data->data[120]->Activity ?>">
<?php echo $data->data[120]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="121.3" class="121.3" value="<?php echo $data->data[120]->Date ?>" /></td>
<td><input type="text" name="121.4" class="121.4" value="<?php echo $data->data[120]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>122</td>
            <td>New 2st Day</td>
            <td>N2</td>
            <td>Machines Re-setting - Quick responding</td>
            <td>M\C</td>
            <td>2st day (New)</td>
            <td><input type="text" name="122.1" class="122.1" value="<?php echo $data->data[121]->Who ?>" /></td>
<td>
<select name="122.2">
<option selected value="<?php echo $data->data[121]->Activity ?>">
<?php echo $data->data[121]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="122.3" class="122.3" value="<?php echo $data->data[121]->Date ?>" /></td>
<td><input type="text" name="122.4" class="122.4" value="<?php echo $data->data[121]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>123</td>
            <td>New 3st Day</td>
            <td>N3</td>
            <td>(Bra - 60%,62%,65%) - (Non Bra - 60%,62%,65%)</td>
            <td>PM\IEM</td>
            <td>3st day (New)</td>
            <td><input type="text" name="123.1" class="123.1" value="<?php echo $data->data[122]->Who ?>" /></td>
<td>
<select name="123.2">
<option selected value="<?php echo $data->data[122]->Activity ?>">
<?php echo $data->data[122]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="123.3" class="123.3" value="<?php echo $data->data[122]->Date ?>" /></td>
<td><input type="text" name="123.4" class="123.4" value="<?php echo $data->data[122]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>124</td>
            <td>New 3st Day</td>
            <td>N3</td>
            <td>Hourly Production Followup</td>
            <td>Sup</td>
            <td>3st day (New)</td>
            <td><input type="text" name="124.1" class="124.1" value="<?php echo $data->data[123]->Who ?>" /></td>
<td>
<select name="124.2">
<option selected value="<?php echo $data->data[123]->Activity ?>">
<?php echo $data->data[123]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="124.3" class="124.3" value="<?php echo $data->data[123]->Date ?>" /></td>
<td><input type="text" name="124.4" class="124.4" value="<?php echo $data->data[123]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>125</td>
            <td>New 3st Day</td>
            <td>N3</td>
            <td>Full Line capacity - Bottle necks clear</td>
            <td>IE</td>
            <td>3st day (New)</td>
            <td><input type="text" name="125.1" class="125.1" value="<?php echo $data->data[124]->Who ?>" /></td>
<td>
<select name="125.2">
<option selected value="<?php echo $data->data[124]->Activity ?>">
<?php echo $data->data[124]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="125.3" class="125.3" value="<?php echo $data->data[124]->Date ?>" /></td>
<td><input type="text" name="125.4" class="125.4" value="<?php echo $data->data[124]->{'Root cause'} ?>" /></td>

          </tr>
          <tr>
            <td>126</td>
            <td>New 3st Day</td>
            <td>N3</td>
            <td>Assure Quality</td>
            <td>RQC</td>
            <td>3st day (New)</td>
            <td><input type="text" name="126.1" class="126.1" value="<?php echo $data->data[125]->Who ?>" /></td>
<td>
<select name="126.2">
<option selected value="<?php echo $data->data[125]->Activity ?>">
<?php echo $data->data[125]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="126.3" class="126.3" value="<?php echo $data->data[125]->Date ?>" /></td>
<td><input type="text" name="126.4" class="126.4" value="<?php echo $data->data[125]->{'Root cause'} ?>" /></td>
          </tr>
          <tr>
            <td>127</td>
            <td>New 3st Day</td>
            <td>N3</td>
            <td>Machines Re-setting - Quick responding</td>
            <td>M\C</td>
            <td>3st day (New)</td>
            <td><input type="text" name="127.1" class="127.1" value="<?php echo $data->data[126]->Who ?>" /></td>
<td>
<select name="127.2">
<option selected value="<?php echo $data->data[126]->Activity ?>">
<?php echo $data->data[126]->Activity ?>
</option>
<option value="N/A">N/A</option>
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>
<td><input type="date" name="127.3" class="127.3" value="<?php echo $data->data[126]->Date ?>" /></td>
<td><input type="text" name="127.4" class="127.4" value="<?php echo $data->data[126]->{'Root cause'} ?>"/></td>
          </tr>
        </table>

        <input type="submit" name="update" class="update" value="Update" />
      </form>
    </body>

    </html>
    <?php
      }
    }
    ?>