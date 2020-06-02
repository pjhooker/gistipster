<html>
  <body>
    <?php
      //https://www.w3schools.com/php/php_forms.asp
    ?>
    Inserimento avvenuto con successo!<br><hr>
    <?php
      echo '<a href="page02.php">Inserisci nuovo form</a><br>';
      echo '<a href="index.php">Torna alla home</a>';
    ?>
    <?php
      //https://www.php.net/manual/en/function.mysqli-connect.php
      $conn= mysqli_connect(
        "127.0.0.1",//host
        "root",//user
        "",
        "esercizio01"
      );

      $sql="
        INSERT INTO fatture(
          ditta,
          residenza,
          domicilio,
          piva,
          importo
        ) 
        VALUES (
          '".$_GET["ditta"]."',
          '".$_GET["residenza"]."',
          '".$_GET["domicilio"]."',
          '".$_GET["piva"]."',
          ".$_GET["importo"]."         
        );
      ";

      $query = $conn->prepare($sql);
      $query->execute();

    ?>
  </body>
</html>