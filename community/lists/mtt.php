<?php
$topdir = "../..";

$title = "MPI Testing Tool (MTT) Mailing Lists";
$logo = "images/mtt-logo.png";
$project = "MPI Testing Tool";

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
print($topdir); ?>/projects/mtt/">MTT</a> community:</p>

<P>
<UL>

<?php print_link("MTT announcement list (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "mtt-announce"); ?>

<P> This is a low-volume list that is used to announce new version of
MTT, important updates, etc.  The list is only for announcements, so
<strong>only the MTT development team can post to the list.</strong>
Posts from outside the MTT development team will be automatically
discarded.</p>

<?php print_link("MTT user list", "mtt-users"); ?>

<P>This list is used for general questions and discussion of MTT.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

<?php print_link("MTT developers list", "mtt-devel"); ?>

<P>This list is used for developers who are working with the internals
of MTT itself.  <?php red("Subscribers"); ?> are welcome to post 
any topics dealing with the internal code of MTT are welcome on
this list: questions, comments, bug reports, etc.</p>

<?php print_list("mtt-devel"); ?>

<?php print_link("Bug activity list (<font
color=red>USERS CANNOT POST TO THIS LIST</font>)", "mtt-bugs"); ?>

<p>A mail is sent to this list for every action on a MTT bug.   
This is handy for those who want to keep up with bug activity.  The
only mail that comes across this list is sent from the bug tracking
system; all manual posts are discarded.

</UL>

<?php
  include_once("$topdir/includes/footer.inc"); 
