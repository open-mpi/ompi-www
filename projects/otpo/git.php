<?php
$topdir = "../..";
$title = "Source Code Access: Obtaining a Git Clone";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>

<p>Open MPI's Git repositories are hosted at <a
href="https://github.com/">GitHub</a>.</p>

<ol>

<li>First, you will need a Git client.  We recommend getting the
latest version available.  If you do not have the command
"<code>git</code>" in your path, you will likely need to download and
install Git.</li>

<li> <a href="https://github.com/open-mpi/otpo">OTPO is hosted at
GitHub</a>.

<li>Clone this repository.  For example (as of October 2014), to clone
the main development repository via HTTPS:

<?php print_code("<strong>shell$</strong> git clone https://github.com/open-mpi/otpo.git
Cloning into 'otpo'...
remote: Counting objects: 1101, done.
remote: Total 1101 (delta 0), reused 0 (delta 0)
Receiving objects: 100% (1101/1101), 3.51 MiB | 758.00 KiB/s, done.
Resolving deltas: 100% (557/557), done.
Checking connectivity... done.
<strong>shell$</strong>"); ?>
</li>

<li>The web interface available by clicking on the above URL shows a
nice summary of recent activity and allows navigating into individual
commits.</li>

</ol>

<p>Note that Git is natively capable of using many forms of web
proxies.  If your network setup requires the user of a web proxy,
<?php print("<a href=\"http://git-scm.com/\">"); ?>consult the Git
documentation for more details</a>.

<?php
  include_once("$topdir/includes/footer.inc");
