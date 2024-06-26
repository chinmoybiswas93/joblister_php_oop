<?php include 'inc/header.php' ?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 style="text-transform: capitalize;" class="fw-light"> <?php echo $title ?> </h1>
            <p class="lead text-body-secondary"> <?php echo $subtitle; ?> </p>
            <form method="GET" action="index.php">
                <p>
                    <select style="text-transform: capitalize;" name="category" class="form-select select-category" aria-label="Category Select">
                        <option value="0">All Jobs</option>
                        <?php foreach ($categories as $category) : ?>
                            <option style="text-transform: capitalize;" class="text" value="<?php echo $category->id; ?>" <?php echo ($category->id == $selected_category) ? 'selected' : ''; ?>><?php echo $category->name; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <!-- <input type="submit" name="Hello" class="btn btn-primary my-2" /> -->
                    <button type="submit" class="btn btn-primary mt-4">See Jobs</button>
                </p>
            </form>
        </div>
    </div>
</section>

<!-- Listings -->
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <!-- listing row -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($jobs as $job) : ?>
                <div class="col">
                    <!-- loop start -->
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo $job->company ?></text>
                        </svg>
                        <div class="card-body">
                            <h4><?php echo $job->jobtitle; ?></h4>
                            <p><?php echo $job->category_name; ?></p>
                            <p><?php echo $job->description; ?></p>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="btn-group">
                                    <a href="/joblister/job.php?id=<?php echo $job->id ?>" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Loop end -->
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<?php include 'inc/footer.php' ?>