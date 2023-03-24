<div class="card mb-4">
    <div class="card-header">
       <b>Categories</b>
    </div>
    <ul class="list-group list-group-flush">
        <?php
        $c = "select categories.*,count(*) as total from categories,articles where articles.category_id=categories.id  group by articles.category_id;";
        $cr = $conn->query($c);
        while ($row = $cr->fetch_assoc()) {
        ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                
                <a class="link-dark" style="text-decoration: none; font-size: 15px;" href="details.php?id=<?= $row['id'] ?>">
                <div class="fw-bold"><?= $row['icon'] ?>  <?= $row['name'] ?></div>
                </a>
                <span class="badge bg-dark rounded-pill"><?= $row['total'] ?></span>
            </li>
        <?php } ?>
    </ul>
</div>