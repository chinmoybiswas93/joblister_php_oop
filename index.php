<?php
require_once 'config/init.php';
// require_once 'lib/Template.php';

$jobs = new Job;

$frontpage_template = new Template('templates/frontpage.php');
$frontpage_template->title = 'Job Listing Home';
$frontpage_template->subtitle = 'Something short and leading about the collection below its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.';

$frontpage_template->jobs = $jobs->getAllJobs();
$frontpage_template->categories = $jobs->getCategories();
$frontpage_template->techjobs = $jobs->getAllJobsByCategory(1);

echo $frontpage_template->render();
