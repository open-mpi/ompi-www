<?php
$topdir = "../../..";
$title = "MPI_Alltoall(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Alltoall</B> - All processes send data to all processes

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Alltoall(void *<I>sendbuf</I>, int <I>sendcount</I>,
            MPI_Datatype <I>sendtype</I>, void *<I>recvbuf</I>, int <I>recvcount</I>,
            MPI_Datatype <I>recvtype</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ALLTOALL(<I>SENDBUF,</I> <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>RECVBUF,</I> <I>RECVCOUNT,</I>
            <I>RECVTYPE,</I> <I>COMM,</I> <I>IERROR</I>)

            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>RECVCOUNT,</I> <I>RECVTYPE</I>
            INTEGER   <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Alltoall(const void* <I>sendbuf</I>, int <I>sendcount</I>,
            const MPI::Datatype&amp; <I>sendtype</I>, void* <I>recvbuf</I>,
            int <I>recvcount</I>, const MPI::Datatype&amp; <I>recvtype</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf     Starting address of send buffer (choice).

       sendcount   Number of elements to send to each process (integer).

       sendtype    Datatype of send buffer elements (handle).

       recvcount   Number  of elements to receive from each process (integer).

       recvtype    Datatype of receive buffer elements (handle).

       comm        Communicator over which data is to be exchanged (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf     Starting address of receive buffer (choice).

       IERROR      Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Alltoall is a collective operation in which all processes send  the
       same  amount of data to each other, and receive the same amount of data
       from each other. The operation of this routine can  be  represented  as
       follows,  where  each  process  performs 2n (n being the number of pro-
       cesses in communicator <I>comm</I>) independent point-to-point  communications
       (including communication with itself).

            <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>(<I>comm</I>, &amp;n);

       ing <I>sendcount</I> elements of type <I>sendtype</I> - and divides its <I>recvbuf</I> simi-
       larly  according  to  <I>recvcount</I>  and <I>recvtype</I>. Process j sends the k-th
       block of its local <I>sendbuf</I> to process k, which places the data  in  the
       j-th  block of its local <I>recvbuf</I>. The amount of data sent must be equal
       to the amount of data received, pairwise, between every  pair  of  pro-
       cesses.

       WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR

       When  the  communicator  is an inter-communicator, the gather operation
       occurs in two phases.  The data is gathered from all the members of the
       first  group and received by all the members of the second group.  Then
       the data is gathered from all the  members  of  the  second  group  and
       received  by  all  the  members of the first.  The operation exhibits a
       symmetric, full-duplex behavior.

       The first group defines  the  root  process.   The  root  process  uses
       MPI_ROOT  as the value of <I>root</I>.  All other processes in the first group
       use MPI_PROC_NULL as the value of <I>root</I>.  All processes  in  the  second
       group  use the rank of the root process in the first group as the value
       of <I>root</I>.

       When the communicator is an intra-communicator, these  groups  are  the
       same, and the operation occurs in a single phase.

</PRE>
<H2>NOTES</H2><PRE>
       The MPI_IN_PLACE option is not available for this function.

       All  arguments  on all processes are significant. The <I>comm</I> argument, in
       particular, must describe the same communicator on all processes.

       There are two MPI library functions that are more general than MPI_All-
       toall.  <a href="../man3/MPI_Alltoallv.3.php">MPI_Alltoallv</a>  allows  all-to-all  communication  to  and  from
       buffers that need not be contiguous; different processes may  send  and
       receive  different  amounts  of  data.  <a href="../man3/MPI_Alltoallw.3.php">MPI_Alltoallw</a>  expands MPI_All-
       toallv's functionality to allow the exchange  of  data  with  different
       datatypes.

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
       <a href="../man3/MPI_Alltoallv.3.php">MPI_Alltoallv</a>
       <a href="../man3/MPI_Alltoallw.3.php">MPI_Alltoallw</a>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
