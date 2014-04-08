<?php
$topdir = "../../..";
$title = "MPI_Win_create(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_create</B>  -  One-sided  MPI call that returns a window object for
       RMA operations.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI_Win_create(void *<I>base</I>, MPI_Aint <I>size</I>, int <I>disp</I><B>_</B><I>unit</I>,
            MPI_Info <I>info</I>, MPI_Comm <I>comm</I>, MPI_Win *<I>win</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_CREATE(<I>BASE,</I> <I>SIZE,</I> <I>DISP</I><B>_</B><I>UNIT,</I> <I>INFO,</I> <I>COMM,</I> <I>WIN,</I> <I>IERROR</I>)
            &lt;type&gt; <I>BASE</I>(*)
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>SIZE</I>
            INTEGER <I>DISP</I><B>_</B><I>UNIT,</I> <I>INFO,</I> <I>COMM,</I> <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::Win MPI::Win::Create(const void* <I>base</I>,
            MPI::Aint <I>size</I>, int <I>disp</I><B>_</B><I>unit</I>, const
            MPI::Info&amp; <I>info</I>, const MPI::Intracomm&amp; <I>comm</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       base      Initial address of window (choice).

       size      Size of window in bytes (nonnegative integer).

       disp_unit Local unit size for displacements, in bytes  (positive  inte-
                 ger).

       info      Info argument (handle).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       win       Window object returned by the call (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_create  is  a  one-sided MPI communication collective call exe-
       cuted by all processes in the group of <I>comm</I>. It returns a window object
       that  can  be  used  by these processes to perform RMA operations. Each
       process specifies a window of existing memory that it  exposes  to  RMA
       accesses  by the processes in the group of <I>comm</I>. The window consists of
       <I>size</I> bytes, starting at address <I>base</I>. A process may elect to expose  no
       memory by specifying <I>size</I> = 0.

       If   the   <I>base</I>   value   used   by  MPI_Win_create  was  allocated  by
       <a href="../man3/MPI_Alloc_mem.3.php">MPI_Alloc_mem</a>, the size of the window can be no larger than  the  value
       set by the <a href="../man3/MPI_Alloc_mem.3.php">MPI_ALLOC_MEM</a> function.
       no_locks  If <a href="../man3/MPI_Win_lock.3.php">MPI_Win_lock</a> is called on a window created with this  info
                 key,  the  call will fail. If this info key is present, it is
                 assumed that the local window is never locked, allowing  sev-
                 eral  internal  checks to be skipped, permitting a more effi-
                 cient implementation.

</PRE>
<H2>NOTES</H2><PRE>
       Common choices for <I>disp</I><B>_</B><I>unit</I> are 1 (no  scaling),  and  (in  C  syntax)
       <I>sizeof(type)</I>,  for  a  window  that consists of an array of elements of
       type <I>type</I>. The later choice will allow one to use array indices in  RMA
       calls, and have those scaled correctly to byte displacements, even in a
       heterogeneous environment.

       Use memory allocated by <a href="../man3/MPI_Alloc_mem.3.php">MPI_Alloc_mem</a>  to  guarantee  properly  aligned
       window  boundaries  (such as word, double-word, cache line, page frame,
       and so on).

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>SIZE</I>  argu-
       ment  only  for  Fortran  90. FORTRAN 77 users may use the non-portable
       syntax

            INTEGER*MPI_ADDRESS_KIND <I>SIZE</I>

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                      March 2007          MPI_Win_create(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
