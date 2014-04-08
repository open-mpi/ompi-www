<?php
$topdir = "../../..";
$title = "MPI_Type_get_name(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_get_name</B> - Gets the name of a data type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_get_name(MPI_Datatype <I>type</I>, char *<I>type</I><B>_</B><I>name</I>,
            int *<I>resultlen</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       TYPE_GET_NAME(<I>TYPE,</I> <I>TYPE</I><B>_</B><I>NAME,</I> <I>RESULTLEN,</I> <I>IERROR</I>)
            INTEGER   <I>TYPE,</I> <I>RESULTLEN,</I> <I>IERROR</I>
            CHARACTER*(*) <I>TYPE</I><B>_</B><I>NAME</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Get_name(char* <I>type</I><B>_</B><I>name</I>, int&amp; <I>resultlen</I>)
            const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       type      Data type whose name is to be returned (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       type_name The  name  previously  stored  on  the data type, or an empty
                 string if not such name exists (string).

       resultlen Length of returned name (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_get_name returns the printable identifier associated  with  an
       MPI data type.

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
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
