<?php
$topdir = "../../..";
$title = "MPI_Comm_test_inter(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_test_inter</B>   - Tests to see if a comm is an intercommunicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_test_inter(MPI_Comm <I>comm</I>, int <I>*flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_TEST_INTER(<I>COMM,</I> <I>FLAG,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>IERROR</I>
            LOGICAL   <I>FLAG</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool Comm::Is_inter() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       flag     (Logical.)

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This local routine allows the calling process to determine the type  of
       a  communicator. It returns true for an intercommunicator, false for an
       intracommunicator.

       The type of communicator also affects the value returned by three other
       functions.   When dealing with an intracommunicator (enables communica-
       tion within a single group), the  functions  listed  below  return  the
       expected  values,  group  size,  group, and rank.  When dealing with an
       inter-communicator, however, they return the following values:

       <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>  Returns the size of the local group.
       <a href="../man3/MPI_Comm_group.3.php">MPI_Comm_group</a> Returns the local group.
       <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>  Returns the rank in the local group.

       To return the remote group and remote group size of an inter-communica-
       tor,  use the <a href="../man3/MPI_Comm_remote_group.3.php">MPI_Comm_remote_group</a> and <a href="../man3/MPI_Comm_remote_size.3.php">MPI_Comm_remote_size</a> functions.

       The operation <a href="../man3/MPI_Comm_compare.3.php">MPI_Comm_compare</a> is valid  for  intercommunicators.  Both
       communicators  must  be  either  intra-  or intercommunicators, or else
       MPI_UNEQUAL results. Both corresponding local and  remote  groups  must
       compare  correctly to get the results MPI_CONGRUENT and MPI_SIMILAR. In
       particular, it is possible for MPI_SIMILAR to result because either the
       local or remote groups were similar but not identical.

       The  following  accessors provide consistent access to the remote group
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

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_remote_group.3.php">MPI_Comm_remote_group</a>
       <a href="../man3/MPI_Comm_remote_size.3.php">MPI_Comm_remote_size</a>
       <a href="../man3/MPI_Intercomm_create.3.php">MPI_Intercomm_create</a>
       <a href="../man3/MPI_Intercomm_merge.3.php">MPI_Intercomm_merge</a>

Open MPI 1.2                    September 2006   MPI_Comm_test_inter(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
