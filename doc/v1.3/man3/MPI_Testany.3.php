<?php
$topdir = "../../..";
$title = "MPI_Testany(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Testany</B> - Tests for completion of any one previously initiated com-
       munication in a list.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Testany(int <I>count</I>, MPI_Request <I>*array</I><B>_</B><I>of</I><B>_</B><I>requests</I>,
            int <I>*index</I>, int <I>*flag</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TESTANY(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS,</I> <I>INDEX,</I> <I>FLAG,</I> <I>STATUS,</I> <I>IERROR</I>)
            LOGICAL   <I>FLAG</I>
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS(*),</I> <I>INDEX</I>
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static bool Request::Testany(int <I>count</I>, Request <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[],
            int&amp; <I>index</I>, Status&amp; <I>status</I>)

       static bool Request::Testany(int <I>count</I>, Request <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[],
            int&amp; <I>index</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     List length (integer).

       array_of_requests
                 Array of requests (array of handles).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       index     Index of operation that completed, or MPI_UNDEFINED  if  none
                 completed (integer).

       flag      True if one of the operations is complete (logical).

       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Testany  tests  for  completion of either one or none of the opera-
       tions associated with active handles. In the former  case,  it  returns
       <I>flag</I>  =  true, returns in <I>index</I> the index of this request in the array,
       and returns in <I>status</I> the status of that operation; if the request  was
       allocated by a nonblocking communication call then the request is deal-
       located and the handle  is  set  to  MPI_REQUEST_NULL.  (The  array  is
       indexed  from  0  in  C, and from 1 in Fortran.) In the latter case (no
       operation completed), it returns <I>flag</I>  =  false,  returns  a  value  of
       MPI_UNDEFINED in <I>index</I>, and <I>status</I> is undefined.

       returns  <I>flag</I>  = true, or all fail. In the former case, <I>index</I> is set to
       the last value of <I>i</I>, and in the latter case, it  is  set  to  MPI_UNDE-
       FINED. MPI_Testany with an array containing one active entry is equiva-
       lent to <a href="../man3/MPI_Test.3.php">MPI_Test</a>.

       If your application does not need to examine the <I>status</I> field, you  can
       save  resources by using the predefined constant MPI_STATUS_IGNORE as a
       special value for the <I>status</I> argument.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI::Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>,           <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>,          or
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a> (depending on the type of MPI handle that gener-
       ated  the  request); the predefined error handler MPI_ERRORS_RETURN may
       be used to cause error values to be returned. Note that  MPI  does  not
       guarantee that an MPI program can continue past an error.

       Note that per MPI-1 section 3.2.5, MPI exceptions on requests passed to
       MPI_TESTANY do not set the status.MPI_ERROR field in the returned  sta-
       tus.  The error code is passed to the back-end error handler and may be
       passed back to the caller through the return value  of  MPI_TESTANY  if
       the  back-end error handler returns it.  The pre-defined MPI error han-
       dler MPI_ERRORS_RETURN exhibits this behavior, for example.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>
       <a href="../man3/MPI_Test.3.php">MPI_Test</a>
       <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>

1.3.4                            Nov 11, 2009                   <B>MPI_Testany(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
