<?php 
	include ("connection.php");

  if(isset($_POST['submit'])){

    //recupération des données
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $adresse=$_POST['adresse'];
    
    //Enregistrement dans la BD

    $sql="INSERT INTO participant SET
          nom='$nom',  
          prenom='$prenom',
          email='$email',
          adresse='$adresse'    
          ";
          //Execution de la query and save dans la BD

    $res= mysqli_query($connect,$sql) or die(mysqli_error($sql));

    if ($res == TRUE) {

      print "<script type ='text/javascript'> alert('Participant ajouté'); </scipt>";
    	header("Location:http://localhost/projet/");
     
    }else{
    	header("Location:http://localhost/projet/"); 
    }
  };

?>