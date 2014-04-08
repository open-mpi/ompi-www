<?php
$topdir = "../../..";
$title = "MPI_Cart_get(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cart_get</B>  -   Retrieves  Cartesian  topology information associated
       with a communicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cart_get(MPI_Comm <I>comm</I>, int <I>maxdims</I>, int <I>*dims</I>, int <I>*periods</I>,
            int <I>*coords</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CART_GET(<I>COMM</I>, <I>MAXDIMS</I>, <I>DIMS</I>, <I>PERIODS</I>, <I>COORDS</I>, <I>IERROR</I>)
            INTEGER   <I>COMM</I>, <I>MAXDIMS</I>, <I>DIMS</I>(*), <I>COORDS</I>(*), <I>IERROR</I>
            LOGICAL   <I>PERIODS</I>(*)

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Cartcomm::Get_topo(int <I>maxdims</I>, int <I>dims</I>[],
            bool <I>periods</I>[], int <I>coords</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator with Cartesian structure (handle).

       maxdims   Length of vectors dims, periods, and coords  in  the  calling
                 program (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       dims      Number  of  processes  for each Cartesian dimension (array of
                 integers).

       periods   Periodicity (true/false) for each Cartesian dimension  (array
                 of logicals).

       coords    Coordinates  of calling process in Cartesian structure (array
                 of integers).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The functions <a href="../man3/MPI_Cartdim_get.3.php">MPI_Cartdim_get</a> and  MPI_Cart_get  return  the  Cartesian
       topology  information  that  was  associated  with  a  communicator  by
       <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Cartdim_get.3.php">MPI_Cartdim_get</a>
       <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>

Open MPI 1.2                    September 2006          MPI_Cart_get(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
