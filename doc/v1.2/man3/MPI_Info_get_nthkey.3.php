<?php
$topdir = "../../..";
$title = "MPI_Info_get_nthkey(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Info_get_nthkey</B> - Returns the <I>n</I>th defined key in <I>info</I>.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Info_get_nthkey(MPI_Info <I>info</I>, int <I>n</I>, char <I>*key</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INFO_GET_NTHKEY(<I>INFO,</I> <I>N,</I> <I>KEY,</I> <I>IERROR</I>)
            INTEGER        <I>INFO,</I> <I>N,</I> <I>IERROR</I>
            CHARACTER*(*)  <I>KEY</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Info::Get_nthkey(int <I>n</I>, char* <I>key</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       info      Info object (handle).

       n         Key number (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       key       Key (string).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Info_get_nthkey  returns the <I>n</I>th defined key in <I>info</I>. Keys are num-
       bered 0...<I>N</I> - 1 where <I>N</I> is the value  returned  by  <a href="../man3/MPI_Info_get_nkeys.3.php">MPI_Info_get_nkeys</a>.
       All  keys  between 0 and <I>N</I> - 1 are guaranteed to be defined. The number
       of a given key does not change as long as <I>info</I>  is  not  modified  with
       <a href="../man3/MPI_Info_set.3.php">MPI_Info_set</a> or <a href="../man3/MPI_Info_delete.3.php">MPI_Info_delete</a>.

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
