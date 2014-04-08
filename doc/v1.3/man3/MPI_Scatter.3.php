<?php
$topdir = "../../..";
$title = "MPI_Scatter(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Scatter</B> - Sends data from one task to all tasks in a group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Scatter(void *<I>sendbuf</I>, int <I>sendcount</I>, MPI_Datatype <I>sendtype</I>,
            void <I>*recvbuf</I>, int <I>recvcount</I>, MPI_Datatype <I>recvtype</I>, int <I>root</I>,
            MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_SCATTER(<I>SENDBUF,</I> <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>RECVBUF,</I> <I>RECVCOUNT,</I>
                 <I>RECVTYPE,</I> <I>ROOT,</I> <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>RECVCOUNT,</I> <I>RECVTYPE,</I> <I>ROOT</I>
            INTEGER   <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Scatter(const void* <I>sendbuf</I>, int <I>sendcount</I>,
            const MPI::Datatype&amp; <I>sendtype</I>, void* <I>recvbuf</I>,
            int <I>recvcount</I>, const MPI::Datatype&amp; <I>recvtype</I>,
            int <I>root</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Address of send buffer (choice, significant only at root).

       sendcount Number of elements sent to each process (integer, significant
                 only at root).

       sendtype  Datatype of send buffer elements (handle, significant only at
                 root).

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
       MPI_Scatter is the inverse operation to <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>.

       The outcome is as if the root executed n send operations,

       <a href="../man3/MPI_Send.3.php">MPI_Send</a>(<I>sendbuf</I>, <I>sendcount</I> * <I>n</I>, <I>sendtype</I>, ...). This message is  split
       into  <I>n</I>  equal  segments, the ith segment is sent to the ith process in
       the group, and each process receives this message as above.

       The send buffer is ignored for all nonroot processes.

       The type signature associated with <I>sendcount</I>, <I>sendtype</I> at the root must
       be  equal  to the type signature associated with <I>recvcount</I>, <I>recvtype</I> at
       all processes (however, the type maps may be different).  This  implies
       that  the  amount  of  data  sent  must  be equal to the amount of data
       received, pairwise between each process and  the  root.  Distinct  type
       maps between sender and receiver are still allowed.

       All arguments to the function are significant on process <I>root</I>, while on
       other processes, only arguments  <I>recvbuf</I>,  <I>recvcount</I>,  <I>recvtype</I>,  <I>root</I>,
       <I>comm</I>  are  significant. The arguments <I>root</I> and <I>comm</I> must have identical
       values on all processes.

       The specification of counts and types should not cause any location  on
       the root to be read more than once.

       <B>Rationale:</B>  Though not needed, the last restriction is imposed so as to
       achieve symmetry with <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>, where the  corresponding  restriction
       (a multiple-write restriction) is necessary.

       <B>Example:</B>  The  reverse  of Example 1 in the <a href="../man3/MPI_Gather.3.php">MPI_Gather</a> manpage. Scatter
       sets of 100 ints from the root to each process in the group.

               MPI_Comm comm;
               int gsize,*sendbuf;
               int root, rbuf[100];
               ...
               <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>(comm, &amp;gsize);
               sendbuf = (int *)malloc(gsize*100*sizeof(int));
               ...
               MPI_Scatter(sendbuf, 100, MPI_INT, rbuf, 100,
                           MPI_INT, root, comm);

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

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Scatterv.3.php">MPI_Scatterv</a>
       <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>
       <a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>

1.3.4                            Nov 11, 2009                   <B>MPI_Scatter(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
