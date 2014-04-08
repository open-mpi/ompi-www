<?php
$topdir = "../../..";
$title = "MPI_Get_count(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Get_count</B>  - Gets the number of top-level elements received.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Get_count(MPI_Status *<I>status</I>, MPI_Datatype <I>datatype</I>,
            int <I>*count</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GET_COUNT(<I>STATUS,</I> <I>DATATYPE,</I> <I>COUNT,</I> <I>IERROR</I>)
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>DATATYPE,</I> <I>COUNT,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Status::Get_count(const Datatype&amp; <I>datatype</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       status    Return status of receive operation (status).

       datatype  Datatype of each receive buffer element (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       count     Number of received elements (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Returns the number of entries received. (We count entries, each of type
       datatype, not bytes.) The datatype argument should match  the  argument
       provided  by  the  receive  call  that  set  the  status  variable. (As
       explained in Section 3.12.5 in the  MPI-1  Standard,  "Use  of  General
       Datatypes  in Communication," MPI_Get_count may, in certain situations,
       return the value MPI_UNDEFINED.)

       The datatype argument is passed to  MPI_Get_count  to  improve  perfor-
       mance.  A message might be received without counting the number of ele-
       ments it contains, and the count value is often not needed. Also,  this
       allows the same function to be used after a call to <a href="../man3/MPI_Probe.3.php">MPI_Probe</a>.

</PRE>
<H2>NOTES</H2><PRE>
       If  the  size of the datatype is zero, this routine will return a count
       of zero.  If the amount of data in <I>status</I> is not an exact  multiple  of
       the  size of <I>datatype</I> (so that <I>count</I> would not be integral), a <I>count</I> of
       <I>MPI</I><B>_</B><I>UNDEFINED</I> is returned instead.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Get_elements.3.php">MPI_Get_elements</a>

Open MPI 1.2                    September 2006         MPI_Get_count(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
