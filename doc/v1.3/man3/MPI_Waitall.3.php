<?php
$topdir = "../../..";
$title = "MPI_Waitall(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Waitall</B> - Waits for all given communications to complete.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Waitall(int <I>count</I>, MPI_Request <I>*array</I><B>_</B><I>of</I><B>_</B><I>requests</I>,
            MPI_Status <I>*array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WAITALL(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE,*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static void Request::Waitall(int <I>count</I>, Request <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[],
            Status <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>[])

       static void Request::Waitall(int <I>count</I>, Request <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[])

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Lists length (integer).

       array_of_requests
                 Array of requests (array of handles).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       array_of_statuses
                 Array of status objects (array of status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Blocks  until  all communication operations associated with active han-
       dles in the list complete, and returns the status of all  these  opera-
       tions  (this  includes the case where no handle in the list is active).
       Both arrays have the same number of valid entries.  The  ith  entry  in
       array_of_statuses  is  set  to  the return status of the ith operation.
       Requests that were created by nonblocking communication operations  are
       deallocated,  and  the  corresponding  handles  in the array are set to
       MPI_REQUEST_NULL. The list may contain null or  inactive  handles.  The
       call sets to empty the status of each such entry.

       The   error-free  execution  of  MPI_Waitall(count,  array_of_requests,
       array_of_statuses)  has  the  same   effect   as   the   execution   of
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>(&amp;array_of_request[i],        &amp;array_of_statuses[i]),       for
       i=0,...,count-1, in some arbitrary order. MPI_Waitall with an array  of
       length 1 is equivalent to <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>.

       When one or more of the communications completed by a call to <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>-
       reasons (such as invalid arguments). In such cases, it will not  update
       the error fields of the statuses.

       If  your  application  does  not  need to examine the <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>
       field, you can save resources by using the predefined constant MPI_STA-
       TUSES_IGNORE  can  be used as a special value for the <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>
       argument.

</PRE>
<H2>ERRORS</H2><PRE>
       For each invocation of MPI_Waitall, if one or more requests generate an
       MPI exception, only the <I>first</I> MPI request that caused an exception will
       be passed to its corresponding error handler.  No other error  handlers
       will be invoked (even if multiple requests generated exceptions).  How-
       ever, <I>all</I> requests that generate an  exception  will  have  a  relevant
       error  code  set  in  the  corresponding status.MPI_ERROR field (unless
       MPI_IGNORE_STATUSES was used).

       The default error handler aborts the MPI job, except for  I/O  function
       errors.  The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>,
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>, or <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>  (depending  on  the
       type  of  MPI  handle  that  generated the MPI request); the predefined
       error handler MPI_ERRORS_RETURN may be used to cause error values to be
       returned. Note that MPI does not guarantee that an MPI program can con-
       tinue past an error.

       If the invoked error  handler  allows  MPI_Waitall  to  return  to  the
       caller,  the value MPI_ERR_IN_STATUS will be returned in the C and For-
       tran   bindings.    In   C++,   if   the   predefined   error   handler
       MPI::ERRORS_THROW_EXCEPTIONS is used, the value MPI::ERR_IN_STATUS will
       be contained in the MPI::Exception object.   The  MPI_ERROR  field  can
       then be examined in the array of returned statuses to determine exactly
       which request(s) generated an exception.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>
       <a href="../man3/MPI_Test.3.php">MPI_Test</a>
       <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>

1.3.4                            Nov 11, 2009                   <B>MPI_Waitall(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
