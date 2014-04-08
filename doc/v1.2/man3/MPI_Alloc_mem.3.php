<?php
$topdir = "../../..";
$title = "MPI_Alloc_mem(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Alloc_mem</B>  - Allocates a specified memory segment.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Alloc_mem(MPI_Aint <I>size</I>, MPI_Info <I>info</I>, void *<I>baseptr</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ALLOC_MEM(<I>SIZE,</I> <I>INFO,</I> <I>BASEPTR,</I> <I>IERROR</I>)
            INTEGER <I>INFO,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>SIZE,</I> <I>BASEPTR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void* MPI::Alloc_mem(MPI::Aint <I>size</I>, const MPI::Info&amp; <I>info</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       size      Size of memory segment in bytes (nonnegative integer).

       info      Info argument (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       baseptr   Pointer to beginning of memory segment allocated.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Alloc_mem  allocates  <I>size</I> bytes of memory. The starting address of
       this memory is returned in the variable <I>base</I>.

</PRE>
<H2>FORTRAN NOTES</H2><PRE>
       There is no portable FORTRAN 77 syntax for using MPI_Alloc_mem.   There
       is  no  portable  Fortran  syntax  for  using  pointers  returned  from
       MPI_Alloc_mem. However, MPI_Alloc_mem can be used with Sun Fortran com-
       pilers.

       From  FORTRAN  77,  you can use the following non-standard declarations
       for the SIZE and BASEPTR arguments:
                  INCLUDE "mpif.h"
                  INTEGER*MPI_ADDRESS_KIND SIZE, BASEPTR

       From either FORTRAN 77 or Fortran 90, you can use "Cray  pointers"  for
       the  BASEPTR  argument. Cray pointers are described further in the For-
       tran User's Guide and are supported by  many  Fortran  compilers.   For
       example,

                  INCLUDE "mpif.h"
                  REAL*4 A(100,100)
                  CALL <a href="../man3/MPI_Free_mem.3.php">MPI_FREE_MEM</a>(A, IERR)

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

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Free_mem.3.php">MPI_Free_mem</a>

Open MPI 1.2                    September 2006         MPI_Alloc_mem(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
