<?php
$topdir = "../../..";
$title = "MPI_Graph_map(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Graph_map</B>  - Maps process to graph topology information.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Graph_map(MPI_Comm <I>comm</I>, int <I>nnodes</I>, int <I>*index</I>,
            int <I>*edges</I>, int <I>*newrank</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GRAPH_MAP(<I>COMM,</I> <I>NNODES,</I> <I>INDEX,</I> <I>EDGES,</I> <I>NEWRANK,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>NNODES,</I> <I>INDEX(*),</I> <I>EDGES(*),</I> <I>NEWRANK,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Graphcomm::Map(int <I>nnodes</I>, const int <I>index</I>[],
            const int <I>edges</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Input communicator (handle).

       nnodes    Number of graph nodes (integer).

       index     Integer array specifying the graph structure, see  MPI_Graph_
                 create.

       edges     Integer array specifying the graph structure.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newrank   Reordered rank of the calling process; MPI_UNDEFINED  if  the
                 calling process does not belong to graph (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <a href="../man3/MPI_Cart_map.3.php">MPI_Cart_map</a>  and  MPI_Graph_map  can  be  used  to implement all other
       topology functions. In general they will not  be  called  by  the  user
       directly,  unless  he  or  she  is creating additional virtual topology
       capability other than that provided by MPI.

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

Open MPI 1.2                    September 2006         MPI_Graph_map(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
