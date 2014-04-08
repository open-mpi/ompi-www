<?php
$topdir = "../../..";
$title = "MPI_Group_union(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Group_union</B>  - Produces a group by combining two groups.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Group_union(MPI_Group <I>group1</I>, MPI_Group <I>group2</I>,
            MPI_Group *<I>newgroup</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GROUP_UNION(<I>GROUP1,</I> <I>GROUP2,</I> <I>NEWGROUP,</I> <I>IERROR</I>)
            INTEGER   <I>GROUP1,</I> <I>GROUP2,</I> <I>NEWGROUP,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static Group Group::Union(const Group&amp; <I>group1</I>, const Group&amp; <I>group2</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group1    First group (handle).

       group2    Second group (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newgroup  Union group (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The set-like operations are defined as follows:

         o    union  --  All elements of the first group (group1), followed by
              all elements of second group (group2) not in first.

         o    intersect -- all elements of the first group that  are  also  in
              the second group, ordered as in first group.

         o    difference  --  all  elements of the first group that are not in
              the second group, ordered as in the first group.

       Note that for these operations the order of  processes  in  the  output
       group is determined primarily by order in the first group (if possible)
       and then, if necessary, by order in the second group. Neither union nor
       intersection are commutative, but both are associative.

       The new group can be empty, that is, equal to MPI_GROUP_EMPTY.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>

Open MPI 1.2                    September 2006       MPI_Group_union(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
