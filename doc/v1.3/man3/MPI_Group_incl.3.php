<?php
$topdir = "../../..";
$title = "MPI_Group_incl(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Group_incl</B>   - Produces a group by reordering an existing group and
       taking only listed members.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Group_incl(MPI_Group <I>group</I>, int <I>n</I>, int <I>*ranks</I>,
            MPI_Group <I>*newgroup</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GROUP_INCL(<I>GROUP,</I> <I>N,</I> <I>RANKS,</I> <I>NEWGROUP,</I> <I>IERROR</I>)
            INTEGER   <I>GROUP,</I> <I>N,</I> <I>RANKS(*),</I> <I>NEWGROUP,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Group Group::Incl(int <I>n</I>, const int <I>ranks</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group     Group (handle).

       n         Number  of  elements  in  array  ranks  (and  size  of   <I>new-</I>
                 <I>group</I>)(integer).

       ranks     Ranks  of  processes in group to appear in newgroup (array of
                 integers).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newgroup  New group derived from above, in the order defined  by  ranks
                 (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The  function MPI_Group_incl creates a group group_out that consists of
       the n processes in  group  with  ranks  rank[0],  ...,  rank[n-1];  the
       process  with  rank i in group_out is the process with rank ranks[i] in
       group. Each of the n elements of ranks must be a valid  rank  in  group
       and all elements must be distinct, or else the program is erroneous. If
       n = 0, then  group_out  is  MPI_GROUP_EMPTY.  This  function  can,  for
       instance, be used to reorder the elements of a group.

</PRE>
<H2>NOTE</H2><PRE>
       This  implementation  does not currently check to ensure that there are
       no duplicates in the list of ranks.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Group_compare.3.php">MPI_Group_compare</a>
       <a href="../man3/MPI_Group_range_incl.3.php">MPI_Group_range_incl</a>
       <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>

1.3.4                            Nov 11, 2009                <B>MPI_Group_incl(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
