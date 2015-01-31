<?php
  $topdir = "../..";
  $title = "Bug Tracking";

  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/code.inc");
  include_once("$topdir/software/ompi/current/version.inc");
?>

<P>There's three possible places to go from here:

<p>
<ol>

<li> If you have a bug report and/or patch for Open MPI, you should
probably subscribe to the Open MPI <a href="<?php print($topdir);
?>/community/lists/ompi.php">user's list</a> or the <a href="<?php
print($topdir); ?>/community/lists/ompi.php">developer's list</a> and
post it there.</li>

<ul>

<li> Note that if you have a question or a problem and <strong>you're
not sure that it's a real bug report,</strong> please see the <a
href="./">Getting Help</a> page.</li>

<li> If you feel that you do have <strong>a definite bug to
report</strong> but are <strong>unsure which list to post to,</strong>
then post to the user's list.  Alternatively, you can post the bug
directly to our bug tracker (see below), but it's usually a good idea
to initially post it on one of our mailing lists, just to make sure we
don't miss it.</li>

</ul>

<p>

<li> Open MPI uses <a href="https://github.com/open-mpi/ompi">GitHub</a>
for development and bug tracking.

<ul>

<li> You must have a GitHub account (they're free) to file bugs,
comment on bugs, and subscribe to bugs (i.e., be notified when they're
changed).
<ul>

<li> File bugs in the <a
href="https://github.com/open-mpi/ompi/issues">Github issue
tracker</a> on the <code>ompi</code> repository.</li>

<li> Including short reproducer codes is always helpful.  <a
href="https://gist.github.com/">Create a Gist</a> (with your same
Github account) and include its link in the Github issue.</a></li>

</ul>
</li>

<li> <a href="https://github.com/open-mpi/ompi/milestones">List
of active tickets by version</a></li>

<li> <a href="https://github.com/open-mpi/ompi/wiki">Open MPI
developer's wiki</a></li>

<li> <a href="https://github.com/open-mpi/ompi/pulse/weekly">Timeline of
Open MPI events</a></li>

</ul>
</li>

<p>
<li>If you are looking for support or technical help, you should look
at the <a href="./">Getting Help</a> page.</li>

</ol>
</p>

<?php 
  include_once("$topdir/includes/footer.inc"); 
