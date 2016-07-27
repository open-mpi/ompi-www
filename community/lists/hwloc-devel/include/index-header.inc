<?
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    $topurl = "../../../../..";
} else {
    $topurl = "../../..";
}
$topdir = $topurl;
$title = "Hardware Locality Development's Mailing List Archives";

$this_dir = "lists";
$base = $topurl;
include_once("$topdir/community/lists/nav.inc");

include_once("$topdir/includes/header.inc");

$directory = "hwloc-devel";

?>


<div align="center">
<h1><font color="red">This web mail archive is frozen.</font></h1>

<p> This page is part of a frozen web archive of this mailing list.</p>

<p> You can still navigate around this archive, but know that no new mails
have been added to it since July of 2016.</p>

<p>Click here to be taken to the new web archives of this list; it includes
all the mails that are in this frozen archive plus all new mails that
have been sent to the list since it was migrated to the new archives.</p>
</div>

<hr>
