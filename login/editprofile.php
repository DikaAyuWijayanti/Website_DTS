<?php 
  include 'header1.php';
  if(isset($_GET['id'])){
    $nip = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(!$data = mysqli_fetch_assoc($result)){
      die('NO DATA FOUNDED');
    }
  }

  if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $level = htmlspecialchars($_POST['level']);

    $sql = "UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:profile.php?info=updated&username=$username");
    }else{
      die('Error : '. mysqli_error($conn));
    }
  }  
?>

                <!-- Page content-->
                <div class="container-fluid">
                  <h1 class="mt-4"><i class="fas fa-user-plus"></i> EDIT</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Ubah Profile</h4><br>
                  <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiPejabat()">
                      <div class="form-group mb-2">
                        <label for="id">Id</label>
                        <input type="text" name="id" id="id" class="form-control"  value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"  value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control" value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="level">Level</label>
                        <input type="text" name="level" id="level" class="form-control"  value="<?php echo isset($data['level']) ? $data['level'] : ''; ?>">
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Update</button> <a href="profile.php" class="btn btn-secondary">Back</a>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>