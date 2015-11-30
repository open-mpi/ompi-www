<?php
$topdir = "../..";
$title = "PMI Exascale (PMIx)";
include_once("$topdir/projects/pmix/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<p>The Process Management Interface (PMI) has been used for
quite some time as a means of exchanging wireup information
needed for interprocess communication. Two versions (PMI-1 and PMI-2)
have been released as part of the MPICH effort. While PMI-2 demonstrates
better scaling properties than its PMI-1 predecessor, attaining rapid
launch and wireup of the roughly 1M processes executing across 100k nodes
expected for exascale operations remains challenging. </p>

<p>PMI Exascale (PMIx) represents an attempt to resolve these questions by
providing an extended version of the PMI standard specifically designed to support clusters up
to and including exascale sizes. The overall objective of the project is not to
branch the existing pseudo-standard definitions - in fact, PMIx fully supports
both of the existing PMI-1 and PMI-2 APIs - but rather to (a) augment and extend
those APIs to eliminate some current restrictions that impact scalability,
and (b) provide a reference implementation of the PMI-server that demonstrates
the desired level of scalability. </p>

<h3>Client-side Library</h3>
<p>The client side library is provided as source under the Open MPI's New BSD <a href="../../community/license.php">license</a>. Official releases are available from the PMIx Github repository located <a href="https://github.com/pmix/releases">here</a>. Client library features include:
</p>

<ul>
<li>full PMI-1 and PMI-2 compabibility. Both sets of APIs are provided and supported. Calls to the APIs are translated into PMIx, thus ensuring that these functions receive the same scalability benefits as the native PMIx functions.</li>
<li>use of shared memory to minimize footprint at scale. Data retrieved by calls to PMI_Get are stored by the local PMIx server in a shared memory region accessible by all local processes. Thus, once the data is retrieved the first time, all local processes can immediately access it without further communication.</li>
<li>posting of data as a block. Data "put" by the application will be locally cached by the process until execution of the "commit" API - at that time, all data will be transmitted to the local PMIx server as a single "blob".</li>
<li>retrieval of data as a block instead of item-by-item. Current PMI implementations return a single data element to the requesting process with each call it makes to PMI_Get, thus necessitating repeated communications to obtain all desired data. While minimizing the amount of data locally stored, most MPI processes will (if requesting any data about a peer) eventually query all posted data from that peer. Thus, PMIx anticipates these subsequent requests by obtaining and locally caching in the shared memory region all data posted by a process upon first request for data from that peer.</li>
<li>added functions to support packing/unpacking of binary data. Currently, PMI only supports the transmission of string data. Although binary groupings can be encoded, the encoding process itself consumes both time and memory, thus increasing the volume of data that must be collectively communicated. This was originally done as a means of avoiding the heterogeneous data problem. PMIx, in contrast, provides the required pack/unpack functions to reliably send data between heterogeneous nodes, and a block API for posting and retrieving such blobs.</li>
<li>addition of a non-blocking versions of all APIs so that processes can request operations and continue executing until the request can be satisfied. Notification is provided via the user-provided callback function, which includes delivery of any requested data.</li>
<li>extension of the PMI_Put API to allow the passing of a flag indicating the scope of the data being published:
<ul>
<li>PMIX_LOCAL - the data is intended only for other application processes on the same node. Data marked in this way will not be included in data packages sent to remote requestors</li>
<li>PMIX_REMOTE - the data is intended solely for applications processes on remote nodes. Data marked in this way will not be shared with other processes on the same node</li>
<li>PMIX_GLOBAL - the data is to be shared with all other requesting processes, regardless of location</li>
</ul>
</li>
<li>support for fork/exec of child processes by applications. The PMIx client will provide dynamic connections to the local server, thereby allowing any child process of an application process to also access PMI on its own behalf, if desired. The responsibility for defining any required unique PMI keys for the child is left to the application developer.</li>
<li>thread safety and concurrency</li>
</ul>

<h3>Server Implementation</h3>
<p>We have chosen not to provide a standalone server implementation as the required messaging library would be an unnecessary encumbrance for existing resource managers and MPI implementations. Accordingly, we are providing a reference implementation of the PMIx server system as part of the Open MPI run-time environment (ORTE) and the related Open Resilient Cluster Manager (<a href="https://github.com/orcmteam/orcm">ORCM</a>).

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p>The PMI standard has been the subject of many papers over the
    years, including the one
<a href="http://www.mcs.anl.gov/papers/P1760.pdf">available here</a>. Detailed documentation
on the design of PMIx itself, including the API, is under development on the
<a href="https://github.com/pmix/master/wiki">PMIx wiki page</a>.
</p>

<!------------------------------------------------------------------------->

<h3>Getting and using pmix</h3>

<p> The latest PMIx client releases are available as tarballs on the
<a href="https://pmix.github.io/master">web page</a>. Nightly tarballs
of the developer master are also available on the nightly
<a href="../../software/pmix/nightly/">download page</a>.
Finally, the Github developer repository is accessible for
<a href="https://github.com/pmix/master">online browsing</a>
or checkout</a>.

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to the <a
href="https://groups.google.com/forum/#!forum/pmix">pmix mailing lists</a>, and/or
submitted to the PMIx <a href="https://github.com/pmix/master/issues">bug tracking
system</a>.

<?php
include_once("$topdir/includes/footer.inc");
