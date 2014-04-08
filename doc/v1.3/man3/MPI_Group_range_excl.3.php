<?php
$topdir = "../../..";
$title = "MPI_Group_range_excl(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Group_range_excl</B>  -  Produces  a  group by excluding ranges of pro-
       cesses from an existing group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Group_range_excl(MPI_Group <I>group</I>, int <I>n</I>, int <I>ranges</I>[][3],
            MPI_Group <I>*newgroup</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GROUP_RANGE_EXCL(<I>GROUP,</I> <I>N,</I> <I>RANGES,</I> <I>NEWGROUP,</I> <I>IERROR</I>)
            INTEGER   <I>GROUP,</I> <I>N,</I> <I>RANGES(3,*),</I> <I>NEWGROUP,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Group Group::Range_excl(int <I>n</I>, const int <I>ranges</I>[][3]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group     Group (handle).

       n         Number of triplets in array ranges (integer).

       ranges    A one-dimensional array  of  integer  triplets  of  the  form
                 (first  rank,  last  rank,  stride),  indicating the ranks in
                 group of processes to be excluded from the output group  new-
                 group.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newgroup  New  group  derived from above, preserving the order in group
                 (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Each computed rank must be a valid rank in group and all computed ranks
       must be distinct, or else the program is erroneous.

       The  functionality  of  this  routine  is specified to be equivalent to
       expanding the array of ranges to an array of  the  excluded  ranks  and
       passing   the   resulting   array  of  ranks  and  other  arguments  to
       <a href="../man3/MPI_Group_excl.3.php">MPI_Group_excl</a>. A call to <a href="../man3/MPI_Group_excl.3.php">MPI_Group_excl</a> is equivalent  to  a  call  to
       MPI_Group_range_excl  with each rank i in ranks replaced by the triplet
       (i,i,1) in the argument ranges.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Group_excl.3.php">MPI_Group_excl</a>
       <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>

1.3.4                            Nov 11, 2009          <B>MPI_Group_range_excl(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
