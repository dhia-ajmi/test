<?php
    include_once '../Model/Rendez_vous.php';
    include_once '../Controller/Rendez_vousC.php';

    $error = "";

    // create 
    $Rendez_vous = null;

    // create an instance of the controller
    $Rendez_vousC = new Rendez_vousC();
    if (
        isset($_POST["id_rv"])&&
        isset($_POST["CIN_Etudiant"]) &&
		isset($_POST["Email"]) &&		
        isset($_POST["Description_du_rendez_vous"]) 
		)
     {
        if (
            !empty($_POST["id_rv"]) &&
            !empty($_POST["CIN_Etudiant"]) && 
			!empty($_POST['Email']) &&
            !empty($_POST["Description_du_rendez_vous"]) 
			)
     {
            $Rendez_vous = new Rendez_vous(
                $_POST["id_rv"],
                $_POST['CIN_Etudiant'],
				$_POST['Email'],
                $_POST['Description_du_rendez_vous'], 
				
            );
            $Rendez_vousC->maj_rendez_vous($Rendez_vous, $_POST["id_rv"]);
            header('Location:rv.php');
        }
        else
            $error = "Missing information";
    }    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="rv.php">Retour à la liste des rendez-vous</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id_rv'])){
				$Rendez_vous = $Rendez_vousC->recupererRendez_vous($_POST['CIN_Etid_rvudiant']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="CIN_Etudiant">CIN de l'étudiant
                        </label>
                    </td>
                    <td><input type="number" name="CIN_Etudiant" id="CIN_Etudiant" value="<?php echo $Rendez_vous['CIN_Etudiant']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="Email">Email:
                        </label>
                    </td>
                    <td><input type="Email" name="Email" id="Email" value="<?php echo $Rendez_vous['Email']; ?>" maxlength="50"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Description_du_rendez_vous">Desc:
                        </label>
                    </td>
                    <td>
                    <textarea class="form-control" rows="5" id="description_rendez_vous" name="description_rendez_vous <?php echo $Rendez_vous['Prenom']; ?> "></textarea>    
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>