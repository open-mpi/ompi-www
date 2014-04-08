<?php
$topdir = "../../..";
$title = "MPI_Testall(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Testall</B> - Tests for the completion of all previously initiated com-
       munications in a list.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Testall(int <I>count</I>, MPI_Request <I>*array</I><B>_</B><I>of</I><B>_</B><I>requests</I>,
            int <I>*flag</I>, MPI_Status <I>*array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TESTALL(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS,</I> <I>FLAG,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES,</I>
                 <I>IERROR</I>)
            LOGICAL   <I>FLAG</I>
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE,*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static bool Request::Testall(int <I>count</I>, Request
            <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[], Status <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>[])

       static bool Request::Testall(int <I>count</I>, Request <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[])

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Lists length (integer).

       array_of_requests
                 Array of requests (array of handles).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       flag      True if  previously  initiated  communications  are  complete
                 (logical.)

       array_of_statuses
                 Array of status objects (array of status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Returns  <I>flag</I>  = true if all communications associated with active han-
       dles in the array have completed (this includes the case where no  han-
       dle in the list is active). In this case, each status entry that corre-
       sponds to an active handle request is set to the status of  the  corre-
       sponding  communication;  if the request was allocated by a nonblocking
       communication call then it is deallocated, and the  handle  is  set  to
       MPI_REQUEST_NULL. Each status entry that corresponds to a null or inac-
       tive handle is set to empty.

       Otherwise, <I>flag</I> = false is returned, no request  is  modified  and  the
       values  of the status entries are undefined. This is a local operation.

</PRE>
<H2>NOTE</H2><PRE>
       <I>flag</I> is true only if all requests have completed.  Otherwise,  <I>flag</I>  is
       false, and neither <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I> nor <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I> is modified.

</PRE>
<H2>ERRORS</H2><PRE>
       For each invocation of MPI_Testall, if one or more requests generate an
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

       If the invoked error  handler  allows  MPI_Testall  to  return  to  the
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
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>

Open MPI 1.2                    September 2006           MPI_Testall(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
