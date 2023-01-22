<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Liste</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container-fluid text-center">
  <h2 class="mt-3">Liste de participants</h2>
   <div class="row">
            <div class="col-md-5 offset-md-7 mt-3 mb-3">
              <a class="btn btn-primary w-25 btn-ld" href="index.html"><i class="bi bi-person-plus-fill">  </i>Ajouter</a> </div>
            
    <div class="table-responsive">
        <table id="tab" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">Email</th>
              <th scope="col">Adresse</th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody>
              <?php
              include('connection.php');
              $sql='SELECT * From participant';
                $rows=mysqli_query($connect,$sql);
                $res= mysqli_query($connect,$sql) or die(mysqli_error());

                if ($res == TRUE) {
                  // code...
                  //Nombre de ligne 
                  $count=mysqli_num_rows($res);
                  $sn=1;

                  //voire le nombre de ligne
                  if ($count>0) {
                    // données dans la bd
                    while ($rows=mysqli_fetch_assoc($res)) {
                      // code...
                      $id=$rows['Id'];
                      $nom=$rows['nom'];
                      $prenom=$rows['prenom'];
                      $email=$rows['email'];
                      $adresse=$rows['adresse'];
                ?>     
                      <tr>
                          <td> <?php echo $sn++; ?></td>
                          <td> <?php echo $nom; ?></td>
                          <td> <?php echo $prenom; ?></td>
                          <td> <?php echo $email; ?></td>
                          <td> <?php echo $adresse; ?></td>
                          <td>
                            <a href="<?php echo SITEURL; ?>suppression.php?id=<?php echo $id; ?>">
                              <button type="button" class="btn">
                                 <i class="bi bi-trash3-fill" ></i>
                              </button>
                            </a>
                          </td>
                        </tr>
                <?php
                    }
                    
                  }
                } else {
                  // code...
                }
                
              ?>
            
          </tbody>
        </table>
      </div>
    </div>
</div>
   
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2023 Simplon Cote d'ivoire</p>
  </footer>
  </body>
</html>
       
<script type="text/javascript">
      $(document).ready(function () {
          $('#tab').DataTable({
            
            "language": {
            "lengthMenu": "Afficher _MENU_ lignes",
            "zeroRecords": "Désolé - aucune donnée trouvé",
            "info": "Page _PAGE_ / _PAGES_",
            "infoEmpty": " ",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search":"Rechercher :",
            "paginate": {
            "next": "Suivant",
            "previous":"Précédant"
                  },
                }
             });
          //////////////////////////////
          });
    </script>
</body>
</html>