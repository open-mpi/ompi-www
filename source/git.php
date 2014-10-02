<?php
$topdir = "..";
$title = "Source Code Access: Obtaining a Git Clone";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
include_once("warning.inc");
?>

<p>Open MPI's Git repositories are hosted at <a
href="https://github.com/">GitHub</a>.</p>

<ol>

<li>First, you will need a Git client.  We recommend getting the
latest version available.  If you do not have the command
"<code>git</code>" in your path, you will likely need to download and
install Git.</li>

<li> Open MPI has two repositories at Github:
<ol>

<li> <a href="https://github.com/open-mpi/ompi">ompi</a>: This is the
main Open MPI repository where most active development is done.</li>

<li> <a
href="https://github.com/open-mpi/ompi-release">ompi-release</a>: This
repo contains all the Open MPI release branches (i.e., from which
official distribution tarballs are made).  There are Git tags on the
branches in this repo that indicate where official tarballs were made
(e.g., "v1.8.3" is the tag corresponding to the Open MPI v1.8.3
release).</li> </ol>

</ul>


<li>Clone either of these repositories.  For example (as of October
2014), to clone the main development repository via HTTPS:

<?php print_code("<strong>shell$</strong> git clone https://github.com/open-mpi/ompi.git
Cloning into 'ompi'...
remote: Counting objects: 256644, done.
remote: Total 256644 (delta 0), reused 0 (delta 0)
Receiving objects: 100% (256644/256644), 61.98 MiB | 2.15 MiB/s, done.
Resolving deltas: 100% (213377/213377), done.
Checking connectivity... done.
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
  include_once("$topdir/source/svn-read-only-mirror-eol.php");
  include_once("$topdir/includes/footer.inc");
