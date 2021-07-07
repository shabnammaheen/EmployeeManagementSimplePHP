
<style>
table{
  border: 1px solid black;
}
</style>

<?php
$join=$_POST["join"] ?? '';
$today=date("Y-m-d");
$date1 = strtotime($join);
$date2 = strtotime($today);
$months = 0;
$date=date('d F Y', strtotime($join));

while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
    $months++;
    

$duration = $months;
?>
<table>
    <tr><td>Name: <?php echo $_POST["name"] ?? ''; ?></td>
    <td>Manager: <?php echo $_POST["manager"] ?? ''; ?></td>
    </tr>
    <tr><td>Role: <?php echo $_POST["role"] ?? ''; ?></td>
    <td>Office: <?php echo $_POST["office"] ?? ''; ?></td>
    </tr>
    <tr>
    <td>Mobile: <?php echo $_POST["number"] ?? ''; ?></td>
    <td>Joining Date: <?php echo $date;?>(<?php 
    if($duration<= 0){
        echo "Joined this month)";
    }else {echo $duration ;echo "months ago)";}?> </td>
        
    </tr>



</table>