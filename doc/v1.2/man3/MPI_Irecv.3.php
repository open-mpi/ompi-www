<?php
$topdir = "../../..";
$title = "MPI_Irecv(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Irecv</B> - Starts a standard-mode, nonblocking receive.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Irecv(void *<I>buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
               int <I>source</I>, int <I>tag</I>, MPI_Comm <I>comm</I>, MPI_Request <I>*request</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_IRECV(<I>BUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>REQUEST,</I>
                 <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(*)
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>REQUEST,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Request Comm::Irecv(void* <I>buf</I>, int <I>count</I>, const Datatype&amp;
            <I>datatype</I>, int <I>source</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       buf       Initial address of receive buffer (choice).

       count     Number of elements in receive buffer (integer).

       datatype  Datatype of each receive buffer element (handle).

       source    Rank of source (integer).

       tag       Message tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       request   Communication request (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Nonblocking calls allocate a communication request object and associate
       it with the request handle (the argument request). The request  can  be
       used  later  to  query  the status of the communication or wait for its
       completion.

       A nonblocking receive call indicates that the system may start  writing
       data  into  the receive buffer. The receiver should not access any part
       of the receive buffer after a nonblocking receive operation is  called,
       until the receive completes.

       A  receive  request  can  be  determined being completed by calling the
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>, <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>, <a href="../man3/MPI_Test.3.php">MPI_Test</a>, or <a href="../man3/MPI_Testany.3.php">MPI_Testany</a> with  request  returned
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Recv.3.php">MPI_Recv</a> <a href="../man3/MPI_Probe.3.php">MPI_Probe</a> <a href="../man3/MPI_Test.3.php">MPI_Test</a> <a href="../man3/MPI_Testany.3.php">MPI_Testany</a> <a href="../man3/MPI_Wait.3.php">MPI_Wait</a> <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>

Open MPI 1.2                    September 2006             MPI_Irecv(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
