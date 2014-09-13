<?php
$topdir = "../..";
$title = "Portable Hardware Locality (hwloc)";
include_once("$topdir/software/hwloc/current/version.inc");
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>

<!- ------------------------------------------------------------------ -->

<h2>Git checkout</h2>

<p>Hwloc's Git repository is
<a href="https://github.com/open-mpi/hwloc">hosted at Github</a>.</p>

<p>
The Git repository may be checked out with:
</p>
<pre>
  git clone https://github.com/open-mpi/hwloc
</pre>

<!- ------------------------------------------------------------------ -->

<h2>Online browsing</h2>

<p>
 The Git repository may be
 <a href="https://github.com/open-mpi/hwloc">browsed online</a>.
</p>

<!- ------------------------------------------------------------------ -->

<h2>Branches and tags</h2>

<p>There are three general areas of the source code repository that
will interest most users:

<ul>

<li>The <strong>"master"</strong> branch is generally the head of hwloc development.
This branch is checked out by default when cloning the Git repository.
</li>

<li>Major stable releases are always branched.
For example, the 1.0 series of hwloc will be available
under branch <code>v1.0</code> directory; the 1.1 series is
available under branch <code>v1.1</code>, etc.

<li>Point releases are all tagged.
For example, version 1.0.0 is available
tagged as </code>hwloc-1.0.0</code>, version 2.3.4 is available under
tag <code>hwloc-2.3.4</code>, etc.

</ul>


<?php 
  include_once("$topdir/includes/footer.inc"); 
