<?php
$topdir = "../../..";
$title = "MPI_Allgatherv(3) man page (version 1.7.4)";
$meta_desc = "Open MPI v1.7.4 man page: MPI_ALLGATHERV(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Allgatherv, <a href="../man3/MPI_Iallgatherv.3.php">MPI_Iallgatherv</a></b> - Gathers data from all processes
and delivers it to all. Each process may contribute a different amount of
data.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Allgatherv(const void *sendbuf, int sendcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype sendtype, void *recvbuf, const int recvcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int displs[], MPI_Datatype recvtype, MPI_Comm comm)
int <a href="../man3/MPI_Iallgatherv.3.php">MPI_Iallgatherv</a>(const void *sendbuf, int sendcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype sendtype, void *recvbuf, const int recvcounts[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int displs[], MPI_Datatype recvtype, MPI_Comm comm,
        MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_ALLGATHERV(SENDBUF, SENDCOUNT, SENDTYPE, RECVBUF,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVCOUNT, DISPLS, RECVTYPE, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNT, SENDTYPE, RECVCOUNT(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;DISPLS(*), RECVTYPE, COMM, IERROR
<a href="../man3/MPI_Iallgatherv.3.php">MPI_IALLGATHERV</a>(SENDBUF, SENDCOUNT, SENDTYPE, RECVBUF,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVCOUNT, DISPLS, RECVTYPE, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNT, SENDTYPE, RECVCOUNT(*),
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;DISPLS(*), RECVTYPE, COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Comm::Allgatherv(const void* sendbuf, int sendcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI::Datatype&amp; sendtype, void* recvbuf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int recvcounts[], const int displs[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI::Datatype&amp; recvtype) const = 0
</pre>
<h2><a name='sect5' href='#toc5'>Java Syntax</a></h2>
<br>
<pre>import mpi.*;
void MPI.COMM_WORLD.Allgatherv(Object sendbuf, int sendoffset, int sendcount,
MPI.Datatype sendtype,
                               Object recvbuf, int recvoffset, int *recvcount,
int *displs,
                               Datatype recvtype)
</pre>
<h2><a name='sect6' href='#toc6'>Input Parameters</a></h2>

<dl>

<dt>sendbuf     </dt>
<dd>Starting address of send buffer (choice). </dd>

<dt>sendoffset
    </dt>
<dd>Number of elements to skip at beginning of buffer (integer, Java-only).
</dd>

<dt>sendcount     </dt>
<dd>Number of elements in send buffer (integer). </dd>

<dt>sendtype
</dt>
<dd>Datatype of send buffer elements (handle). </dd>

<dt>recvoffset     </dt>
<dd>Number of elements
to skip at beginning of buffer (integer, Java-only). </dd>

<dt>recvcount     </dt>
<dd>Integer
array (of length group size) containing the number of elements that are
received from each process. </dd>

<dt>displs     </dt>
<dd>Integer array (of length group size).
Entry i specifies the displacement (relative to recvbuf) at which to place
the incoming data from process i. </dd>

<dt>recvtype     </dt>
<dd>Datatype of receive buffer
elements (handle). </dd>

<dt>comm     </dt>
<dd>Communicator (handle). <p>
</dd>
</dl>

<h2><a name='sect7' href='#toc7'>Output Parameters</a></h2>

<dl>

<dt>recvbuf
    </dt>
<dd>Address of receive buffer (choice). </dd>

<dt>request </dt>
<dd>Request (handle, non-blocking
only). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect8' href='#toc8'>Description</a></h2>
MPI_Allgatherv
is similar to <a href="../man3/MPI_Allgather.3.php">MPI_Allgather</a> in that all processes gather data from all
other processes, except that each process can send a different amount of
data. The block of data sent from the jth process is received by every process
and placed in the jth block of the buffer  <i>recvbuf.</i> <p>
The type signature associated
with sendcount, sendtype, at process j must be equal to the type signature
associated with recvcounts[j], recvtype at any other process.  <p>
The outcome
is as if all processes executed calls to       <br>
<pre><a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>(sendbuf,sendcount,sendtype,recvbuf,recvcount,
            displs,recvtype,root,comm)
</pre><p>
for root = 0 , ..., n-1. The rules for correct usage of MPI_Allgatherv are easily
found from the corresponding rules for <a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>.
<p>
<h2><a name='sect9' href='#toc9'>Use of In-place Option</a></h2>
When
the communicator is an intracommunicator, you can perform an all-gather
operation in-place (the output buffer is used as the input buffer).  Use
the variable MPI_IN_PLACE as the value of <i>sendbuf</i>.  In this case, <i>sendcount</i>
and <i>sendtype</i> are ignored.  The input data of each process is assumed to
be in the area where that process would receive its own contribution to
the receive buffer.  Specifically, the outcome of a call to <a href="../man3/MPI_Allgather.3.php">MPI_Allgather</a>
that used the in-place option is identical to the case in which all processes
executed <i>n</i> calls to <p>
<br>
<pre>   <a href="../man3/MPI_Gatherv.3.php">MPI_GATHERV</a> ( MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, recvbuf,
   recvcounts, displs, recvtype, root, comm )
for root =0, ... , n-1.
</pre><p>
Note that MPI_IN_PLACE is a special kind of value; it has the same restrictions
on its use as MPI_BOTTOM. <p>
Because the in-place option converts the receive
buffer into a send-and-receive buffer, a Fortran binding that includes INTENT
must mark these as INOUT, not OUT.    <p>

<h2><a name='sect10' href='#toc10'>When Communicator is an Inter-communicator</a></h2>
<p>
When
the communicator is an inter-communicator, the gather operation occurs in
two phases.  The data is gathered from all the members of the first group,
concatenated, and received by all the members of the second group.  Then
the data is gathered from all the members of the second group, concatenated,
and received by all the members of the first.  The send buffer arguments
in the one group must be consistent with the receive buffer arguments in
the other group, and vice versa.  The operation must exhibit symmetric,
full-duplex behavior.   <p>
The first group defines the root process.  The root
process uses MPI_ROOT as the value of <i>root</i>.  All other processes in the
first group use MPI_PROC_NULL as the value of <i>root</i>.  All processes in the
second group use the rank of the root process in the first group as the
value of <i>root</i>. <p>
When the communicator is an intra-communicator, these groups
are the same, and the operation occurs in a single phase. <p>

<p>
<h2><a name='sect11' href='#toc11'>Errors</a></h2>
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
<h2><a name='sect12' href='#toc12'>See Also</a></h2>
<p>
<a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a> <br>
<a href="../man3/MPI_Allgather.3.php">MPI_Allgather</a> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Java Syntax</a></li>
<li><a name='toc6' href='#sect6'>Input Parameters</a></li>
<li><a name='toc7' href='#sect7'>Output Parameters</a></li>
<li><a name='toc8' href='#sect8'>Description</a></li>
<li><a name='toc9' href='#sect9'>Use of In-place Option</a></li>
<li><a name='toc10' href='#sect10'>When Communicator is an Inter-communicator</a></li>
<li><a name='toc11' href='#sect11'>Errors</a></li>
<li><a name='toc12' href='#sect12'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
