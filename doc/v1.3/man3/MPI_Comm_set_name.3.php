<?php
$topdir = "../../..";
$title = "MPI_Comm_set_name(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_set_name</B> - Associates a name with a communicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_set_name(MPI_Comm <I>comm</I>, char *<I>comm</I><B>_</B><I>name</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_SET_NAME(<I>COMM,</I> <I>COMM</I><B>_</B><I>NAME,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>IERROR</I>
            CHARACTER*(*) <I>COMM</I><B>_</B><I>NAME</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Set_name(const char* <I>comm</I><B>_</B><I>name</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       comm      Communicator whose identifier is to be set (handle).

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm_name Character  string to be used as the identifier for the commu-
                 nicator (string).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_set_name allows a user to associate a name string with a  com-
       municator.  The character string that is passed to MPI_Comm_set_name is
       saved inside the MPI library (so it can be freed by the caller  immedi-
       ately  after  the  call,  or allocated on the stack). Leading spaces in
       <I>name</I> are significant, but trailing ones are not.

       MPI_Comm_set_name is a local (noncollective) operation,  which  affects
       only  the name of the communicator as seen in the process that made the
       MPI_Comm_set_name call. There is no requirement that the same (or  any)
       name be assigned to a communicator in every process where it exists.

       The  length  of  the name that can be stored is limited to the value of
       MPI_MAX_OBJECT_NAME in Fortran and MPI_MAX_OBJECT_NAME-1 in C  and  C++
       (to  allow  for the null terminator). Attempts to set names longer than
       this will result in truncation of the  name.  MPI_MAX_OBJECT_NAME  must
       have a value of at least 64.

</PRE>
<H2>NOTES</H2><PRE>
       Since  MPI_Comm_set_name is provided to help debug code, it is sensible

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
       <a href="../man3/MPI_Comm_get_name.3.php">MPI_Comm_get_name</a>

1.3.4                            Nov 11, 2009             <B>MPI_Comm_set_name(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
