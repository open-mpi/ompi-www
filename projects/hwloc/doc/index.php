<?php
$topdir = "../../..";
$title = "Portable Hardware Locality (hwloc) Documentation";
include_once("$topdir/software/hwloc/current/version.inc");
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");

?>

<p>See also the <a href="<?php print "$topdir/projects/hwloc/tutorials" ?>">tutorials</a> page for lengthy talks and hands-on sessions.</p>

<p>hwloc documentation by version:</p>

<div align="center">
<table border="1" cellpadding="5">
<tr>
<th>Name</th>
<th>US letter PDF</th>
<th>A4 PDF</th>
<th>HTML</th>
</tr>

<?php

function print_docs($desc, $letterpdf, $a4pdf, $html) {
  print("<tr>
<td><strong>$desc</strong></td>
<td><a align=\"center\" href=\"$letterpdf\">US letter PDF</a></td>
<td><a align=\"center\" href=\"$a4pdf\">A4 PDF</a></td>
<td><a align=\"center\" href=\"$html\">HTML</a></td>
</tr>\n\n");
}

$blank_line = "<tr><td style=\"background-color:#999999\" colspan=\"4\"></td></tr>\n\n";

#########################################################

$versions = array();
$first = 1;
foreach ($versions as $key => $v) {
#    print_docs("Release $v (stable" . (!$first ? ", old" : "") . ")",
    print_docs("Release $v (new)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.12.0rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.11.2", "v2.11.1", "v2.11.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (stable" . (!$first ? ", old" : "") . ")",
#    print_docs("Release $v (new)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.11.2rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.10.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (stable" . (!$first ? ", old" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.10.0rc2";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.9.3");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (stable" . (!$first ? ", old" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.9.4rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.8.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (stable" . (!$first ? ", old" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.8.0rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.7.2");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.7.2rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.6.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.6.0rc2";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.5.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.5.0rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.4.1");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.4.2rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.3.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.3.0rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.2.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.2.0rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.1.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v2.1.1rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v2.0.4");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.11.13");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ultrastable" . (!$first ? ", old" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$v = "v1.11.14rc1";
# See if there's doc for this prerelease, display it.
if (preg_match("/[a-z]/i", $v) &&
    file_exists("$v") &&
    file_exists("hwloc-$v-a4.pdf") &&
    file_exists("hwloc-$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.10.1");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.9.1");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.8.1");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.7.2");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.6.2");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.5.2");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.4.3");
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.3.3");
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.2.2");
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.1.2");
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.0.3");
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v0.9.3");
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient" . ($v == "v0.9.2" ? ", identical to 0.9.1 except for some documentation image sizes" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}
print("</table>\n</div>\n\n");

include_once("$topdir/includes/footer.inc");
