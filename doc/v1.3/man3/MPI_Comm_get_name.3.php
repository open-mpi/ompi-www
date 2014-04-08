<?php
$topdir = "../../..";
$title = "MPI_Comm_get_name(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_get_name</B>  - Returns the name that was most recently associated
       with a communicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_get_name(MPI_Comm <I>comm</I>, char *<I>comm</I><B>_</B><I>name</I>, int *<I>resultlen</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_GET_NAME(<I>COMM,</I> <I>COMM</I><B>_</B><I>NAME,</I> <I>RESULTLEN,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>RESULTLEN,</I> <I>IERROR</I>
            CHARACTER*(*) <I>COMM</I><B>_</B><I>NAME</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Get_name(char* <I>comm</I><B>_</B><I>name</I>, int&amp; <I>resultlen</I>) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator the name of which is to be returned (handle).

       <B>OUTPUT</B> <B>PARAMETER</B>

       comm_name Name previously stored  on  the  communicator,  or  an  empty
                 string if no such name exists (string).

       resultlen Length of returned name (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_get_name  returns the last name that was previously associated
       with the given communicator. The name may be set and retrieved from any
       language.  The  same  name will be returned independent of the language
       used. <I>comm</I><B>_</B><I>name</I> should be allocated so that it  can  hold  a  resulting
       string  of  length  MPI_MAX_OBJECT_NAME  characters.  MPI_Comm_get_name
       returns a copy of the set name in <I>comm</I><B>_</B><I>name</I>.

       If the user has not associated a name with a communicator, or an  error
       occurs,  MPI_Comm_get_name  will  return an empty string (all spaces in
       Fortran, "" in C and C++). The three predefined communicators will have
       predefined   names   associated   with   them.   Thus,   the  names  of
       MPI_COMM_WORLD,  MPI_COMM_SELF,  and  MPI_COMM_PARENT  will  have   the
       default of MPI_COMM_WORLD, MPI_COMM_SELF, and MPI_COMM_PARENT. The fact
       that the system may have chosen to give a default name to a  communica-
       tor  does not prevent the user from setting a name on the same communi-
       cator; doing this removes the old name and assigns the new one.

</PRE>
<H2>NOTES</H2><PRE>
       tions may be made easier if names are  associated  with  communicators,
       since  the debugger or profiler should then be able to present informa-
       tion in a less cryptic manner.

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

1.3.4                            Nov 11, 2009             <B>MPI_Comm_get_name(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
