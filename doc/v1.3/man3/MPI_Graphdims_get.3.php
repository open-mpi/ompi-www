<?php
$topdir = "../../..";
$title = "MPI_Graphdims_get(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Graphdims_get</B>   -  Retrieves  graph topology information associated
       with a communicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Graphdims_get(MPI_Comm <I>comm</I>, int <I>*nnodes</I>, int <I>*nedges</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GRAPHDIMS_GET(<I>COMM,</I> <I>NNODES,</I> <I>NEDGES,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>NNODES,</I> <I>NEDGES,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Graphcomm::Get dims(int <I>nnodes</I>[], int <I>nedges</I>[]) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator for group with graph structure (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       nnodes    Number of nodes in graph (integer).

       nedges    Number of edges in graph (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Functions MPI_Graphdims_get and <a href="../man3/MPI_Graph_get.3.php">MPI_Graph_get</a> retrieve the graph-topol-
       ogy   information   that   was   associated   with  a  communicator  by
       <a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>.

       The information provided by MPI_Graphdims_get can be used to  dimension
       the vectors index and edges correctly for a call to <a href="../man3/MPI_Graph_get.3.php">MPI_Graph_get</a>.

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

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
