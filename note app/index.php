
<?php
//datatables.net
   $ins=false;

    $servername="localhost";
    $username="root";
    $password="";
    $database="notes";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
      die("sorry cannot connect".mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $title=$_POST['title'];
        $description=$_POST['desc'];

        $sql= "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
        $result=mysqli_query($conn,$sql);
       if(!$result){
          echo"error".mysqli_error($conn);
        }
        else{
          $ins=true;
        }


    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Inotes - CRUD</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">iNote</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <?php
        if($ins){
          echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success your notes has been inserted successfully!</strong>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }
    ?>
    <div class="container">
        <h3>Add a note</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
            </div>
            <div class="mb-3">
              <label for="desc" class="form-label">Description</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc"></textarea>
              </div>    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql="SELECT * FROM `notes`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
          echo "<tr>
          <td scope='row'>".$row['sno']."</td>
          <td scope='row'>".$row['title']."</td>
          <td scope='row'>".$row['description']."</td>
          <td scope='row'><button class='edit btn btn-sm btn-primary'>Edit</button><a href='/del'>Delete</a></td>
          </tr>";
        }
        ?>
        </tbody>
        </table>
    </div>
    <script>
      edits=document.getElementsByClassName('edit');
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click",(e)=>{
          console.log("edit",e);
        })
      })
    </script>
  </body>
</html>