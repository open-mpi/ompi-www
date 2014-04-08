<?php
$topdir = "../../..";
$title = "MPI_Graph_get(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Graph_get</B>  - Retrieves graph topology information associated with a
       communicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Graph_get(MPI_Comm <I>comm</I>, int <I>maxindex</I>, int <I>maxedges</I>,
            int <I>*index</I>, int <I>*edges</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GRAPH_GET(<I>COMM,</I> <I>MAXINDEX,</I> <I>MAXEDGES,</I> <I>INDEX,</I> <I>EDGES,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>MAXINDEX,</I> <I>MAXEDGES,</I> <I>INDEX(*)</I>
            INTEGER   <I>EDGES(*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Graphcomm::Get_topo(int <I>maxindex</I>, int <I>maxedges</I>,
            int <I>index</I>[], int <I>edges</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator with graph structure (handle).

       maxindex  Length of vector index in the calling program (integer).

       maxedges  Length of vector edges in the calling program (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       index     Array of integers containing the graph structure (for details
                 see the definition of <a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>).

       edges     Array of integers containing the graph structure.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Functions <a href="../man3/MPI_Graphdims_get.3.php">MPI_Graphdims_get</a> and MPI_Graph_get retrieve the graph-topol-
       ogy  information  that  was   associated   with   a   communicator   by
       <a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>.

       The  information provided by <a href="../man3/MPI_Graphdims_get.3.php">MPI_Graphdims_get</a> can be used to dimension
       the vectors index and edges correctly for a call to MPI_Graph_get.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>
       <a href="../man3/MPI_Graphdims_get.3.php">MPI_Graphdims_get</a>

Open MPI 1.2                    September 2006         MPI_Graph_get(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
