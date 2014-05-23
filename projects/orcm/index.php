<?php
$topdir = "../..";
$title = "Open Resilient Cluster Manager (ORCM)";
include_once("$topdir/projects/orcm/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<p> The Open Resilient Cluster Manager (ORCM) project.</p>

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p>Coming soon</p>


<!------------------------------------------------------------------------->

<h3>Getting and using ORCM</h3>

<p> There are no ORCM releases at this time.
The GIT repository is accessible for
<a href="http://github.com/open-mpi/orcm">online browsing</a>
or checkout</a>.

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to <a
href="../../community/lists/orcm.php">ORCM mailing lists</a>. Passing
<tt>--enable-debug</tt> to <tt>./configure</tt> also enables a lot of
helpful debugging information.</p>

<p>Also be sure to see the <a
href="https://svn.open-mpi.org/trac/orcm/">ORCM wiki and bug tracking
system</a>.</a>

<?php
include_once("$topdir/includes/footer.inc");
