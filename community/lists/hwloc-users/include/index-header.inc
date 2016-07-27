<?
$topdir = "/l/osl/www/www.open-mpi.org";
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    $topurl = "../../../../..";
} else {
    $topurl = "../../..";
}
$topdir = $topurl;
$title = "Hardware Locality Users' Mailing List Archives";


$this_dir = "lists";
$base = $topurl;
include_once("$topdir/community/lists/nav.inc");

include_once("$topdir/includes/header.inc");

$directory = "hwloc-users";

$this_list = "hwloc-users";
include_once("$topdir/community/lists/frozen.inc");
?>
