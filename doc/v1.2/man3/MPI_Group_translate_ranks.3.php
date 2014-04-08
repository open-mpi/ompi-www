<?php
$topdir = "../../..";
$title = "MPI_Group_translate_ranks(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Group_translate_ranks</B>  -  Translates  the ranks of processes in one
       group to those in another group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Group_translate_ranks(MPI_Group <I>group1</I>, int <I>n</I>,
            int <I>*ranks1</I>, MPI_Group <I>group2</I>, int <I>*ranks2</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GROUP_TRANSLATE_RANKS(<I>GROUP1,</I> <I>N,</I> <I>RANKS1,</I> <I>GROUP2,</I> <I>RANKS2,</I>
                 <I>IERROR</I>)
            INTEGER   <I>GROUP1,</I> <I>N,</I> <I>RANKS1(*),</I> <I>GROUP2,</I> <I>RANKS2(*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static void Group::Translate_ranks (const Group&amp; <I>group1</I>, int <I>n</I>,
            const int <I>ranks1</I>[], const Group&amp; <I>group2</I>, int <I>ranks2</I>[])

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group1    First group (handle).

       n         Number of ranks in ranks1 and ranks2 arrays (integer).

       ranks1    Array of zero or more valid ranks in group1.

       group2    Second group (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       ranks2    Array of corresponding ranks in group2, MPI_UNDEFINED when no
                 correspondence exists.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  function  is  important for determining the relative numbering of
       the same processes in two different groups. For instance, if one  knows
       the  ranks  of  certain  processes  in the group of MPI_COMM_WORLD, one
       might want to know their ranks in a subset of that group.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for

</PRE>
<H2>Open MPI 1.2                    September 2MPI_Group_translate_ranks(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
