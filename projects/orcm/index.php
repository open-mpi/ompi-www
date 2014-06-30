<?php
$topdir = "../..";
$title = "Open Resilient Cluster Manager (ORCM)";
include_once("$topdir/projects/orcm/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<p> The Open Resilient Cluster Manager (ORCM) project.</p>

<p>ORCM was originally developed as an open-source project (under the Open MPI license)
   by Ralph Castain while employed at Cisco to provide
   a resilient, 100% uptime run-time environment for enterprise-class routers. Based on the
   Open Run-Time Environment (ORTE) embedded in Open MPI, the system provided launch and
   execution support for processes executing within the router itself
   (e.g., computing routing tables), ensuring that a minimum number of copies of each
   program were always present. Failed processes were relocated based on the concept of
   <i>fault groups</i> - i.e., the grouping of nodes with common failure modes. Thus, ORCM
   attempted to avoid cascade failures by ensuring that processes were not relocated onto
   nodes with a high probability of failing in the immediate future.</p>

<p>The Cisco implementation naturally required a significant amount of monitoring, and
   included the notion of <i>fault prediction</i> as a means of taking pre-emptive action
   to relocate processes prior to their node failing. This was facilitated using an
   analytics framework that allowed users to chain various analysis modules in the
   data pipeline so as to perform <i>in-flight</i> data reduction.<p>

<p>Subsequently, ORCM was extended by Ralph while at Greenplum to serve as a scalable
   monitoring system for Hadoop clusters. While ORCM itself had run on quite a few
   "nodes" in the Cisco router, and its base ORTE platform has been used for years
    on very large clusters involving many thousands of nodes, this was the first time
    the ORCM/ORTE platform had been used solely as a system state-of-health monitor with no responsibility
    for process launch or monitoring. Instead, ORCM was asked to provide a resilient, scalable
    monitoring capability that tracked process resource utilization and node state-of-health,
    collecting all the data in a database for subsequent analysis. Sampling rates were low
    enough that in-flight data reduction was not required, nor was fault prediction considered
    to be of value in the Hadoop paradigm.</p>

<p>Throughout this time, ORCM has retained ORTE's ability to perform scalable launch and
   process monitoring, and ORTE's support for a variety of scheduling environments. We are
   now in the process of validating and extending ORCM to provide both monitoring and
   launch support for exascale environments.</p>

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p>Detailed documentation on the design of ORCM itself is under development on the
<a href="https://svn.open-mpi.org/trac/orcm/">ORCM wiki page</a>.
</p>


<!------------------------------------------------------------------------->

<h3>Getting and using ORCM</h3>

<p> There are no ORCM releases at this time.
The GIT repository is accessible for
<a href="http://github.com/open-mpi/orcm">online browsing
or checkout</a></p>.

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to <a
href="../../community/lists/orcm.php">ORCM mailing lists</a>. Passing
<tt>--enable-debug</tt> to <tt>./configure</tt> also enables a lot of
helpful debugging information.</p>

<p>Also be sure to see the <a
href="https://svn.open-mpi.org/trac/orcm/">ORCM wiki and bug tracking
system</a>.</a>

<?php
include_once("$topdir/includes/footer.inc");
