<?php 
  $sql = "INSERT INTO data_report (name, group_line,  shirt, erro, ngay , comment) VALUES ('$name', '$group_line', '$shirt','$error', '$ngay', '$comment')";
    $conn->exec($sql);
 ?>