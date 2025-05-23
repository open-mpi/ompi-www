<?php
$topdir = "../../..";
$title = "MPI_Graph_map(3) man page (version 3.0.6)";
$meta_desc = "Open MPI v3.0.6 man page: MPI_GRAPH_MAP(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Graph_map </b> - Maps process to graph topology information.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C
Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Graph_map(MPI_Comm comm, int nnodes, const int index[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int edges[], int *newrank)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_GRAPH_MAP(COMM, NNODES, INDEX, EDGES, NEWRANK, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, NNODES, INDEX(*), EDGES(*), NEWRANK, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Graph_map(comm, nnodes, index, edges, newrank, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(IN) :: comm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN) :: nnodes, index(nnodes), edges(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(OUT) :: newrank
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>comm </dt>
<dd>Input communicator (handle). </dd>

<dt>nnodes </dt>
<dd>Number of graph
nodes (integer). </dd>

<dt>index </dt>
<dd>Integer array specifying the graph structure, see
 MPI_Graph_ create. </dd>

<dt>edges </dt>
<dd>Integer array specifying the graph structure.
<p>
</dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newrank </dt>
<dd>Reordered rank of the calling process; MPI_UNDEFINED
if the calling process does not belong to graph (integer). </dd>

<dt>IERROR </dt>
<dd>Fortran
only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
<a href="../man3/MPI_Cart_map.3.php">MPI_Cart_map</a> and MPI_Graph_map
can be used to implement all other topology functions. In general they will
not be called by the user directly, unless he or she is creating additional
virtual topology capability other than that provided by MPI.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost
all MPI routines return an error value; C routines as the value of the
function and Fortran routines in the last argument. C++ functions do not
return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<p>
<a href="../man3/MPI_Cart_map.3.php">MPI_Cart_map</a>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Fortran 2008 Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
