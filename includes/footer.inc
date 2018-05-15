<?php // -*- php -*-

// Ugh -- we have to put the "global" statements here, because
// this file may be included in the body of a function.

global $topurl;
global $topdir;

include_once("$topdir/includes/functions.inc");
include_once("$topdir/includes/mailto.inc");

if (!isset($topurl) || $topurl == "") {
    $topurl = $topdir;
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
          <TD class="footer" ALIGN="LEFT" height="36" WIDTH="33%">
	  <TABLE><TR><TD CLASS="footer"><a href="http://spi-inc.org/"><img height="35"
src="<?php print($topdir); ?>/images/spi-logo.svg"></a></TD>
                 <TD CLASS="footer"><a href="http://spi-inc.org/projects/open-mpi/">Open MPI is an Associated
Project</a><br /> of the
<a href="http://spi-inc.org/">Software in the Public Interest</a>
non-profit organization</TD></TR></TABLE>
          </TD>
          <TD class="footer" ALIGN="CENTER" height="36" WIDTH="33%">
            <?php print_mailto("open-mpi.org", "the-web-maintainer", "Contact the Open MPI webmaster"); ?>
          </TD>
          <TD class="footer" ALIGN="RIGHT" height="36" WIDTH="33%">
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
