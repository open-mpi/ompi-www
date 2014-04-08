<?php
$topdir = "../..";
$title = "PMI Exascale (PMIx)";
include_once("$topdir/projects/pmix/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<p> The PMI Exascale (pmix) software package provides an
implementation of the PMI standard that supports clusters up
to and including exascale sizes.</p>

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p>Coming soon</p>

<p>The PMI standard has been the subject of many papers over the
    years, including this one 
<a href="http://www.mcs.anl.gov/papers/P1760.pdf">available here</a>.
</p>

<!------------------------------------------------------------------------->

<h3>Getting and using pmix</h3>

<p> The latest pmix releases are available on the
<a href="../../software/pmix/nightly/">download page</a>.
The SVN repository is also accessible for
<a href="http://svn.open-mpi.org/svn/pmix">online browsing</a>
or checkout</a>.

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to <a
href="../../community/lists/pmix.php">pmix mailing lists</a>. Passing
<tt>--enable-debug</tt> to <tt>./configure</tt> also enables a lot of
helpful debugging information.</p>

<p>Also be sure to see the <a
href="https://svn.open-mpi.org/trac/pmix/">pmix wiki and bug tracking
system</a>.</a>

<?php
include_once("$topdir/includes/footer.inc");
