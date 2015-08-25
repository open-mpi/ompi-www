<?php
$title = "Open MPI v$version documentation";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");

function print_files($title, $files, $section, $cols)
{
    $dir = "man$section/";
    $suffix = "$section.php";
    $percent = (int) (100 / $cols);
    $td = "<td width=\"$percent%\">";
    $empty = "$td&nbsp;</td>\n";

    print "<h2>$title</h2>

<div align=center>
<p>
<table width=80%>\n\n";

    # Print in column-wise order (easier to scan alphabetically down a
    # small number of columns vs. a large number of rows).  Make sure
    # that $offset is large enough; it's ok to print blank cells at the
    # end.
    $num = sizeof($files);
    $offset = (int) ($num / $cols);
    if ($offset * $cols < $num) {
        ++$offset;
    }
    for ($i = 0; $i < $offset; ++$i) {
        print "<tr>\n";
        for ($j = 0; $j < $cols; ++$j) {
            if ($i + $offset * $j < $num) {
                $f = $files[$i + $offset * $j];
                print "$td<a href=\"$dir$f.$suffix\">$f</a></td>\n";
            } else {
                print $empty;
            }
        }
        print "</tr>\n\n";
    }
    print("</table></p></div>\n\n");
}

# Section 1
print_files("Open MPI commands<br />(section 1 man pages)",
            $files_1, "1", 4);

# Section 7
if (isset($files_7)) {
    print_files("Open MPI general information<br />(section 7 man pages)",
                $files_7, "7", 4);
}

# Section 3 (the biggest)
if (isset($files_3)) {
    print_files("MPI API<br />(section 3 man pages)", $files_3, "3", 4);
}

include_once("$topdir/includes/footer.inc");

