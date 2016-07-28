<?php // -*- php -*-

// Ugh -- we have to put the "global" statements here, because 
// this file may be included in the body of a function.

global $topurl;
global $topdir;
global $mirror_dir;

include_once("$topdir/includes/functions.inc");
include_once("$topdir/includes/mailto.inc");
include_once("$topdir/community/mirrors/read_mirrors.php");  

if (!isset($topurl) || $topurl == "") {
    $topurl = $topdir;
}

function print_mirror() {
    global $server_dir;
    global $table_border;
    global $topdir;

    $server_hostname = $_SERVER["SERVER_NAME"];
    
    // Find this site in the mirrors list

    $mirrors = read_mirrors();
    for ($i = 0; $i < count($mirrors); ++$i) {
        if ($server_hostname == $mirrors[$i]->get_server()) {
            $server_flag = $mirrors[$i]->get_flag();
            $server_location = preg_replace('/ /', '&nbsp;',
                                            $mirrors[$i]->get_location());
            $server_tagline = preg_replace('/ /', '&nbsp;',
                                           $mirrors[$i]->get_name());
            break;
        }
    }

    if (isset($server_location)) {
        if (isset($server_flag)) {
            print("<TABLE>\n<TR>\n<TD VALIGN=\"MIDDLE\" CLASS=\"footer\">");
            print_flag($server_flag);
            print("</TD>\n<TD VALIGN=\"MIDDLE\" CLASS=\"footer\">");
            print_location($server_location, $server_tagline);
            print("</TD>\n</TR>\n</TABLE>\n\n");
        } else {
            print_location($server_location);
        }
    } else {
        print("<TABLE BORDER=\"<?php print($table_border); ?>\">\n<TR>\n<TD VALIGN=\"MIDDLE\" CLASS=\"footer\">");
        print_flag("jolly-roger.jpg");
        print("</TD>\n<TD VALIGN=\"MIDDLE\" CLASS=\"footer\">" .
              preg_replace('/ /', '&nbsp;',
                           "This is an unregistered mirror site.") .
              "</TD>\n</TR>\n</TABLE>\n\n");
    }
}
function print_flag($flag) {    
    global $table_border;
    global $topdir;
    global $topurl;
    global $mirror_dir;

    $size = GetImageSize("$topdir$mirror_dir/$flag");
    print("<A HREF=\"$topurl$mirror_dir/\">" .
          "<IMG SRC=\"$topurl$mirror_dir/$flag\" " .
          $size[3] . 
          " ALT=\"[Flag]\" BORDER=\"$table_border\"></A><BR>\n");
}
function print_location($location, $tagline) {
    global $is_mirror;
    global $topdir;

    print("$tagline<BR />\nThis&nbsp;site&nbsp;is&nbsp;located&nbsp;in: $location\n");

    // If there's a timestamp available for when the last update occurred,
    // then include it.

    if ($is_mirror && is_file("$topdir/includes/when_mirrored.inc") ) {
        print("<BR />Mirror last updated: ");
        $f = fopen("$topdir/includes/when_mirrored.inc", "r");
        print(fgets($f, 1024));
        fclose($f);
    }
}
?>

	  <!-- END MAIN TEXT -->
	  </TD>
        </TR>
      </TABLE>
          </TD>
        </TD>
      </TABLE>
    </TD>
  </TR>

  <!-- footer row -->
  <TR>
  <TD COLSPAN="2">
      <TABLE WIDTH="100%" BORDER="<?php print($table_border); ?>" CELLPADDING="8" CELLSPACING="0">
      <COLGROUP>
      <COL>
      <COL>
      <COL>
        <TR>
          <TD class="footer" ALIGN="LEFT" height="36">
            <?php print_mirror();?>
          </TD>
          <TD class="footer" ALIGN="CENTER" height="36">
            <?php print_mailto("open-mpi.org", "www", "Contact webmaster"); ?>
          </TD>
          <TD class="footer" ALIGN="RIGHT" height="36">
<?php 
// Calculate last mode time of this file and all included files
$last = getlastmod();
global $included_files;
if (isset($included_files)) {
    foreach ($included_files as $file) {
        $m = filemtime($file);
        if ($m > $last) {
            $last = $m;
        }
    }
}

date_default_timezone_set('UTC');
print("Page last modified: " . date("j-M-Y", $last) . "<br>\n");
$year = date("Y", time());
if ($year != "2004") {
    $year = "2004-$year";
}
print("&copy;$year The Open MPI Project\n<br>\n");
?>
          </TD>
        </TR>
      </TABLE>

    <!-- END MAIN TABLE -->
    </TD>
  </TR>
</TABLE>
<BR>
<?php
// Allow mirrors to have their own footer if they want
if ($is_mirror && is_file("$topdir/includes/mirror-footer.inc") ) {
    include("$topdir/includes/mirror-footer.inc");
}
?>
</BODY>
</HTML>
