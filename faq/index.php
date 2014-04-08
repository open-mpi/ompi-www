<?php

$topdir = "..";
$title = "Frequently Asked Questions";
$short_title = "FAQ";
$search_name = "just the FAQ";
$search_subdir = "/faq/";

include_once("$topdir/includes/functions.inc");
include_once("nav.inc");
include_once("categories.inc");
ompi_set_included("categories.inc");
include_once("$topdir/includes/faq_engine.inc");

include_once("$topdir/includes/footer.inc"); 
