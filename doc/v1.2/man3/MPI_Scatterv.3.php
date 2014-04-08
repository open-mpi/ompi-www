<?php
$topdir = "../../..";
$title = "MPI_Scatterv(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Scatterv</B> - Scatters a buffer in parts to all tasks in a group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Scatterv(void *<I>sendbuf</I>, int <I>*sendcounts</I>, int <I>*displs</I>,
            MPI_Datatype <I>sendtype</I>, void <I>*recvbuf</I>, int <I>recvcount</I>,
            MPI_Datatype <I>recvtype</I>, int <I>root</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_SCATTERV(<I>SENDBUF,</I> <I>SENDCOUNTS,</I> <I>DISPLS,</I> <I>SENDTYPE,</I> <I>RECVBUF,</I>
                 <I>RECVCOUNT,</I> <I>RECVTYPE,</I> <I>ROOT,</I> <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>SENDCOUNTS(*),</I> <I>DISPLS(*),</I> <I>SENDTYPE</I>
            INTEGER   <I>RECVCOUNT,</I> <I>RECVTYPE,</I> <I>ROOT,</I> <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Scatterv(const void* <I>sendbuf</I>, const int <I>sendcounts</I>[],
            const int <I>displs</I>[], const MPI::Datatype&amp; <I>sendtype</I>,
            void* <I>recvbuf</I>, int <I>recvcount</I>, const MPI::Datatype&amp;
            <I>recvtype</I>, int <I>root</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Address of send buffer (choice, significant only at root).

       sendcounts
                 Integer array (of length group size) specifying the number of
                 elements to send to each processor.

       displs    Integer array (of length group size). Entry i  specifies  the
                 displacement  (relative  to  sendbuf)  from which to take the
                 outgoing data to process i.

       sendtype  Datatype of send buffer elements (handle).

       recvcount Number of elements in receive buffer (integer).

       recvtype  Datatype of receive buffer elements (handle).

       root      Rank of sending process (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Address of receive buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>

           <a href="../man3/MPI_Send.3.php">MPI_Send</a>(<I>sendbuf</I> + <I>displs</I>[<I>i</I>] * <I>extent</I>(<I>sendtype</I>), \
                    <I>sendcounts</I>[i], <I>sendtype</I>, <I>i</I>, ...)

       and each process executed a receive,

           <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(<I>recvbuf</I>, <I>recvcount</I>, <I>recvtype</I>, <I>root</I>, ...)

       The send buffer is ignored for all nonroot processes.

       The  type  signature implied by <I>sendcount</I>[<I>i</I>], <I>sendtype</I> at the root must
       be equal to the  type  signature  implied  by  <I>recvcount</I>,  <I>recvtype</I>  at
       process  <I>i</I> (however, the type maps may be different). This implies that
       the amount of data sent must be equal to the amount of  data  received,
       pairwise  between each process and the root. Distinct type maps between
       sender and receiver are still allowed.

       All arguments to the function are significant on process <I>root</I>, while on
       other  processes,  only  arguments  <I>recvbuf</I>, <I>recvcount</I>, <I>recvtype</I>, <I>root</I>,
       <I>comm</I> are significant. The arguments <I>root</I> and <I>comm</I> must  have  identical
       values on all processes.

       The  specification of counts, types, and displacements should not cause
       any location on the root to be read more than once.

       <B>Example</B> <B>1:</B> The reverse of Example 5 in the <a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a> manpage. We have
       a  varying stride between blocks at sending (root) side, at the receiv-
       ing side we receive 100 - <I>i</I> elements into the <I>i</I>th column of a 100 x 150
       C array at process <I>i</I>.

           MPI_Comm comm;
               int gsize,recvarray[100][150],*rptr;
               int root, *sendbuf, myrank, bufsize, *stride;
               MPI_Datatype rtype;
               int i, *displs, *scounts, offset;
               ...
               <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>( comm, &amp;gsize);
               <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>( comm, &amp;myrank );

               stride = (int *)malloc(gsize*sizeof(int));
               ...
               /* stride[i] for i = 0 to gsize-1 is set somehow
                * sendbuf comes from elsewhere
                */
               ...
               displs = (int *)malloc(gsize*sizeof(int));
               scounts = (int *)malloc(gsize*sizeof(int));
               offset = 0;
               for (i=0; i&lt;gsize; ++i) {
                   displs[i] = offset;
                   offset += stride[i];
                   scounts[i] = 100 - i;
               }
               /* Create datatype for the column we are receiving
                */
               <a href="../man3/MPI_Type_vector.3.php">MPI_Type_vector</a>( 100-myrank, 1, 150, MPI_INT, &amp;rtype);
               <a href="../man3/MPI_Type_commit.3.php">MPI_Type_commit</a>( &amp;rtype );
               rptr = &amp;recvarray[0][myrank];

           MPI_Comm comm;
               int gsize,*sendbuf;
               int root, rbuf[100], i, *displs, *scounts;

           ...

           <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>(comm, &amp;gsize);
               sendbuf = (int *)malloc(gsize*stride*sizeof(int));
               ...
               displs = (int *)malloc(gsize*sizeof(int));
               scounts = (int *)malloc(gsize*sizeof(int));
               for (i=0; i&lt;gsize; ++i) {
                   displs[i] = i*stride;
                   scounts[i] = 100;
               }
               MPI_Scatterv(sendbuf, scounts, displs, MPI_INT,
                            rbuf, 100, MPI_INT, root, comm);

</PRE>
<H2>USE OF IN-PLACE OPTION</H2><PRE>
       When the communicator is an intracommunicator, you can perform a gather
       operation  in-place  (the  output  buffer is used as the input buffer).
       Use the variable MPI_IN_PLACE as the value of the root process <I>recvbuf</I>.
       In  this case, <I>recvcount</I> and <I>recvtype</I> are ignored, and the root process
       sends no data to itself.

       Note that MPI_IN_PLACE is a special kind of  value;  it  has  the  same
       restrictions on its use as MPI_BOTTOM.

       Because  the  in-place  option converts the receive buffer into a send-
       and-receive buffer, a Fortran binding that includes  INTENT  must  mark
       these as INOUT, not OUT.

</PRE>
<H2>WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR</H2><PRE>
       When the communicator is an inter-communicator, the root process in the
       first group sends data to all processes in the second group.  The first
       group  defines  the  root  process.   That process uses MPI_ROOT as the
       value of its <I>root</I> argument.  The remaining processes use  MPI_PROC_NULL
       as the value of their <I>root</I> argument.  All processes in the second group
       use the rank of that root process in the first group as  the  value  of
       their  <I>root</I> argument.   The receive buffer argument of the root process
       in the first group must be consistent with the receive buffer  argument
       of the processes in the second group.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006          MPI_Scatterv(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
