<!-- Bismillahir Rahmanir Rahim 


//Record insert the following one and start from 21 minutes 

INSERT INTO `tnotes` (`sno`, `title`, `description`, `time`) VALUES ('1.', 'shop for Today', 'Buy the followings:\r\n1. Fish\r\n2. Chicken\r\n3. Spice\r\n4. Rice\r\n5. Eggs\r\netc', '2022-09-22 21:06:58.000000');
-->

<?php
require_once('db.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>iNotes - Notes taking make easy!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">iNotes Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Contact US</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container my-5">
    <h2>Add a NOTE</h2>
    <form action="/crud_app/" method="POST">
      <div class="form-group">
        <label for="title">Note Title: </label>
        <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
      </div>
      <div class="form-group">
        <label for="description">Description: </label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
      </div>
      <small id="title" class="form-text text-muted">We'll never share your records with anyone else.</small>
      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>

  <div class="container">
    <table class="table bg-light text-dark my-3">
      <thead>
        <tr>
          <th scope="col">Serial No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `tnotes`";
        $fireq = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($fireq)) {
          echo '
          <tr>
            <th scope="row">' . $row['sno'] . '</th>
            <td>' . $row['title'] . '</td>
            <td>' . $row['description'] . '</td>
            <td>Actions</td>
        </tr>';
        }
        ?>
      </tbody>
    </table>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>