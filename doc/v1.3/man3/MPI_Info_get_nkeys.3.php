<?php
$topdir = "../../..";
$title = "MPI_Info_get_nkeys(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Info_get_nkeys</B>  -  Gets  the number of keys currently defined in an
       info object.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Info_get_nkeys(MPI_Info <I>info</I>, int <I>*nkeys</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INFO_GET_NKEYS(<I>INFO,</I> <I>NKEYS,</I> <I>IERROR</I>)
            INTEGER        <I>INFO,</I> <I>NKEYS,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI::Info::Get_nkeys() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       info      Info object (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       nkeys     Number of defined keys (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Info_get_nkeys returns the number  of  currently  defined  keys  in
       <I>info</I>.

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
       <a href="../man3/MPI_Info_get.3.php">MPI_Info_get</a>
       <a href="../man3/MPI_Info_get_nthkey.3.php">MPI_Info_get_nthkey</a>
       MPI_Info_get_valueln

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
