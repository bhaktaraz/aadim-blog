<?php
include("../../db.php");
$id = $_GET['id'];
if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $publish = $_POST['publish'];
    $publish = $publish == 'on' ? true : false;
    $date = date('Y-m-d H:i:s');  // 2022-12-13 07:45:24

    $insertQuery = "UPDATE tbl_page (title, content, publish, updated_date) 
    VALUES ('$title', '$content', '$publish', '$date') WHERE id = $id";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page updated successfully";
    }else{
        echo $conn->error;
    }

    header('Location:list.php'); // Redirect to page list
}

$sql = "SELECT id, title, content, publish FROM tbl_page WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form method="post" action="">
    <label>Title</label>
    <input type="text" name="title" value="<?php echo $row['title']; ?>" />

    <label>Content</label>
    <textarea name="content"><?php echo $row['content']; ?></textarea>

    <label>Publish</label>
    <input type="checkbox" name="publish" <?php $row['publish'] ? 'checked="checked"' : '' ?> />

    <input type="submit" name="submit" value="Save" />
</form>