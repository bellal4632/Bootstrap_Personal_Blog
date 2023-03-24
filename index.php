<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require "../inc/config.php";


// determine current page number
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// set how many cards to display per page
$cards_per_page = 6;

// calculate the limit and offset values for the SQL query
$limit = $cards_per_page;
$offset = ($page - 1) * $cards_per_page;

// For Articles Details
$q = "select * from articles where active='3' ORDER BY created_at desc LIMIT $limit OFFSET $offset";
$r = $conn->query($q);

// for date
$query1 = "SELECT DATE_FORMAT(created_at, '%d %M %Y') AS date_only FROM articles;";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

?>


<?php require "inc/head.php"; ?>
</head>

<body>
    <!-- Responsive navbar-->
    <?php require "inc/navbar.php"; ?>


    <!-- Carousel Start -->
    <?php require "inc/carousel.php"; ?>
    <!-- Carousel End -->

    <!-- Page content-->
    <div class="container-fluid">
        <div class="row m-2">
            <!-- Blog entries-->
            <div class="col-lg-9">
                <!-- Featured blog post-->
                <?php require "inc/featured.php"; ?>
                <!-- Blog post-->
                <?php require "inc/blog.php"; ?>
                <!-- // create pagination links -->
                <?php require "inc/pagination.php"; ?>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-3">
                <!-- Search widget-->
                <?php require "inc/search.php"; ?>
                 <!-- Leatest Post widget-->
                 <?php require "inc/leatest.php"; ?>
                <!-- Categories widget-->
                <?php require "inc/category.php"; ?>
                <!-- Log In widget-->
                <?php require "inc/login.php"; ?>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <?php require "inc/footer.php"; ?>
</body>

</html>