<?php 
    include 'header1.php'; 
    $no = 1;
    $sql = "SELECT * FROM user ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
?>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Overview</h1><hr>
                    <h4><i class="fas fa-graduation-cap"></i> Profile</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($data = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['level']; ?></td>
                            </tr>
                            <?php $no++; endwhile; mysqli_free_result($result); $no = 1; ?>
                        </tbody>
                    </table>
                    
                </div>
<?php include 'footer.php'; ?>