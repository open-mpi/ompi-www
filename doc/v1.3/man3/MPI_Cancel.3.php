<?php
$topdir = "../../..";
$title = "MPI_Cancel(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cancel</B> - Cancels a communication request.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cancel(MPI_Request <I>*request</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CANCEL(<I>REQUEST</I>, <I>IERROR</I>)
            INTEGER   <I>REQUEST</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Request::Cancel() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       request   Communication request (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The  MPI_Cancel operation allows pending communications to be canceled.
       This is required for cleanup. Posting a send or a receive ties up  user
       resources (send or receive buffers), and a cancel may be needed to free
       these resources gracefully.

       A call to MPI_Cancel marks for cancellation a pending, nonblocking com-
       munication  operation  (send  or receive). The cancel call is local. It
       returns immediately, possibly before the communication is actually can-
       celed.  It is still necessary to complete a communication that has been
       marked for cancellation, using a call to <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>, <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>, or
       <a href="../man3/MPI_Test.3.php">MPI_Test</a> (or any of the derived operations).

       If  a  communication  is marked for cancellation, then an <a href="../man3/MPI_Wait.3.php">MPI_Wait</a> call
       for that communication is guaranteed to  return,  irrespective  of  the
       activities  of other processes (i.e., <a href="../man3/MPI_Wait.3.php">MPI_Wait</a> behaves as a local func-
       tion); similarly if <a href="../man3/MPI_Test.3.php">MPI_Test</a> is repeatedly called in a busy  wait  loop
       for a canceled communication, then <a href="../man3/MPI_Test.3.php">MPI_Test</a> will eventually be success-
       ful.

       MPI_Cancel can be used to cancel a communication that uses a persistent
       request  (see Section 3.9 in the MPI-1 Standard, "Persistent Communica-
       tion Requests") in the same way it is used for nonpersistent  requests.
       A successful cancellation cancels the active communication, but not the
       request itself. After the call to MPI_Cancel and the subsequent call to
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a> or <a href="../man3/MPI_Test.3.php">MPI_Test</a>, the request becomes inactive and can be activated
       for a new communication.

       The successful cancellation of a buffered send frees the  buffer  space
       send. If a receive is marked for cancellation, then it must be the case
       that either the receive completes normally, or that the receive is suc-
       cessfully  canceled,  in  which  case  no part of the receive buffer is
       altered. Then, any  matching  send  has  to  be  satisfied  by  another
       receive.

       If  the  operation  has  been canceled, then information to that effect
       will be returned in the status argument of the operation that completes
       the communication.

</PRE>
<H2>NOTES</H2><PRE>
       The  primary  expected use of MPI_Cancel is in multi-buffering schemes,
       where speculative MPI_Irecvs are made.  When the computation completes,
       some  of these requests may remain; using MPI_Cancel allows the user to
       cancel these unsatisfied requests.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Probe.3.php">MPI_Probe</a>
       <a href="../man3/MPI_Iprobe.3.php">MPI_Iprobe</a>
       <a href="../man3/MPI_Test_cancelled.3.php">MPI_Test_cancelled</a>
       <a href="../man3/MPI_Cart_coords.3.php">MPI_Cart_coords</a>

1.3.4                            Nov 11, 2009                    <B>MPI_Cancel(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
