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

print($blank_line);

$versions = array("v1.11.3", "v1.11.2", "v1.11.1", "v1.11.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (stable" . (!$first ? ", old" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

$snapv_dir = "v1.11";
$v = "";
if (file_exists("$topdir/software/hwloc/$snapv_dir")) {
    $fp = fopen("$topdir/software/hwloc/$snapv_dir/downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = preg_replace("/\s*(\S+)\s*/", "$1", $v);
}

# See if there's a snapshot file that does not have any letters in its
# version number (i.e., is not a stable release) and has
# corresponding pdf's and directory here in the downloads
# directory.

if (preg_match("/[a-z]/i", $v) &&
    file_exists("v$v") &&
    file_exists("hwloc-v$v-a4.pdf") &&
    file_exists("hwloc-v$v-letter.pdf")) {
    print($blank_line);

    print_docs("Pre-release $v (newest of the new, unstable)",
               "hwloc-v$v-letter.pdf", "hwloc-v$v-a4.pdf", "v$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.10.1", "v1.10.0");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (stable" . (!$first ? ", old" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.9.1", "v1.9");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (old)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.8.1", "v1.8");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (older)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.7.2", "v1.7.1", "v1.7");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.6.2", "v1.6.1", "v1.6");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (ancient)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.5.2", "v1.5.1", "v1.5");
$first = 1;
foreach ($versions as $key => $v) {
    print_docs("Release $v (Middle Age)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
    $first = 0;
}

#########################################################

print($blank_line);

$versions = array("v1.4.3", "v1.4.2", "v1.4.1", "v1.4");
foreach ($versions as $key => $v) {
    print_docs("Release $v (Antiquity)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.3.3", "v1.3.2", "v1.3.1", "v1.3");
foreach ($versions as $key => $v) {
    print_docs("Release $v (Stone Age)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.2.2", "v1.2.1", "v1.2");
foreach ($versions as $key => $v) {
    print_docs("Release $v (Cretaceous)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.1.2", "v1.1.1", "v1.1");
foreach ($versions as $key => $v) {
    print_docs("Release $v (Jurassic)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v1.0.3", "v1.0.2", "v1.0.1", "v1.0");
foreach ($versions as $key => $v) {
    print_docs("Release $v (Precambrian)",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}

#########################################################

print($blank_line);

$versions = array("v0.9.3", "v0.9.2", "v0.9.1");
foreach ($versions as $key => $v) {
    print_docs("Release $v (Big-Bang" . ($v == "v0.9.2" ? ", identical to 0.9.1 except for some documentation image sizes" : "") . ")",
               "hwloc-$v-letter.pdf", "hwloc-$v-a4.pdf", "$v/");
}
print("</table>\n</div>\n\n");

include_once("$topdir/includes/footer.inc");
