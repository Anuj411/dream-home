<?php
    if(isset($_POST["submit"])){
        $file_name = $_FILES['filenm']['name'];
        $tmp_dir = $_FILES['filenm']['tmp_name'];
        move_uploaded_file($tmp_dir, "Uploads/".$file_name);
    }
?>
<html lang="en">
<head>
    <title>Download - File manager</title>
</head>
<body>
    <h3>File uploaded successfully</h3>
    <h4>(Click to download file)</h4>
    <?php
        $path = __DIR__;
        $contents = scandir($path."/Uploads/");
        foreach($contents as $file){
            echo "<a download='$file' href='Uploads/$file_name'>".$file."</a><br>";
        }
    ?>
</body>
</html>