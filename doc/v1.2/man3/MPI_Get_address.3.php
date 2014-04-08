<?php
$topdir = "../../..";
$title = "MPI_Get_address(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Get_address</B> - Gets the address of a location in memory.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Get_address(void *<I>location</I>, MPI_Aint *<I>address</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GET_ADDRESS(<I>LOCATION,</I> <I>ADDRESS,</I> <I>IERROR</I>)
            &lt;type&gt; <I>LOCATION</I>(*)
            INTEGER   <I>ADDRESS,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Aint MPI::Get_address(void* <I>location</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       location  Location in caller memory (choice).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       address   Address of location (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Get_address returns the byte address of a location in memory.

       Example: Using MPI_Get_address for an array.

       EAL A(100,100)
          INTEGER I1, I2, DIFF
          CALL MPI_GET_ADDRESS(A(1,1), I1, IERROR)
          CALL MPI_GET_ADDRESS(A(10,10), I2, IERROR)
          DIFF = I2 - I1
       ! The value of DIFF is 909*sizeofreal; the values of I1 and I2 are
       ! implementation dependent.

</PRE>
<H2>NOTES</H2><PRE>
       Current Fortran MPI codes will run unmodified and will port to any sys-
       tem. However, they may fail if addresses larger than 2^32 - 1 are  used
       in  the  program.  New codes should be written so that they use the new
       functions. This provides compatibility with C/C++ and avoids errors  on
       64-bit  architectures. However, such newly written codes may need to be
       (slightly) rewritten to port to old Fortran 77 environments that do not
       support KIND declarations.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006       MPI_Get_address(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
