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
<p>The client side library is provided as source under the Open MPI's New BSD <a href="../../community/license.php">license</a>. Official releases are expected to be available beginning in late summer of 2014. Meantime, the development master is maintained in the PMIx Github repository located <a href="https://github.com/open-mpi/pmix">here</a>. Client library features include:
</p>

<ul>
<li>full PMI-1 and PMI-2 compabibility. Both sets of APIs are provided and supported. Calls to the APIs are translated into PMIx, thus ensuring that these functions receive the same scalability benefits as the native PMIx functions.</li>
<li>use of shared memory to minimize footprint at scale. Data retrieved by calls to PMI_Get are stored by the local PMIx server in a shared memory region accessible by all local processes. Thus, once the data is retrieved the first time, all local processes can immediately access it without further communication.</li>
<li>posting of data as a block. Data "put" by the application will be locally cached by the process until execution of the "fence" API - at that time, all data will be transmitted to the local PMIx server as a single "blob".</li>
<li>retrieval of data as a block instead of item-by-item. Current PMI implementations return a single data element to the requesting process with each call it makes to PMI_Get, thus necessitating repeated communications to obtain all desired data. While minimizing the amount of data locally stored, most MPI processes will (if requesting any data about a peer) eventually query all posted data from that peer. Thus, PMIx anticipates these subsequent requests by obtaining and locally caching in the shared memory region all data posted by a process upon first request for data from that peer.</li>
<li>extension of the PMI_Get API to allow the passing of a flag to indicate the range of data to be collected. This provides a hint to the PMI system as to the type of data that will be requested in subsequent calls, thus allowing for more efficient and scalable retrieval. Supported flags include:
<ul>
<li>PMIx_GET_PROC - retrieve all data published by the specified process (this is the default behavior)</li>
<li>PMIx_GET_NODE - retrieve all data published by all processes sharing a node with the specified process, including all data published by the process itself</li>
<li>PMIx_GET_APP - retrieve all data published by all processes from the same application as the specified process</li>
<li>PMIx_GET_COMM_WORLD - retrieve all data published by all processes in the same MPI_COMM_WORLD as the specified process</li>
</ul>
Note that only the specified item will be returned by the PMIx_Get call - the flag only tells PMIx to pre-fetch the remaining data as specified.</li>
<li>added functions to support packing/unpacking of binary data. Currently, PMI only supports the transmission of string data. Although binary groupings can be encoded, the encoding process itself consumes both time and memory, thus increasing the volume of data that must be collectively communicated. This was originally done as a means of avoiding the heterogeneous data problem. PMIx, in contrast, provides the required pack/unpack functions to reliably send data between heterogeneous nodes, and a block API for posting and retrieving such blobs.</li>
<li>addition of a non-blocking version of PMI_Get so that processes can request information and continue operations until the request can be satisfied. Notification is provided via the user-provided callback function, which includes delivery of the requested data.</li>
<li>addition of a non-blocking version of PMI_Fence so that processes can post their information and continue operations without waiting for any data exchange to complete. Subsequent calls to the blocking form of PMI_Get will "block" pending availability of the requested data.</li>
<li>extension of the PMI_Put API to allow the passing of a flag indicating the scope of the data being published:
<ul>
<li>PMIx_PUT_LOCAL - the data is intended only for other application processes on the same node. Data marked in this way will not be included in data packages sent to remote requestors</li>
<li>PMIx_PUT_REMOTE - the data is intended solely for applications processes on remote nodes. Data marked in this way will not be shared with other processes on the same node</li>
<li>PMIx_PUT_GLOBAL - the data is to be shared with all other requesting processes, regardless of location</li>
</ul>
</li>
<li>support for fork/exec of child processes by applications. The PMIx client will provide dynamic connections to the local server, thereby allowing any child process of an application process to also access PMI on its own behalf, if desired. The responsibility for defining any required unique PMI keys for the child is left to the application developer.</li>
<li>thread safety and concurrency</li>
</ul>

<h3>Server Implementation</h3>
<p>We have chosen not to provide a standalone server implementation as the required messaging library would be an unnecessary encumbrance for existing resource managers and MPI implementations. Accordingly, we are providing a reference implementation of the PMIx server system as part of the Open MPI run-time environment (ORTE) and the related Open Resilient Cluster Manager (<a href="../../projects/orcm/">ORCM</a>). Features of the server include:
</p>

<ul>
<li>use of Open MPI's BTL transports for movement of data between PMIx servers once these transports complete their scheduled move to the OPAL layer of Open MPI. The server is *not* an MPI process and thus not part of an MPI communicator, but will instead access those transports via ORTE's out-of-band (OOB) interface.</li>
<li>block retrieval/sharing of data. As previously stated, the PMIx server will supply a complete set of data posted by a process upon request for any data from that process. Data is always transmitted as a "blob" - i.e., the entire data package for a given process is sent as one unit in a communication as opposed to separate data-by-data messages.</li>
<li>selectable data distribution methods.
<ul>
<li>block collective - data posted by processes is shared during the "fence" operation via a scalable collective operation. PMIx takes advantage of the rich library of MPI-based collective algorithms and will automatically select the algorithm best suited for the size of the underlying job and the network topology. This includes exploiting any available network collective offload support. Alternatively, users may specify a particular collective algorithm for use by PMIx in place of the automatic selection procedure via the corresponding PMIx_Fence parameter. A system-wide default method can be set by the administrator in place of the automatic selection method, or the administrator can "tune" the selection method by setting appropriate parameters. Note that the server is *not* an MPI process and thus does not directly utilize MPI communications - however, it does exploit the MPI-defined collective communication pattern as the basis of its scalable operations.</li>
<li> on-demand - data posted by processes is held by the local daemon and not automatically circulated to all participating nodes. Requests from application processes for data are received by their local PMIx server and first checked to see if the data for the specified process has already been requested or received. If not, then a request for data posted by the specified process is sent to the PMIx server on the node where that process is located. Once available, the data is sent to the requesting server and made available to its local processes. Note that this distribution method is particularly well-suited to applications with minimal connectivity - e.g., applications using a ring or cartesian communication topology. Applications requiring full connectivity across their peers would enjoy better scalability with the block collective methods described above.</li>
</ul>
Users, of course, may have difficulty deciding on the best data distribution method for thie application. Accordingly, options for specifying the connectivity needs of an application (e.g., --hypercube-connectivity or --ring-connectivity) will be provided for passing a "hint" to the PMIx server as to which distribution method to employ.</li>
<li>full support for MPI-2/3 dynamic operations, including pub/sub and comm_spawn APIs.</li>
</ul>

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p>The PMI standard has been the subject of many papers over the
    years, including the one
<a href="http://www.mcs.anl.gov/papers/P1760.pdf">available here</a>. Detailed documentation
on the design of PMIx itself, including the API, is under development on the
<a href="https://github.com/open-mpi/pmix/wiki">PMIx wiki page</a>.
</p>

<!------------------------------------------------------------------------->

<h3>Getting and using pmix</h3>

<p> When generated, the latest PMIx client releases will be available as tarballs on the
<a href="../../software/pmix/nightly/">download page</a>.
Meantime, the Github repository is accessible for
<a href="https://github.com/open-mpi/pmix">online browsing</a>
or checkout</a>.

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to the <a
href="../../community/lists/pmix.php">pmix mailing lists</a>, and/or
submitted to the PMIx <a href="https://github.com/open-mpi/pmix/issues">bug tracking
system</a>.

<?php
include_once("$topdir/includes/footer.inc");
