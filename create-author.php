<?php
include('db.php');
include('header.php');
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ime = $_POST['ime'];
  $prezime = $_POST['prezime'];
  $pol = $_POST['pol'];
  $sql = "INSERT INTO author (ime, prezime, pol) VALUES ('$ime', '$prezime', '$pol')";
  insertIntoDB($connection, $sql);
  header('location: index.php');
} 
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Vivify Blog</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="styles/blog.css" rel="stylesheet">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body class="va-l-page va-l-page--single">
  <main role="main" class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">
        <form method="POST" action="posts.php">
          <div class="u-gap-bottom">
            <label>Ime</label>
            <input type="text" name="ime" required>
          </div>

          <div class="u-gap-bottom">
            <label>Prezime</label>
            <textarea name="Prezime" required></textarea>
          </div>

          <div class="u-gap-bottom">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
          </div>

          <div class="u-gap-bottom">
            <button>Submit</button>
          </div>
        </form>
      </div>
      <?php
      include('sidebar.php');
      ?>
    </div>
  </main><!-- /.container -->
  <?php
  include('footer.php');
  ?>
</body>

</html>