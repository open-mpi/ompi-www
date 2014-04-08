<?php
$topdir = "../..";

$title = "Open MPI Mailing Lists";

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

<P>The following lists are available for the Open MPI community:</p>

<P>
<UL>

<!--------------------------------------------------------------------->

<?php print_link("Open MPI announcement list (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "announce"); ?>

<P> This is a low-volume list that is used to announce new version of
Open MPI, important updates, etc.  The list is only for announcements,
so <strong>only the Open MPI development team can post to the
list.</strong> Posts from outside the Open MPI development team will
be automatically discarded.</p>

<!--------------------------------------------------------------------->

<?php print_link("User list", "users"); ?>

<P>This list is used for general questions and discussion of Open MPI.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

<?php print_list("users"); ?>

<!--------------------------------------------------------------------->

<?php print_link("Development list", "devel"); ?>

<P>This list is used for developers who are working with the internals
of Open MPI itself.  <?php red("Subscribers"); ?> are welcome to post 
any topics dealing with the internal code of Open MPI are welcome on
this list: questions, comments, bug reports, etc.</p>

<p>Note that the Open MPI team uses this mailing list as <em>one of
many</em> different types of communication about development.  We also
have a weekly engineering teleconference, we heavily use instant
messenging between developers, and we use regular ol' phone calls,
too.  Meaning: you shouldn't expect to see <em>all</em> development
discussion on this list.</p>

<?php print_list("devel"); ?>

<!--------------------------------------------------------------------->

<?php print_link("Documentation list", "docs"); ?>

<P>This list is used for the documentation group.  <?php
red("Subscribers"); ?> are welcome to post any topics dealing with the
documentation of Open MPI.</p>

<?php print_list("docs"); ?>

<!--------------------------------------------------------------------->

<?php print_link("Bug activity list (<font
color=red>USERS CANNOT POST TO THIS LIST</font>)", "bugs"); ?>

<p>A mail is sent to this list for every action on an Open MPI bug.   
This is handy for those who want to keep up with bug activity.  The
only mail that comes across this list is sent from the bug tracking
system; all manual posts are discarded.

<!--------------------------------------------------------------------->

<?php print_link("Subversion commit list, abbreviated (<font
color=red>USERS CANNOT POST TO THIS LIST</font>)", "svn"); ?>

<p>A mail is sent to this list for every Subversion commit in the Open
MPI code base.  The mail includes a list of files that were changed,
the developer's commit message, and a diff of the changes.  However,
if the diff is larger than 40 kilobytes, it is not included in the
mail.  This is handy for those who want to keep up with commit
activity but are subject to mailbox quotas.  <strong>Only developers
can post to this list;</strong> all other posts are automatically
discarded.

<!--------------------------------------------------------------------->

<?php print_link("Subversion commit list, full (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "svn-full"); ?>

<p>A mail is sent to this list for every Subversion commit in the Open
MPI code base.  The mail includes a list of files that were changed,
the developer's commit message, and a diff of the changes.  Unliked
the abbreviated list, the diff is <em>always</em> included in the
e-mail, regardless of size.  <strong>Only developers can post to this
list;</strong> all other posts are automatically discarded.

</UL>

<?php
  include_once("$topdir/includes/footer.inc"); 
