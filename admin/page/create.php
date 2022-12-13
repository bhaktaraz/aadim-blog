<?php
include("../../db.php");

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $publish = $_POST['publish'];
    $publish = $publish == 'on' ? true : false;

    $insertQuery = "INSERT INTO tbl_page (id, title, content, publish) VALUES (5, '$title', '$content', '$publish')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page created successfully";
    }else{
        echo $conn->error;
    }
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