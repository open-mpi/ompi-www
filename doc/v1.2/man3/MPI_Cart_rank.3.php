<?php
$topdir = "../../..";
$title = "MPI_Cart_rank(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cart_rank</B>   -  Determines process rank in communicator given Carte-
       sian location.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cart_rank(MPI_Comm <I>comm</I>, int <I>*coords</I>, int <I>*rank</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CART_RANK(<I>COMM,</I> <I>COORDS,</I> <I>RANK,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>COORDS(*),</I> <I>RANK,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Cartcomm::Get_cart_rank(const int <I>coords</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator with Cartesian structure (handle).

       coords    Integer  array  (of  size  ndims,  which   was   defined   by
                 <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a> call) specifying the Cartesian coordinates of
                 a process.

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       rank      Rank of specified process (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       For  a  process  group   with   Cartesian   structure,   the   function
       MPI_Cart_rank  translates  the  logical  process coordinates to process
       ranks as they are used by the point-to-point routines.  For dimension i
       with  periods(i) = true, if the coordinate, coords(i), is out of range,
       that is, coords(i) &lt; 0 or  coords(i) &gt;= dims(i), it is shifted back  to
       the  interval   0  =&lt;  coords(i)  &lt; dims(i) automatically. Out-of-range
       coordinates are erroneous for nonperiodic dimensions.

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

Open MPI 1.2                    September 2006         MPI_Cart_rank(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
