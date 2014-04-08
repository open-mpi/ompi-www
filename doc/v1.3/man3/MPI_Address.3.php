<?php
$topdir = "../../..";
$title = "MPI_Address(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Address</B>  -  Gets the address of a location in memory -- use of this
       routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Address(void *<I>location</I>, MPI_Aint <I>*address</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ADDRESS(<I>LOCATION</I>, <I>ADDRESS</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>LOCATION</I> (*)
            INTEGER   <I>ADDRESS</I>, <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       location  Location in caller memory (choice).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       address   Address of location (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note that use of this routine is <I>deprecated</I> as  of  MPI-2.  Please  use
       <a href="../man3/MPI_Get_address.3.php">MPI_get_address</a> instead.

       This deprecated routine is not available in C++.

       The address of a location in memory can be found by invoking this func-
       tion. Returns the (byte) address of location.

       Example: Using MPI_Address for an array.

       REAL A(100,100)
          INTEGER I1, I2, DIFF
          CALL MPI_ADDRESS(A(1,1), I1, IERROR)
          CALL MPI_ADDRESS(A(10,10), I2, IERROR)
          DIFF = I2 - I1
       ! The value of DIFF is 909*sizeofreal; the values of I1 and I2 are
       ! implementation dependent.

</PRE>
<H2>NOTES</H2><PRE>
       This routine is provided for both Fortran and C programmers and may  be
       useful  when writing portable code. In the current release, the address
       returned by this routine will be the same as that produced by the  C  &amp;
       operator.

       C  users  may  be  tempted  to  avoid using MPI_Address and rely on the
       availability of the address operator &amp;.  Note, however,  that  &amp;  cast-
       expression  is a pointer, not an address.  ANSI C does not require that
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

1.3.4                            Nov 11, 2009                   <B>MPI_Address(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
