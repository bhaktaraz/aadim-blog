<?php
$sql = "SELECT id, title, content, publish FROM tbl_article WHERE publish = 1 LIMIT 5";
$result = $conn->query($sql);
?>

<?php
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading"><?php echo $row['title']; ?></h2>
        <p class="lead"><?php echo $row['content']; ?></p>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
</div>

<hr class="featurette-divider">
    <?php
}
}
?>