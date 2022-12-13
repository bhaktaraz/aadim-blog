<?php
include("../../db.php");

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $publish = $_POST['publish'];
    $publish = $publish == 'on' ? true : false;
    $date = date('Y-m-d H:i:s');  // 2022-12-13 07:45:24

    $insertQuery = "INSERT INTO tbl_page (title, content, publish, created_date, updated_date) 
    VALUES ('$title', '$content', '$publish', '$date', '$date')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page created successfully";
    }else{
        echo $conn->error;
    }

    header('Location:list.php'); // Redirect to page list
}
?>

<form method="post" action="">
    <label>Title</label>
    <input type="text" name="title" />

    <label>Content</label>
    <textarea name="content"></textarea>

    <label>Publish</label>
    <input type="checkbox" name="publish" />

    <input type="submit" name="submit" value="Save" />
</form>