<?php
include('../../db.php');

echo "pages list";

$sql = "SELECT id, title, publish FROM tbl_page";
$result = $conn->query($sql);
?>

<a href="create.php">New Article</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Publish</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['publish'] ? 'YES': 'NO' ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
