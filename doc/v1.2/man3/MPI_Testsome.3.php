<?php
$topdir = "../../..";
$title = "MPI_Testsome(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Testsome</B> - Tests for completion of one or more previously initiated
       communications in a list.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Testsome(int <I>incount</I>, MPI_Request <I>*array</I><B>_</B><I>of</I><B>_</B><I>requests</I>,
            int <I>*outcount</I>, int <I>*array</I><B>_</B><I>of</I><B>_</B><I>indices</I>, MPI_Status <I>*array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TESTSOME(<I>INCOUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS,</I> <I>OUTCOUNT,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INDICES,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES,</I> <I>IERROR</I>)
            INTEGER   <I>INCOUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS(*)</I>
            INTEGER   <I>OUTCOUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INDICES(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE,*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static int Request::Testsome(int <I>incount</I>, Request
            <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[], int <I>array</I><B>_</B><I>of</I><B>_</B><I>indices</I>[], Status <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>[])

       static int Request::Testsome(int <I>incount</I>, Request
            <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[], int <I>array</I><B>_</B><I>of</I><B>_</B><I>indices</I>[])

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       incount   Length of array_of_requests (integer).

       array_of_requests
                 Array of requests (array of handles).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       outcount  Number of completed requests (integer).

       array_of_indices
                 Array of indices of operations that completed (array of inte-
                 gers).

       array_of_statuses
                 Array  of status objects for operations that completed (array
                 of status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Behaves like <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>, except that it returns  immediately.  If  no
       operation  has completed it returns outcount = 0. If there is no active
       handle in the list, it returns outcount = MPI_UNDEFINED.

       MPI_Testsome is a local operation, which returns  immediately,  whereas
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a> blocks until a communication completes, if it was passed a
       for <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>.

       If your application does not  need  to  examine  the  <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>
       field, you can save resources by using the predefined constant MPI_STA-
       TUSES_IGNORE can be used as a special value for  the  <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>
       argument.

</PRE>
<H2>NOTES</H2><PRE>
       The  use of MPI_Testsome is likely to be more efficient than the use of
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>. The former returns information on all completed communica-
       tions;  with  the latter, a new call is required for each communication
       that completes.

       A server with multiple clients can use <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a> so as not to starve
       any  client. Clients send messages to the server with service requests.
       The server calls <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a> with one receive request for each client,
       then handles all receives that have completed. If a call to <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       is used instead, then one  client  could  starve  while  requests  from
       another client always sneak in first.

</PRE>
<H2>ERRORS</H2><PRE>
       For  each  invocation of MPI_Testsome, if one or more requests generate
       an MPI exception, only the <I>first</I> MPI request that caused  an  exception
       will be passed to its corresponding error handler.  No other error han-
       dlers will be invoked (even if multiple requests generated exceptions).
       However,  <I>all</I>  requests that generate an exception will have a relevant
       error code set in  the  corresponding  status.MPI_ERROR  field  (unless
       MPI_IGNORE_STATUSES was used).

       The  default  error handler aborts the MPI job, except for I/O function
       errors. The error handler may be changed with  <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>,
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>,  or  <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>  (depending on the
       type of MPI handle that generated  the  MPI  request);  the  predefined
       error handler MPI_ERRORS_RETURN may be used to cause error values to be
       returned. Note that MPI does not guarantee that an MPI program can con-
       tinue past an error.

       If  the  invoked  error  handler  allows  MPI_Testsome to return to the
       caller, the value MPI_ERR_IN_STATUS will be returned in the C and  For-
       tran   bindings.    In   C++,   if   the   predefined   error   handler
       MPI::ERRORS_THROW_EXCEPTIONS is used, the value MPI::ERR_IN_STATUS will
       be  contained  in  the  MPI::Exception object.  The MPI_ERROR field can
       then be examined in the array of returned statuses to determine exactly
       which request(s) generated an exception.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>
       <a href="../man3/MPI_Test.3.php">MPI_Test</a>
       <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
