<?php
$topdir = "../..";

$title = "Portable Hardware Locality (hwloc) Mailing Lists";

include_once("nav.inc");
include_once("functions.inc");
include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/header.inc");
?>

<p><center><hr width=50%></center>

<p> Hwloc's mailing lists are hosted at Google Groups, which
contains archived conversations going back to January, 2025.</p>

<p> However, Hwloc's <em>complete</em> mail archives go back much
further than that and are available at <a
href="https://mail-archive.com/">https://mail-archive.com/</a>.</p>

<p><center><hr width=50%></center>

<P>The following lists are available for the <a href="<?php
print($topdir); ?>/projects/hwloc/">hwloc</a> community:</p>

<P>
<UL>

<?php print_link("hwloc announcement list (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "hwloc-announce"); ?>

<P> This is a low-volume list that is used to announce new version of
hwloc, important updates, etc.  The list is only for announcements, so
<strong>only the hwloc development team can post to the list.</strong>
Posts from outside the hwloc development team will be automatically
discarded.</p>

<?php print_link("hwloc user list", "hwloc-users"); ?>

<P>This list is used for general questions and discussion of hwloc.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

<?php print_list("hwloc-users"); ?>

<?php print_link("hwloc developers list", "hwloc-devel", $emit_ggroups=False); ?>

<P>This list used to be for developers who were working with the
internals of hwloc itself.  Due to low volume, this list is no longer
available -- it has been folder into the hwloc user's list.  The old
archives are still available, however.</p>

</UL>

<?php
  include_once("$topdir/includes/footer.inc");
