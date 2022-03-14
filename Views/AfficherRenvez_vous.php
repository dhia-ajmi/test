<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>AFFICHAGE </title>
        
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        	<link href="css/responsive.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
        

    </head>
    <body>

<br />
<div class="container">

<br />
<div class="row">

<br />
<h2>Affichage des rendez vous:</h2>
<p>

</div>
<p>


<br />
<div class="row">
                
                  
                

<br />
<div class="table-responsive">

<br />
<table class="table table-hover table-bordered">

<br />
<thead>

<th>Numero de cin du l'etudiant</th>
<p>



<th>Adresse mail</th>
<p>



<th>Description</th>
<p>

<th>Date</th>
<p>

<th>Status</th>
<p>

<th>Modifier</th>
<p>


</thead>
<p>


<br />
<tbody>
                        <?php //on inclut notre fichier de connection $pdo = Database::connect(); //on se connecte à la base $sql = 'SELECT * FROM user ORDER BY id DESC'; //on formule notre requete foreach ($pdo->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
                          include "../Controller/Rendez_vousC.php";
                         $rendez_vous = new Rendez_vousC();
                         $resultat=$rendez_vous->afficher_rendez_vous();
    
   
                        echo '
<br />
<tr>';
                           
foreach($resultat as $row) {
echo'

<td>' . $row['id_rv'] . '</td>
<p>
';
                            echo'
                            <td>' . $row['CIN_Etudiant'] . '</td>
                            <p>
                            ';
                            
                            echo'
                            
                            <td>' . $row['Email'] . '</td>
                            <p>
                            ';

                            echo'
                            
                            <td>' . $row['Description_rv'] . '</td>
                            <p>
                            ';

                            echo'
                            
                            <td>' . $row['Date'] . '</td>
                            <p>
                            ';
?>
                            <td> 
                                <form action ="SupprimerRendez_vous.php" method= "POST">
                                    <input type="submit" value="Supprimer">
                                    <input type="hidden" name="idRendez_vous" value="<?= $rendez_vous['CIN_Etudiant']?>">
                                </form>
<?php
                            
                                                    /* 
                                                        echo '<a class="btn" href="editer.php?id=' . $row['id'] . '">Read</a>';// un autre td pour le bouton d'edition
                                                        echo '</td>
                            <p>
                            ';
                                                        echo '
                            
                            <td>';
                                                        echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';// un autre td pour le bouton d'update
                                                        echo '</td>
                            <p>
                            ';
                                                        echo'
                            
                            <td>';
                                                        echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Delete</a>';// un autre td pour le bouton de suppression
                                                        echo '</td>
                            <p>
                            ';*/
                                                        echo '</tr>
                            <p>
                            ';
}      
                                                    ?>    
                            </tbody>
                            <p>
                            
                            </table>
                            <p>
                            
                            </div>
                            <p>
                            
                            
                            </div>
                            <p>
                            
                            
                            </div>
                            <p>
                            
                                </body>
                            </html>
                            