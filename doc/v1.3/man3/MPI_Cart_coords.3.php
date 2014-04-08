<?php
$topdir = "../../..";
$title = "MPI_Cart_coords(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cart_coords</B> - Determines process coords in Cartesian topology given
       rank in group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cart_coords(MPI_Comm <I>comm</I>, int <I>rank</I>, int <I>maxdims</I>,
            int <I>*coords</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CART_COORDS(<I>COMM</I>, <I>RANK</I>, <I>MAXDIMS</I>, <I>COORDS</I>, <I>IERROR</I>)
            INTEGER   <I>COMM</I>, <I>RANK</I>, <I>MAXDIMS</I>, <I>COORDS(*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Cartcomm::Get_coords(int <I>rank</I>, int <I>maxdims</I>,
            int <I>coords</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator with Cartesian structure (handle).

       rank      Rank of a process within group of comm (integer).

       maxdims    Length of vector coord in the calling program (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       coords    Integer  array  (of   size   ndims,which   was   defined   by
                 <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a> call) containing the Cartesian coordinates of
                 specified process (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The inverse mapping, rank-to-coordinates  translation  is  provided  by
       MPI_Cart_coords.

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

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
