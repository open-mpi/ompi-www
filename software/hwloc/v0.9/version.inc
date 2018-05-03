<?php

/* Release series name */
$release_series = "0.9";
/* branch in github for this series */
$release_branch = "v0.9";
/* URL to S3 directory for this release series */
$download_prefix="https://download.open-mpi.org/release/hwloc/v" . $release_series . "/";

/* s3 prefix to this release's data */
$s3_prefix = "release/hwloc/v" . $release_series . "/";

/* releases must be ordered newest to oldest.  Note that libtopology
   0.9 is intentionally not listed here. */
$releases = array("0.9.3", "0.9.2", "0.9.1");
/* prereleases must be ordered newest to oldest.  All prereleases
   will be shown, so make an empty array when the official release
   is added to releases above */
$prereleases = array();

