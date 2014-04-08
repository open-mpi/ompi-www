<?php
$topdir = "../../..";
$title = "MPI_Wait(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Wait</B> - Waits for an MPI send or receive to complete.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Wait(MPI_Request *<I>request</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WAIT(<I>REQUEST,</I> <I>STATUS,</I> <I>IERROR</I>)
            INTEGER   <I>REQUEST,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Request::Wait(Status&amp; <I>status</I>)

       void Request::Wait()

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       request   Request (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       A  call to MPI_Wait returns when the operation identified by request is
       complete. If the communication object associated with this request  was
       created by a nonblocking send or receive call, then the object is deal-
       located by the call to MPI_Wait  and  the  request  handle  is  set  to
       MPI_REQUEST_NULL.

       The  call  returns,  in status, information on the completed operation.
       The content of the  status  object  for  a  receive  operation  can  be
       accessed  as  described in Section 3.2.5 of the MPI-1 Standard, "Return
       Status." The status object for a send operation may  be  queried  by  a
       call  to  <a href="../man3/MPI_Test_cancelled.3.php">MPI_Test_cancelled</a>  (see  Section  3.8 of the MPI-1 Standard,
       "Probe and Cancel").

       If your application does not need to examine the <I>status</I> field, you  can
       save  resources by using the predefined constant MPI_STATUS_IGNORE as a
       special value for the <I>status</I> argument.

       One is allowed to call MPI_Wait with a null or inactive  request  argu-
       ment. In this case the operation returns immediately with empty status.

</PRE>
<H2>NOTES</H2><PRE>
       Successful return of MPI_Wait after an <a href="../man3/MPI_Ibsend.3.php">MPI_Ibsend</a> implies that the user
       send  buffer can be reused  i.e., data has been sent out or copied into

           CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr)
           IF(rank.EQ.0) THEN
               CALL <a href="../man3/MPI_Isend.3.php">MPI_ISEND</a>(<B>a(1)</B>, 10, MPI_REAL, 1, tag, comm, request, ierr)
               **** do some computation ****
               CALL MPI_WAIT(request, status, ierr)
           ELSE
               CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(<B>a(1)</B>, 15, MPI_REAL, 0, tag, comm, request, ierr)
               **** do some computation ****
               CALL MPI_WAIT(request, status, ierr)
           END IF

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI::Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>,          <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>,           or
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a> (depending on the type of MPI handle that gener-
       ated the request); the predefined error handler  MPI_ERRORS_RETURN  may
       be  used  to  cause error values to be returned. Note that MPI does not
       guarantee that an MPI program can continue past an error.

       Note that per MPI-1 section 3.2.5, MPI exceptions on requests passed to
       MPI_WAIT  do not set the status.MPI_ERROR field in the returned status.
       The error code is passed to the  back-end  error  handler  and  may  be
       passed  back  to the caller through the return value of MPI_WAIT if the
       back-end error handler returns it.  The pre-defined MPI  error  handler
       MPI_ERRORS_RETURN exhibits this behavior, for example.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>
       <a href="../man3/MPI_Test.3.php">MPI_Test</a>
       <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>

1.3.4                            Nov 11, 2009                      <B>MPI_Wait(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
