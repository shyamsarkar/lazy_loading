<?php

include "./connection.php";

$sno = 1;
$sql = "SELECT * FROM `number_word` limit 0,50";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
   <tr>
      <th scope="row"><?php echo $sno++; ?></th>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['numbr']; ?></td>
      <td><?php echo $row['in_words']; ?></td>
      <td><?php echo $row['created_at']; ?></td>
   </tr>
<?php } ?>