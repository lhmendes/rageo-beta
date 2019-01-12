<!DOCTYPE html>
<html>
<body>

    <?php
    if (isset($_POST['submit'])) {
        # code...
        $file = $_FILES['file'];
        print_r($file);
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileDestination = 'Uploads/'.$fileName;
        $allowed = array('jpg','jpeg','png','pdf','bmp', 'tiff', 'tif');

        if (in_array($fileActualExt, $allowed)) {
            # code...
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: index.php?success");
    
        } else {
            echo "Tipo de arquivo não permitido.";
            echo $fileActualExt; 
            echo "<a href=\"index.php\">Voltar</a>";
        }

        print("<br>");
        print_r($fileActualExt);
        print("<br>");
        print_r($fileName);
    }
    ?>
    
</body>
</html>