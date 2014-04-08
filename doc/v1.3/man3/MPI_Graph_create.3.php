<?php
$topdir = "../../..";
$title = "MPI_Graph_create(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Graph_create</B>  - Makes a new communicator to which topology informa-
       tion has been attached.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Graph_create(MPI_Comm <I>comm</I><B>_</B><I>old</I>, int <I>nnodes</I>, int <I>*index</I>,
            int <I>*edges</I>, int <I>reorder</I>, MPI_Comm <I>*comm</I><B>_</B><I>graph</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GRAPH_CREATE(<I>COMM</I><B>_</B><I>OLD,</I> <I>NNODES,</I> <I>INDEX,</I> <I>EDGES,</I> <I>REORDER,</I>
                 <I>COMM</I><B>_</B><I>GRAPH,</I> <I>IERROR</I>)
            INTEGER   <I>COMM</I><B>_</B><I>OLD,</I> <I>NNODES,</I> <I>INDEX(*),</I> <I>EDGES(*)</I>
            INTEGER   <I>COMM</I><B>_</B><I>GRAPH,</I> <I>IERROR</I>
            LOGICAL   <I>REORDER</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Graphcomm Intracomm::Create_graph(int <I>nnodes</I>, const int <I>index</I>[],
            const int <I>edges</I>[], bool <I>reorder</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm_old  Input communicator without topology (handle).

       nnodes    Number of nodes in graph (integer).

       index     Array of integers describing node degrees (see below).

       edges     Array of integers describing graph edges (see below).

       reorder   Ranking may be reordered (true) or not (false) (logical).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       comm_graph
                 Communicator with graph topology added (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Graph_create returns a handle to a new communicator  to  which  the
       graph  topology  information  is  attached. If reorder = false then the
       rank of each process in the new group is identical to its rank  in  the
       old  group.  Otherwise,  the function may reorder the processes. If the
       size, nnodes, of the graph is smaller than the size  of  the  group  of
       comm_old, then some processes are returned MPI_COMM_NULL, in analogy to
       <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a> and <a href="../man3/MPI_Comm_split.3.php">MPI_Comm_split</a>. The call is erroneous if it  speci-
       fies a graph that is larger than the group size of the input communica-
       tor.

       The three parameters nnodes, index, and edges define the  graph  struc-
       The  definitions  of  the arguments nnodes, index, and edges are illus-
       trated with the following simple example.

       <B>Example:</B> Assume there are four processes 0, 1, 2, 3 with the  following
       adjacency matrix:

           Process    Neighbors
              0          1, 3
              1          0
              2          3
              3          0, 2

       Then, the input arguments are:
           nnodes = 4
           index  = 2, 3, 4, 6
           edges  = 1, 3, 0, 3, 0, 2

       Thus,  in  C,  index[0]  is  the  degree  of  node zero, and index[i] -
       index[i-1] is the degree of node i, i=1, . . . , nnodes-1;  the list of
       neighbors  of node zero is stored in edges[j], for 0 &lt;= j &lt;= index[0] -
       1 and the list of neighbors of node i, i &gt; 0 ,  is stored in  edges[j],
       index[i-1] &lt;= j &lt;= index[i] - 1.

       In  Fortran,  <B>index(1)</B>  is  the  degree  of node zero, and index(i+1) -
       index(i) is the degree of node i, i=1, . . . , nnodes-1;  the  list  of
       neighbors  of  node  zero is stored in edges(j), for 1 &lt;= j &lt;= <B>index(1)</B>
       and the list of neighbors of node  i, i &gt; 0,  is  stored  in  edges(j),
       index(i) + 1 &lt;= j &lt;= index(i + 1).

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
       <a href="../man3/MPI_Graph_get.3.php">MPI_Graph_get</a>
       <a href="../man3/MPI_Graphdims_get.3.php">MPI_Graphdims_get</a>

1.3.4                            Nov 11, 2009              <B>MPI_Graph_create(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
