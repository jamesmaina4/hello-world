<!DOCTYPE html>
<html>
<head>
<body>
    <h1> Welcome to my World</h1>
    <p>Some more text</p>
<?php include "footer.php";//include my name in page use include statement
?>


<?php
echo "<p>James Maina | Copyright</p>" //my footer page
?>


<?php require "footer.php"; // if the footer page isn't there, there's no output as its required
echo "I have a $color";
?>

</body>
</head>
</html>
