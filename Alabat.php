<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$number = filter_input(INPUT_POST, 'number');
$comment = filter_input(INPUT_POST, 'comment');
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="comment_db";
$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(empty($name)){
echo '<script type="text/JavaScript">
        alert("Field is Required!")
        </script>' ;
die();
}
if(empty($email)){
echo '<script type="text/JavaScript">
alert("Field is Required!")
</script>' ;
die();

}
if(empty($number)){
echo '<script type="text/JavaScript">
alert("Field is Required!")
</script>' ;
die();
}
if(empty($comment)){
echo '<script type="text/JavaScript">
alert("Field is Required!")
</script>' ;
die();
}
$sql = "INSERT INTO `comment_values`(`name`, `email`, `number`, `comment`) VALUES ('$name','$email','$number','$comment')";

if($conn->query($sql)== TRUE ) {
echo '<script type="text/JavaScript">
        alert("Comment Posted!");
        </script>'
        ;
} else {
echo "Error: " .$sql . " <br> " . $conn ->error;
}
$conn->close();
?>