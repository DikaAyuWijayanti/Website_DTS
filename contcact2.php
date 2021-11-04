<?php 
  include 'header1.php';
  $no = 1; 
  $msg = "";
  $msgClass = "";
  $msgDisplay = "style='display: none'";

  $sql = "SELECT * FROM contact";
  $result = mysqli_query($conn, $sql);
  
  if(isset($_GET['info'])){
    if($_GET['info'] == 'added'){
      $msg = "<strong>".$_GET['kode_contact']."</strong> telah ditambahkan";
      $msgClass = "alert-success";
      $msgDisplay = "";
    }
  }
?>
                <!-- Page content-->
                <div class="container-fluid mb-4">
                  <h1 class="mt-4">Overview</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Data Contact Us</h4>
                  <div class="alert <?php echo $msgClass; ?> alert-dismissible fade show mt-3" role="alert" <?php echo $msgDisplay; ?>>
                    <?php echo $msg; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <table id="example" class="display">
                      <thead>
                          <tr>
                              <th>Kode Contact</th>
                              <th>Nama Lengkap</th>
                              <th>Email</th>
                              <th>Subjek</th>
                              <th>Pesan</th>
                              <th>Jabatan</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php while($data = mysqli_fetch_assoc($result)): ?>
                          <tr>
                            <td><?php echo $data['kode_contact']; ?></td>
                            <td><?php echo $data['nama_lengkap']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['subjek']; ?></td>
                            <td><?php echo $data['pesan']; ?></td>
                            <!--<td><a href="editguru.php?nip=<?php echo $data['id']; ?>" class=" btn btn-primary">Edit</a> <a href="deleteguru.php?nip=<?php echo $data['id']; ?>&nama=<?php echo $data['nama']; ?>" class="btn btn-danger">Delete</a></td>!-->
                          </tr>
                          <?php $no++; endwhile; mysqli_free_result($result); ?>
                      </tbody>
                  </table>
                </div>
<?php mysqli_close($conn); include 'footer.php'; ?>