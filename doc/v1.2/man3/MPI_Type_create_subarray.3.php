<?php
$topdir = "../../..";
$title = "MPI_Type_create_subarray(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_subarray</B>  -  Creates a data type describing an <I>n</I>-dimen-
       sional subarray of an <I>n</I>-dimensional array.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_subarray(int <I>ndims</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>sizes[]</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>subsizes[]</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>starts[]</I>, int <I>order</I>, MPI_Datatype <I>oldtype,</I> <I>MPI</I><B>_</B><I>Datatype</I> <I>*newtype)</I>

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_SUBARRAY(<I>NDIMS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>SIZES,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>SUBSIZES,</I>
            <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STARTS,</I> <I>ORDER,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>)

            INTEGER   <I>NDIMS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>SIZES(*),</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>SUBSIZES(*),</I>
            <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>STARTS(*),</I> <I>ORDER,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Datatype MPI::Datatype::Create_subarray(int <I>ndims</I>,
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>sizes</I>[], const int <I>array</I><B>_</B><I>of</I><B>_</B><I>subsizes[]</I>,
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>starts[]</I>, int <I>order</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       ndims     Number of array dimensions (positive integer).

       array_of_sizes
                 Number of elements of type <I>oldtype</I> in each dimension  of  the
                 full array (array of positive integers).

       array_of_subsizes
                 Number  of  elements of type <I>oldtype</I> in each dimension of the
                 subarray (array of positive integers).

       array_of_starts
                 Starting coordinates of the subarray in each dimension (array
                 of nonnegative integers).

       order     Array storage order flag (state).

       oldtype   Array element data type (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New data type (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The subarray type constructor creates an MPI data type describing an <I>n</I>-
       dimensional subarray of an <I>n</I>-dimensional array.  The  subarray  may  be
       situated anywhere within the full array, and may be of any nonzero size
       and a Fortran program may use C order.

       The <I>ndims</I> parameter specifies the number of dimensions in the full data
       array and gives the number of elements in <I>array</I><B>_</B><I>of</I><B>_</B><I>sizes</I>, <I>array</I><B>_</B><I>of</I><B>_</B><I>sub-</I>
       <I>sizes</I>, and <I>array</I><B>_</B><I>of</I><B>_</B><I>starts</I>.

       The number of elements of type <I>oldtype</I> in  each  dimension  of  the  <I>n</I>-
       dimensional   array   and  the  requested  subarray  are  specified  by
       <I>array</I><B>_</B><I>of</I><B>_</B><I>sizes</I> and <I>array</I><B>_</B><I>of</I><B>_</B><I>subsizes</I>, respectively. For  any  dimension
       <I>i</I>, it is erroneous to specify <I>array</I><B>_</B><I>of</I><B>_</B><I>subsizes[i]</I> &lt; 1 or <I>array</I><B>_</B><I>of</I><B>_</B><I>sub-</I>
       <I>sizes[i]</I> &gt; <I>array</I> <I>of</I> <I>sizes[i]</I>.

       The <I>array</I><B>_</B><I>of</I><B>_</B><I>starts</I> contains the starting coordinates of each dimension
       of  the  subarray. Arrays are assumed to be indexed starting from zero.
       For any dimension <I>i</I>, it is erroneous to specify

       <I>array</I><B>_</B><I>of</I><B>_</B><I>starts[i]</I> &lt; 0

       or

       <I>array</I><B>_</B><I>of</I><B>_</B><I>starts[i]</I> &gt; (<I>array</I><B>_</B><I>of</I><B>_</B><I>sizes[i]</I> - <I>array</I><B>_</B><I>of</I><B>_</B><I>subsizes[i]</I>).

       The <I>order</I> argument specifies the storage order for the subarray as well
       as the full array. It must be set to one of the following:

       -  MPI_ORDER_C:  The  ordering  used  by  C arrays, (that is, row-major
       order)

       - MPI_ORDER_FORTRAN: The ordering used by  Fortran  arrays,  (that  is,
       column-major order)

       A  <I>ndims</I>-dimensional  subarray  (<I>newtype</I>)  with no extra padding can be
       defined by the function Subarray() as follows:

          newtype = Subarray(ndims, {size , size ,..., size       },
                                         0      1           ndims-1
                    {subsize , subsize , ..., subsize       },
                            0         1               ndims-1
                    {start , start , ..., start       }, <I>oldtype</I>)
                          0       1             bduns-1

       Let the typemap of <I>oldtype</I> have the form:

          {(type , disp ), (type , disp ), ..., (type   , disp   )}
                0      0        1      1              n-1      n-1

       where type<I>i</I> is a predefined MPI data type, and let <I>ex</I> be the extent  of
       <I>oldtype</I>.

       The  Subarray()  function  is defined recursively in three equations on
       page 72 of the MPI-2 standard.

       For an example use of MPI_Type_create_subarray in the context  of  I/O,
       see Section 9.9.2 of the MPI-2 standard.

</PRE>
<H2>NOTES</H2><PRE>
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
<H2>Open MPI 1.2                    September 20MPI_Type_create_subarray(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
