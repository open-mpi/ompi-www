<?php
$topdir = "../../..";
$title = "MPI_Win_lock(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_lock</B>  - Starts an RMA access epoch locking access to a particu-
       lar rank.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_lock(int <I>lock</I><B>_</B><I>type</I>, int <I>rank</I>, int <I>assert</I>, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_LOCK(<I>LOCK</I><B>_</B><I>TYPE,</I> <I>RANK,</I> <I>ASSERT,</I> <I>WIN,</I> <I>IERROR</I>)
            INTEGER <I>LOCK</I><B>_</B><I>TYPE,</I> <I>RANK,</I> <I>ASSERT,</I> <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Lock(int <I>lock</I><B>_</B><I>type</I>, int <I>rank</I>, int <I>assert</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       lock_type Either MPI_LOCK_EXCLUSIVE or MPI_LOCK_SHARED (state).

       rank      Rank of locked window (nonnegative integer).

       assert    Program assertion (integer).

       win       Window object (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Starts an RMA access epoch. Locks ensure that only the windows  created
       by  specific  processes  can  be accessed by those processes (and by no
       other processes) during that epoch.

       Locks are used to protect accesses to the locked target window effected
       by  RMA  calls  issued between the lock and unlock call, and to protect
       local load/store accesses to a locked local window executed between the
       lock and unlock call.  Accesses that are protected by an exclusive lock
       will not be concurrent at the window site with other  accesses  to  the
       same  window  that are lock protected. Accesses that are protected by a
       shared lock will not be concurrent at the  window  site  with  accesses
       protected by an exclusive lock to the same window.

       The <I>assert</I> argument is used to provide assertions on the context of the
       call that may be used for various optimizations. (See Section 6.4.4  of
       the MPI-2 Standard.) A value of <I>assert</I> = 0 is always valid.

</PRE>
<H2>NOTES</H2><PRE>
       In a client/server environment in which clients connect to a server and
       create windows that span both the client and the server, if a client or
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>See also</H2><PRE>
       <a href="../man3/MPI_Win_unlock.3.php">MPI_Win_unlock</a>

1.3.4                            Nov 11, 2009                  <B>MPI_Win_lock(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
