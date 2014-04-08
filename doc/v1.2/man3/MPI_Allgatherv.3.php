<?php
$topdir = "../../..";
$title = "MPI_Allgatherv(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Allgatherv</B>  -  Gathers  data  from all processes and delivers it to
       all. Each process may contribute a different amount of data.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Allgatherv(void <I>*sendbuf</I>, int <I>sendcount</I>,
            MPI_Datatype <I>sendtype</I>, void <I>*recvbuf</I>, int <I>*recvcount</I>,
            int <I>*displs</I>, MPI_Datatype <I>recvtype</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ALLGATHERV(<I>SENDBUF</I>, <I>SENDCOUNT</I>, <I>SENDTYPE</I>, <I>RECVBUF</I>,
                 <I>RECVCOUNT</I>, <I>DISPLS</I>, <I>RECVTYPE</I>, <I>COMM</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF</I>(*), <I>RECVBUF</I>(*)
            INTEGER   <I>SENDCOUNT</I>, <I>SENDTYPE</I>, <I>RECVCOUNT</I>(*),
            INTEGER   <I>DISPLS</I>(*), <I>RECVTYPE</I>, <I>COMM</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Allgatherv(const void* <I>sendbuf</I>, int <I>sendcount</I>,
            const MPI::Datatype&amp; <I>sendtype</I>, void* <I>recvbuf</I>,
            const int <I>recvcounts</I>[], const int <I>displs</I>[],
            const MPI::Datatype&amp; <I>recvtype</I>) const = 0

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Starting address of send buffer (choice).

       sendcount Number of elements in send buffer (integer).

       sendtype  Datatype of send buffer elements (handle).

       recvcount Integer array (of length group size) containing the number of
                 elements that are received from each process.

       displs    Integer  array  (of length group size). Entry i specifies the
                 displacement (relative to recvbuf)  at  which  to  place  the
                 incoming data from process i.

       recvtype  Datatype of receive buffer elements (handle).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Address of receive buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Allgatherv is similar to <a href="../man3/MPI_Allgather.3.php">MPI_Allgather</a> in that all processes gather
       data from all other processes, except that each process can send a dif-
       The outcome is as if all processes executed calls to
       <a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>(sendbuf,sendcount,sendtype,recvbuf,recvcount,
                   displs,recvtype,root,comm)

       for  root = 0 , ..., n-1. The rules for correct usage of MPI_Allgatherv
       are easily found from the corresponding rules for <a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>.

</PRE>
<H2>USE OF IN-PLACE OPTION</H2><PRE>
       When the communicator is an intracommunicator, you can perform an  all-
       gather  operation  in-place  (the  output  buffer  is used as the input
       buffer).  Use the variable MPI_IN_PLACE as the value  of  both  <I>sendbuf</I>
       and  <I>recvbuf</I>.   In  this case, <I>sendcount</I> and <I>sendtype</I> are ignored.  The
       input data of each process is assumed to be  in  the  area  where  that
       process  would  receive  its  own  contribution  to the receive buffer.
       Specifically, the outcome of a call to <a href="../man3/MPI_Allgather.3.php">MPI_Allgather</a> that used the  in-
       place option is identical to the case in which all processes executed <I>n</I>
       calls to

          <a href="../man3/MPI_Gatherv.3.php">MPI_GATHERV</a> ( MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, recvbuf,
          recvcounts, displs, recvtype, root, comm )

       for root =0, ... , n-1.

       Note that MPI_IN_PLACE is a special kind of  value;  it  has  the  same
       restrictions on its use as MPI_BOTTOM.

       Because  the  in-place  option converts the receive buffer into a send-
       and-receive buffer, a Fortran binding that includes  INTENT  must  mark
       these as INOUT, not OUT.

</PRE>
<H2>WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR</H2><PRE>
       When  the  communicator  is an inter-communicator, the gather operation
       occurs in two phases.  The data is gathered from all the members of the
       first  group, concatenated, and received by all the members of the sec-
       ond group.  Then the data is gathered from all the members of the  sec-
       ond  group, concatenated, and received by all the members of the first.
       The send buffer arguments in the one group must be consistent with  the
       receive buffer arguments in the other group, and vice versa.  The oper-
       ation must exhibit symmetric, full-duplex behavior.

       The first group defines  the  root  process.   The  root  process  uses
       MPI_ROOT  as the value of <I>root</I>.  All other processes in the first group
       use MPI_PROC_NULL as the value of <I>root</I>.  All processes  in  the  second
       group  use the rank of the root process in the first group as the value
       of <I>root</I>.

       When the communicator is an intra-communicator, these  groups  are  the
       same, and the operation occurs in a single phase.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>
       <a href="../man3/MPI_Allgather.3.php">MPI_Allgather</a>

Open MPI 1.2                      March 2007          MPI_Allgatherv(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
