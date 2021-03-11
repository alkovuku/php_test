<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        
        <?php
        
            if (isset($_POST['add']) == true)
            {
                header('Location:pro_add.php');
                exit();
            }

            $pro_code = $_POST['procode'];

            if (isset($_POST['procode']) == false)
            {
                header('Location:pro_ng.php');
                exit();
            }

            if (isset($_POST['disp']) == true)
            {
                header('Location:pro_disp.php?procode='.$pro_code);
                exit();
            } 

            if (isset($_POST['edit']) == true)
            {
                header('Location:pro_edit.php?procode='.$pro_code);
                exit();
            }

            if (isset($_POST['delete']) == true)
            {
                header('Location:pro_delete.php?procode='.$pro_code);
                exit();
            }

        ?>

    </body>
</html>