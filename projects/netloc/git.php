<?php
$topdir = "../..";
$title = "Portable Network Locality (netloc)";
include_once("$topdir/software/netloc/current/version.inc");
include_once("$topdir/projects/netloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>

<!- ------------------------------------------------------------------ -->

<br/>
<p style="font-size: 18px; color: red;">
 <b>netloc development moved to the <a href="../../projects/hwloc/git.php">hwloc git tree</a>
 (master branch only).</b>
 The Git repository below is not updated anymore.
</p>
<br/>
<br/>

<h2>Git checkout (obsolete)</h2>

<p>
The Git repository may be checked out with:
</p>
<pre>
  git clone https://github.com/open-mpi/netloc
</pre>

<!- ------------------------------------------------------------------ -->

<h2>Online browsing (obsolete)</h2>

<p>
 The Git repository may be
 <a href="https://github.com/open-mpi/netloc">browsed online</a>.
</p>

<!- ------------------------------------------------------------------ -->

<h2>Branches and tags (obsolete)</h2>

<p>There are three general areas of the source code repository that
will interest most users:

<ul>

<li>The <strong>"master"</strong> branch is generally the head of
netloc development.  This branch is checked out by default when
cloning the Git repository.</li>

<li>Major stable releases are always branched.  For example, the 1.0
series of netloc will be available under branch <code>v1.0</code>
directory; the 1.1 series is available under branch <code>v1.1</code>,
etc.

<li>Point releases are all tagged.  For example, version 1.0.0 will be
available tagged as </code>netloc-1.0.0</code>, version 2.3.4 would
available under tag <code>netloc-2.3.4</code>, etc.

</ul>


<?php 
  include_once("$topdir/includes/footer.inc"); 
