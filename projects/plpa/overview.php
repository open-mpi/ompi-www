<?php
$topdir = "../..";

$title = "Portable Linux Processor Affinity (PLPA): Overview";
include_once("nav.inc");

// Fake a FAQ category
$short_title = "PLPA Overview";
$titles[] = "General information about the PLPA";
$short_titles[] = "General information";
$names[] = "general";

$_REQUEST["category"] = "general";
include_once("$topdir/includes/faq_engine.inc");

include_once("$topdir/includes/footer.inc"); 
