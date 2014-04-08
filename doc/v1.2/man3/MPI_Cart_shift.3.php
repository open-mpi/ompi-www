<?php
$topdir = "../../..";
$title = "MPI_Cart_shift(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cart_shift</B>   -   Returns  the shifted source and destination ranks,
       given a shift direction and amount.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cart_shift(MPI_Comm <I>comm</I>, int <I>direction</I>, int <I>disp</I>,
            int <I>*rank</I><B>_</B><I>source</I>, int <I>*rank</I><B>_</B><I>dest</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CART_SHIFT(<I>COMM,</I> <I>DIRECTION,</I> <I>DISP,</I> <I>RANK</I><B>_</B><I>SOURCE,</I>
                 <I>RANK</I><B>_</B><I>DEST,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>DIRECTION,</I> <I>DISP,</I> <I>RANK</I><B>_</B><I>SOURCE</I>
            INTEGER   <I>RANK</I><B>_</B><I>DEST,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Cartcomm::Shift(int <I>direction</I>, int <I>disp</I>, int&amp; <I>rank</I><B>_</B><I>source</I>,
            int&amp; <I>rank</I><B>_</B><I>dest</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator with Cartesian structure (handle).

       direction Coordinate dimension of shift (integer).

       disp      Displacement ( &gt; 0: upward shift, &lt; 0: downward shift) (inte-
                 ger).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       rank_source
                 Rank of source process (integer).

       rank_dest Rank of destination process (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       If the process topology is a Cartesian structure, an <a href="../man3/MPI_Sendrecv.3.php">MPI_Sendrecv</a> oper-
       ation is likely to be used along a coordinate direction  to  perform  a
       shift  of  data.  As  input,  <a href="../man3/MPI_Sendrecv.3.php">MPI_Sendrecv</a>  takes  the rank of a source
       process for the receive, and the rank of a destination process for  the
       send.  If the function MPI_Cart_shift is called for a Cartesian process
       group, it provides the calling  process  with  the  above  identifiers,
       which  then can be passed to <a href="../man3/MPI_Sendrecv.3.php">MPI_Sendrecv</a>. The user specifies the coor-
       dinate direction and the size of the step (positive or  negative).  The
       function is local.

       The  direction argument indicates the dimension of the shift, i.e., the
       coordinate whose value is modified by the shift.  The  coordinates  are
       numbered from 0 to ndims-1, where ndims is the number of dimensions.
       cating that the source or the destination  for  the  shift  is  out  of
       range.

       <B>Example:</B>  The  communicator,  comm,  has  a  two-dimensional, periodic,
       Cartesian  topology associated with  it.  A  two-dimensional  array  of
       REALs  is  stored one element per process, in variable A. One wishes to
       skew this array, by shifting column i (vertically, i.e., along the col-
       umn) by i steps.

         ....
         C find process rank
               CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr))
         C find Cartesian coordinates
               CALL <a href="../man3/MPI_Cart_coords.3.php">MPI_CART_COORDS</a>(comm, rank, maxdims, coords,
                                    ierr)
         C compute shift source and destination
               CALL MPI_CART_SHIFT(comm, 0, <B>coords(2)</B>, source,
                                   dest, ierr)
         C skew array
               CALL <a href="../man3/MPI_Sendrecv_replace.3.php">MPI_SENDRECV_REPLACE</a>(A, 1, MPI_REAL, dest, 0,
                                         source, 0, comm, status,
                                         ierr)

</PRE>
<H2>NOTE</H2><PRE>
       In  Fortran,  the  dimension  indicated  by DIRECTION = i has DIMS(i+1)
       nodes, where DIMS is the array that was used to create the grid. In  C,
       the  dimension indicated by direction = i is the dimension specified by
       dims[i].

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
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006        MPI_Cart_shift(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
