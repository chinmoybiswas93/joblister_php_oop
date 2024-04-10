<?php
require_once 'config/init.php';
// require_once 'lib/Template.php';

$job = new Job;

$job_single_template = new Template('templates/job_single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$job_single_template->job = $job->getJob($job_id);

echo $job_single_template->render();
