<?php
$topdir = "../../..";
$title = "MPI_Group_excl(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Group_excl</B>  -  Produces a group by reordering an existing group and
       taking only unlisted members.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Group_excl(MPI_Group <I>group</I>, int <I>n</I>, int <I>*ranks</I>,
            MPI_Group <I>*newgroup</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GROUP_EXCL(<I>GROUP,</I> <I>N,</I> <I>RANKS,</I> <I>NEWGROUP,</I> <I>IERROR</I>)
            INTEGER   <I>GROUP,</I> <I>N,</I> <I>RANKS(*),</I> <I>NEWGROUP,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Group Group::Excl(int <I>n</I>, const int <I>ranks</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group     Group (handle).

       n         Number of elements in array ranks (integer).

       ranks     Array of integer ranks in group not to appear in newgroup.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newgroup  New group derived from above, preserving the order defined by
                 group (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The  function MPI_Group_excl creates a group of processes newgroup that
       is obtained by deleting from group those processes with ranks ranks[0],
       ...  ranks[n-1].  The ordering of processes in newgroup is identical to
       the ordering in group. Each of the n elements of ranks must be a  valid
       rank in group and all elements must be distinct; otherwise, the call is
       erroneous. If n = 0, then newgroup is identical to group.

</PRE>
<H2>NOTE</H2><PRE>
       Currently, each of the ranks to exclude must be a  valid  rank  in  the
       group  and  all elements must be distinct or the function is erroneous.
       This restriction is per the draft.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Group_range_excl.3.php">MPI_Group_range_excl</a>
       <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>

Open MPI 1.2                    September 2006        MPI_Group_excl(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
