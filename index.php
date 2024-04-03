<?php
require_once 'config/init.php';
// require_once 'lib/Template.php';

$jobs = new Job;

$frontpage_template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;
$frontpage_template->categories = $jobs->getCategories();
$frontpage_template->selected_category = $category;

if ($category) {
    $frontpage_template->title = 'Jobs in ' . $jobs->getCategory($category)->name;
    $frontpage_template->subtitle = 'Something short and leading about the collection below its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.';
    $frontpage_template->jobs = $jobs->getAllJobsByCategoryId($category);
} else {
    $frontpage_template->title = 'All Jobs';
    $frontpage_template->subtitle = 'Something short and leading about the collection below its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.';
    $frontpage_template->jobs = $jobs->getAllJobs();
}

echo $frontpage_template->render();
