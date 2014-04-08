<?php
$topdir = "../../..";
$title = "MPI_Test(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Test</B> - Tests for the completion of a specific send or receive.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Test(MPI_Request *<I>request</I>, int <I>*flag</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TEST(<I>REQUEST,</I> <I>FLAG,</I> <I>STATUS,</I> <I>IERROR</I>)
            LOGICAL   <I>FLAG</I>
            INTEGER   <I>REQUEST,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool Request::Test(Status&amp; <I>status</I>)

       bool Request::Test()

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       request   Communication request (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       flag      True if operation completed (logical).

       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       A  call  to MPI_Test returns flag = true if the operation identified by
       request is complete. In such a case, the status object is set  to  con-
       tain  information  on  the  completed  operation;  if the communication
       object was created by a nonblocking send or receive, then it is deallo-
       cated  and  the  request  handle  is  set to MPI_REQUEST_NULL. The call
       returns flag = false, otherwise. In this case, the value of the  status
       object is undefined. MPI_Test is a local operation.

       The  return  status  object for a receive operation carries information
       that can be accessed as described in Section 3.2.5 of the  MPI-1  Stan-
       dard,  "Return  Status." The status object for a send operation carries
       information that can be accessed by a call to  <a href="../man3/MPI_Test_cancelled.3.php">MPI_Test_cancelled</a>  (see
       Section 3.8 of the MPI-1 Standard, "Probe and Cancel").

       If  your application does not need to examine the <I>status</I> field, you can
       save resources by using the predefined constant MPI_STATUS_IGNORE as  a
       special value for the <I>status</I> argument.

       One  is  allowed to call MPI_Test with a null or inactive <I>request</I> argu-
       ment. In such a case the operation returns with <I>flag</I> = true  and  empty
       <I>status</I>.
       driven  thread  scheduler  can  be  emulated  with  periodic  calls  to
       MPI_Test.

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
       MPI_TEST  do not set the status.MPI_ERROR field in the returned status.
       The error code is passed to the  back-end  error  handler  and  may  be
       passed  back  to the caller through the return value of MPI_TEST if the
       back-end error handler returns it.  The pre-defined MPI  error  handler
       MPI_ERRORS_RETURN exhibits this behavior, for example.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>
       <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>

Open MPI 1.2                    September 2006              MPI_Test(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
