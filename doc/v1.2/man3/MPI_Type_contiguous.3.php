<?php
$topdir = "../../..";
$title = "MPI_Type_contiguous(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_contiguous</B> - Creates a contiguous datatype.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_contiguous(int <I>count</I>, MPI_Datatype <I>oldtype</I>,
            MPI_Datatype <I>*newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CONTIGUOUS(<I>COUNT,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Datatype Datatype::Create_contiguous(int <I>count</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Replication count (nonnegative integer).

       oldtype   Old datatype (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New datatype (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The  simplest datatype constructor is MPI_Type_contiguous, which allows
       replication of a datatype into contiguous locations.

       <I>newtype</I> is the datatype obtained by concatenating <I>count</I> copies of  <I>old-</I>
       <I>type</I>.  Concatenation is defined using the extent of <I>oldtype</I> as the size
       of the concatenated copies.

       <B>Example:</B> Let oldtype have type  map  {(double,  0),  (char,  8)},  with
       extent  16, and let count = 3. The type map of the datatype returned by
       newtype is

           {(double, 0), (char, 8), (double, 16), (char, 24),
           (double, 32), (char, 40)];

       i.e., alternating double and char elements, with  displacements  0,  8,
       16, 24, 32, 40.

       In general, assume that the type map of oldtype is

           {(<B>type(0)</B>, <B>disp(0)</B>),...,(type(n-1), disp(n-1))},

       with  extent ex. Then newtype has a type map with count times n entries
       defined by:

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

Open MPI 1.2                    September 2006   MPI_Type_contiguous(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
