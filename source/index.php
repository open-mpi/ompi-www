<?php
  $topdir = "..";
  $title = "Source Code Access";
  include_once("nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("warning.inc");
?>

<p>Because the Open MPI Team tries very hard to release stable and
as-bug-free-as-possible distributions, we tend to take a long time
between major releases.  However, there are many useful new features
(and bug fixes) in our internal Git tree that some users have
asked for access to.  Additionally, for those who are actually develop
with the internals Open MPI, Git access gives the most
up-to-date versions rather than the periodic tarball access.  As such,
the Open MPI Team has decided to provide read-only access to the Open
MPI Git tree.</p>

<P> Be aware, however, that the head of the development code tree is
<em>not</em> guaranteed to be stable.  For the most part, we try very
hard to not commit things that are broken, but this is an active
development tree -- bugs happen.  This is actually another major
reason that this tree has been made available: peer review.  If you
find any bugs, <em>please</em> report them!  <a href="<?php
print("$topdir/community/lists/"); ?>">Contributions,
suggestions, and comments are welcome</a>.</p>

<P> The Git "master" branch is the current development version of
Open MPI.  It is generally where new Open MPI work is done.</p>

<p> There are multiple ways to get access to Open MPI's source code:

<ol>

<li> <a href="https://github.com/open-mpi/ompi">Clone the main Open
MPI Git repo at GitHub</a>.  The main development work occurs on the
"master" branch in this repo.

<br>

<strong><font color=green>Advantage:</font></strong> You'll easily be
able to keep up with the latest source code using normal Git
commands (e.g., '<code>git pull --rebase</code>').<br>
<strong><font color=red>Disadvantage:</font></strong> You need to have
<a href="building.php">several tools installed</a> to compile Open
MPI from a developer checkout.</li>

<br>

<li> <a href="https://github.com/open-mpi/ompi-release">Clone the
"ompi-release" Open MPI Git repo at GitHub</a>.  This repo holds the
release branches for Open MPI (i.e., the branches that are used to
make official distribution tarballs).

<br>

<strong><font color=green>Advantage:</font></strong> You'll easily be
able to keep up with the latest source code using normal Git
commands (e.g., '<code>git pull --rebase</code>').<br>
<strong><font color=red>Disadvantage:</font></strong> You need to have
<a href="building.php">several tools installed</a> to compile Open
MPI from a developer checkout.</li>

<br>

<li> <a href="<?php print("$topdir/nightly/"); ?>">Download a nightly
snapshot tarball</a>.  Then see the <a href="<?php
print($topdir); ?>/faq/?category=building">Building Open MPI</a>
section of the FAQ for instructions on how to build and install
it.<br>

<strong><font color=green>Advantage:</font></strong> You need no
extra tools to compile and install Open MPI.<br>
<strong><font color=red>Disdvantage:</font></strong> You cannot easily
keep up with the latest source code; you'll need to download a new
tarball each time you want to update.

</ol>

<?php
  include_once("$topdir/source/svn-read-only-mirror-eol.php");
  include_once("$topdir/includes/footer.inc"); 
