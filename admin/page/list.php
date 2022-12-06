<?php
include('../../db.php');

echo "pages list";

$sql = "SELECT id, title, publish FROM tbl_page";
$result = $conn->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Publish</th>
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
            </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
