<?php
# The output of this file is two variables:
#
# $series_dir: the directory of the current release series
# (relative to $topdir/software/hwloc)
# $last_ver: the version number of the last release on that series
# $last_dir: the directory of the last release on that series
# (relative to $topdir/software/hwloc/$series_dir or $topdir/projects/hwloc/doc)
#
$series_dir = "v2.9";

include_once("$topdir/software/hwloc/$series_dir/version.inc");

$last_ver = $releases[0];
$last_dir = $last_ver;
