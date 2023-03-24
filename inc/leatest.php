
<div class="card mb-4">
    <div class="card-header">
        Leatest Post
    </div>
    <ul class="list-group list-group-flush">
        <?php
        $l = "select * from articles where active='3' ORDER BY created_at desc LIMIT 5;";
        $lr = $conn->query($l);
        while ($row = $lr->fetch_assoc()) {
        ?>
            <li class="list-group-item">
                <a class="link-dark" style="text-decoration: none; font-size: 15px; text-align: justify; display: flex; align-items: center;" href="details.php?id=<?= $row['id'] ?>">
                    <div class="fw-bold"> <small> <?php echo implode(' ', array_slice(explode(' ', $row['title']), 0, 10)); ?>...Read More </small></div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>