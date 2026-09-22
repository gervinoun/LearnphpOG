<?php

$posts = [
    [
        'title' => 'Some Technology title 1',
        'date' => 'January 1, 2021',
        'author' => 'Pets',
        'body' => 'Some Technology content 1',
    ],
    [
        'title' => 'Some Technology title 2',
        'date' => 'January 3, 2021',
        'author' => 'Manivald',
        'body' => 'Some Technology content 2',
    ],
    [
        'title' => 'Some Technology title 3',
        'date' => 'January 5, 2021',
        'author' => 'Jorss',
        'body' => 'Some Technology content 3',
    ],
    [
        'title' => 'Some Technology title 4',
        'date' => 'January 7, 2021',
        'author' => 'Pets',
        'body' => 'Some Technology content 4',
    ],
];

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';
?>

<main class="container">

    <?php include __DIR__ . '/partials/hero.php'; ?>

    <?php include __DIR__ . '/partials/featured.php'; ?>

    <div class="row g-5">

        <div class="col-md-8">
            <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>

        <div class="col-md-4">
            <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>

    </div>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>