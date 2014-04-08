<?php
$topdir = "../../..";
$title = "MPI_Type_indexed(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_indexed</B> - Creates an indexed datatype.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_indexed(int <I>count</I>, int <I>*array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>,
            int <I>*array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>, MPI_Datatype <I>oldtype</I>,
            MPI_Datatype <I>*newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_INDEXED(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS(*),</I> <I>OLDTYPE,</I> <I>NEWTYPE</I>
            INTEGER   <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Datatype Datatype::Create_indexed(int <I>count</I>,
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>[],
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number  of  blocks -- also number of entries in array_of_dis-
                 placements and array_of_blocklengths (nonnegative integer).

       array_of_blocklengths
                 Number of elements per block (array of nonnegative integers).

       array_of_displacements
                 Displacement  for  each block, in multiples of oldtype extent
                 (array of integer).

       oldtype   Old datatype (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New datatype (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The function MPI_Type_indexed allows replication  of  an  old  datatype
       into  a  sequence  of  blocks (each block is a concatenation of the old
       datatype), where each block can contain a different  number  of  copies
       and  have  a different displacement. All block displacements are multi-
       ples of the old data type's extent.

       <B>Example:</B> Let oldtype have type  map  {(double,  0),  (char,  8)},  with
       extent  16.  Let   B  =  (3,  1)  and  let  D  =  (4,  0).   A  call to
       64, and one copy starting at displacement 0.

       In general, assume that oldtype has type map

           {(<B>type(0)</B>, <B>disp(0)</B>), ..., (type(n-1), disp(n-1))},

       with extent ex. Let B be the array_of_blocklength argument and D be the
       array_of_displacements argument. The newly created datatype has
       n x S ^count-1
           i = 0           B[i]  entries:

           {(<B>type(0)</B>, <B>disp(0)</B> + D[0]* ex), ...,
           (type(n-1), disp(n-1) + D[0]* ex), ...,
           (<B>type(0)</B>, <B>disp(0)</B> + (D[0] + B[0]-1)* ex), ...,
           (type(n-1), disp(n-1) + (D[0]+ B[0]-1)* ex), ...,
           (<B>type(0)</B>, <B>disp(0)</B> + D[count-1]* ex), ...,
           (type(n-1), disp(n-1) + D[count-1]* ex), ...,
           (<B>type(0)</B>, <B>disp(0)</B> +  (D[count-1] + B[count-1] -1)* ex), ...,
           (type(n-1), disp(n-1) + (D[count-1] + B[count-1] -1)* ex)}

       A call to <a href="../man3/MPI_Type_vector.3.php">MPI_Type_vector</a>(count, blocklength, stride, oldtype, newtype)
       is equivalent to a call to MPI_Type_indexed(count, B, D, oldtype,  new-
       type) where

           D[j] = j * stride, j = 0,..., count-1

       and

           B[j] = blocklength, j = 0, .., count-1

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
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a>
       <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>

Open MPI 1.2                    September 2006      MPI_Type_indexed(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
