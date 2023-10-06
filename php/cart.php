<?php
 include 'config.php';
/////count the items and apply it to the bag view here...........

 $sql = "SELECT * FROM 'menu_items';";

 $results = mysqli_query($conn, $sql);

 $checkResults = mysqli_num_rows($results);

 if($checkResults > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
      echo $row['menu_id'] . "<br>";
      

    }
 }
?>