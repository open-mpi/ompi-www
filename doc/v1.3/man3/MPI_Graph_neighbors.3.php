<?php
$topdir = "../../..";
$title = "MPI_Graph_neighbors(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Graph_neighbors</B>   - Returns the neighbors of a node associated with
       a graph topology.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Graph_neighbors(MPI_Comm <I>comm</I>, int <I>rank</I>, int <I>maxneighbors</I>,
            int <I>*neighbors</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GRAPH_NEIGHBORS(<I>COMM,</I> <I>RANK,</I> <I>MAXNEIGHBORS,</I> <I>NEIGHBORS,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>RANK,</I> <I>MAXNEIGHBORS,</I> <I>NEIGHBORS(*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Graphcomm::Get_neighbors(int <I>rank</I>, int <I>maxneighbors</I>,
            int <I>neighbors</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator with graph topology (handle).

       rank      Rank of process in group of comm (integer).

       maxneighbors
                 Size of array neighbors (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       neighbors Ranks of processes that are neighbors  to  specified  process
                 (array of integers).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <B>Example:</B>   Suppose  that comm is a communicator with a shuffle-exchange
       topology. The  group  has  2n  members.  Each  process  is  labeled  by
       <B>a(1)</B>, ...,  a(n)  with  a(i)  E{0,1}, and has three neighbors: exchange
       (<B>a(1)</B>, ..., a(n) = <B>a(1)</B>, ...,  a(n-1),  a(n)  (a  =  1  -  a),  shuffle
       (<B>a(1)</B>, ...,  a(n))  =  <B>a(2)</B>, ..., a(n), <B>a(1)</B>, and unshuffle (<B>a(1)</B>, ...,
       a(n)) = a(n), <B>a(1)</B>, ..., a(n-1). The graph  adjacency  list  is  illus-
       trated below for n=3.

                      exchange       shuffle        unshuffle
           node       <B>neighbors(1)</B>   <B>neighbors(2)</B>   <B>neighbors(3)</B>
           0(000)         1              0              0
           1(001)         0              2              4
           2(010)         3              4              1
           3(011)         2              6              5
           4(100)         5              1              2
           5(101)         4              3              6
           6(110)         7              5              3
             CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, myrank, ierr)
             CALL MPI_GRAPH_NEIGHBORS(comm, myrank, 3, neighbors, ierr)
       C  perform exchange permutation
             CALL <a href="../man3/MPI_Sendrecv_replace.3.php">MPI_SENDRECV_REPLACE</a>(A, 1, MPI_REAL, <B>neighbors(1)</B>, 0,
            +     <B>neighbors(1)</B>, 0, comm, status, ierr)
       C  perform shuffle permutation
             CALL <a href="../man3/MPI_Sendrecv_replace.3.php">MPI_SENDRECV_REPLACE</a>(A, 1, MPI_REAL, <B>neighbors(2)</B>, 0,
            +     <B>neighbors(3)</B>, 0, comm, status, ierr)
       C  perform unshuffle permutation
             CALL <a href="../man3/MPI_Sendrecv_replace.3.php">MPI_SENDRECV_REPLACE</a>(A, 1, MPI_REAL, <B>neighbors(3)</B>, 0,
            +     <B>neighbors(2)</B>, 0, comm, status, ierr)

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
       <a href="../man3/MPI_Graph_neighbors_count.3.php">MPI_Graph_neighbors_count</a>

1.3.4                            Nov 11, 2009           <B>MPI_Graph_neighbors(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
