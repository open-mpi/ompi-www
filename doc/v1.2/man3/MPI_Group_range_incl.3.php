<?php
$topdir = "../../..";
$title = "MPI_Group_range_incl(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Group_range_incl</B>  -  Creates a new group from ranges of ranks in an
       existing group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Group_range_incl(MPI_Group <I>group</I>, int <I>n</I>, int <I>ranges</I>[][3],
            MPI_Group <I>*newgroup</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GROUP_RANGE_INCL(<I>GROUP,</I> <I>N,</I> <I>RANGES,</I> <I>NEWGROUP,</I> <I>IERROR</I>)
            INTEGER   <I>GROUP,</I> <I>N,</I> <I>RANGES(3,*),</I> <I>NEWGROUP,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Group Group::Range_incl(int <I>n</I>, const int <I>ranges</I>[][3]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group     Group (handle).

       n         Number of triplets in array ranges (integer).

       ranges    A one-dimensional array of  integer  triplets,  of  the  form
                 (first  rank, last rank, stride) indicating ranks in group or
                 processes to be included in newgroup.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newgroup  New group derived from above, in the order defined by  ranges
                 (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       If ranges consist of the triplets

           (first1, last1, stride1), ..., (firstn, lastn, striden)

       then newgroup consists of the sequence of processes in group with ranks

                                                        <B>last(1)</B><B>-first(1)</B>
         <B>first(1)</B>, <B>first(1)</B> + <B>stride(1)</B>,..., <B>first(1)</B> + ---------------- <B>stride(1)</B>,...
                                                            <B>stride(1)</B>

                                                        last(n)-first(n)
         first(n), first(n) + stride(n),..., first(n) + ---------------- stride(n).
                                                            stride(n)

       Each computed rank must be a valid rank in group and all computed ranks
       must  be  distinct,  or else the program is erroneous. Note that we may
       have first(i) &gt; last(i), and stride(i) may be negative, but  cannot  be

</PRE>
<H2>NOTE</H2><PRE>
       This implementation does not currently check to see that  the  list  of
       ranges to include are valid ranks in the group.

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
       <a href="../man3/MPI_Group_incl.3.php">MPI_Group_incl</a>
       <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>

Open MPI 1.2                    September 2006  MPI_Group_range_incl(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
