<?php
    include('/xampp/htdocs/AdminPage/includes/header.php');
?>
    
    <div class="containter">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit & Update Movie
                            <a href="index.php" class="btn btn-danger float-red">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            include('dbcon.php');

                            if (isset( $_GET['id'])){
                                $key_child = $_GET['id'];
                                $ref_table = 'Episodes';
                                $getdata = $database->getReference($ref_table) -> getChild($key_child) -> getValue();

                                if($getdata > 0){
                                ?>
                                <form action="code.php" method="POST">

                                    <input type="hidden" name="key" value="<?=$key_child; ?>">
                                    <div class="form-group mb-3">
                                        <label for="">Episode</label>
                                        <input type="text" name= "Episode" value="<?=$getdata['Episode']; ?>" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">ID phim</label>
                                        <input type="text" name= "ID" value="<?=$getdata['IDPhim']; ?>" class="form-control">
                                    </div> 

                                    <div class="form-group mb-3">
                                        <label for="">Video</label>
                                        <input type="text" name= "Video" class="form-control" value="<?=$getdata['Video']; ?>">
                                    </div>

                                    <div class="form-group mb-3">
                                        <button type="submit" name= "update_movie" class="btn btn-primary" >Update Movie</button>
                                    </div>                            
                                </form> 
                                <?php

                                } else {
                                            $_SESSION['status'] = "Invalid ID";
                                            header('Location: index.php');
                                            exit();
                                }
                                    } else {
                                        $_SESSION['status'] = "Not Found";
                                        header('Location: index.php');
                                        exit();
                                }
                                    

                                ?>   

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('/xampp/htdocs/AdminPage/includes/footer.php')
?>
