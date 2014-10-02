<?php
$topdir = "../..";

$title = "Open Tool for Parameter Optimization (otpo) Mailing Lists";

include_once("$topdir/projects/otpo/nav.inc");
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
print($topdir); ?>/projects/otpo/">otpo</a> community:</p>

<P>
<UL>

<?php print_link("otpo user list", "otpo-users"); ?>

<P>This list is used for general questions and discussion of otpo.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

<?php print_list("otpo-users"); ?>


<?php print_link("Git commit list (<font color=red>USERS
CANNOT POST TO THIS LIST</font>)", "otpo-svn"); ?>

<p>A mail is sent to this list for every Git push to Github commit in
the OTPO code base.  The mail includes a list of files that were
changed, the developer's commit message, and a diff of the changes.
<strong>Only the automated git-email-bot can post to this
list;</strong> all other posts are automatically discarded.

</UL>

<?php
  include_once("$topdir/includes/footer.inc");
