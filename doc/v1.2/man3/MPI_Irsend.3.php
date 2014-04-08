<?php
$topdir = "../../..";
$title = "MPI_Irsend(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Irsend</B> - Starts a ready-mode nonblocking send.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Irsend(void *<I>buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>, int <I>dest</I>,
            int <I>tag</I>, MPI_Comm <I>comm</I>, MPI_Request <I>*request</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_IRSEND(<I>BUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>DEST,</I> <I>TAG,</I> <I>COMM,</I> <I>REQUEST,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(*)
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>DEST,</I> <I>TAG,</I> <I>COMM,</I> <I>REQUEST,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Request Comm::Irsend(const void* <I>buf</I>, int <I>count</I>, const
            Datatype&amp; <I>datatype</I>, int <I>dest</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       buf       Initial address of send buffer (choice).

       count     Number of elements in send buffer (integer).

       datatype  Datatype of each send buffer element (handle).

       dest      Rank of destination (integer).

       tag       Message tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       request   Communication request (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Irsend  starts  a  ready-mode  nonblocking  send. Nonblocking calls
       allocate a communication request  object  and  associate  it  with  the
       request handle (the argument request). The request can be used later to
       query the status of the communication or to wait for its completion.

       A nonblocking send call indicates that the  system  may  start  copying
       data  out  of the send buffer. The sender should not access any part of
       the send buffer after a nonblocking send operation is called, until the
       send completes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Rsend.3.php">MPI_Rsend</a>

Open MPI 1.2                    September 2006            MPI_Irsend(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
