<?php include 'inc/header.php' ?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 style="text-transform: capitalize;" class="fw-light"> <?php echo $job->jobtitle; ?> </h1>
            <p class="lead text-body-secondary"> <?php echo $job->company; ?> </p>
            <p>Posted On: <?php echo $job->post_date ?> </p>
            <hr>
            <p><b>Job Description: </b><?php echo $job->description ?> </p>
            <ul class="list-group">
                <li class="list-group-item"><b>Location: </b> <?php echo $job->location ?></li>
                <li class="list-group-item"><b>Salry:</b> <?php echo $job->salary ?></li>
                <li class="list-group-item"><b>Contact:</b> <?php echo $job->contact_user ?></li>
                <li class="list-group-item"><b>Email:</b> <?php echo $job->contact_email ?></li>
            </ul>
        </div>
    </div>
</section>


<?php include 'inc/footer.php' ?>