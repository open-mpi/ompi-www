<?php
$topdir = "../../..";
$title = "MPI_Reduce_scatter(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Reduce_scatter</B> - Combines values and scatters the results.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Reduce_scatter(void *<I>sendbuf</I>, void <I>*recvbuf</I>, int <I>*recvcounts</I>,
            MPI_Datatype <I>datatype</I>, MPI_Op <I>op</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_REDUCE_SCATTER(<I>SENDBUF,</I> <I>RECVBUF,</I> <I>RECVCOUNTS,</I> <I>DATATYPE,</I> <I>OP,</I>
                 <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>RECVCOUNTS(*),</I> <I>DATATYPE,</I> <I>OP,</I> <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Reduce_scatter(const void* <I>sendbuf</I>, void* <I>recvbuf</I>,
            int <I>recvcounts</I>[], const MPI::Datatype&amp; <I>datatype</I>,
            const MPI::Op&amp; <I>op</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Starting address of send buffer (choice).

       recvcounts
                 Integer  array  specifying  the  number of elements in result
                 distributed to each process. Array must be identical  on  all
                 calling processes.

       datatype  Datatype of elements of input buffer (handle).

       op        Operation (handle).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Starting address of receive buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Reduce_scatter  first  does  an element-wise reduction on vector of
       <I>count</I> = S(i)<I>revcounts</I>[i] elements in the send buffer defined  by  <I>send-</I>
       <I>buf</I>,  <I>count</I>,  and  <I>datatype</I>.  Next,  the resulting vector of results is
       split into n disjoint segments, where n is the number of  processes  in
       the  group.  Segment i contains <I>recvcounts</I>[i] elements. The ith segment
       is sent to process i and  stored  in  the  receive  buffer  defined  by
       <I>recvbuf</I>, <I>recvcounts</I>[i], and <I>datatype</I>.

</PRE>
<H2>WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR</H2><PRE>
       When the communicator  is  an  inter-communicator,  the  reduce-scatter
       operation  occurs  in  two  phases.  First, the result of the reduction
       performed on the data provided by the processes in the first  group  is
       scattered  among  the  processes in the second group.  Then the reverse
       occurs: the reduction performed on the data provided by  the  processes
       in  the  second  group  is  scattered  among the processes in the first
       group.  For each group, all processes provide the same <I>recvcounts</I> argu-
       ment,  and the sum of the <I>recvcounts</I> values should be the same for both
       groups.

</PRE>
<H2>NOTES ON COLLECTIVE OPERATIONS</H2><PRE>
       The reduction functions ( <I>MPI</I><B>_</B><I>Op</I> ) do not return an error value.  As  a
       result,  if  the  functions  detect an error, all they can do is either
       call <I>MPI</I><B>_</B><I>Abort</I> or silently skip the problem.  Thus, if you  change  the
       error handler from <I>MPI</I><B>_</B><I>ERRORS</I><B>_</B><I>ARE</I><B>_</B><I>FATAL</I> to something else, for example,
       <I>MPI</I><B>_</B><I>ERRORS</I><B>_</B><I>RETURN</I> , then no error may be indicated.

       The reason for this is the performance problems in  ensuring  that  all
       collective routines return the same error value.

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

1.3.4                            Nov 11, 2009            <B>MPI_Reduce_scatter(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
