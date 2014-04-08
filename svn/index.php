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
(and bug fixes) in our internal Subversion tree that some users have
asked for access to.  Additionally, for those who are actually develop
with the internals Open MPI, Subversion access gives the most
up-to-date versions rather than the periodic tarball access.  As such,
the Open MPI Team has decided to provide read-only access to the Open
MPI Subversion tree.</p>

<P> Be aware, however, that the head of the development code tree is
<em>not</em> guaranteed to be stable.  For the most part, we try very
hard to not commit things that are broken, but this is an active
development tree -- bugs happen.  This is actually another major
reason that this tree has been made available: peer review.  If you
find any bugs, <em>please</em> report them!  <a href="<?php
print("$topdir/community/lists/"); ?>">Contributions,
suggestions, and comments are welcome</a>.</p>

<P> The Subversion "trunk" is the current development version of
Open MPI.  It is generally where new Open MPI work is done.</p>

<P> There are three ways to access the Open MPI repository:</p>

<ol>

<li> <a href="obtaining.php">Perform an anonymous Subversion
checkout</a> of the source code.  Then see <a
href="building.php">these instructions</a> for how to build and intall
from the checkout.<br>

<strong><font color=green>Advantage:</font></strong> You'll easily be
able to keep up with the latest source code using normal Subversion
commands (e.g., '<code>svn up</code>').<br>
<strong><font color=red>Disadvantage:</font></strong> You need to have
<a href="building.php">several tools installed</a> to compile Open
MPI from a developer checkout.</li>

<br>

<li> <a href="mercurial.php">Clone the Open MPI Mercurial mirror of
the Subversion repository</a>.  Then see <a href="building.php">these
instructions</a> for how to build and intall from the clone.<br>

<strong><font color=green>Advantage:</font></strong> Good for third
parties who want to fork Open MPI but still keep up with Open MPI
development.<br>

<strong><font color=red>Disadvantage:</font></strong> You need to have
<a href="building.php">several tools installed</a> to compile Open
MPI from a developer checkout.</li>

<br>

<li> <a href="<?php print("$topdir/nightly/"); ?>">Download a nightly
Subversion snapshot tarball</a>.  Then see the <a href="<?php
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
  include_once("$topdir/includes/footer.inc"); 
