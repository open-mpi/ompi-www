<?php
# The output of this file is two variables:
#
# $series_dir: the directory of the current release series
# (relative to $topdir/software/hwloc)
# $new_series_dir: either same as $series_dir, or more recent
#  when a new series has prereleases but no production releases yet.
# $last_ver: the version number of the last release on that series
# $last_dir: the directory of the last release on that series
# (relative to $topdir/software/hwloc/$series_dir or $topdir/projects/hwloc/doc)
#

$new_series_dir = "v2.13";
$series_dir = "v2.12";

# get the (pre)releases on the new branch for latest_snapshot
include_once("$topdir/software/hwloc/$new_series_dir/version.inc");
$new_prereleases = $prereleases;
$new_s3_prefix = $s3_prefix;
$new_releases = $releases;

if ($new_series_dir != $series_dir && count($new_releases) > 0) {
  die("ERROR: new_series_dir contains production releases, forgot to update series_dir?");
}

# get the last release on the current branch for latest_release
include_once("$topdir/software/hwloc/$series_dir/version.inc");

$last_ver = $releases[0];
$last_dir = $last_ver;
