<?php
$topdir = "../../..";
$title = "MPI_Gather(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Gather</B> - Gathers values from a group of processes.

</PRE>
<H2>SYNOPSIS</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Gather(void <I>*sendbuf</I>, int <I>sendcount</I>, MPI_Datatype <I>sendtype</I>,
            void <I>*recvbuf</I>, int <I>recvcount</I>, MPI_Datatype <I>recvtype</I>, int <I>root</I>,
            MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GATHER(<I>SENDBUF,</I> <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>RECVBUF,</I> <I>RECVCOUNT,</I>
                 <I>RECVTYPE,</I> <I>ROOT,</I> <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>RECVCOUNT,</I> <I>RECVTYPE,</I> <I>ROOT</I>
            INTEGER   <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Gather(const void* <I>sendbuf</I>, int <I>sendcount</I>,
            const MPI::Datatype&amp; <I>sendtype</I>, void* <I>recvbuf</I>,
            int <I>recvcount</I>, const MPI::Datatype&amp; <I>recvtype</I>, int <I>root</I>,
            const = 0

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Starting address of send buffer (choice).

       sendcount Number of elements in send buffer (integer).

       sendtype  Datatype of send buffer elements (handle).

       recvcount Number  of elements for any single receive (integer, signifi-
                 cant only at root).

       recvtype  Datatype of recvbuffer elements (handle, significant only  at
                 root).

       root      Rank of receiving process (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Address of receive buffer (choice, significant only at root).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Each process (root process included) sends the  contents  of  its  send
       buffer  to the root process. The root process receives the messages and
       stores them in rank order. The outcome is as if each of the n processes
       in the group (including the root process) had executed a call to
       where  extent(recvtype)  is  the  type  extent  obtained from a call to
       <a href="../man3/MPI_Type_extent.3.php">MPI_Type_extent</a>().

       An alternative description is that the n messages sent by the processes
       in  the group are concatenated in rank order, and the resulting message
       is received by the root as if by a call to <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(recvbuf,  recvcount
       * n, recvtype, . . . ).

       The receive buffer is ignored for all nonroot processes.

       General,  derived datatypes are allowed for both sendtype and recvtype.
       The type signature of sendcount, sendtype on process i must be equal to
       the  type  signature  of  recvcount, recvtype at the root. This implies
       that the amount of data sent must  be  equal  to  the  amount  of  data
       received,  pairwise  between  each  process and the root. Distinct type
       maps between sender and receiver are still allowed.

       All arguments to the function are significant on process root, while on
       other  processes,  only  arguments  sendbuf, sendcount, sendtype, root,
       comm are significant. The arguments root and comm must  have  identical
       values on all processes.

       The  specification of counts and types should not cause any location on
       the root to be written more than once. Such a call is erroneous.

       Note that the recvcount argument at the root indicates  the  number  of
       items  it  receives from each process, not the total number of items it
       receives.

       <B>Example</B> <B>1:</B>  Gather 100 ints from every process in group to root.

         MPI_Comm comm;
             int gsize,sendarray[100];
             int root, *rbuf;
             ...
             <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>( comm, &amp;gsize);
             rbuf = (int *)malloc(gsize*100*sizeof(int));
             MPI_Gather( sendarray, 100, MPI_INT, rbuf, 100, MPI_INT, root, comm);

       <B>Example</B> <B>2:</B> Previous example modified -- only the root allocates  memory
       for the receive buffer.

         MPI_Comm comm;
             int gsize,sendarray[100];
             int root, myrank, *rbuf;
             ...
             <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>( comm, myrank);
             if ( myrank == root) {
                <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>( comm, &amp;gsize);
                rbuf = (int *)malloc(gsize*100*sizeof(int));
                }
             MPI_Gather( sendarray, 100, MPI_INT, rbuf, 100, MPI_INT, root, comm);

       <B>Example</B>  <B>3:</B>  Do  the  same  as  the previous example, but use a derived
       datatype. Note that the type cannot be the entire set of  gsize  *  100
       ints  since type matching is defined pairwise between the root and each
       process in the gather.
             <a href="../man3/MPI_Type_commit.3.php">MPI_Type_commit</a>( &amp;rtype );
             rbuf = (int *)malloc(gsize*100*sizeof(int));
             MPI_Gather( sendarray, 100, MPI_INT, rbuf, 1, rtype, root, comm);

</PRE>
<H2>USE OF IN-PLACE OPTION</H2><PRE>
       When the communicator is an intracommunicator, you can perform a gather
       operation  in-place  (the  output  buffer is used as the input buffer).
       Use the variable MPI_IN_PLACE as the value of the root process <I>sendbuf</I>.
       In  this case, <I>sendcount</I> and <I>sendtype</I> are ignored, and the contribution
       of the root process to the gathered vector is assumed to already be  in
       the correct place in the receive buffer.

       Note  that  MPI_IN_PLACE  is  a  special kind of value; it has the same
       restrictions on its use as MPI_BOTTOM.

       Because the in-place option converts the receive buffer  into  a  send-
       and-receive  buffer,  a  Fortran binding that includes INTENT must mark
       these as INOUT, not OUT.

</PRE>
<H2>WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR</H2><PRE>
       When the communicator is an inter-communicator, the root process in the
       first  group  gathers  data from all the processes in the second group.
       The first group defines the root process.  That process  uses  MPI_ROOT
       as  the  value  of  its  <I>root</I>  argument.   The  remaining processes use
       MPI_PROC_NULL as the value of their <I>root</I> argument.   All  processes  in
       the  second  group use the rank of that root process in the first group
       as the value of their <I>root</I> argument.   The send buffer argument of  the
       processes in the first group must be consistent with the receive buffer
       argument of the root process in the second group.

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
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>
       <a href="../man3/MPI_Scatter.3.php">MPI_Scatter</a>
       <a href="../man3/MPI_Scatterv.3.php">MPI_Scatterv</a>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
