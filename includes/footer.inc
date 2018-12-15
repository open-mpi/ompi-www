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
	  </td>
        </tr>
      </table>
          </td>
        </td>
      </table>
    </td>
  </tr>

  <!-- footer row -->
  <tr>
  <td colspan="2">
      <table width="100%" border="<?php print($table_border); ?>" cellpadding="8" cellspacing="0">
      <colgroup>
      <col>
      <col>
      <col>
        <tr>
          <td class="footer" align="LEFT" height="36" width="33%">
	  <table><tr><td class="footer"><a href="http://spi-inc.org/"><img height="35"
src="<?php print($topdir); ?>/images/spi-logo.svg"></a></td>
                 <td class="footer"><a href="http://spi-inc.org/projects/open-mpi/">Open MPI is an Associated
Project</a><br /> of the
<a href="http://spi-inc.org/">Software in the Public Interest</a>
non-profit organization</td></tr></table>
          </td>
          <td class="footer" align="CENTER" height="36" width="33%">
            <?php print_mailto("open-mpi.org", "the-web-maintainer", "Contact the Open MPI webmaster"); ?>
          </td>
          <td class="footer" align="RIGHT" height="36" width="33%">
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
          </td>
        </tr>
      </table>

    <!-- END MAIN table -->
    </td>
  </tr>
</table>
<br>
<?php
// Allow mirrors to have their own footer if they want
if ($is_mirror && is_file("$topdir/includes/mirror-footer.inc") ) {
    include("$topdir/includes/mirror-footer.inc");
}
?>
</body>
</html>
