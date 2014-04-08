<?php
$topdir = "../../..";
$title = "MPI_Type_create_hindexed(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_hindexed</B> - Creates an indexed data type with offsets in
       bytes.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_hindexed(int <I>count</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>,
            MPI_Aint <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>[], MPI_Datatype <I>oldtype</I>,
            MPI_Datatype *<I>newtype</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_HINDEXED(<I>COUNT</I>, <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS</I>,
            <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS</I>, <I>OLDTYPE</I>, <I>NEWTYPE</I>, <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS(*),</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS</I>(*)

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Datatype MPI::Datatype::Create_hindexed(int <I>count</I>,
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>,
            const MPI::Aint <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of blocks (nonnegative integer).

       array_of_blocklengths
                 Number of elements in each block (array of nonnegative  inte-
                 gers).

       array_of_displacements
                 Byte displacement of each block (array of integers).

       oldtype   Old data type (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New data type (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_create_hindexed  is identical to <a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a>, except that
       block displacements in <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I> are specified  in  bytes,
       rather than in multiples of the <I>oldtype</I> extent.

       Assume that <I>oldtype</I> has type map

           {(<B>type(0)</B>, <B>disp(0)</B>), ..., (type(n-1), disp(n-1))},

       with  extent  <I>ex</I>.  Let B be the <I>array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I> argument and D be
       the <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I> argument. The newly created data type has
         (type(n-1), disp(n-1) + D[count-1] + (B[count-1] -1)* ex)}

       NOTE - This routine replaces <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>,  which  is  deprecated.
       See  the  man page <B><a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>(3)</B> for information about that rou-
       tine.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI  standard  prescribes  portable   Fortran   syntax   for   the
       <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS</I>(*)  argument  only  for  Fortran 90.  FORTRAN 77
       users may use the non-portable syntax

            INTEGER*MPI_ADDRESS_KIND <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS</I>(*)

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

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

       See the <B>MPI(3)</B> man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a>
       <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>

</PRE>
<H2>Open MPI 1.2                    September 20MPI_Type_create_hindexed(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
