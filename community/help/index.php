<?php
  // This page has been obsoleted by the "Getting help" page on
  // docs.open-mpi.org.

$topdir = "../..";
include_once("$topdir/software/ompi/current/version.inc");

$docs_release_branch = isset($release_branch) ? $release_branch : "$ver_current_dir.x";

header("Location: https://docs.open-mpi.org/en/$docs_release_branch/getting-help.html",
       TRUE, 301);
