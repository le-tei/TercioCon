<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tércio-Con</title>
        <link href="../../../public/css/creative.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Fontes -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- <script type="text/javascript" src="../../../public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../../public/js/jquery-3.3.1.min.js"></script> -->
    </head>
    <body>
      <center><h1>Tércio Con</h1></center>
        <div id="formulario">
            <form action="../../controllers/controller.php" method="post">
                <input type="text" class="form-control" name="email" id="email" required="true" placeholder="E-mail"/>
                <input type="text" class="form-control" name="nome" id="senha" required="true" placeholder="Nome"/>
                  <?php
                  $dbHost = 'localhost';
                  $dbUser = 'root';
                  $dbPass = '';
                  $dbName = 'terciocon';
                  $dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('mysqli connect failed. ' . mysqli_error());
                  mysqli_select_db($dbConn, $dbName) or die('Cannot select database. ' . mysqli_error());
                  $sql = mysqli_query($dbConn, "SELECT * FROM cursos");
                    echo '<select id="curso" name="curso">';
                        while ($row = mysqli_fetch_array($sql)) {
                        echo "<option value='". $row['id']. "'>" . $row['nome'] ."</option>";
                        }
                    echo '</select>';
                  ?>
                <input type="submit" class="btn btn-primary" name="action" value="Cadastrar" id="Login"/>
            </form>
            <?php
            session_start();
            if (isset($_SESSION['mensagercio'])) {
              echo $_SESSION['mensagercio'];
              unset($_SESSION['mensagercio']);
            }
            ?>
        </div>
    </body>
</html>
