<?php
$topdir = "../../..";
$title = "MPI_Alltoallw(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Alltoallw</B>  -  All  processes  send  data of different types to, and
       receive data of different types from, all processes

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Alltoallw(void *<I>sendbuf</I>, int *<I>sendcounts</I>,
            int *<I>sdispls</I>, MPI_Datatype *<I>sendtypes</I>,
            void *<I>recvbuf</I>, int *<I>recvcounts</I>,
            int *<I>rdispls</I>, MPI_Datatype *<I>recvtypes</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ALLTOALLW(<I>SENDBUF,</I> <I>SENDCOUNTS,</I> <I>SDISPLS,</I> <I>SENDTYPES,</I>
            <I>RECVBUF,</I> <I>RECVCOUNTS,</I> <I>RDISPLS,</I> <I>RECVTYPES,</I> <I>COMM,</I> <I>IERROR</I>)

            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>SENDCOUNTS(*),</I> <I>SDISPLS(*),</I> <I>SENDTYPES(*)</I>
            INTEGER   <I>RECVCOUNTS(*),</I> <I>RDISPLS(*),</I> <I>RECVTYPES(*)</I>
            INTEGER   <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Alltoallw(const void* <I>sendbuf</I>,
            const int <I>sendcounts</I>[], const int <I>sdispls</I>[],
            const MPI::Datatype <I>sendtypes</I>[], void* <I>recvbuf</I>,
            const int <I>recvcounts</I>[], const int <I>rdispls</I>[],
            const MPI::Datatype <I>recvtypes</I>[])

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf     Starting address of send buffer.

       sendcounts  Integer array, where entry i specifies the number  of  ele-
                   ments to send to rank i.

       sdispls     Integer array, where entry i specifies the displacement (in
                   bytes, offset from <I>sendbuf</I>) from which to send data to rank
                   i.

       sendtypes   Datatype array, where entry i specifies the datatype to use
                   when sending data to rank i.

       recvcounts  Integer array, where entry j specifies the number  of  ele-
                   ments to receive from rank j.

       rdispls     Integer array, where entry j specifies the displacement (in
                   bytes, offset from <I>recvbuf</I>)  to  which  data  from  rank  j
                   should be written.

       recvtypes   Datatype array, where entry j specifies the datatype to use
                   when receiving data from rank j.

       comm        Communicator over which data is to be exchanged.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Alltoallw is a generalized collective operation in which  all  pro-
       cesses  send data to and receive data from all other processes. It adds
       flexibility to <a href="../man3/MPI_Alltoallv.3.php">MPI_Alltoallv</a>  by  allowing  the  user  to  specify  the
       datatype  of  individual  data  blocks (in addition to displacement and
       element count). Its operation can be thought of in the  following  way,
       where each process performs 2n (n being the number of processes in com-
       municator <I>comm</I>) independent  point-to-point  communications  (including
       communication with itself).

            <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>(<I>comm</I>, &amp;n);
            for (i = 0, i &lt; n; i++)
                <a href="../man3/MPI_Send.3.php">MPI_Send</a>(<I>sendbuf</I> + <I>sdispls</I>[i], <I>sendcounts</I>[i],
                    <I>sendtypes</I>[i], i, ..., <I>comm</I>);
            for (i = 0, i &lt; n; i++)
                <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(<I>recvbuf</I> + <I>rdispls</I>[i], <I>recvcounts</I>[i],
                    <I>recvtypes</I>[i], i, ..., <I>comm</I>);

       Process j sends the k-th block of its local <I>sendbuf</I> to process k, which
       places the data in the j-th block of its local <I>recvbuf</I>.

       When a pair of processes exchanges data, each may pass  different  ele-
       ment  count  and datatype arguments so long as the sender specifies the
       same amount of data to send (in  bytes)  as  the  receiver  expects  to
       receive.

       Note  that  process  i may send a different amount of data to process j
       than it receives from process j. Also, a process may send entirely dif-
       ferent amounts and types of data to different processes in the communi-
       cator.

       WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR

       When the communicator is an inter-communicator,  the  gather  operation
       occurs in two phases.  The data is gathered from all the members of the
       first group and received by all the members of the second group.   Then
       the  data  is  gathered  from  all  the members of the second group and
       received by all the members of the first.   The  operation  exhibits  a
       symmetric, full-duplex behavior.

       The  first  group  defines  the  root  process.   The root process uses
       MPI_ROOT as the value of <I>root</I>.  All other processes in the first  group
       use  MPI_PROC_NULL  as  the value of <I>root</I>.  All processes in the second
       group use the rank of the root process in the first group as the  value
       of <I>root</I>.

       When  the  communicator  is an intra-communicator, these groups are the
       same, and the operation occurs in a single phase.

</PRE>
<H2>NOTES</H2><PRE>
       The MPI_IN_PLACE option is not available for  any  form  of  all-to-all
       communication.

       The  specification of counts, types, and displacements should not cause
       any location to be written more than once.

       All arguments on all processes are significant. The <I>comm</I>  argument,  in
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
       <a href="../man3/MPI_Alltoall.3.php">MPI_Alltoall</a>
       <a href="../man3/MPI_Alltoallv.3.php">MPI_Alltoallv</a>

1.3.4                            Nov 11, 2009                 <B>MPI_Alltoallw(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
