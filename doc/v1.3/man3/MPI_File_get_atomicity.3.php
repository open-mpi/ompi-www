<?php
$topdir = "../../..";
$title = "MPI_File_get_atomicity(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_atomicity</B>  -  Returns  current  consistency  semantics for
       data-access operations.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_atomicity(MPI_File <I>fh</I>, int <I>*flag</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_GET_ATOMICITY(<I>FH</I>, <I>FLAG</I>, <I>IERROR</I>)
            INTEGER FH, IERROR
            LOGICAL FLAG

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::File::Get_atomicity() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       flag      true if atomic mode is enabled, false if  nonatomic  mode  is
                 enabled (boolean).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_get_atomicity  returns  the  current consistency semantics for
       data access operations on the set of file handles created by  one  col-
       lective  <a href="../man3/MPI_File_open.3.php">MPI_File_open</a>.  If  <I>flag</I>  is  <I>true,</I>  atomic  mode is currently
       enabled; if <I>flag</I> is <I>false,</I> nonatomic mode is currently enabled.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  For  MPI I/O function errors, the default error handler is set
       to  MPI_ERRORS_RETURN.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;      the      predefined     error     handler
       MPI_ERRORS_ARE_FATAL may be used to make I/O errors  fatal.  Note  that
       MPI  does not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009        <B>MPI_File_get_atomicity(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
