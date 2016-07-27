<?
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    $topurl = "../../../../..";
} else {
    $topurl = "../../..";
}
$topdir = $topurl;
$title = "MTT Devel Mailing List Archives";


$this_dir = "lists";
$base = $topurl;
include_once("$topdir/community/lists/nav.inc");

$directory = "mtt-announce";

$this_list = "mtt-announce";
include_once("$topdir/community/lists/frozen.inc");
?>
