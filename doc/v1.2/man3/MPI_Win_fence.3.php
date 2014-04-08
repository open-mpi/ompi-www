<?php
$topdir = "../../..";
$title = "MPI_Win_fence(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_fence</B> - Synchronizes RMA calls on a window.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_fence(int <I>assert</I>, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_FENCE(<I>ASSERT,</I> <I>WIN,</I> <I>IERROR</I>)
            INTEGER <I>ASSERT,</I> <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Fence(int <I>assert</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       assert    Program assertion (integer).

       win       Window object (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_fence  synchronizes RMA calls on <I>win</I>. The call is collective on
       the group of <I>win</I>. All RMA operations on  <I>win</I>  originating  at  a  given
       process and started before the fence call will complete at that process
       before the fence call returns. They will be completed at  their  target
       before  the  fence  call  returns  at the target. RMA operations on <I>win</I>
       started by a process after the fence call  returns  will  access  their
       target  window  only  after MPI_Win_fence has been called by the target
       process.

       The call completes an RMA access epoch if it was  preceded  by  another
       fence  call and the local process issued RMA communication calls on <I>win</I>
       between these two calls. The call completes an RMA exposure epoch if it
       was  preceded by another fence call and the local window was the target
       of RMA accesses between these two calls. The call starts an RMA  access
       epoch  if it is followed by another fence call and by RMA communication
       calls issued between these two fence calls. The call starts an exposure
       epoch  if  it is followed by another fence call and the local window is
       the target of RMA accesses between these two  fence  calls.  Thus,  the
       fence call is equivalent to calls to a subset of <I>post,</I> <I>start,</I> <I>complete,</I>
       <I>wait</I>.

       A fence call usually entails a barrier synchronization: a process  com-
       pletes  a  call  to MPI_Win_fence only after all other processes in the
       group  have  entered  their  matching  call.   However,   a   call   to
       MPI_Win_fence that is known not to end any epoch (in particular, a call
       with <I>assert</I> = MPI_MODE_NOPRECEDE) does not necessarily act  as  a  bar-

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
       <a href="../man3/MPI_Win_create.3.php">MPI_Win_create</a> <a href="../man3/MPI_Win_start.3.php">MPI_Win_start</a> <a href="../man3/MPI_Win_post.3.php">MPI_Win_post</a> <a href="../man3/MPI_Win_complete.3.php">MPI_Win_complete</a> <a href="../man3/MPI_Win_wait.3.php">MPI_Win_wait</a>

Open MPI 1.2                      March 2007           MPI_Win_fence(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
