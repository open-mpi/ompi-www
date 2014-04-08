<?php
$topdir = "../../..";
$title = "MPI_Info_set(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Info_set</B> - Adds a key/value pair to <I>info</I>.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Info_set(MPI_Info <I>info</I>, char <I>*key</I>, char <I>*value</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INFO_SET(<I>INFO,</I> <I>KEY,</I> <I>VALUE,</I> <I>IERROR</I>)
            INTEGER        <I>INFO,</I> <I>IERROR</I>
            CHARACTER*(*)  <I>KEY,</I> <I>VALUE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Info::Set(const char* <I>key</I>, const char* <I>value</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       info      Info object (handle).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       key       Key (string).

       value     Value (string).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Info_set  adds the (key,value) pair to <I>info</I> and overrides the value
       if a value for the same key was  previously  set.  The  <I>key</I>  and  <I>value</I>
       parameters  are  null-terminated  strings in C. In Fortran, leading and
       trailing spaces in <I>key</I> and <I>value</I> are stripped. If either <I>key</I>  or  <I>value</I>
       is  larger  than  the  allowed  maximums, the error MPI_ERR_INFO_KEY or
       MPI_ERR_INFO_VALUE is raised, respectively.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009                  <B>MPI_Info_set(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
