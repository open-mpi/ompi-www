<?php
$topdir = "../../..";
$title = "MPI_Waitsome(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Waitsome</B> - Waits for some given communications to complete.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Waitsome(int <I>incount</I>, MPI_Request <I>*array</I><B>_</B><I>of</I><B>_</B><I>requests</I>,
            int <I>*outcount</I>, int <I>*array</I><B>_</B><I>of</I><B>_</B><I>indices</I>,
            MPI_Status <I>*array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WAITSOME(<I>INCOUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS,</I> <I>OUTCOUNT,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INDICES,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES,</I> <I>IERROR</I>)
            INTEGER   <I>INCOUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS(*),</I> <I>OUTCOUNT</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INDICES(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STATUSES(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE*)</I>
            INTEGER   <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static int Request::Waitsome(int <I>incount</I>, Request
            <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[], int <I>array</I><B>_</B><I>of</I><B>_</B><I>indices</I>[], Status <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>[])

       static int Request::Waitsome(int <I>incount</I>, Request
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
                 Array of status objects for operations that completed  (array
                 of status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Waits  until at least one of the operations associated with active han-
       dles in the list have completed. Returns  in  outcount  the  number  of
       requests  from  the list array_of_requests that have completed. Returns
       in the first outcount  locations  of  the  array  array_of_indices  the
       indices  of these operations (index within the array array_of_requests;

       When one or more of the communications completed by MPI_Waitsome fails,
       then it is desirable to return specific information on each  communica-
       tion.  The  arguments outcount, array_of_indices, and array_of_statuses
       will be adjusted to indicate completion of all communications that have
       succeeded   or   failed.   The   call   will   return  the  error  code
       MPI_ERR_IN_STATUS and the error field of each status returned  will  be
       set  to  indicate  success  or  to  indicate  the  specific  error that
       occurred. The call will return MPI_SUCCESS if no request resulted in an
       error,  and  will return another error code if it failed for other rea-
       sons (such as invalid arguments). In such cases, it will not update the
       error fields of the statuses.

       If  your  application  does  not  need to examine the <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>
       field, you can save resources by using the predefined constant MPI_STA-
       TUSES_IGNORE  can  be used as a special value for the <I>array</I><B>_</B><I>of</I><B>_</B><I>statuses</I>
       argument.

       <B>Example:</B> Same code as the example in  the  <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>  man  page,  but
       using MPI_Waitsome.

           CALL <a href="../man3/MPI_Comm_size.3.php">MPI_COMM_SIZE</a>(comm, size, ierr)
           CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr)
           IF(rank .GT. 0) THEN         ! client code
               DO WHILE(.TRUE.)
                  CALL <a href="../man3/MPI_Isend.3.php">MPI_ISEND</a>(a, n, MPI_REAL, 0, tag, comm, request, ierr)
                  CALL <a href="../man3/MPI_Wait.3.php">MPI_WAIT</a>(request, status, ierr)
               END DO
           ELSE         ! rank=0 -- server code
               DO i=1, size-1
                  CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(a(1,i), n, MPI_REAL, i, tag,
                                 comm, requests(i), ierr)
               END DO
               DO WHILE(.TRUE.)
                  CALL MPI_WAITSOME(size, request_list, numdone,
                                   indices, statuses, ierr)
                  DO i=1, numdone
                     CALL DO_SERVICE(a(1, indices(i)))
                     CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(a(1, indices(i)), n, MPI_REAL, 0, tag,
                                  comm, requests(indices(i)), ierr)
                  END DO
               END DO
           END IF

</PRE>
<H2>NOTES</H2><PRE>
       The  array  of indices are in the range 0 to incount-1 for C and in the
       range 1 to incount for Fortran.

</PRE>
<H2>ERRORS</H2><PRE>
       For each invocation of MPI_Waitsome, if one or more  requests  generate
       an  MPI  exception, only the <I>first</I> MPI request that caused an exception
       will be passed to its corresponding error handler.  No other error han-
       dlers will be invoked (even if multiple requests generated exceptions).
       However, <I>all</I> requests that generate an exception will have  a  relevant
       error  code  set  in  the  corresponding status.MPI_ERROR field (unless
       MPI_IGNORE_STATUSES was used).

       If the invoked error handler  allows  MPI_Waitsome  to  return  to  the
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
       <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>
       <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>

Open MPI 1.2                    September 2006          MPI_Waitsome(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
