<?php
$topdir = "../../..";
$title = "MPI_Grequest_start(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Grequest_start</B>  - Starts a generalized request and returns a handle
       to it in <I>request</I>.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Grequest_start(MPI_Grequest_query_function <I>*query</I><B>_</B><I>fn</I>,
            MPI_Grequest_free_function <I>*free</I><B>_</B><I>fn</I>,
            MPI_Grequest_cancel_function <I>*cancel</I><B>_</B><I>fn</I>, void <I>*extra</I><B>_</B><I>state</I>,
            MPI_Request <I>*request</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GREQUEST_START(<I>QUERY</I><B>_</B><I>FN,</I> <I>FREE</I><B>_</B><I>FN,</I> <I>CANCEL</I><B>_</B><I>FN,</I> <I>EXTRA</I><B>_</B><I>STATE,</I>
            <I>REQUEST,</I> <I>IERROR</I>)
            INTEGER   <I>REQUEST,</I> <I>IERROR</I>
            EXTERNAL <I>QUERY</I><B>_</B><I>FN,</I> <I>FREE</I><B>_</B><I>FN,</I> <I>CANCEL</I><B>_</B><I>FN</I>
            INTEGER (KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::Grequest
                    MPI::Grequest::Start(const MPI::Grequest::Query_function
                    <I>query</I><B>_</B><I>fn</I>, const MPI::Grequest::Free_function <I>free</I><B>_</B><I>fn</I>,
                    const MPI::Grequest::Cancel_function <I>cancel</I><B>_</B><I>fn</I>,
                    void <I>*extra</I><B>_</B><I>state</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       query_fn  Callback function invoked  when  request  status  is  queried
                 (function).

       free_fn   Callback function invoked when request is freed (function).

       cancel_fn Callback  function  invoked  when  request is canceled (func-
                 tion).

       extra_state
                 Extra state.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       request   Generalized request (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Grequest_start starts a generalized request and returns a handle to
       it in <I>request</I>.

       The  syntax and meaning of the callback functions are listed below. All
       callback functions are passed the <I>extra</I><B>_</B><I>state</I> argument that was associ-
       ated with the request by the starting call MPI_Grequest_start. This can
          SUBROUTINE GREQUEST_QUERY_FUNCTION(<I>EXTRA</I><B>_</B><I>STATE,</I> <I>STATUS,</I> <I>IERROR</I>)
              INTEGER STATUS(MPI_STATUS_SIZE), <I>IERROR</I>
              INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE</I>

       and in C++, it is

          typedef int MPI::Grequest::Query_function(void* <I>extra</I><B>_</B><I>state</I>,
                       MPI::Status&amp; <I>status</I>);

       The  <I>query</I><B>_</B><I>fn</I>  function computes the status that should be returned for
       the generalized request. The status  also  includes  information  about
       successful/unsuccessful  cancellation  of  the  request  (result  to be
       returned by <a href="../man3/MPI_Test_cancelled.3.php">MPI_Test_cancelled</a>).

       The <I>query</I><B>_</B><I>fn</I> function is invoked by  the  MPI_{Wait|Test}{any|some|all}
       call  that completed the generalized request associated with this call-
       back.  The  callback   function   is   also   invoked   by   calls   to
       <a href="../man3/MPI_Request_get_status.3.php">MPI_Request_get_status</a> if the request is complete when the call occurs.
       In both cases, the callback is passed a reference to the  corresponding
       status  variable  passed  by the user to the MPI call. If the user pro-
       vided MPI_STATUS_IGNORE or MPI_STATUSES_IGNORE to the MPI function that
       causes  <I>query</I><B>_</B><I>fn</I> to be called, then MPI will pass a valid status object
       to <I>query</I><B>_</B><I>fn</I>, and this status will be ignored upon return of  the  call-
       back  function.  Note  that  <I>query</I><B>_</B><I>fn</I>  is  invoked  only after MPI_Gre-
       quest_complete is called on the request;  it  may  be  invoked  several
       times  for  the  same  generalized  request.  Note  also that a call to
       MPI_{Wait|Test}{some|all} may cause multiple  invocations  of  <I>query</I><B>_</B><I>fn</I>
       callback  functions, one for each generalized request that is completed
       by the MPI call. The order of these invocations  is  not  specified  by
       MPI.

       In C, the free function is

          typedef int MPI_Grequest_free_function(void *<I>extra</I><B>_</B><I>state</I>);

       In Fortran, it is

          SUBROUTINE GREQUEST_FREE_FUNCTION(<I>EXTRA</I><B>_</B><I>STATE,</I> <I>IERROR</I>)
              INTEGER <I>IERROR</I>
              INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE</I>

       And in C++, it is

          typedef int MPI::Grequest::Free_function(void* <I>extra</I><B>_</B><I>state</I>);

       The  <I>free</I><B>_</B><I>fn</I>  callback  function  is invoked to clean up user-allocated
       resources when the generalized request is freed.

       The <I>free</I><B>_</B><I>fn</I> function is invoked  by  the  MPI_{Wait|Test}{any|some|all}
       call  that completed the generalized request associated with this call-
       back. <I>free</I><B>_</B><I>fn</I> is invoked after  the  call  to  <I>query</I><B>_</B><I>fn</I>  for  the  same
       request.  However,  if  the  MPI  call  completed  multiple generalized
       requests, the order in which <I>free</I><B>_</B><I>fn</I> callback functions are invoked  is
       not specified by MPI.

       The  <I>free</I><B>_</B><I>fn</I> callback is also invoked for generalized requests that are
       freed    by    a    call    to    <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>    (no    call    to
       MPI_{Wait|Test}{any|some|all}  will  occur for such a request). In this
       In C, the cancel function is

          typedef int MPI_Grequest_cancel_function(void *<I>extra</I><B>_</B><I>state</I>, int <I>complete</I>);

       In Fortran, the cancel function is

          SUBROUTINE GREQUEST_CANCEL_FUNCTION(<I>EXTRA</I><B>_</B><I>STATE,</I> <I>COMPLETE,</I> <I>IERROR</I>)
              INTEGER <I>IERROR</I>
              INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE</I>
              LOGICAL <I>COMPLETE</I>

       In C++, the cancel function is

          typedef in MPI::Grequest::Cancel_function(void* <I>extra</I><B>_</B><I>state</I>,
                      bool <I>complete</I>);

       The <I>cancel</I><B>_</B><I>fn</I> function is invoked to start the cancelation of a  gener-
       alized request. It is called by MPI_Request_cancel(request). MPI passes
       to the callback function  complete=true  if  <a href="../man3/MPI_Grequest_complete.3.php">MPI_Grequest_complete</a>  has
       already been called on the request, and complete=false otherwise.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>EXTRA</I><B>_</B><I>STATE</I>
       argument only for Fortran 90.  FORTRAN 77 users may use the  non-porta-
       ble syntax

            INTEGER*MPI_ADDRESS_KIND <I>EXTRA</I><B>_</B><I>STATE</I>

       where  MPI_ADDRESS_KIND  is  a constant defined in mpif.h and gives the
       length of the declared integer in bytes.

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

       All  callback  functions  return an error code. The code is passed back
       and dealt with as appropriate for the error code by  the  MPI  function
       that  invoked  the  callback  function. For example, if error codes are
       returned, then the error code returned by the callback function will be
       returned by the MPI function that invoked the callback function. In the
       case of a  MPI_{Wait|Test}any  call  that  invokes  both  <I>query</I><B>_</B><I>fn</I>  and
       <I>free</I><B>_</B><I>fn</I>,  the  MPI call will return the error code returned by the last
       callback, namely <I>free</I><B>_</B><I>fn</I>. If one or more of the requests in a  call  to
       MPI_{Wait|Test}{some|all}  has  failed,  then  the MPI call will return
       MPI_ERR_IN_STATUS. In such a case, if the MPI call was passed an  array
       of  statuses,  then MPI will return in each of the statuses that corre-

Open MPI 1.2                    September 2006    MPI_Grequest_start(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
