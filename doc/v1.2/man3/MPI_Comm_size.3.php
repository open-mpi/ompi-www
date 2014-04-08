<?php
$topdir = "../../..";
$title = "MPI_Comm_size(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_size</B>  - Returns the size of the group associated with a commu-
       nicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_size(MPI_Comm <I>comm</I>, int *<I>size</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_SIZE(<I>COMM,</I> <I>SIZE,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>SIZE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Comm::Get_size() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       size      Number of processes in the group of comm (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This function indicates the number of processes involved in a  communi-
       cator.  For  MPI_COMM_WORLD, it indicates the total number of processes
       available. This function is equivalent to accessing the  communicator's
       group with <a href="../man3/MPI_Comm_group.3.php">MPI_Comm_group</a>, computing the size using <a href="../man3/MPI_Group_size.3.php">MPI_Group_size</a>, and
       then freeing the temporary group via <a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>. If the  communica-
       tor   is  an  intra-communicator  (enables  communication  between  two
       groups), this function returns the size of the local group.  To  return
       the size of the remote group, use the <a href="../man3/MPI_Comm_remote_size.3.php">MPI_Comm_remote_size</a> function.

       This  call  is often used with <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a> to determine the amount of
       concurrency available for a specific library or program.  <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>
       indicates  the rank of the process that calls it in the range from  0 .
       . . size-1, where size is the return value of MPI_Comm_size.

</PRE>
<H2>NOTE</H2><PRE>
       MPI_COMM_NULL is not considered a valid argument to this function.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_group.3.php">MPI_Comm_group</a>
       <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>
       <a href="../man3/MPI_Comm_compare.3.php">MPI_Comm_compare</a>

Open MPI 1.2                    September 2006         MPI_Comm_size(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
