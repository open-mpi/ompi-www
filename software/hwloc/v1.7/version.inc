<?php

/* Release series name */
$release_series = "1.7";
/* branch in github for this series */
$release_branch = "v1.7";
/* URL to S3 directory for this release series */
$download_prefix="https://download.open-mpi.org/release/hwloc/v" . $release_series . "/";

/* s3 prefix to this release's data */
$s3_prefix = "release/hwloc/v" . $release_series . "/";

/* releases must be ordered newest to oldest */
$releases = array("1.7.2", "1.7.1", "1.7");
/* prereleases must be ordered newest to oldest.  All prereleases
   will be shown, so make an empty array when the official release
   is added to releases above */
$prereleases = array();
