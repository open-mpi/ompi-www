<?php
$topdir = "../..";

$title = "MPI Testing Tool (MTT)";
include_once("$topdir/software/mtt/current/version.inc");
include_once("$topdir/projects/mtt/nav.inc");
include_once("$topdir/includes/header.inc");
?>

<p><strong>Current prerelease: <?php print($ver_current); ?></strong></p>

<p>The MPI Testing Tool (MTT) is a general infrastructure for testing
MPI implementations and running performance benchmarks in a
fully-automated fashion, potentially distributed across many different
clusters / environments / organizations, and gathering all the results
back to a central database for analysis.  Several aspects of the MPI
are tested:

<p>
<ol>
<li>Whether the MPI can be successfully installed or not</li>
<li>Whether MPI test programs can be compiled and linked against the
MPI installation</li>
<li>Whether MPI test programs run successfully and/or generate valid
performance results</li>
</ol>
</p>

<p>Although the MTT was initially designed for internal nightly
regression testing of the Open MPI code base, it is not specific to
Open MPI and can be used with any MPI implementation.  The MTT was
designed with the following criteria in mind:</p>

<p>
<ul>
<li> Be freely available to minimize the deployment cost.</li>

<li> Easily incorporate thousands of existing MPI tests and
benchmarks.</li>

<li> Support simultaneous distributed testing across multiple sites,
including operating behind organizational security boundaries (e.g.,
firewalls).</li>

<li> Support on-demand reporting, specialization, and email reports.</li>

<li> Support execution of parallel tests, and therefore also support
a variety of cluster resource managers.</li>

<li> Support running in a fully-automated fashion, such as from
cron.</li>

<li> Support automatically testing a single MPI implementation in a
wide variety of scenarios such as compiling and installing an MPI
implementation with a defined set of compilers and/or compiler
options.</li>

<li> Support automatically running each MPI test application in a
variety of different ways, such as with a defined set of different
options to <code>mpirun</code> / <code>mpiexec</code>.</li>

<li> Support a plug-in framework to easily extend the MTT's
functionality without needing to change the core code of MTT
itself.</li>

<li> Provide a highly flexible MTT test engine executable that is
suitable for a wide variety of different execution environments.</li>

</ul>
</p>

<p><div align=center><hr width=50%></div></p>

<p>The Open MPI Project uses the MTT for all of its nightly regression
testing across all of the members.  Results are submitted to a central
database and <a href="http://mtt.open-mpi.org/")>can be
interactively queried via the Open MPI web site</a>.</p>

<p><div align=center><hr width=50%></div></p>

<p>Currently, much of MTT's documentation is on a wiki; it may move to
this web site someday:

<p>
<ul>

<li><a href="https://github.com/open-mpi/mtt/wiki">The main MTT wiki
site</a></li>

<li><a href="https://github.com/open-mpi/mtt/wiki/MTTOverview">An
overview of what MTT does and how it works</a></li>

<li><a
href="https://github.com/open-mpi/mtt/wiki/MTTINIFileFields">A list
of all available fields in the MTT client configuration file</a></li>

</ul>
</p>

<?php
include_once("$topdir/includes/footer.inc");
