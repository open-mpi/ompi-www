<?php

/* Release series name */
$release_series = "4.0";
/* branch in github for this series */
$release_branch = "v4.0.x";
/* URL to S3 directory for this release series */
$download_prefix="https://download.open-mpi.org/release/open-mpi/v" . $release_series . "/";

/* s3 prefix to this release's data */
$s3_prefix = "release/open-mpi/v" . $release_series . "/";

/* releases must be ordered newest to oldest */
$releases = array("4.0.6", "4.0.5", "4.0.4", "4.0.3", "4.0.2", "4.0.1", "4.0.0");
/* prereleases must be ordered newest to oldest.  All prereleases
   will be shown, so make an empty array when the official release
   is added to releases above */
/* Do NOT start entry with 'v' */
$prereleases = array("4.0.7rc1");


/* set to true if we should add a cygwin note */
$cygwin_note = 0;
