<?php
$topdir = "../../..";
$title = "MPI_Allreduce(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Allreduce</B>  - Combines values from all processes and distributes the
       result back to all processes.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Allreduce(void <I>*sendbuf</I>, void <I>*recvbuf</I>, int <I>count</I>,
            MPI_Datatype <I>datatype</I>, MPI_Op <I>op</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ALLREDUCE(<I>SENDBUF</I>, <I>RECVBUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>OP</I>,
                 <I>COMM</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF</I>(*), <I>RECVBUF</I>(*)
            INTEGER   <I>COUNT</I>, <I>DATATYPE</I>, <I>OP</I>, <I>COMM</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Allreduce(const void* <I>sendbuf</I>, void* <I>recvbuf</I>,
            int <I>count</I>, const MPI::Datatype&amp; <I>datatype</I>, const
            MPI::Op&amp; <I>op</I>) const=0

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Starting address of send buffer (choice).

       count     Number of elements in send buffer (integer).

       datatype  Datatype of elements of send buffer (handle).

       op        Operation (handle).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Starting address of receive buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Same as <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a> except that the result appears in the receive buffer
       of all the group members.

       <B>Example</B> <B>1:</B> A routine that computes the product of a vector and an array
       that are distributed across a group of processes and returns the answer
       at all nodes (compare with Example 2, with <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>, below).

       SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm)
       REAL a(m), b(m,n)    ! local slice of array
       REAL c(n)            ! result
       REAL sum(n)
       INTEGER n, comm, i, j, ierr

       ! global sum
       CALL MPI_ALLREDUCE(sum, c, n, MPI_REAL, MPI_SUM, comm, ierr)

       ! return result at all nodes
       RETURN

       <B>Example</B> <B>2:</B> A routine that computes the product of a vector and an array
       that are distributed across a group of processes and returns the answer
       at node zero.

       SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm)
       REAL a(m), b(m,n)    ! local slice of array
       REAL c(n)            ! result
       REAL sum(n)
       INTEGER n, comm, i, j, ierr

       ! local sum
       DO j= 1, n
         sum(j) = 0.0
         DO i = 1, m
           sum(j) = sum(j) + a(i)*b(i,j)
         END DO
       END DO

       ! global sum
       CALL <a href="../man3/MPI_Reduce.3.php">MPI_REDUCE</a>(sum, c, n, MPI_REAL, MPI_SUM, 0, comm, ierr)

       ! return result at node zero (and garbage at the other nodes)
       RETURN

</PRE>
<H2>USE OF IN-PLACE OPTION</H2><PRE>
       When  the communicator is an intracommunicator, you can perform an all-
       reduce operation in-place (the output  buffer  is  used  as  the  input
       buffer).   Use the variable MPI_IN_PLACE as the value of <I>sendbuf</I> at all
       processes.

       Note that MPI_IN_PLACE is a special kind of  value;  it  has  the  same
       restrictions on its use as MPI_BOTTOM.

       Because  the  in-place  option converts the receive buffer into a send-
       and-receive buffer, a Fortran binding that includes  INTENT  must  mark
       these as INOUT, not OUT.

</PRE>
<H2>WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR</H2><PRE>
       When  the  communicator  is an inter-communicator, the reduce operation
       occurs in two phases.  The data is reduced from all the members of  the
       first  group and received by all the members of the second group.  Then
       the data is reduced from all  the  members  of  the  second  group  and
       received  by  all  the  members of the first.  The operation exhibits a
       symmetric, full-duplex behavior.

       The first group defines  the  root  process.   The  root  process  uses
       MPI_ROOT  as the value of <I>root</I>.  All other processes in the first group
       use MPI_PROC_NULL as the value of <I>root</I>.  All processes  in  the  second
       group  use the rank of the root process in the first group as the value
       of <I>root</I>.
       error handler from <I>MPI</I><B>_</B><I>ERRORS</I><B>_</B><I>ARE</I><B>_</B><I>FATAL</I> to something else, for example,
       <I>MPI</I><B>_</B><I>ERRORS</I><B>_</B><I>RETURN</I> , then no error may be indicated.

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

Open MPI 1.2                      March 2007           MPI_Allreduce(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
