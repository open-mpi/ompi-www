<?php
$topdir = "../../..";
$title = "MPI_Cart_sub(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cart_sub</B>   -  Partitions  a communicator into subgroups, which form
       lower-dimensional Cartesian subgrids.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cart_sub(MPI_Comm <I>comm</I>, int <I>*remain</I><B>_</B><I>dims</I>, MPI_Comm <I>*comm</I><B>_</B><I>new</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CART_SUB(<I>COMM,</I> <I>REMAIN</I><B>_</B><I>DIMS,</I> <I>COMM</I><B>_</B><I>NEW,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>COMM</I><B>_</B><I>NEW,</I> <I>IERROR</I>
            LOGICAL   <I>REMAIN</I><B>_</B><I>DIMS</I>(*)

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Cartcomm Cartcomm::Sub(const bool <I>remain</I><B>_</B><I>dims</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator with Cartesian structure (handle).

       remain_dims
                 The ith entry of remain_dims specifies whether the ith dimen-
                 sion  is  kept  in  the  subgrid (true) or is dropped (false)
                 (logical vector).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       comm_new  Communicator containing the subgrid that includes the calling
                 process (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       If  a  Cartesian  topology  has  been created with <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>, the
       function  MPI_Cart_sub can be used to partition the communicator  group
       into  subgroups  that form lower-dimensional Cartesian subgrids, and to
       build for each subgroup a  communicator  with  the  associated  subgrid
       Cartesian    topology.   (This   function   is   closely   related   to
       <a href="../man3/MPI_Comm_split.3.php">MPI_Comm_split</a>.)

       <B>Example:</B> Assume that  <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>( ..., comm) has defined a (2 x  3
       x 4)   grid. Let  remain_dims = (true, false, true). Then a call to

           MPI_Cart_sub(comm, remain_dims, comm_new)

       will  create  three communicators, each with eight processes in a 2 x 4
       Cartesian topology. If remain_dims = (false, false, true) then the call
       to  MPI_Cart_sub(comm,  remain_dims, comm_new) will create six nonover-
       lapping communicators, each with four processes, in  a  one-dimensional
       Cartesian topology.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>
       <a href="../man3/MPI_Comm_split.3.php">MPI_Comm_split</a>

1.3.4                            Nov 11, 2009                  <B>MPI_Cart_sub(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
