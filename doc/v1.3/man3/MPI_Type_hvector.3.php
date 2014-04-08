<?php
$topdir = "../../..";
$title = "MPI_Type_hvector(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_hvector</B>  -  Creates a vector (strided) datatype with offset in
       bytes -- use of this routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_hvector(int <I>count</I>, int <I>blocklength</I>, MPI_Aint <I>stride</I>,
            MPI_Datatype <I>oldtype</I>, MPI_Datatype <I>*newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_HVECTOR(<I>COUNT,</I> <I>BLOCKLENGTH,</I> <I>STRIDE,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I>
                 <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>BLOCKLENGTH,</I> <I>STRIDE,</I> <I>OLDTYPE</I>
            INTEGER   <I>NEWTYPE,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of blocks (nonnegative integer).

       blocklength
                 Number of elements in each block (nonnegative integer).

       stride    Number of bytes between start of each block (integer).

       oldtype   Old datatype (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New datatype (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note  that  use  of  this  routine  is  <I>deprecated</I>  as  of  MPI-2.  Use
       <a href="../man3/MPI_Type_create_hvector.3.php">MPI_Type_create_hvector</a> instead.

       This deprecated routine is not available in C++.

       The  function  MPI_Type_hvector is identical to <a href="../man3/MPI_Type_vector.3.php">MPI_Type_vector</a>, except
       that stride is given in bytes, rather than in  elements.  The  use  for
       both  types  of  vector  constructors is illustrated in the examples in
       Section 3.12.7 of the MPI-1 Standard.

       Assume that oldtype has type map

           {(<B>type(0)</B>, <B>disp(0)</B>), ..., (type(n-1), disp(n-1))}

       with extent ex. Let bl be the blocklength. The newly  created  datatype
       has a type map with   count * bl * n  entries:

         {(<B>type(0)</B>, <B>disp(0)</B>), ..., (type(n-1), disp(n-1)),
         (<B>type(0)</B>, <B>disp(0)</B> + ex), ..., (type(n-1), disp(n-1) + ex),
         ..., (<B>type(0)</B>, <B>disp(0)</B> + (bl -1) * ex),...,(type(n-1),

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
       <a href="../man3/MPI_Type_create_hvector.3.php">MPI_Type_create_hvector</a>
       <a href="../man3/MPI_Type_vector.3.php">MPI_Type_vector</a>

1.3.4                            Nov 11, 2009              <B>MPI_Type_hvector(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
