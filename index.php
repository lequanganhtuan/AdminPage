<?php
    session_start();
    include('/xampp/htdocs/AdminPage/includes/header.php');
?>
    
    <div class="containter">
        <div class="row">
            <div class="col-md-12">

                <?php
                if(isset($_SESSION['status'])) {
                    echo "<h5 class = 'alert alert-success'>".$_SESSION['status']. "</5>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Firebase Movie
                            <a href="add-movie.php" class="btn btn-primary">Add</a>
                        </h4>
                    </div>
                    <h2 style="padding: 10px">Movie</h2>
                    <div class="card-body">
                        <table class="table table table-bordered table-striped">
                            <thead>
                                <tr> 
                                    <th>SL</th>
                                    <th>Episode</th>
                                    <th>ID Phim</th>
                                    <th>Video</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    include('dbcon.php');

                                    $ref_table = 'Episodes';
                                    $fetchdata = $database->getReference($ref_table) -> getValue();

                                    if ($fetchdata > 0) {
                                        $i = 1;
                                        foreach ($fetchdata as $key => $row) {
                                            ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $row['Episode']; ?></td>
                                                    <td><?= $row['IDPhim']; ?></td>
                                                    <td><?= $row['Video']; ?></td>

                                                    <td>
                                                        <a href="edit-movie.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    
                                                    <td>
                                                        <!-- <a href="delete-movie.php" class="btn btn-danger btn-sm">Delete</a> -->
                                                        <form action="code.php" method="POST">
                                                            <button type="submit" name="delete_btn" value="<?=$key; ?>" class="btn btn-danger btn-sm" >Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                            <tr>
                                                <td colspan="7">No record found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>  

                                
                            </tbody>
                        </table>
                    </div>
                    

                    <h2 style="padding: 10px">Comment</h2>

                    <div class="card-body">
                        <table class="table table table-bordered table-striped">
                            <thead>
                                <tr> 
                                    <th>SL</th>
                                    <th>Comment</th>
                                    <th>ID Phim</th>
                                    <th>ID User</th>
                                    <th>Name User</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    include('dbcon.php');

                                    $ref_table = 'Comments';
                                    $fetchdata = $database->getReference($ref_table) -> getValue();

                                    if ($fetchdata > 0) {
                                        $i = 1;
                                        foreach ($fetchdata as $key => $row) {
                                            ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $row['comment']; ?></td>
                                                    <td><?= $row['idphim']; ?></td>
                                                    <td><?= $row['iduser']; ?></td>
                                                    <td><?= $row['nameUser']; ?></td>
                                                    
                                                    <td>
                                                        <!-- <a href="delete-movie.php" class="btn btn-danger btn-sm">Delete</a> -->
                                                        <form action="code.php" method="POST">
                                                            <button type="submit" name="delete_btn1" value="<?=$key; ?>" class="btn btn-danger btn-sm" >Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                            <tr>
                                                <td colspan="7">No record found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>  

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('/xampp/htdocs/AdminPage/includes/footer.php')
?>
