<?php
$topdir = "../../..";
$title = "MPI_Intercomm_create(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Intercomm_create</B> - Creates an intercommuncator from two intracommu-
       nicators.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Intercomm_create(MPI_Comm <I>local</I><B>_</B><I>comm</I>, int <I>local</I><B>_</B><I>leader</I>,
            MPI_Comm <I>peer</I><B>_</B><I>comm</I>, int <I>remote</I><B>_</B><I>leader</I>, int <I>tag</I>, MPI_Comm <I>*newintercomm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INTERCOMM_CREATE(<I>LOCAL</I><B>_</B><I>COMM,</I> <I>LOCAL</I><B>_</B><I>LEADER,</I> <I>PEER</I><B>_</B><I>COMM,</I>
                 <I>REMOTE</I><B>_</B><I>LEADER,</I> <I>TAG,</I> <I>NEWINTERCOMM,</I> <I>IERROR</I>)
            INTEGER   <I>LOCAL</I><B>_</B><I>COMM,</I> <I>LOCAL</I><B>_</B><I>LEADER,</I> <I>PEER</I><B>_</B><I>COMM,</I> <I>REMOTE</I><B>_</B><I>LEADER</I>
            INTEGER   <I>TAG,</I> <I>NEWINTERCOMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Intercomm Intracomm::Create_intercomm(int <I>local</I><B>_</B><I>leader</I>, const
            Comm&amp; <I>peer</I><B>_</B><I>comm</I>, int <I>remote</I><B>_</B><I>leader</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMTERS</H2><PRE>
       local_comm
                 The communicator containing the process  that  initiates  the
                 inter-communication (handle).

       local_leader
                 Rank of local group leader in local_comm (integer).

       peer_comm "Peer"  communicator;  significant  only  at the local_leader
                 (handle).

       remote_leader
                 Rank of remote group leader in peer_comm; significant only at
                 the local_leader (integer).

       tag       Message tag used to identify new intercommunicator (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newintercomm
                 Created intercommunicator (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This call creates an intercommunicator. It is collective over the union
       of  the  local  and  remote  groups. Processes should provide identical
       local_comm and local_leader arguments within each group. Wildcards  are
       not permitted for remote_leader, local_leader, and tag.

       This   call   uses   point-to-point   communication  with  communicator

</PRE>
<H2>NOTES</H2><PRE>
       We  recommend  using a dedicated peer communicator, such as a duplicate
       of MPI_COMM_WORLD, to avoid trouble with peer communicators.

       The MPI 1.1 Standard contains two mutually exclusive  comments  on  the
       input intracommunicators.  One says that their repective groups must be
       disjoint; the other that the leaders can be the  same  process.   After
       some  discussion  by the MPI Forum, it has been decided that the groups
       must be disjoint.  Note that the <B>reason</B> given for this in the  standard
       is  <B>not</B>  the  reason  for  this choice; rather, the <B>other</B> operations on
       intercommunicators (like <I>MPI</I><B>_</B><I>Intercomm</I><B>_</B><I>merge</I> ) do not make sense if the
       groups are not disjoint.

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
       <a href="../man3/MPI_Intercomm_merge.3.php">MPI_Intercomm_merge</a>
       <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>
       <a href="../man3/MPI_Comm_remote_group.3.php">MPI_Comm_remote_group</a>
       <a href="../man3/MPI_Comm_remote_size.3.php">MPI_Comm_remote_size</a>

Open MPI 1.2                    September 2006  MPI_Intercomm_create(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
