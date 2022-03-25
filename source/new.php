<?php
$topdir = "..";
$title = "What's new in Git vs. the current release?";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
include_once("$topdir/includes/curl_get.inc");
include_once("warning.inc");
?>

<p>This page describes what is new in Git that is not yet
available in a stable release.  More specifically, it provides a link
to the "NEWS" file that is included in Open MPI distributions.  This
file provides short bullets describing user-visible changes in Open
MPI between versions.

<p>The NEWS file at the head of our development (i.e., the Git
"main" branch) is kept up-to-date with changes both on the main and
all release branches.  The Open MPI team starts a new section in NEWS
immediately after each release and keeps it up-to-date as changes are
made in the repository.  Hence, checking this file will show he
high-level changes that are available in each version -- even versions
that are not yet available as stable releases.

<p> Here is the current NEWS file from the Git main branch (<?php
print("<a href=\"https://github.com/open-mpi/ompi/blob/main/NEWS\">"); ?>also
available here</a>):

<?php
$str = do_curl_get("https://raw.githubusercontent.com/open-mpi/ompi/main/NEWS");
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc");
