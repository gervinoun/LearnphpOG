<?php

$posts = [
    [
        'title' => 'Some U.S title 1',
        'date' => 'January 1, 2021',
        'author' => 'Pets',
        'body' => 'Some U.S content 1',
    ],
    [
        'title' => 'Some U.S title 2',
        'date' => 'January 3, 2021',
        'author' => 'Manivald',
        'body' => 'Some U.S content 2',
    ],
    [
        'title' => 'Some U.S title 3',
        'date' => 'January 5, 2021',
        'author' => 'Jorss',
        'body' => 'Some U.S content 3',
    ],
    [
        'title' => 'Some U.S title 4',
        'date' => 'January 7, 2021',
        'author' => 'Pets',
        'body' => 'Some U.S content 4',
    ],
];

include 'partials/header.php';
include 'partials/nav.php';
?>

<main class="container">

    <?php include 'partials/hero.php'; ?>

    <?php include 'partials/featured.php'; ?>

    <div class="row g-5">
        <div class="col-md-8">
            <?php include 'partials/posts.php'; ?>
        </div>

        <div class="col-md-4">
            <?php include 'partials/sidebar.php'; ?>
        </div>
    </div>

</main>

<?php include 'partials/footer.php'; ?>