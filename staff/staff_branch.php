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
                header('Location:staff_add.php');
                exit();
            }

            $staff_code = $_POST['staffcode'];

            if (isset($_POST['staffcode']) == false)
            {
                header('Location:staff_ng.php');
                exit();
            }

            if (isset($_POST['disp']) == true)
            {
                header('Location:staff_disp.php?staffcode='.$staff_code);
                exit();
            } 

            if (isset($_POST['edit']) == true)
            {
                header('Location:staff_edit.php?staffcode='.$staff_code);
                exit();
            }

            if (isset($_POST['delete']) == true)
            {
                header('Location:staff_delete.php?staffcode='.$staff_code);
                exit();
            }

        ?>

    </body>
</html>