<div style="background-color:white;font-size:20px;color:red;">
    <?php
    if (isset($_GET['name'])) {
        $search = $_GET['name'];
        $search = strtolower($search);
        $search = trim($search);
        $search = strip_tags($search);
        $search = stripslashes($search);

            
        if($search === 'Development of Advanced Anti-Reflection' || $search === 'dev' || $search === 'daa' || $search === 'doaa' || $search === 'doar') {
            echo 'Résultat de votre recherche' . '<br> '. '<li class="liste_foreach">' . $resultat . '</li>';
        }else{
            echo 'votre recherche n\'a rien donnée, veuillez réessayer';
        }
    }
    ?>
    </div>