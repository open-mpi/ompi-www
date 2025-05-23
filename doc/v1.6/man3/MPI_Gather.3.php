<?php
$topdir = "../../..";
$title = "MPI_Gather(3) man page (version 1.6.4)";
$meta_desc = "Open MPI v1.6.4 man page: MPI_GATHER(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Gather</b> - Gathers values from a group of processes.
<p>
<h2><a name='sect1' href='#toc1'>Synopsis</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Gather(void *sendbuf, int sendcount, MPI_Datatype sendtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void *recvbuf, int recvcount, MPI_Datatype recvtype, int root,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Comm comm)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_GATHER(SENDBUF, SENDCOUNT, SENDTYPE, RECVBUF, RECVCOUNT,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVTYPE, ROOT, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNT, SENDTYPE, RECVCOUNT, RECVTYPE, ROOT
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Comm::Gather(const void* sendbuf, int sendcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI::Datatype&amp; sendtype, void* recvbuf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int recvcount, const MPI::Datatype&amp; recvtype, int root,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const = 0
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Starting address of send buffer (choice). </dd>

<dt>sendcount
</dt>
<dd>Number of elements in send buffer (integer). </dd>

<dt>sendtype </dt>
<dd>Datatype of send buffer
elements (handle). </dd>

<dt>recvcount </dt>
<dd>Number of elements for any single receive (integer,
significant only at root). </dd>

<dt>recvtype </dt>
<dd>Datatype of recvbuffer elements (handle,
significant only at root). </dd>

<dt>root </dt>
<dd>Rank of receiving process (integer). </dd>

<dt>comm
</dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>recvbuf </dt>
<dd>Address of receive buffer
(choice, significant only at root). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).

<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
Each process (root process included) sends the contents of
its send buffer to the root process. The root process receives the messages
and stores them in rank order. The outcome is as if each of the n processes
in the group (including the root process) had executed a call to
<p>
<br>
<pre>    <a href="../man3/MPI_Send.3.php">MPI_Send</a>(sendbuf, sendcount, sendtype, root, ...)
</pre><p>
and the root had executed n calls to  <p>
<br>
<pre>    <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(recfbuf + i * recvcount * extent(recvtype),
&nbsp;             recvcount, recvtype, i, ...)
</pre><p>
where extent(recvtype) is the type extent obtained from a call to <a href="../man3/MPI_Type_extent.3.php">MPI_Type_extent</a>().
            <p>
An alternative description is that the n messages sent by the
processes in the group are concatenated in rank order, and the resulting
message is received by the root as if by a call to <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(recvbuf, recvcount
* n, recvtype, . . . ).  <p>
The receive buffer is ignored for all nonroot processes.
 <p>
General, derived datatypes are allowed for both sendtype and recvtype.
The type signature of sendcount, sendtype on process i must be equal to
the type signature of recvcount, recvtype at the root. This implies that
the amount of data sent must be equal to the amount of data received, pairwise
between each process and the root. Distinct type maps between sender and
receiver are still allowed. <p>
All arguments to the function are significant
on process root, while on other processes, only arguments sendbuf, sendcount,
sendtype, root, comm are significant. The arguments root and comm must have
identical values on all processes.  <p>
The specification of counts and types
should not cause any location on the root to be written more than once.
Such a call is erroneous.  <p>
Note that the recvcount argument at the root
indicates the number of items it receives from each process, not the total
number of items it receives. <p>
<b>Example 1:</b>  Gather 100 ints from every process
in group to root. <p>
<br>
<pre>  MPI_Comm comm;
      int gsize,sendarray[100];
      int root, *rbuf;
      ...
      <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>( comm, &amp;gsize);
      rbuf = (int *)malloc(gsize*100*sizeof(int));
      MPI_Gather( sendarray, 100, MPI_INT, rbuf, 100, MPI_INT, root, comm);

</pre><p>
<br>
<b>Example 2:</b> Previous example modified -- only the root allocates memory for
the receive buffer. <p>
<br>
<pre>  MPI_Comm comm;
      int gsize,sendarray[100];
      int root, myrank, *rbuf;
      ...
      <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>( comm, myrank);
      if ( myrank == root) {
         <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>( comm, &amp;gsize);
         rbuf = (int *)malloc(gsize*100*sizeof(int));
         }
      MPI_Gather( sendarray, 100, MPI_INT, rbuf, 100, MPI_INT, root, comm);

</pre><p>
<b>Example 3:</b> Do the same as the previous example, but use a derived datatype.
Note that the type cannot be the entire set of  gsize * 100 ints since
type matching is defined pairwise between the root and each process in
the gather.
<p> <br>
<pre>  MPI_Comm comm;
      int gsize,sendarray[100];
      int root, *rbuf;
      MPI_Datatype rtype;
      ...
      <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>( comm, &amp;gsize);
      <a href="../man3/MPI_Type_contiguous.3.php">MPI_Type_contiguous</a>( 100, MPI_INT, &amp;rtype );
      <a href="../man3/MPI_Type_commit.3.php">MPI_Type_commit</a>( &amp;rtype );
      rbuf = (int *)malloc(gsize*100*sizeof(int));
      MPI_Gather( sendarray, 100, MPI_INT, rbuf, 1, rtype, root, comm);

</pre>
<p>
<h2><a name='sect8' href='#toc8'>Use of In-place Option</a></h2>
When the communicator is an intracommunicator, you
can perform a gather operation in-place (the output buffer is used as the
input buffer).  Use the variable MPI_IN_PLACE as the value of the root process
<i>sendbuf</i>.  In this case, <i>sendcount</i> and <i>sendtype</i> are ignored, and the contribution
of the root process to the gathered vector is assumed to already be in
the correct place in the receive buffer.   <p>
Note that MPI_IN_PLACE is a special
kind of value; it has the same restrictions on its use as MPI_BOTTOM. <p>
Because
the in-place option converts the receive buffer into a send-and-receive buffer,
a Fortran binding that includes INTENT must mark these as INOUT, not OUT.
   <p>

<h2><a name='sect9' href='#toc9'>When Communicator is an Inter-communicator</a></h2>
<p>
When the communicator is an
inter-communicator, the root process in the first group gathers data from
all the processes in the second group.  The first group defines the root
process.  That process uses MPI_ROOT as the value of its <i>root</i> argument.
The remaining processes use MPI_PROC_NULL as the value of their <i>root</i> argument.
 All processes in the second group use the rank of that root process in
the first group as the value of their <i>root</i> argument.   The send buffer argument
of the processes in the first group must be consistent with the receive
buffer argument of the root process in the second group.    <p>

<p>
<h2><a name='sect10' href='#toc10'>Errors</a></h2>
Almost
all MPI routines return an error value; C routines as the value of the
function and Fortran routines in the last argument. C++ functions do not
return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI:Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.   <p>
See the MPI man page for a full list of MPI
error codes.
<p>
<h2><a name='sect11' href='#toc11'>See Also</a></h2>
<p>
<br>
<pre><a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>
<a href="../man3/MPI_Scatter.3.php">MPI_Scatter</a>
<a href="../man3/MPI_Scatterv.3.php">MPI_Scatterv</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
