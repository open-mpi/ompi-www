<?php
$topdir = "../../..";
$title = "MPI_Comm_create(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_create</B> - Creates a new communicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_create(MPI_Comm <I>comm</I>, MPI_Group <I>group</I>, MPI_Comm <I>*newcomm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_CREATE(<I>COMM,</I> <I>GROUP,</I> <I>NEWCOMM,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>GROUP,</I> <I>NEW,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Intercomm MPI::Intercomm::Create(const Group&amp; <I>group</I>) const

       MPI::Intracomm MPI::Intracomm::Create(const Group&amp; <I>group</I>) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator (handle).

       group     Group, which is a subset of the group of comm (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newcomm   New communicator (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  function  creates  a  new communicator newcomm with communication
       group defined by group and a new context. The function sets <I>newcomm</I>  to
       a  new communicator that spans all the processes that are in the group.
       It sets <I>newcomm</I> to MPI_COMM_NULL for processes  that  are  not  in  the
       group.   The call is erroneous if not all group arguments have the same
       value, or if group is not a subset of the group associated  with  comm.
       Note  that  the call must be executed by all processes in comm, even if
       they do not belong to the new group.

</PRE>
<H2>NOTES</H2><PRE>
       MPI_Comm_create provides a means of making a subset  of  processes  for
       the  purpose  of separate MIMD computation, with separate communication
       space. <I>newcomm</I>, which is created by MPI_Comm_create,  can  be  used  in
       subsequent  calls  to  MPI_Comm_create (or other communicator construc-
       tors) to further subdivide a  computation  into  parallel  sub-computa-
       tions. A more general service is provided by <a href="../man3/MPI_Comm_split.3.php">MPI_Comm_split</a>.

</PRE>
<H2>ERRORS</H2><PRE>
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_split.3.php">MPI_Comm_split</a>

       <a href="../man3/MPI_Intercomm_create.3.php">MPI_Intercomm_create</a>

Open MPI 1.2                    September 2006       MPI_Comm_create(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
