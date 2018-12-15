<?php
# The output of this file is two variables:
#
# $ver_current: the version number of the current release
# $ver_current_dir: the directory of the current release version
# (relative to $topdir/software)
#
# Fill in the $dir variable with the directory of the current release line
# (e.g., "v0.9", "v1.0", "v1.1", "v2.0", etc.  This tree should have a
# "version.inc" in it that contains a definition of at least 2
# variables:
#
# Then fill in per-version info variables:
#
# $ver_{version}: a full version number string indicating the complete
# name of this version.  Examples: "0.9b1", "1.0.2", "2.0".
#
# $ver_{version}_dir: the name of the directory in the URL where the
# tree for this version exists.  This should be under
# $topdir/software/.  Examples: "v0.9", "v1.0", "v1.1", "v2.0".
#
# Where:
#
# {version} is a variable-friendly transmogrification of the directory
# name, meaning "replace . with _".
#
$dir = "v3.0";

$ver_v3_0 = "3.0";
$ver_v3_0_dir = "v3.0";

# Note that we do not include $dir/version.inc here (like other Open
# MPI projects) because MTT does not have downloadable tarballs.
#include_once("$topdir/software/mtt/$dir/version.inc");

$name = preg_replace("/\./", "_", $dir);

$str = "\$ver_current = \$ver_$name;";
eval($str);
$str = "\$ver_current_dir = \$ver_${name}_dir;";
eval($str);
