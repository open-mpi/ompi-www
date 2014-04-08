<?php
$topdir = "../../..";
$title = "MPI_Cart_map(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cart_map</B>  -  Maps process to Cartesian topology information.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cart_map(MPI_Comm <I>comm</I>, int <I>ndims</I>, int <I>*dims</I>,
            int <I>*periods</I>, int <I>*newrank</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CART_MAP(<I>COMM,</I> <I>NDIMS,</I> <I>DIMS,</I> <I>PERIODS,</I> <I>NEWRANK,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>NDIMS,</I> <I>DIMS(*),</I> <I>NEWRANK,</I> <I>IERROR</I>
            LOGICAL   <I>PERIODS</I>(*)

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Cartcomm::Map(int <I>ndims</I>, const int <I>dims</I>[],
            const bool <I>periods</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Input communicator (handle).

       ndims     Number of dimensions of Cartesian structure (integer).

       dims      Integer  array  of  size  ndims specifying the number of pro-
                 cesses in each coordinate direction.

       periods   Logical array of size ndims specifying the periodicity speci-
                 fication in each coordinate direction.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newrank   Reordered rank of the calling process; MPI_UNDEFINED if call-
                 ing process does not belong to grid (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Cart_map and <a href="../man3/MPI_Graph_map.3.php">MPI_Graph_map</a> can  be  used  to  implement  all  other
       topology  functions.  In  general  they  will not be called by the user
       directly, unless he or she  is  creating  additional  virtual  topology
       capability other than that provided by MPI.

       MPI_Cart_map computes an "optimal" placement for the calling process on
       the physical machine. A possible implementation of this function is  to
       always  return the rank of the calling process, that is, not to perform
       any reordering.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Graph_map.3.php">MPI_Graph_map</a>

Open MPI 1.2                    September 2006          MPI_Cart_map(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
