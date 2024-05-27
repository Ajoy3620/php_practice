$sql = "select * from Log In where name = '$name' and email = '$email'";
    $result = mysqli_query($conn , $sql);
    $row = mysqly_fetch_array($result , MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);