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

<p><center><hr width=50%></center>

<p> MTT's mailing lists are hosted at Google Groups, which
contains archived conversations going back to January, 2025.</p>

<p> However, MTT's <em>complete</em> mail archives go back much
further than that and are available at <a
href="https://mail-archive.com/">https://mail-archive.com/</a>.</p>

<p><center><hr width=50%></center>

<P>The following lists are available for the <a href="<?php
print($topdir); ?>/projects/mtt/">MTT</a> community:</p>

<P>
<UL>

<?php print_link("MTT user list", "mtt-users"); ?>

<P>This list is used for general questions and discussion of MTT.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

<?php print_list("mtt-devel"); ?>

<?php print_link("MTT developers list", "mtt-devel", $emit_ggroups=False); ?>

<P>This list used to be for developers who were working with the
internals of MTT itself.  Due to very low volume, this list is no
longer available -- it has been folder into the MTT user's list.  The
old archives are still available, however.</p>
</UL>

<?php
  include_once("$topdir/includes/footer.inc");
