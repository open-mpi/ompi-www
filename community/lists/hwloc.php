<?php
$topdir = "../..";

$title = "Portable Hardware Locality (hwloc) Mailing Lists";

include_once("nav.inc");
include_once("functions.inc");
include_once("$topdir/includes/mailto.inc");
include_once("$topdir/includes/header.inc");
?>

<p><center><hr width=50%></center>

<p> Hwloc's mailing lists are hosted at Inria, which
contains archived conversations going back to January, 2025.</p>

<p> However, Hwloc's <em>complete</em> mail archives up to 2024
are available at <a
href="https://mail-archive.com/">https://mail-archive.com/</a>.</p>

<p><center><hr width=50%></center>

<P>The following lists are available for the <a href="<?php
print($topdir); ?>/projects/hwloc/">hwloc</a> community:</p>

<P>
<UL>

<p>
<li><B>hwloc announcement list (<font color=red>USERS CANNOT POST TO THIS LIST</font>)</B><BR>
 [ <a href="https://sympa.inria.fr/sympa/arc/hwloc-announce">Archives since 2025</a> |
   <a href="https://www.mail-archive.com/hwloc-announce@lists.open-mpi.org//">Archives up to 2024</a> |
   <a href="https://sympa.inria.fr/sympa/info/hwloc-announce">Subscribe, unsubscribe, or change options</a> ]

<P> This is a low-volume list that is used to announce new version of
hwloc, important updates, etc.  The list is only for announcements, so
<strong>only the hwloc development team can post to the list.</strong>
Posts from outside the hwloc development team will be automatically
discarded.</p>

<p>
<li><B>hwloc users list</B><BR>
 [ <a href="https://sympa.inria.fr/sympa/arc/hwloc-users">Archives since 2025</a> |
   <a href="https://www.mail-archive.com/hwloc-users@lists.open-mpi.org//">Users archives up to 2024</a> |
   <a href="https://www.mail-archive.com/hwloc-devel@lists.open-mpi.org//">Devel archives up to 2024</a> |
   <a href="https://sympa.inria.fr/sympa/info/hwloc-users">Subscribe, unsubscribe, or change options</a> ]

<P>This list is used for general questions and discussion of hwloc.
The former hwloc-devel mailing is now merged in hwloc-users.
Please see the "<a href="<?php printf("$topdir/community/help/");
?>">Getting Help</a>" page for details on submitting requests for
help.  <?php red("Subscribers"); ?> can post questions, comments,
suspected bug reports, etc. to the list at the following address:</p>

</UL>

<?php
  include_once("$topdir/includes/footer.inc");
