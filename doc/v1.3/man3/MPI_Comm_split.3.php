<?php
$topdir = "../../..";
$title = "MPI_Comm_split(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_split</B>  - Creates new communicators based on colors and keys.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_split(MPI_Comm <I>comm</I>, int <I>color</I>, int <I>key</I>,
            MPI_Comm *<I>newcomm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_SPLIT(<I>COMM,</I> <I>COLOR,</I> <I>KEY,</I> <I>NEWCOMM,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>COLOR,</I> <I>KEY,</I> <I>NEWCOMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Intercomm MPI::Intercomm::Split(int <I>color</I>, int <I>key</I>) const

       MPI::Intracomm MPI::Intracomm::Split(int <I>color</I>, int <I>key</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator (handle).

       color     Control of subset assignment (nonnegative integer).

       key       Control of rank assigment (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newcomm   New communicator (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  function  partitions the group associated with comm into disjoint
       subgroups, one for each value of color. Each subgroup contains all pro-
       cesses  of  the  same  color.  Within  each subgroup, the processes are
       ranked in the order defined by the value of the argument key, with ties
       broken  according to their rank in the old group. A new communicator is
       created for each subgroup and returned in newcomm. A process may supply
       the   color   value   MPI_UNDEFINED,  in  which  case  newcomm  returns
       MPI_COMM_NULL. This is a collective call, but each process is permitted
       to provide different values for color and key.

       When you call MPI_Comm_split on an inter-communicator, the processes on
       the left with the same color as those on the right combine to create  a
       new  inter-communicator.   The key argument describes the relative rank
       of processes on each side  of  the  inter-communicator.   The  function
       returns  MPI_COMM_NULL for  those colors that are specified on only one
       side of the inter-communicator, or for those  that  specify  MPI_UNEDE-
       FINED as the color.

       A call to <a href="../man3/MPI_Comm_create.3.php">MPI_Comm_create</a>(<I>comm</I>, <I>group</I>, <I>newcomm</I>) is equivalent to a call

</PRE>
<H2>NOTES</H2><PRE>
       This is an extremely powerful mechanism for dividing a single  communi-
       cating group of processes into k subgroups, with k chosen implicitly by
       the user (by the number of colors asserted  over  all  the  processes).
       Each  resulting  communicator  will  be nonoverlapping. Such a division
       could be useful for defining a hierarchy of computations, such  as  for
       multigrid or linear algebra.

       Multiple  calls  to MPI_Comm_split can be used to overcome the require-
       ment that any call have no overlap of the resulting communicators (each
       process  is of only one color per call). In this way, multiple overlap-
       ping communication structures can be created. Creative use of the color
       and key in such splitting operations is encouraged.

       Note  that,  for  a  fixed  color,  the  keys need not be unique. It is
       MPI_Comm_split's responsibility to sort processes  in  ascending  order
       according  to  this  key, and to break ties in a consistent way. If all
       the keys are specified in the same way, then all  the  processes  in  a
       given color will have the relative rank order as they did in their par-
       ent group. (In general, they will have different ranks.)

       Essentially, making the key value zero for all  processes  of  a  given
       color  means that one needn't really pay attention to the rank-order of
       the processes in the new communicator.

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
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_create.3.php">MPI_Comm_create</a>
       <a href="../man3/MPI_Intercomm_create.3.php">MPI_Intercomm_create</a>
       <a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a>
       <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>

1.3.4                            Nov 11, 2009                <B>MPI_Comm_split(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
