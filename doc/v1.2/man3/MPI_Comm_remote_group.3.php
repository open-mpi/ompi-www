<?php
$topdir = "../../..";
$title = "MPI_Comm_remote_group(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_remote_group</B>   -  Accesses the remote group associated with an
       intercommunicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_remote_group(MPI_Comm <I>comm</I>, MPI_Group <I>*group</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_REMOTE_GROUP(<I>COMM,</I> <I>GROUP,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>GROUP,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Group Intercomm::Get_remote_group() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       group     Remote group of communicator.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_remote_group accesses the  remote  group  associated  with  an
       intercommunicator.

       The       intercommunicator       accessors       (<a href="../man3/MPI_Comm_test_inter.3.php">MPI_Comm_test_inter</a>,
       <a href="../man3/MPI_Comm_remote_size.3.php">MPI_Comm_remote_size</a>, MPI_Comm_remote_group) are all local  operations.

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
       <a href="../man3/MPI_Comm_test_inter.3.php">MPI_Comm_test_inter</a>
       <a href="../man3/MPI_Comm_remote_size.3.php">MPI_Comm_remote_size</a>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
