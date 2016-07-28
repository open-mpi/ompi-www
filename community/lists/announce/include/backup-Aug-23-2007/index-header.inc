<?
$topdir = "/l/osl/www/www.open-mpi.org";
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    $topurl = "../../../../..";
} else {
    $topurl = "../../..";
}
$title = "Open MPI Announcements Mailing List Archives";

include_once("$topdir/includes/nav.inc");

$this_dir = "lists";
$base = $topurl;
include_once("$topdir/community/lists/ompi.inc");
include_once("$topdir/community/lists/plpa.inc");

include_once("$topdir/includes/header.inc");
?>
