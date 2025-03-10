<?php
$topdir = "../../..";
$title = "MPI_Dist_graph_neighbors_count(3) man page (version 2.1.6)";
$meta_desc = "Open MPI v2.1.6 man page: MPI_DIST_GRAPH_NEIGHBORS_COUNT(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Dist_graph_neighbors_count </b> - Returns the number of in and
out edges for the calling processes in a distributed graph topology and
a flag indicating whether the distributed graph is weighted.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Dist_graph_neighbors_count(MPI_Comm comm, int *indegree,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int *outdegree, int *weighted)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_DIST_GRAPH_NEIGHBORS_COUNT(COMM, INDEGREE, OUTDEGREE, WEIGHTED, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, INDEGREE, OUTDEGREE, IERROR
        LOGICAL WEIGHTED
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>comm </dt>
<dd>Communicator with distributed graph topology (handle).

<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>indegree </dt>
<dd>Number of edges into this process (non-negative
integer). </dd>

<dt>outdegree </dt>
<dd>Number of edges out of this process (non-negative integer).
</dd>

<dt>weighted </dt>
<dd>False if MPI_UNWEIGHTED was supplied during creation, true otherwise
(logical). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
MPI_Dist_graph_neighbors_count
and <a href="../man3/MPI_Graph_neighbors.3.php">MPI_Graph_neighbors</a> provide adjacency information for a distributed
graph topology. MPI_Dist_graph_neighbors_count returns the number of sources
and destinations for the calling process.
<p>
<h2><a name='sect7' href='#toc7'>Errors</a></h2>
Almost all MPI routines
return an error value; C routines as the value of the function and Fortran
routines in the last argument. <p>
Before the error value is returned, the current
MPI error handler is called. By default, this error handler aborts the MPI
job, except for I/O function errors. The error handler may be changed with
<a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
may be used to cause error values to be returned. Note that MPI does not
guarantee that an MPI program can continue past an error.
<p>
<h2><a name='sect8' href='#toc8'>See Also</a></h2>
<p>
<a href="../man3/MPI_Dist_graph_neighbors.3.php">MPI_Dist_graph_neighbors</a>
<p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameters</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Errors</a></li>
<li><a name='toc8' href='#sect8'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
