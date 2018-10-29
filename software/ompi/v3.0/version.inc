<?php

/* Release series name */
$release_series = "3.0";
/* branch in github for this series */
$release_branch = "v3.0.x";
/* URL to S3 directory for this release series */
$download_prefix="https://download.open-mpi.org/release/open-mpi/v" . $release_series . "/";

/* s3 prefix to this release's data */
$s3_prefix = "release/open-mpi/v" . $release_series . "/";

/* releases must be ordered newest to oldest */
$releases = array("3.0.3", "3.0.2", "3.0.1", "3.0.0");
/* prereleases must be ordered newest to oldest.  All prereleases
   will be shown, so make an empty array when the official release
   is added to releases above */
$prereleases = array();

/* set to true if we should add a cygwin note */
$cygwin_note = 0;
