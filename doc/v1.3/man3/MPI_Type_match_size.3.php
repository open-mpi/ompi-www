<?php
$topdir = "../../..";
$title = "MPI_Type_match_size(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_match_size</B> - Returns an MPI datatype of a given type and size

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_match_size(int <I>typeclass</I>, int <I>size</I>,
            MPI_Datatype *<I>type</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_MATCH_SIZE(<I>TYPECLASS,</I> <I>SIZE,</I> <I>TYPE,</I> <I>IERROR</I>)
            INTEGER   <I>TYPECLASS,</I> <I>SIZE,</I> <I>TYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::Datatype MPI::Match_size(int <I>typeclass</I>, int <I>size</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       typeclass Generic type specifier (integer).

       size      Size, in bytes, of representation (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       type      Datatype with correct type and size (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The  function returns an MPI datatype matching a local variable of type
       (<I>typeclass</I>, <I>size</I>). The returned type is a reference (handle) to a  pre-
       defined named datatype, not a duplicate. This type cannot be freed.

       The  value  of  <I>typeclass</I>  may  be  set  to  one of MPI_TYPECLASS_REAL,
       MPI_TYPECLASS_INTEGER, or MPI_TYPECLASS_COMPLEX, corresponding  to  the
       desired datatype.

       MPI_type_match_size  can  be  used  to obtain a size-specific type that
       matches a Fortran numeric intrinsic type: first call <a href="../man3/MPI_Sizeof.3.php">MPI_Sizeof</a> to com-
       pute  the  variable size, then call MPI_Type_match_size to find a suit-
       able datatype. In  C  and  C++,  use  the  sizeof  builtin  instead  of
       <a href="../man3/MPI_Sizeof.3.php">MPI_Sizeof</a>.

       It is erroneous to specify a size not supported by the compiler.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.
       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Sizeof.3.php">MPI_Sizeof</a>
       <a href="../man3/MPI_Type_get_extent.3.php">MPI_Type_get_extent</a>

1.3.4                            Nov 11, 2009           <B>MPI_Type_match_size(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
