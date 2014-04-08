<?php

// This is a complicated problem.  This file can be invoked from any
// directory -- e.g., www.open-mpi.org/papers/foo.php (assuming
// /papers/foo.php doesn't exist).  It is invoked with a PHP getcwd()
// of /, but the browser thinks that it is at /papers/foo.php.  So how
// do we calculate the $topdir?  Do this hueristic:
//
// 1. If we're at DOCROOT/404.php, good -- continue.
// 2. Otherwise, start at the current directory and look for
//    $dir/404.php.  Once we find it, HTTP redirect to that.
//
// So we end up at the real/correct top-level 404.php, and we know
// that $topdir can be ".".

// Turn off PHP error reporting!  Otherwise we get lots of errors
// about stat()'ing on non-existent files in the apache error logs.
error_reporting(0);
$file = basename($_SERVER["REQUEST_URI"]);
$filename_file = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"];

// If $file is "404.php" and that full filename exists, we're ready.
// Otherwise, we need to redirect.
$good = 0;
if ($file == "404.php" && stat($filename_file)) {
    $good = 1;
}

// Walk back up the directory tree backwards to find the first
// 404.php.  If we don't find it, then redirect to /404.php and hope
// for the best.
if (!$good) {
    $suffix = dirname(dirname($_SERVER["REQUEST_URI"]));
    while (1) {
        if ($suffix == "/") {
            // Didn't find it -- hope for the best.
            header("Location: /404.php");
            exit(0);
        } 
        $filename_file = $_SERVER["DOCUMENT_ROOT"] . $suffix . "/404.php";
        if (stat($filename_file)) {
            header("Location: $suffix/404.php");
            exit(0);
        }
        $suffix = dirname($suffix);
    }
    // Will never reach here
}

// If we got here, we're at $DOC_ROOT/404.php.  Yay!  Let's keep
// going.

$topdir = ".";
$title = "Open MPI:<br />We couldn't find what you were looking for -- Sadness";

include_once("$topdir/includes/header.inc");
?>

<br />
<div align="center">
<table>
<tr>
<td valign="top" align="center"><strong>
<br />
<br />
<br />
<br />
Sorry, we couldn't find<br />
what you were looking for.</strong>
<br />
<br />
Perhaps a <a
href="http://theoatmeal.com/comics/state_web_winter#tumblr">tumblebeast<a/>
ate it?</td>
<td valign="center" align="center"><img src="<?php print($topdir); ?>/images/tb_sign1.png"
width="300"></td>
</tr>
</table>
</div>

<?php 
include_once("$topdir/includes/footer.inc"); 
