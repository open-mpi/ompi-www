<?php
$topdir = "../..";

include_once("$topdir/includes/header.inc");
include_once("data.inc");
include_once("$topdir/papers/papers.inc");

paper_page($title, $authors, $presented, $abstract, $files, $month, $day, $year, $bibtex);

include_once("$topdir/includes/footer.inc"); 
