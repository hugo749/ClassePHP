<!DOCTYPE html>
<html>
<head>
    <title>FORMULAIRE</title>
</head>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1><center>FORMULAIRE D'ENTRER</center></h1>
<style >
    .erreur{
        color: red;}

    html{background-color:rgb(200,200,200); ;}

    }
    }
</style>
</head>
<body>
<?php
if(isset($_POST['valider']))
{
    if($_POST['nom'] != '' & $_POST['prenom'] != '' & $_POST['age'] != '')
    {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];?><center><?php
        echo 'Bonjour monsieur '.$_POST['nom']." ".$_POST['prenom']. ', vous avez '.$_POST['age']. ' ans !'.'<br/>';
        ?>
        <a href="Tp1_php_(SI6).php">retour</a></center>
        <?php
    }
    else
    {
        ?>
        <center>
            <form name="formulaire" method="post"><br>
                <?php
                if ($_POST['prenom']==='')
                {
                    ?>
                    <span class="erreur"> Entrez votre prénom ! <input type="text" name="prenom"/> </span><br><br>
                    <?php
                }
                else
                {
                    ?>
                    <p>Entrer votre prénom <input type="text" name="prenom" value="<?php echo$_POST['prenom'];?>"></p>
                    <?php
                }
                if ($_POST['nom']==='')
                {
                    ?>
                    <span class="erreur"> Entrez votre nom ! <input type="text" name="nom"/> </span><br><br>
                    <?php
                }
                else
                {
                    ?>
                    <p>Entrer votre nom <input type="text" name="nom" value="<?php echo$_POST['nom'];?>"></p>
                    <?php
                }

                if ($_POST['age']==='')
                {?>
                    <span class="erreur"> Entrez votre âge ! <input type="number" name="age"/> </span><br><br>
                    <?php
                }
                else
                {
                    ?>
                    <p>Entrer votre age <input type="number" name="age" value="<?php echo$_POST['age'];?>"></p>
                    <?php
                }
                ?>

                <input type="submit" name="valider" value="VALIDER"/>

            </form></center>
        <?php
    }
}
else
{
    ?>
    <center>
        <form name="formulaire" method="post">
            Entrez votre prénom : <input type="text" name="prenom"/> <br>
            <br>
            Entrez votre nom : <input type="text" name="nom"/> <br>
            <br>
            Entrez votre âge : <input type="number" name="age"/> <br><br>
            <input type="submit" name="valider" value="VALIDER"/>
        </form>
    </center>
    <?php
}
?>

<style type="text/css">
    * {
        font-family: system-ui;
    }
</style>


</body>
</html>