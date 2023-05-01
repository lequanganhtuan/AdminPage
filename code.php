<?php
    session_start();
    include('dbcon.php');
    //movie
    if (isset($_POST['delete_btn'])) {
        $del_id = $_POST['delete_btn'];
        $ref_table = 'Episodes/'.$del_id;
        $deletequery = $database->getReference($ref_table)->remove();

        if ($deletequery) {
            $_SESSION['status'] =  "Deleted movie successfully";
            header('Location: index.php');
        } else {
            $_SESSION['status'] =  " Movie not deleted";
            header('Location: index.php');
        }
    }

    if (isset($_POST['delete_btn1'])) {
        $del_id = $_POST['delete_btn1'];
        $ref_table = 'Comments/'.$del_id;
        $deletequery = $database->getReference($ref_table)->remove();

        if ($deletequery) {
            $_SESSION['status'] =  "Deleted comment successfully";
            header('Location: index.php');
        } else {
            $_SESSION['status'] =  " Cpmment not deleted";
            header('Location: index.php');
        }
    }



    if (isset($_POST['update_movie'])){
        $key = $_POST['key'];
        $episode = $_POST['Episode'];
        $id = $_POST['ID'];
        $video = $_POST['Video'];

        $updateData = [
            'Episode' =>  $episode,
            'IDPhim' =>  $id,
            'Video' =>  $video,
        ];
        $ref_table = 'Episodes/'.$key;
        $updatequery = $database->getReference($ref_table) ->update($updateData);

        if ($updatequery) {
            $_SESSION['status'] =  "Updated movie successfully";
            header('Location: index.php');
        } else {
            $_SESSION['status'] =  " Movie not updated";
            header('Location: index.php');
        }

    }

    if (isset($_POST['save_movie'])) {
        $episode = $_POST['Episode'];
        $id = $_POST['ID'];
        $video = $_POST['Video'];

        $postData = [
            'Episode' =>  $episode,
            'IDPhim' =>  $id,
            'Video' =>  $video,
        ];

        $ref_table = "Episodes";
        $postRef_result = $database->getReference($ref_table)->push($postData);

        if ($postRef_result) {
            $_SESSION['status'] =  "Add movie successfully";
            header('Location: index.php');
        } else {
            $_SESSION['status'] =  " Movie not added";
            header('Location: index.php');
        }
    }
?>