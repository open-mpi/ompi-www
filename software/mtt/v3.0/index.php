<?php
$topdir = "../../..";

$title = "MPI Testing Tool (MTT)";

include_once("$topdir/projects/mtt/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$project = "MTT";
$list_name = "mtt-announce";
$prev_describe = "the MTT download page";
include_once("$topdir/includes/subscribe-announce.inc");

print("<p><hr></p>\n\n");
print("<p>MTT is currently only downloadable <a href=\"https://github.com/open-mpi/mtt\">via Git</a>.\n");

include_once("$topdir/includes/footer.inc");
