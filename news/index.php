<?php
include "./connection.php";

?>


<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>News Loading...</title>
</head>

<body>

   <div class="container">
      <div class="d-flex justify-content-center">
         <h1 class="h1 pt-2">Pagination</h1>
      </div>
   </div>


   <div class="mb-5 pb-5">
      <div class="container">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">SNo.</th>
                  <th scope="col">ID</th>
                  <th scope="col">Currency</th>
                  <th scope="col">In Words</th>
                  <th scope="col">Date</th>
               </tr>
            </thead>
            <tbody id="show_record">
               <?php
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
            </tbody>
         </table>
      </div>
   </div>

   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="jquery-3.2.1.min.js"></script>

   <script src="./functions.js"></script>
</body>

</html>