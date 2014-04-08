<?php
$topdir = "../../..";
$title = "MPI_Intercomm_merge(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Intercomm_merge</B>  - Creates an intracommunicator from an intercommu-
       nicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Intercomm_merge(MPI_Comm <I>intercomm</I>, int <I>high</I>,
            MPI_Comm <I>*newintracomm</I>

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INTERCOMM_MERGE(<I>INTERCOMM,</I> <I>HIGH,</I> <I>NEWINTRACOMM,</I> <I>IERROR</I>)
            INTEGER   <I>INTERCOMM,</I> <I>NEWINTRACOMM,</I> <I>IERROR</I>
            LOGICAL   <I>HIGH</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Intracomm Intercomm::Merge(bool <I>high</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       intercomm Intercommunicator (type indicator).

       high      Used to order the groups of the two intracommunicators within
                 comm when creating the new communicator (type indicator).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newintracomm
                 Created intracommunicator (type indicator).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  function  creates  an intracommunicator from the union of the two
       groups that are associated with intercomm. All processes should provide
       the  same high value within each of the two groups. If processes in one
       group provide the value high = false and processes in the  other  group
       provide  the  value  high = true, then the union orders the "low" group
       before the "high" group. If all processes provide the same  high  argu-
       ment,  then  the order of the union is arbitrary. This call is blocking
       and collective within the union of the two groups.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>

1.3.4                            Nov 11, 2009           <B>MPI_Intercomm_merge(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
