<?php
$topdir = "../..";

$title = "Portable Hardware Locality (hwloc) Mailing Lists";

include_once("nav.inc");
include_once("functions.inc");
include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/header.inc");
?>

<p><center><?php red("YOU MUST BE SUBSCRIBED IN ORDER TO POST!");
?></center></p>

<p> Due to the ever-present problem of spam, we cannot accept posts
from non-subscribers.  If you are not subscribed <?php red("with the
address that you post from"); ?>, you posts will be automatically
discarded.</p>

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

<?php print_link("hwloc developers list", "hwloc-devel"); ?>

<P>This list is used for general questions and discussion of hwloc.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

<?php print_list("hwloc-devel"); ?>

<?php print_link("Git commit list (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "hwloc-commits"); ?>

<p>A mail is sent to this list for every git push to Github in the
hwloc code base.  The mail includes a list of files that were changed,
the developer's commit message, and a diff of the changes.  <strong>Only the
automated Github web hook post to this list;</strong> all other posts
are automatically discarded.

</UL>

<?php
  include_once("$topdir/includes/footer.inc");
