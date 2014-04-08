<?php
$topdir = "../../..";
$title = "MPI_Comm_rank(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_rank</B>  - Determines the rank of the calling process in the com-
       municator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_rank(MPI_Comm <I>comm</I>, int <I>*rank</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_RANK(<I>COMM,</I> <I>RANK,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>RANK,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Comm::Get_rank() const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       rank      Rank of the calling process in group of comm (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This function gives the rank of the process in the particular  communi-
       cator's  group.  It is equivalent to accessing the communicator's group
       with <a href="../man3/MPI_Comm_group.3.php">MPI_Comm_group</a>, computing the rank using <a href="../man3/MPI_Group_rank.3.php">MPI_Group_rank</a>, and  then
       freeing the temporary group via <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>.

       Many  programs  will  be written with the master-slave model, where one
       process (such as the rank-zero process) will play a  supervisory  role,
       and the other processes will serve as compute nodes. In this framework,
       <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a> and MPI_Comm_rank are useful for determining the roles of
       the various processes of a communicator.

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

1.3.4                            Nov 11, 2009                 <B>MPI_Comm_rank(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
