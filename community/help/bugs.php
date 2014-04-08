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

<li> Open MPI uses <a href="http://trac.edgewall.org/">Trac</a> to
maintain a list of bugs, etc.

<ul>

<li> You can <a href="https://svn.open-mpi.org/trac/ompi/register">
register for an account on our Trac system</a>.  Having a Trac
account allows you to file bugs, add comments to existing bugs, add
yourself as a CC to bugs (to see when they are updated), etc.</li>

<li> <a href="https://svn.open-mpi.org/trac/ompi/report/2">List
of active tickets by version</a></li>

<li> <a href="https://svn.open-mpi.org/trac/ompi/wiki">Open MPI
developer's wiki</a></li>

<li> <a href="https://svn.open-mpi.org/trac/ompi/timeline">Timeline of
Open MPI Trac events</a></li>

</ul>
</li>

<p>
<li>If you are looking for support or technical help, you should look
at the <a href="./">Getting Help</a> page.</li>

</ol>
</p>

<?php 
  include_once("$topdir/includes/footer.inc"); 
