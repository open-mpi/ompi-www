<?php
$topdir = "../../..";
$title = "MPI_Request_free(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Request_free</B> - Frees a communication request object.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Request_free(MPI_Request *request)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_REQUEST_FREE(REQUEST, IERROR)
            INTEGER   REQUEST, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Request::Free()

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       request         Communication request (handle).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  operation allows a request object to be deallocated without wait-
       ing for the associated communication to complete.

       MPI_Request_free marks the request object  for  deallocation  and  sets
       request  to MPI_REQUEST_NULL. Any ongoing communication that is associ-
       ated with the request will be allowed to complete. The request will  be
       deallocated only after its completion.

</PRE>
<H2>NOTES</H2><PRE>
       Once a request is freed by a call to MPI_Request_free, it is not possi-
       ble to check for the successful completion of the associated communica-
       tion  with calls to <a href="../man3/MPI_Wait.3.php">MPI_Wait</a> or <a href="../man3/MPI_Test.3.php">MPI_Test</a>. Also, if an error occurs sub-
       sequently during the communication, an error code cannot be returned to
       the  user -- such an error must be treated as fatal. Questions arise as
       to how  one  knows  when  the  operations  have  completed  when  using
       MPI_Request_free.  Depending  on  the program logic, there may be other
       ways in which the program knows that certain operations have  completed
       and  this  makes  usage  of MPI_Request_free practical. For example, an
       active send request could be freed when the logic  of  the  program  is
       such that the receiver sends a reply to the message sent -- the arrival
       of the reply informs the sender that the send  has  completed  and  the
       send  buffer  can  be reused. An active receive request should never be
       freed, as the receiver will have no way to verify that the receive  has
       completed and the receive buffer can be reused.

       <B>Example:</B>

           CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(MPI_COMM_WORLD, rank)
           IF(rank.EQ.0) THEN
               DO i=1, n
               DO I=1, n-1
                  CALL <a href="../man3/MPI_Isend.3.php">MPI_ISEND</a>(outval, 1, MPI_REAL, 0, 0, req, ierr)
                  CALL MPI_REQUEST_FREE(req, ierr)
                  CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(inval, 1, MPI_REAL, 0, 0, req, ierr)
                  CALL <a href="../man3/MPI_Wait.3.php">MPI_WAIT</a>(req, status, ierr)
               END DO
               CALL <a href="../man3/MPI_Isend.3.php">MPI_ISEND</a>(outval, 1, MPI_REAL, 0, 0, req, ierr)
               CALL <a href="../man3/MPI_Wait.3.php">MPI_WAIT</a>(req, status)
           END IF

       This  routine is normally used to free persistent requests created with
       either <I>MPI</I><B>_</B><I>Recv</I><B>_</B><I>init</I> or <I>MPI</I><B>_</B><I>Send</I><B>_</B><I>init</I> and friends.  However, it can  be
       used to free a request created with <I>MPI</I><B>_</B><I>Irecv</I> or <I>MPI</I><B>_</B><I>Isend</I> and friends;
       in that case the use can not use the test/wait routines on the request.

       It  <B>is</B>  permitted  to free an active request.  However, once freed, you
       can not use the request in a wait or test routine (e.g., <I>MPI</I><B>_</B><I>Wait</I> ).

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
       <a href="../man3/MPI_Isend.3.php">MPI_Isend</a>
       <a href="../man3/MPI_Irecv.3.php">MPI_Irecv</a>
       <a href="../man3/MPI_Issend.3.php">MPI_Issend</a>
       <a href="../man3/MPI_Ibsend.3.php">MPI_Ibsend</a>
       <a href="../man3/MPI_Irsend.3.php">MPI_Irsend</a>
       <a href="../man3/MPI_Recv_init.3.php">MPI_Recv_init</a>
       <a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a>
       <a href="../man3/MPI_Ssend_init.3.php">MPI_Ssend_init</a>
       <a href="../man3/MPI_Rsend_init.3.php">MPI_Rsend_init</a>
       <a href="../man3/MPI_Test.3.php">MPI_Test</a>
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
       <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
