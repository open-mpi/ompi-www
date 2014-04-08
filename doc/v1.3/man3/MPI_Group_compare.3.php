<?php
$topdir = "../../..";
$title = "MPI_Group_compare(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Group_compare</B>  - Compares two groups.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Group_compare(MPI_Group <I>group1</I>, MPI_Group <I>group2</I>,
            int <I>*result</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GROUP_COMPARE(<I>GROUP1,</I> <I>GROUP2,</I> <I>RESULT,</I> <I>IERROR</I>)
            INTEGER   <I>GROUP1,</I> <I>GROUP2,</I> <I>RESULT,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static int Group::Compare(const Group&amp; <I>group1</I>, const Group&amp; <I>group2</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group1    First group (handle).

       group2    Second group (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       result    Integer  which  is  MPI_IDENT if the order and members of the
                 two groups are the same, MPI_SIMILAR if only the members  are
                 the same, and MPI_UNEQUAL otherwise.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_IDENT  results  if the group members and group order is exactly the
       same in both groups. This happens for instance if group1 and group2 are
       the  same handle. MPI_SIMILAR results if the group members are the same
       but the order is different. MPI_UNEQUAL results otherwise.

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

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
