<?php
$topdir = "../../..";
$title = "MPI_Waitany(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Waitany</B> - Waits for any specified send or receive to complete.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Waitany(int <I>count</I>, MPI_Request <I>*array</I><B>_</B><I>of</I><B>_</B><I>requests</I>,
            int <I>*index</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WAITANY(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS,</I> <I>INDEX,</I> <I>STATUS,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS(*),</I> <I>INDEX</I>
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static int Request::Waitany(int <I>count</I>, Request
            <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[], Status&amp; <I>status</I>)

       static int Request::Waitany(int <I>count</I>, Request <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[])

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     List length (integer).

       array_of_requests
                 Array of requests (array of handles).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       index     Index  of  handle  for operation that completed (integer). In
                 the range 0 to count-1.  In Fortran, the range is 1 to count.

       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       A call to MPI_Waitany can be used to wait for the completion of one out
       of several requests.

       The array_of_requests list may contain null or inactive handles. If the
       list  contains  no  active handles (list has length zero or all entries
       are null or inactive), then the call returns immediately with  index  =
       MPI_UNDEFINED, and an empty status.

       The  execution  of MPI_Waitany(count, array_of_requests, index, status)
       has the same effect as the execution of <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>(&amp;array_of_requests[i],
       status),  where  i  is the value returned by index (unless the value of
       index is MPI_UNDEFINED).  MPI_Waitany  with  an  array  containing  one
       active entry is equivalent to <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>.
           CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr)
           IF(rank .GT 0) THEN         ! client code
               DO WHILE(.TRUE.)
                  CALL <a href="../man3/MPI_Isend.3.php">MPI_ISEND</a>(a, n, MPI_REAL, 0, tag, comm, request, ierr)
                  CALL <a href="../man3/MPI_Wait.3.php">MPI_WAIT</a>(request, status, ierr)
               END DO
           ELSE         ! rank=0 -- server code
                  DO i=1, size-1
                     CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(a(1,i), n, MPI_REAL, i tag,
                              comm, request_list(i), ierr)
                  END DO
                  DO WHILE(.TRUE.)
                     CALL MPI_WAITANY(size-1, request_list, index, status, ierr)
                     CALL DO_SERVICE(a(1,index))  ! handle one message
                     CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(a(1, index), n, MPI_REAL, index, tag,
                               comm, request_list(index), ierr)
                  END DO
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
       MPI_WAITANY  do not set the status.MPI_ERROR field in the returned sta-
       tus.  The error code is passed to the back-end error handler and may be
       passed  back  to  the caller through the return value of MPI_WAITANY if
       the back-end error handler returns it.  The pre-defined MPI error  han-
       dler MPI_ERRORS_RETURN exhibits this behavior, for example.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>
       <a href="../man3/MPI_Test.3.php">MPI_Test</a>
       <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>
       <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
