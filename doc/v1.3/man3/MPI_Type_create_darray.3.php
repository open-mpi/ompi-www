<?php
$topdir = "../../..";
$title = "MPI_Type_create_darray(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_darray</B> - Creates a distributed array datatype;

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_darray(int <I>size</I>, int <I>rank</I>, int <I>ndims</I>,
            int <I>array</I><B>_</B><I>of</I><B>_</B><I>gsizes</I>[], int <I>array</I><B>_</B><I>of</I><B>_</B><I>distribs</I>[],
            int <I>array</I><B>_</B><I>of</I><B>_</B><I>dargs</I>[], int <I>array</I><B>_</B><I>of</I><B>_</B><I>psizes</I>[],
            int <I>order</I>, MPI_Datatype <I>oldtype</I>, MPI_Datatype <I>*newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_DARRAY(<I>SIZE,</I> <I>RANK,</I> <I>NDIMS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>GSIZES,</I>
            <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISTRIBS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DARGS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>PSIZES,</I> <I>ORDER,</I>
            <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>)

            INTEGER   <I>SIZE,</I> <I>RANK,</I> <I>NDIMS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>GSIZES(*),</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISTRIBS(*),</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DARGS(*),</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>PSIZES(*),</I> <I>ORDER,</I> <I>OLDTYPE,</I>
                 <I>NEWTYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Datatype MPI::Datatype::Create_darray(int <I>size</I>, int <I>rank</I>,
            int <I>ndims</I>, const int <I>array</I><B>_</B><I>of</I><B>_</B><I>gsizes</I>[],
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>distribs</I>[], const int <I>array</I><B>_</B><I>of</I><B>_</B><I>dargs</I>[],
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>psizes</I>[], int <I>order</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       size      Size of process group (positive integer).

       rank      Rank in process group (nonnegative integer).

       ndims     Number of array dimensions as well as process grid dimensions
                 (positive integer).

       array_of_gsizes
                 Number of elements of  type  <I>oldtype</I>  in  each  dimension  of
                 global array (array of positive integers).

       array_of_distribs
                 Distribution of array in each dimension (array of state).

       array_of_dargs
                 Distribution  argument  in  each dimension (array of positive
                 integers).

       array_of_psizes
                 Size of process grid in each  dimension  (array  of  positive
                 integers).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_create_darray  can  be  used to generate the data types corre-
       sponding to the distribution of an ndims-dimensional array  of  <I>oldtype</I>
       elements  onto  an  <I>ndims</I>-dimensional grid of logical processes. Unused
       dimensions of <I>array</I><B>_</B><I>of</I><B>_</B><I>psizes</I> should  be  set  to  1.  For  a  call  to
       MPI_Type_create_darray to be correct, the equation

           <I>ndims</I>-1
         pi              <I>array</I><B>_</B><I>of</I><B>_</B><I>psizes[i]</I> = <I>size</I>
           <I>i</I>=0

       must  be  satisfied.  The  ordering of processes in the process grid is
       assumed to be row-major, as in the case of  virtual  Cartesian  process
       topologies in MPI-1.

       Each dimension of the array can be distributed in one of three ways:

       - MPI_DISTRIBUTE_BLOCK - Block distribution
       - MPI_DISTRIBUTE_CYCLIC - Cyclic distribution
       - MPI_DISTRIBUTE_NONE - Dimension not distributed.

       The  constant MPI_DISTRIBUTE_DFLT_DARG specifies a default distribution
       argument. The distribution argument for a dimension that  is  not  dis-
       tributed  is  ignored. For any dimension <I>i</I> in which the distribution is
       MPI_DISTRIBUTE_BLOCK,  it  erroneous  to  specify  <I>array</I><B>_</B><I>of</I><B>_</B><I>dargs[i]</I>  <I>*</I>
       <I>array</I><B>_</B><I>of</I><B>_</B><I>psizes[i]</I> &lt; <I>array</I><B>_</B><I>of</I><B>_</B><I>gsizes[i]</I>.

       For  example,  the HPF layout ARRAY(<B>CYCLIC(15)</B>) corresponds to MPI_DIS-
       TRIBUTE_CYCLIC with a distribution argument of 15, and the  HPF  layout
       ARRAY(BLOCK)  corresponds  to  MPI_DISTRIBUTE_BLOCK with a distribution
       argument of MPI_DISTRIBUTE_DFLT_DARG.

       The <I>order</I> argument is used as in  <a href="../man3/MPI_Type_create_subarray.3.php">MPI_TYPE_CREATE_SUBARRAY</a>  to  specify
       the storage order. Therefore, arrays described by this type constructor
       may be stored in Fortran (column-major) or C (row-major)  order.  Valid
       values for order are MPI_ORDER_FORTRAN and MPI_ORDER_C.

       This  routine  creates  a  new  MPI data type with a typemap defined in
       terms of a function called "cyclic()" (see below).

       Without loss of generality, it suffices to define the typemap  for  the
       MPI_DISTRIBUTE_CYCLIC  case where MPI_DISTRIBUTE_DFLT_DARG is not used.

       MPI_DISTRIBUTE_BLOCK and MPI_DISTRIBUTE_NONE  can  be  reduced  to  the
       MPI_DISTRIBUTE_CYCLIC case for dimension <I>i</I> as follows.

       MPI_DISTRIBUTE_BLOCK   with  <I>array</I><B>_</B><I>of</I><B>_</B><I>dargs[i]</I>  equal  to  MPI_DISTRIB-
       UTE_DFLT_DARG   is    equivalent    to    MPI_DISTRIBUTE_CYCLIC    with
       <I>array</I><B>_</B><I>of</I><B>_</B><I>dargs[i]</I> set to

          (<I>array</I><B>_</B><I>of</I><B>_</B><I>gsizes[i]</I> + <I>array</I><B>_</B><I>of</I><B>_</B><I>psizes[i]</I> - 1)/<I>array</I><B>_</B><I>of</I><B>_</B><I>psizes[i]</I>

       If <I>array</I><B>_</B><I>of</I><B>_</B><I>dargs[i]</I> is not MPI_DISTRIBUTE_DFLT_DARG, then MPI_DISTRIB-

</PRE>
<H2>NOTES</H2><PRE>
       For both Fortran and C arrays, the ordering of processes in the process
       grid is assumed to be row-major. This is consistent with  the  ordering
       used  in  virtual Cartesian process topologies in MPI-1. To create such
       virtual process topologies, or to find the coordinates of a process  in
       the  process grid, etc., users may use the corresponding functions pro-
       vided in MPI-1.

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

1.3.4                            Nov 11, 2009        <B>MPI_Type_create_darray(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
