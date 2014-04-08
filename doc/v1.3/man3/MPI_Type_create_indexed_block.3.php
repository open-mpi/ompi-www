<?php
$topdir = "../../..";
$title = "MPI_Type_create_indexed_block(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_indexed_block</B>  -  Creates an indexed data type with the
       same block length for all blocks.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_indexed_block(int <I>count</I>, int <I>blocklength</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>[], MPI_Datatype <I>oldtype</I>, MPI_Datatype *<I>newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_INDEXED_BLOCK(<I>COUNT,</I> <I>BLOCKLENGTH,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>BLOCKLENGTH,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS(*),</I>
                    <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Datatype MPI::Datatype::Create_indexed_block( int <I>count</I>,
            int <I>blocklength</I>, const int <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Length of array of displacements (integer).

       blocklength
                 Size of block (integer).

       array_of_displacements
                 Array of displacements (array of integers).

       oldtype   Old data type (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New data type (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_create_indexed_block creates an indexed  data  type  with  the
       same block length for all blocks.

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

1.3.4                            Nov 11, 2009 <B>MPI_Type_create_indexed_block(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
