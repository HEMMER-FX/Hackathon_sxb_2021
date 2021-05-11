<div style="background-color:white;font-size:20px;color:red;">
    <?php
    if (isset($_POST['name'])) {
        $search = $_POST['name'];
        $search = strtolower($search);
        $search = trim($search);
        $search = strip_tags($search);
        $search = stripslashes($search);

            
        if($search === 'arc') {
            echo $resultat;
        }else{
            echo 'resultat inconnu';
        }
    }
    ?>
    </div>