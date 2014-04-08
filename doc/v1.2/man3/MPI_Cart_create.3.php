<?php
$topdir = "../../..";
$title = "MPI_Cart_create(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Cart_create</B>  - Makes a new communicator to which Cartesian topology
       information has been attached.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Cart_create(MPI_Comm <I>comm</I><B>_</B><I>old</I>, int <I>ndims</I>, int <I>*dims</I>,
            int <I>*periods</I>, int <I>reorder</I>, MPI_Comm <I>*comm</I><B>_</B><I>cart</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_CART_CREATE(<I>COMM</I><B>_</B><I>OLD</I>, <I>NDIMS</I>, <I>DIMS</I>, <I>PERIODS</I>, <I>REORDER</I>,
                 <I>COMM</I><B>_</B><I>CART</I>, <I>IERROR</I>)
            INTEGER   <I>COMM</I><B>_</B><I>OLD</I>, <I>NDIMS</I>, <I>DIMS</I>(*), <I>COMM</I><B>_</B><I>CART</I>, <I>IERROR</I>
            LOGICAL   <I>PERIODS(*),</I> <I>REORDER</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Cartcomm Intracomm::Create_cart(int <I>ndims</I>, const int <I>dims</I>[],
            const bool <I>periods</I>[], bool <I>reorder</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm_old  Input communicator (handle).

       ndims     Number of dimensions of Cartesian grid (integer).

       dims      Integer array of size ndims specifying  the  number  of  pro-
                 cesses in each dimension.

       periods   Logical  array  of  size ndims specifying whether the grid is
                 periodic (true) or not (false) in each dimension.

       reorder   Ranking may be reordered (true) or not (false) (logical).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       comm_cart Communicator with new Cartesian topology (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Cart_create returns a handle to a new  communicator  to  which  the
       Cartesian topology information is attached. If reorder = false then the
       rank of each process in the new group is identical to its rank  in  the
       old  group. Otherwise, the function may reorder the processes (possibly
       so as to choose a good embedding of the virtual topology onto the phys-
       ical  machine). If the total size of the Cartesian grid is smaller than
       the size of the  group  of  comm,  then  some  processes  are  returned
       MPI_COMM_NULL,  in  analogy to <a href="../man3/MPI_Comm_split.3.php">MPI_Comm_split</a>. The call is erroneous if
       it specifies a grid that is larger than the group size.

       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006       MPI_Cart_create(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
