<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home - Dream home</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="filenm" required/><br><br>
        <input type="submit" name="submit" />
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
        $file_name = $_FILES['filenm']['name'];
        $tmp_dir = $_FILES['filenm']['tmp_name'];
        move_uploaded_file($tmp_dir, "Uploads/".$file_name);
	echo "Done";
}
?>