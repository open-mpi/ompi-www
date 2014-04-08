<?php
$topdir = "../../..";
$title = "MPI_Type_get_extent(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_get_extent</B>  -  Returns  the  lower  bound and extent of a data
       type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_get_extent(MPI_Datatype <I>datatype</I>, MPI_Aint <I>*lb</I>,
            MPI_Aint *<I>extent</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_GET_EXTENT(<I>DATATYPE,</I> <I>LB,</I> <I>EXTENT,</I> <I>IERROR</I>)
            INTEGER   <I>DATATYPE,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>LB,</I> <I>EXTENT</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Get_extent(MPI::Aint&amp; <I>lb</I>, MPI::Aint&amp; <I>extent</I>)
            const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       datatype  Data type (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       lb        Lower bound of data type (integer).

       extent    Data type extent (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_get_extent returns the lower bound and the extent of <I>datatype</I>.

</PRE>
<H2>NOTE</H2><PRE>
       Use  of  MPI_Type_get_extent is strongly recommended over the old MPI-1
       functions <a href="../man3/MPI_Type_extent.3.php">MPI_Type_extent</a> and <a href="../man3/MPI_Type_lb.3.php">MPI_Type_lb</a>.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran  syntax  for  the  <I>LB</I>  and
       <I>EXTENT</I> arguments only for Fortran 90. FORTRAN 77 users may use the non-
       portable syntax

            INTEGER*MPI_ADDRESS_KIND <I>LB</I>
       or
            INTEGER*MPI_ADDRESS_KIND <I>EXTENT</I>

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006   MPI_Type_get_extent(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
