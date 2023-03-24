<div class="row">
                    <?php
                    while ($row = $r->fetch_assoc()) {
                    ?>
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <img height="220px" src="../admin/a.assets/article_image/<?php echo $row["images"]; ?>" class="card-img-top" alt="<?php echo $row["title"]; ?>">
                                <div style="font-size: 13px; text-align: justify; height:60px; display: flex; align-items: start;" class="card-header"><b>
                                        <a class="link-dark" style="text-decoration:none" href="details.php?id=<?= $row['id'] ?>"> <?php echo implode(' ', array_slice(explode(' ', $row['title']), 0, 9)); ?> </a></b>
                                </div>
                                <div class="card-body">
                                    <small>
                                        <p style="text-align: justify; height:140px; display: flex; align-items: start;" class="card-text"><?php echo implode(' ', array_slice(explode(' ', $row['description']), 0, 35)); ?>...
                                        </p>
                                    </small>
                                </div>
                                <div class="card-footer ">
                                    <small class="text-muted">
                                        <p class="mt-2" style="float: left; display: flex; align-items: center;">
                                            <b><?php echo $row1["date_only"]; ?></b>
                                        </p>
                                        <a style="float: right; display: flex; align-items: center;" class="btn btn-primary" href="details.php?id=<?= $row['id'] ?>">Read more →</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>