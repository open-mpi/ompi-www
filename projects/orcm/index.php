<?php
$topdir = "../..";
$title = "Open Resilient Cluster Manager (ORCM)";
include_once("$topdir/projects/orcm/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<p>ORCM was originally developed as an open-source project (under the Open MPI license)
   by Cisco Systems, Inc to provide
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

<p>Subsequently, ORCM was extended by Greenplum to serve as a scalable
   monitoring system for Hadoop clusters. While ORCM itself had run on quite a few
   "nodes" in the Cisco router, and its base ORTE platform has been used for years
    on very large clusters involving many thousands of nodes, this was the first time
    the ORCM/ORTE platform had been used solely as a system state-of-health monitor with no responsibility
    for process launch or monitoring. Instead, ORCM was asked to provide a resilient, scalable
    monitoring capability that tracked process resource utilization and node state-of-health,
    collecting all the data in a database for subsequent analysis. Sampling rates were low
    enough that in-flight data reduction was not required, nor was fault prediction considered
    to be of value in the Hadoop paradigm.</p>

<p>However, data flows did require introduction of an <i>aggregator</i> role. Aggregators absorb the data
   sent by other nodes and can either store the data in a database, analyze the data, or both. The objective
   of the aggregator is primarily to concentrate the database operations, thus minimizing the number of
   active connections to the database itself.</p>

<p>Throughout this time, ORCM has retained ORTE's ability to perform scalable launch and
   process monitoring, and ORTE's support for a variety of scheduling environments. We are
   now in the process of validating and extending ORCM to provide both monitoring and
   launch support for exascale environments.</p>

<!------------------------------------------------------------------------->

<h3>Core Features</h3>

<ul>
<li>Plugin architecture based on Open MPI's Module Component Architecture (MCA)
<ul>
<li>Sophisticated auto-select algorithms based on system size, available resources</li>
<li>Binary proprietary plugin support</li>
<li>On-the-fly updates for maintenance*</li>
<li>Addition of new plugin capabilities/features without requiring system-wide restart if compatibility requirements are met</li>
</ul>
</li>
<li>Hardware discovery support
<ul>
<li>Automatic reporting of hardware inventory on startup</li>
<li>Automatic updating upon node removal and replacement</li>
</ul>
<li>Provisioning support
<ul>
<li>Images provisioned based on user directive prior to launch*</li>
</ul>
<li>Scalable overlay network
<ul>
<li>Supports multiple topologies, including both tree and mesh plugins</li>
<li>Automatic route failover and restoration, messages cached pending comm recovery</li>
<li>Both in-band and out-of-band transports with auto-failover between them</li>
</ul>
</li>
<li>Sensors
<ul>
<li>Both push and pull models supported</li>
<li>Read as a group at regular intervals according to a specified rate, or individual sensors can be read at their own regular interval, or individual readings of any combination of sensors can be polled upon request</li>
<ul><li>Polling requests can return information directly to the caller, or can include the reading in the next database update, as specified by the caller</li></ul>
<li>Data collected locally and sent to an aggregator for recording into a database at specified time intervals</li>
</li>
<li>Environment sensors</li>
<ul>
<li>Processor temperature - on-board sensor for reading processor temperatures when coretemp kernel module loaded</li>
<li>Processor frequency - on-board sensor for reading processor frequencies. Requires read access to /sys/devices/system/cpu directory</li>
<li>IPMI readings of AC power, cabinet temperature, water and air temperatures, etc.</li>
<li>Processor power - reading processor power from on-board MSR. Only supported for Intel SandyBridge, IvyBridge, and Haswell processors</li>
</ul>
<li>Resource utilization</li>
<ul>
<li>Wide range of process and node-level resource utilization, including memory, cpu, network I/O, and disk I/O</li>
</ul>
<li>Process failure</li>
<ul>
<li>Monitors specified file(s) for programmatic access within specified time intervals and/or file size restrictions</li>
<li>Heartbeat monitoring</li>
</ul>
</ul>
<li>Analytics*
<ul>
<li>Supports in-flight reduction of sensor data</li>
<li>User-defined workflows for data analysis using available plugins connected in user-defined chains</li>
<li>Analysis chain outputs can be included in database reporting or sent to requestor at user direction</li>
<li>Plugins can support event and alert generation</li>
<li>"Tap" plugin directs copied stream of selected data from specified point to remote requestor</li>
<li>Chains can be defined at any aggregation point in system</li>
</ul>
<li>Database
<ul>
<li>Both raw and processed data can be stored in one or more databases</li>
<li>Supports both SQL and non-SQL* databases</li>
<ul>
<li>Multiple instances of either type can be used in parallel*</li>
<li>Target database for different data sources and/or types can be specified using MCA parameters during configure and startup, and can be altered by command during operation*</li>
</ul>
</li>
<li>Cross-data correlation maintained
<ul>
<li>Relationship between job, sensor, and performance data tracked and linked for easy retrieval*</li>
</ul>
</li>
</ul>
</li>
<li>Scalable launch
<ul>
<li>Distributed mapping system to minimize data transmission of launch commands*</li>
<li>Rapid MPI wireup
<ul>
<li>Endpoint management and support for static endpoints, enabling communication upon init</li>
<li><a href="../pmix/index.php">PMIx</a> wireup support for unmanaged environments*</li>
</ul>
</li>
<li>Automatic pre-positioning of dynamic libraries*</li>
<li>Pre-loading of libraries and data by user directive*</li>
</ul>
</li>
<li>Fault Tolerance
<ul>
<li>Self-healing communication system (see above)</li>
<li>Non-heartbeat detection of node failures</li>
<li>Automatic state recovery based on retrieval of state information from peers*</li>
<li>Support for time-based checkpoint of applications*</li>
<li>Burst buffer management for rapid checkpoint/restart*</li>
</ul>
</li>
</ul>

<p>*indicates areas of development</p>

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p>Detailed documentation on the design of ORCM itself is under development on the
<a href="https://github.com/open-mpi/orcm/wiki">ORCM wiki page</a>.
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
href="https://github.com/open-mpi/orcm">ORCM wiki and bug tracking
system</a>.</a>

<?php
include_once("$topdir/includes/footer.inc");
