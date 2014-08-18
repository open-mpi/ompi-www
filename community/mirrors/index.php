<?php

$topdir = "../..";
$title = "Mirror sites";

include_once("nav.inc");
include_once("$topdir/community/mirrors/read_mirrors.php");
include_once("$topdir/includes/header.inc");

$mirrors = read_mirrors();

function print_region($region, $columns = 1) {
    global $mirrors;

    $show_inactive = 0;
    if (array_key_exists("show_inactive", $_REQUEST)) {
        $show_inactive = $_REQUEST["show_inactive"];
    }

    print("<TABLE BORDER=0 CELLPADDING=0>
<TR><TH COLSPAN=$columns>$region</TH></TR>
<TR><TH COLSPAN=$columns><HR></TH></TR>\n");

    // First, count how many mirrors we will be displaying
    reset($mirrors);
    $count = 0;
    while (list($key, $val) = each($mirrors)) {
        if (!$val->get_display() && !$show_inactive) {
            continue;
        }

        if ($region != $val->get_region()) {
            continue;
        }
        $disp[] = $val;
        ++$count;
    }

    // Next, actually display them by column
    $rows = floor($count / $columns);
    if ($rows * $columns != $count) {
        ++$rows;
    }
    for ($y = 0; $y < $rows; ++$y) {
        print("<TR>\n");
        for ($x = 0; $x < $columns; ++$x) {
            $index = $y + $rows * $x;
            if ($index >= sizeof($disp)) {
                break;
            }
            $val = $disp[$y + $rows * $x];

            $size = GetImageSize($val->get_flag());
            print("\n<TD ALIGN=LEFT>");
            $u = "<a href=\"" . $val->get_url(). "\">";
            $inactive = $val->get_display() ? "" : " <FONT COLOR=\"RED\">(INACTIVE)</FONT>";
            print("<TABLE BORDER=0 CELLPADDING=5><TR><TD VALIGN=\"TOP\">$u" .
                  "<IMG VALIGN=\"TOP\" SRC=\"" . $val->get_flag() . "\" " .
                  $size[3] .
                  " BORDER=1></A></TD>\n<TD VALIGN=\"TOP\">" .
                  $val->get_name() . "$inactive<BR>" .
                  $val->get_location() . "<BR>$u" .
                  $val->get_url() . "</A></TD></TR></TABLE>\n</TD>\n\n");
        }
        print("</TR>\n");
    }
    print("</TABLE>\n");
}
?>

<P><A HREF="become-a-mirror.php">Are you interested in becoming an
official Open MPI mirror site?</A>

<p>The Open MPI web pages are available at the following sites:</p>

<P>
<DIV ALIGN="CENTER">
<TABLE BORDER=0 CELLPADDING=0>
<TR><TD VALIGN=TOP>
<?php
print_region("Asia", 1);
print("<BR />\n");
print_region("North America", 1);
?>
</TD>
<TD> &nbsp; </TD>
<TD VALIGN=TOP>
<?php
print_region("Europe", 2);
#print_region("Austrailia", 2);
?>
</TD></TR>
</TABLE>
</DIV>

<P><A HREF="become-a-mirror.php">Are you interested in becoming an
official Open MPI mirror site?</A>

<?php
  include_once("$topdir/includes/footer.inc");
