<?php
    include('/xampp/htdocs/AdminPage/includes/header.php');
?>
    
    <div class="containter">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Movie
                            <a href="index.php" class="btn btn-danger float-red">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Episode</label>
                                <input type="text" name= "Episode" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">ID phim</label>
                                <input type="text" name= "ID" class="form-control">
                            </div> 

                            <div class="form-group mb-3">
                                <label for="">Video</label>
                                <input type="text" name= "Video" class="form-control"> 
                            </div>
                            <hr >

                            <div class="form-group mb-3">
                                <button type="submit" name= "save_movie" class="btn btn-primary" >Add Movie</button>
                            </div>                            
                        </form>    

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('/xampp/htdocs/AdminPage/includes/footer.php')
?>
