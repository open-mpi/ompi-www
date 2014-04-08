<?php
$topdir = "../../..";
$title = "MPI_Allgather(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Allgather</B>  -  Gathers data from all processes and distributes it to
       all processes

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Allgather(void <I>*sendbuf</I>, int  <I>sendcount</I>,
            MPI_Datatype <I>sendtype</I>, void <I>*recvbuf</I>, int <I>recvcount</I>,
             MPI_Datatype <I>recvtype</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ALLGATHER(<I>SENDBUF</I>, <I>SENDCOUNT</I>, <I>SENDTYPE</I>, <I>RECVBUF</I>, <I>RECVCOUNT</I>,
                 <I>RECVTYPE</I>, <I>COMM</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF</I> (*), <I>RECVBUF</I> (*)
            INTEGER   <I>SENDCOUNT</I>, <I>SENDTYPE</I>, <I>RECVCOUNT</I>, <I>RECVTYPE</I>, <I>COMM</I>,
            INTEGER   <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Allgather(const void* <I>sendbuf</I>, int <I>sendcount</I>, const
            MPI::Datatype&amp; <I>sendtype</I>, void* <I>recvbuf</I>, int <I>recvcount</I>,
            const MPI::Datatype&amp; <I>recvtype</I>) const = 0

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Starting address of send buffer (choice).

       sendcount Number of elements in send buffer (integer).

       sendtype  Datatype of send buffer elements (handle).

       recvcount Number of elements received from any process (integer).

       recvtype  Datatype of receive buffer elements (handle).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Address of receive buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Allgather is similar  to  <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>,  except  that  all  processes
       receive  the result, instead of just the root. In other words, all pro-
       cesses contribute to the result, and all processes receive the  result.

       The  type  signature  associated  with sendcount, sendtype at a process
       must be equal to the type signature associated with recvcount, recvtype
       at any other process.

       <B>Example:</B>  The  all-gather  version  of  Example  1 in <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>. Using
       MPI_Allgather, we will gather 100 ints from every process in the  group
       to every process.

       MPI_Comm comm;
           int gsize,sendarray[100];
           int *rbuf;
           ...
           <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>( comm, &amp;gsize);
           rbuf = (int *)malloc(gsize*100*sizeof(int));
           MPI_Allgather( sendarray, 100, MPI_INT, rbuf, 100, MPI_INT, comm);

       After  the  call, every process has the group-wide concatenation of the
       sets of data.

</PRE>
<H2>USE OF IN-PLACE OPTION</H2><PRE>
       When the communicator is an intracommunicator, you can perform an  all-
       gather  operation  in-place  (the  output  buffer  is used as the input
       buffer).  Use the variable MPI_IN_PLACE as the value  of  both  <I>sendbuf</I>
       and  <I>recvbuf</I>.   In  this case, <I>sendcount</I> and <I>sendtype</I> are ignored.  The
       input data of each process is assumed to be  in  the  area  where  that
       process  would  receive  its  own  contribution  to the receive buffer.
       Specifically, the outcome of a call to MPI_Allgather that used the  in-
       place option is identical to the case in which all processes executed <I>n</I>
       calls to

          <a href="../man3/MPI_Gather.3.php">MPI_GATHER</a> ( MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, recvbuf,
          recvcount, recvtype, root, comm )

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
       first  group and received by all the members of the second group.  Then
       the data is gathered from all the  members  of  the  second  group  and
       received by all the members of the first.  The operation, however, need
       not be symmetric.  The number of items sent by the processes  in  first
       group  need  not  be  equal to the number of items sent by the the pro-
       cesses in the second group.  You can move data in only one direction by
       giving  <I>sendcount</I>  a value of 0 for communication in the reverse direc-
       tion.

       The first group defines  the  root  process.   The  root  process  uses
       MPI_ROOT  as the value of <I>root</I>.  All other processes in the first group
       use MPI_PROC_NULL as the value of <I>root</I>.  All processes  in  the  second
       group  use the rank of the root process in the first group as the value
       of <I>root</I>.
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
       <a href="../man3/MPI_Allgatherv.3.php">MPI_Allgatherv</a>
       <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>

Open MPI 1.2                    September 2006         MPI_Allgather(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
