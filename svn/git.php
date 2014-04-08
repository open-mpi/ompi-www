<?php
$topdir = "..";
$title = "Source Code Access: Obtaining a Git Clone";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
include_once("warning.inc");
?>

<p>Open MPI provides a official mirror of its entire public Subversion
tree (including all tags and branches) in a <?php
print("<a href=\"http://git-scm.com/\">"); ?>Git</a>
repository.  It is updated at least once an hour.  The mirror is "one-way" --
pushing upstream is disallowed.  This repository is mainly for third
parties who want to fork Open MPI but want a convenient mechanism to
stay up-to-date with Open MPI's development.</p>

<div align="center">
<p><em>If you are a general Open MPI developer and simply want to use
Git instead of Subversion, <?php
print("<a href=\"https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial\">");
?>see this wiki page</a> for instructions on how to use Git to
push and pull from the main Subversion repository.</em></p>
</div>

<ol>

<li>First, you will need a Git client.  We recommend getting the
latest version available.  If you do not have the command
"<code>git</code>" in your path, you will likely need to download and
install Git.</li>

<li>The Open MPI Git SVN mirror is hosted at github.com: <a
href="https://github.com/open-mpi/ompi-svn-mirror">https://github.com/open-mpi/ompi-svn-mirror</a>.

<li>Use the above URL with the "git clone" command to clone the
repository.  For example (as of Aug 2012):

<?php print_code("<strong>shell$</strong> git clone https://github.com/open-mpi/ompi-svn-mirror.git
Cloning into 'ompi-svn-mirror'...
remote: Counting objects: 222060, done.
remote: Compressing objects: 100% (36725/36725), done.
remote: Total 222060 (delta 184894), reused 221293 (delta 184278)
Receiving objects: 100% (222060/222060), 52.91 MiB | 819 KiB/s, done.
Resolving deltas: 100% (184894/184894), done.
Checking out files: 100% (6783/6783), done.
<strong>shell$</strong>"); ?>
</li>

<li>The web interface available by clicking on the above URL shows a
nice summary of recent activity and allows navigating into individual
commits.</li>

<li><font color=red>Once you have successfully cloned the repository,
continue on to the <a href="building.php">instructions on how to build
from a developer checkout</a>.</font></li>

</ol>

<p>Note that Git is natively capable of using many forms of web
proxies.  If your network setup requires the user of a web proxy,
<?php print("<a href=\"http://git-scm.com/\">"); ?>consult the Git
documentation for more details</a>.

<?php 
  include_once("$topdir/includes/footer.inc"); 
