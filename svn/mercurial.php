<?php
$topdir = "..";
$title = "Source Code Access: Obtaining a Mercurial Clone";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
include_once("warning.inc");
?>

<p>Open MPI provides a official mirror of its entire public Subversion
tree (including all tags and branches) in a <?php
print("<a href=\"http://mercurial.selenic.com/\">"); ?>Mercurial</a>
repository.  It is updated at least once an hour.  The mirror is "one-way" --
pushing upstream is disallowed.  This repository is mainly for third
parties who want to fork Open MPI but want a convenient mechanism to
stay up-to-date with Open MPI's development.</p>

<div align="center">
<p><em>If you are a general Open MPI developer and simply want to use
Mercurial instead of Subversion, <?php
print("<a href=\"https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial\">");
?>see this wiki page</a> for instructions on how to use Mercurial to
push and pull from the main Subversion repository.</em></p>
</div>

<ol>

<li>First, you will need a Mercurial client.  We recommend getting the
latest version available.  If you do not have the command
"<code>hg</code>" in your path, you will likely need to download and
install Mercurial.</li>

<li>The Open MPI Mercurial SVN mirror is hosted at Atlassian
Bitbucket: <a
href="https://bitbucket.org/ompiteam/ompi-svn-mirror">https://bitbucket.org/ompiteam/ompi-svn-mirror</a>.  

<li>Use the above URL with the "hg clone" command to clone the
repository.  For example (as of August, 2012):

<?php print_code("<strong>shell$</strong> hg clone https://bitbucket.org/ompiteam/ompi-svn-mirror
requesting all changes
adding changesets
adding manifests
adding file changes
added 20505 changesets with 118541 changes to 23927 files (+11 heads)
updating to branch default
6784 files updated, 0 files merged, 0 files removed, 0 files unresolved
<strong>shell$</strong>"); ?>
</li>

<li>The web interface available by clicking on the above URL shows a
nice summary of recent activity and allows navigating into individual
commits.</li>

<li><font color=red>Once you have successfully cloned the repository,
continue on to the <a href="building.php">instructions on how to build
from a developer checkout</a>.</font></li>

</ol>

<p>Note that Mercurial is natively capable of using many forms of web
proxies.  If your network setup requires the user of a web proxy,
<?php print("<a href=\"http://mercurial.selenic.com/\">"); ?>consult the
Mercurial documentation for more details</a>.

<?php 
  include_once("$topdir/includes/footer.inc"); 
