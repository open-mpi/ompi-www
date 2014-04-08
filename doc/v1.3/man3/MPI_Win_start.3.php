<?php
$topdir = "../../..";
$title = "MPI_Win_start(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_start</B> - Starts an RMA access epoch for <I>win</I>

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_start(MPI_Group <I>group</I>, int assert, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_START(<I>GROUP,</I> <I>ASSERT,</I> <I>WIN,</I> <I>IERROR</I>)
            INTEGER GROUP, ASSERT, WIN, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Start(const MPI::Group&amp; group, int assert) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group     The group of target processes (handle).

       assert    Program assertion (integer).

       win       Window object (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_start  is  a  one-sided  MPI communication synchronization call
       that starts an RMA access epoch for <I>win</I>. RMA calls issued on <I>win</I> during
       this epoch must access only windows at processes in <I>group</I>. Each process
       in <I>group</I> must issue a matching call to <a href="../man3/MPI_Win_post.3.php">MPI_Win_post</a>.  MPI_Win_start  is
       allowed  to  block until the corresponding <a href="../man3/MPI_Win_post.3.php">MPI_Win_post</a> calls have been
       executed, but is not required to.

       The <I>assert</I> argument is used to provide assertions on the context of the
       call  that may be used for various optimizations. (See Section 6.4.4 of
       the MPI-2 Standard.) A value of <I>assert</I> = 0 is always valid. The follow-
       ing assertion value is supported:

       MPI_MODE_NOCHECK
                 When  this  value  is  passed  in  to  this call, the library
                 assumes that the post call on the target has been called  and
                 it is not necessary for the library to check to see if such a
                 call has been made.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Win_post.3.php">MPI_Win_post</a> <a href="../man3/MPI_Win_complete.3.php">MPI_Win_complete</a>

1.3.4                            Nov 11, 2009                 <B>MPI_Win_start(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
