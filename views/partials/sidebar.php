<div class="position-sticky" style="top: 2rem;">

    <div class="p-4 mb-3 bg-body-tertiary rounded">

        <h4 class="fst-italic">
            About
        </h4>

        <p class="mb-0">
            This is a simple PHP blog example using reusable partials.
        </p>

    </div>

    <div>

        <h4 class="fst-italic">
            Recent posts
        </h4>

        <ul class="list-unstyled">

            <?php foreach ($posts as $post): ?>

                <li>
                    <a
                        class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                        href="#">

                        <div class="col-lg-8">

                            <h6 class="mb-0">
                                <?= $post['title'] ?>
                            </h6>

                            <small class="text-body-secondary">
                                <?= $post['date'] ?>
                            </small>

                        </div>

                    </a>
                </li>

            <?php endforeach; ?>

        </ul>

    </div>

    <div class="p-4">

        <h4 class="fst-italic">
            Archives
        </h4>

        <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
        </ol>

    </div>

    <div class="p-4">

        <h4 class="fst-italic">
            Elsewhere
        </h4>

        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>

    </div>

</div>