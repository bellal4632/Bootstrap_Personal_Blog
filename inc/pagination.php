<?php
                // create pagination links
                echo '<div class="container">';
                echo '<ul class="pagination justify-content-center">';

                // determine how many pages there are
                $total_pages = ceil($conn->query("SELECT COUNT(*) FROM articles")->fetch_row()[0] / $cards_per_page);

                // display "Newer" button if not on first page
                if ($page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">Newer</a></li>';
                }

                // display page numbers
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo '<li class="page-item';
                    if ($i == $page) {
                        echo ' active';
                    }
                    echo '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                }

                // display "Older" button if not on last page
                if ($page < $total_pages) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Older</a></li>';
                }

                echo '</ul>';
                echo '</div>';
                ?>