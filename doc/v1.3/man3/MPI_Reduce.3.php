<?php
$topdir = "../../..";
$title = "MPI_Reduce(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Reduce</B> - Reduces values on all processes within a group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Reduce(void *<I>sendbuf</I>, void *<I>recvbuf</I>, int <I>count</I>,
            MPI_Datatype <I>datatype</I>, MPI_Op <I>op</I>, int <I>root</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_REDUCE(<I>SENDBUF,</I> <I>RECVBUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>OP,</I> <I>ROOT,</I> <I>COMM,</I>
                 <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>OP,</I> <I>ROOT,</I> <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Intracomm::Reduce(const void* <I>sendbuf</I>, void* <I>recvbuf</I>,
            int <I>count</I>, const MPI::Datatype&amp; <I>datatype</I>, const MPI::Op&amp; <I>op</I>,
            int <I>root</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Address of send buffer (choice).

       count     Number of elements in send buffer (integer).

       datatype  Data type of elements of send buffer (handle).

       op        Reduce operation (handle).

       root      Rank of root process (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Address of receive buffer (choice, significant only at root).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The global reduce functions  (MPI_Reduce,  <a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a>,  <a href="../man3/MPI_Op_free.3.php">MPI_Op_free</a>,
       <a href="../man3/MPI_Allreduce.3.php">MPI_Allreduce</a>,  <a href="../man3/MPI_Reduce_scatter.3.php">MPI_Reduce_scatter</a>,  <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>)  perform a global reduce
       operation (such as sum, max, logical AND, etc.) across all the  members
       of  a  group. The reduction operation can be either one of a predefined
       list of operations, or a user-defined operation. The  global  reduction
       functions  come in several flavors: a reduce that returns the result of
       the reduction at one node, an all-reduce that returns  this  result  at
       all  nodes,  and  a  scan  (parallel  prefix) operation. In addition, a
       reduce-scatter operation combines the functionality of a reduce  and  a
       scatter operation.

       and  output buffers of the same length, with elements of the same type.
       Each process can provide one element, or a  sequence  of  elements,  in
       which case the combine operation is executed element-wise on each entry
       of the sequence. For example, if the operation is MPI_MAX and the  send
       buffer contains two elements that are floating-point numbers (count = 2
       and datatype = MPI_FLOAT), then <B>recvbuf(1)</B> =  global  max  (<B>sendbuf(1)</B>)
       and <B>recvbuf(2)</B> = global max(<B>sendbuf(2)</B>).

</PRE>
<H2>USE OF IN-PLACE OPTION</H2><PRE>
       When the communicator is an intracommunicator, you can perform a reduce
       operation in-place (the output buffer is used  as  the  input  buffer).
       Use the variable MPI_IN_PLACE as the value of the root process <I>sendbuf</I>.
       In this case, the input data is taken at  the  root  from  the  receive
       buffer, where it will be replaced by the output data.

       Note  that  MPI_IN_PLACE  is  a  special kind of value; it has the same
       restrictions on its use as MPI_BOTTOM.

       Because the in-place option converts the receive buffer  into  a  send-
       and-receive  buffer,  a  Fortran binding that includes INTENT must mark
       these as INOUT, not OUT.

</PRE>
<H2>WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR</H2><PRE>
       When the communicator is an inter-communicator, the root process in the
       first  group  combines  data from all the processes in the second group
       and then performs the <I>op</I> operation.  The first group defines  the  root
       process.  That process uses MPI_ROOT as the value of its <I>root</I> argument.
       The remaining processes use MPI_PROC_NULL as the value  of  their  <I>root</I>
       argument.   All processes in the second group use the rank of that root
       process in the first group as the value of their <I>root</I>  argument.   Only
       the send buffer arguments are significant in the second group, and only
       the receive buffer arguments are significant in the root process of the
       first group.

</PRE>
<H2>PREDEFINED REDUCE OPERATIONS</H2><PRE>
       The  set of predefined operations provided by MPI is listed below (Pre-
       defined Reduce Operations). That section also enumerates the  datatypes
       each  operation  can be applied to. In addition, users may define their
       own operations that can be overloaded to operate on several  datatypes,
       either  basic  or derived. This is further explained in the description
       of the user-defined operations (see the man pages for <a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a> and
       <a href="../man3/MPI_Op_free.3.php">MPI_Op_free</a>).

       The  operation  op  is always assumed to be associative. All predefined
       operations are also assumed to be commutative. Users may define  opera-
       tions  that  are  assumed  to  be associative, but not commutative. The
       ``canonical'' evaluation order of a  reduction  is  determined  by  the
       ranks  of  the  processes in the group. However, the implementation can
       take advantage of associativity, or associativity and commutativity, in
       order  to change the order of evaluation. This may change the result of
       the reduction for operations that are not strictly associative and com-
       mutative, such as floating point addition.

       Predefined  operators work only with the MPI types listed below (Prede-
       fined Reduce Operations, and the section  MINLOC  and  MAXLOC,  below).
       These operations are invoked by placing the following in op:

            Name                Meaning
            ---------           --------------------
            MPI_MAX             maximum
            MPI_MIN             minimum
            MPI_SUM             sum
            MPI_PROD            product
            MPI_LAND            logical and
            MPI_BAND            bit-wise and
            MPI_LOR             logical or
            MPI_BOR             bit-wise or
            MPI_LXOR            logical xor
            MPI_BXOR            bit-wise xor
            MPI_MAXLOC          max value and location
            MPI_MINLOC          min value and location

       The  two  operations MPI_MINLOC and MPI_MAXLOC are discussed separately
       below (MINLOC and MAXLOC). For the other predefined operations, we enu-
       merate  below  the  allowed  combinations of op and datatype arguments.
       First, define groups of MPI basic datatypes in the following way:

            C integer:            MPI_INT, MPI_LONG, MPI_SHORT,
                                  MPI_UNSIGNED_SHORT, MPI_UNSIGNED,
                                  MPI_UNSIGNED_LONG
            Fortran integer:      MPI_INTEGER
            Floating-point:       MPI_FLOAT, MPI_DOUBLE, MPI_REAL,
                                  MPI_DOUBLE_PRECISION, MPI_LONG_DOUBLE
            Logical:              MPI_LOGICAL
            Complex:              MPI_COMPLEX
            Byte:                 MPI_BYTE

       Now, the valid datatypes for each option is specified below.

            Op                       Allowed Types
            ----------------         ---------------------------
            MPI_MAX, MPI_MIN         C integer, Fortran integer,
                                     floating-point

            MPI_SUM, MPI_PROD        C integer, Fortran integer,
                                     floating-point, complex

            MPI_LAND, MPI_LOR,       C integer, logical
            MPI_LXOR

            MPI_BAND, MPI_BOR,       C integer, Fortran integer, byte
            MPI_BXOR

       <B>Example</B> <B>1:</B> A routine that computes the dot product of two vectors  that
       are  distributed across a  group of processes and returns the answer at
       process zero.

           SUBROUTINE PAR_BLAS1(m, a, b, c, comm)
           REAL a(m), b(m)       ! local slice of array
           REAL c                ! result (at process zero)
           REAL sum
           INTEGER m, comm, i, ierr

           RETURN

       <B>Example</B> <B>2:</B> A routine that computes the product of a vector and an array
       that  are  distributed  across  a   group  of processes and returns the
       answer at process zero.

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
           CALL MPI_REDUCE(sum, c, n, MPI_REAL, MPI_SUM, 0, comm, ierr)

           ! return result at process zero (and garbage at the other nodes)
           RETURN

</PRE>
<H2>MINLOC AND MAXLOC</H2><PRE>
       The operator MPI_MINLOC is used to compute a global minimum and also an
       index  attached  to  the minimum value. MPI_MAXLOC similarly computes a
       global maximum and index. One application of  these  is  to  compute  a
       global  minimum  (maximum)  and the rank of the process containing this
       value.

       The operation that defines MPI_MAXLOC is

                ( u )    (  v )      ( w )
                (   )  o (    )   =  (   )
                ( i )    (  j )      ( k )

       where

           w = max(u, v)

       and

                ( i            if u &gt; v
                (
          k   = ( min(i, j)    if u = v
                (
                (  j           if u &lt; v)

       MPI_MINLOC is defined similarly:

                ( u )    (  v )      ( w )
                (   )  o (    )   =  (   )
                ( i            if u &lt; v
                (
          k   = ( min(i, j)    if u = v
                (
                (  j           if u &gt; v)

       Both  operations  are  associative  and  commutative.  Note   that   if
       MPI_MAXLOC  is  applied to reduce a sequence of pairs (<B>u(0)</B>, 0), (<B>u(1)</B>,
       1), ..., (u(n-1), n-1), then the value returned is (u ,  r),  where  u=
       max(i)  u(i)  and  r  is  the  index of the first global maximum in the
       sequence. Thus, if each process supplies a value and  its  rank  within
       the group, then a reduce operation with op = MPI_MAXLOC will return the
       maximum value and the rank of the first process with that value.  Simi-
       larly,  MPI_MINLOC  can be used to return a minimum and its index. More
       generally, MPI_MINLOC computes a lexicographic minimum, where  elements
       are ordered according to the first component of each pair, and ties are
       resolved according to the second component.

       The reduce operation is defined to operate on arguments that consist of
       a  pair: value and index. For both Fortran and C, types are provided to
       describe the pair. The potentially mixed-type nature of such  arguments
       is  a  problem in Fortran. The problem is circumvented, for Fortran, by
       having the MPI-provided type consist of a pair  of  the  same  type  as
       value, and coercing the index to this type also. In C, the MPI-provided
       pair type has distinct types and the index is an int.

       In order to use MPI_MINLOC and MPI_MAXLOC in a  reduce  operation,  one
       must  provide  a  datatype  argument  that represents a pair (value and
       index). MPI provides nine such  predefined  datatypes.  The  operations
       MPI_MAXLOC  and  MPI_MINLOC  can  be  used  with  each of the following
       datatypes:

           Fortran:
           Name                     Description
           MPI_2REAL                pair of REALs
           MPI_2DOUBLE_PRECISION    pair of DOUBLE-PRECISION variables
           MPI_2INTEGER             pair of INTEGERs

           C:
           Name                 Description
           MPI_FLOAT_INT            float and int
           MPI_DOUBLE_INT           double and int
           MPI_LONG_INT             long and int
           MPI_2INT                 pair of ints
           MPI_SHORT_INT            short and int
           MPI_LONG_DOUBLE_INT      long double and int

       The data type MPI_2REAL is equivalent to:
           <a href="../man3/MPI_Type_contiguous.3.php">MPI_TYPE_CONTIGUOUS</a>(2, MPI_REAL, MPI_2REAL)

       Similar statements apply for MPI_2INTEGER,  MPI_2DOUBLE_PRECISION,  and
       MPI_2INT.

       The  datatype  MPI_FLOAT_INT is as if defined by the following sequence
       of instructions.

       Similar statements apply for MPI_LONG_INT and MPI_DOUBLE_INT.

       <B>Example</B> <B>3:</B> Each process has an array of 30 doubles, in C. For  each  of
       the  30 locations, compute the value and rank of the process containing
       the largest value.

               ...
               /* each process has an array of 30 double: ain[30]
                */
               double ain[30], aout[30];
               int  ind[30];
               struct {
                   double val;
                   int   rank;
               } in[30], out[30];
               int i, myrank, root;

               <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>(MPI_COMM_WORLD, &amp;myrank);
               for (i=0; i&lt;30; ++i) {
                   in[i].val = ain[i];
                   in[i].rank = myrank;
               }
               MPI_Reduce( in, out, 30, MPI_DOUBLE_INT, MPI_MAXLOC, root, comm );
               /* At this point, the answer resides on process root
                */
               if (myrank == root) {
                   /* read ranks out
                    */
                   for (i=0; i&lt;30; ++i) {
                       aout[i] = out[i].val;
                       ind[i] = out[i].rank;
                   }
               }

       <B>Example</B> <B>4:</B>  Same example, in Fortran.

           ...
           ! each process has an array of 30 double: <B>ain(30)</B>

           DOUBLE PRECISION <B>ain(30)</B>, <B>aout(30)</B>
           INTEGER <B>ind(30)</B>;
           DOUBLE PRECISION in(2,30), out(2,30)
           INTEGER i, myrank, root, ierr;

           <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(MPI_COMM_WORLD, myrank);
               DO I=1, 30
                   in(1,i) = ain(i)
                   in(2,i) = myrank    ! myrank is coerced to a double
               END DO

           MPI_REDUCE( in, out, 30, MPI_2DOUBLE_PRECISION, MPI_MAXLOC, root,
                                                                     comm, ierr );
           ! At this point, the answer resides on process root

           IF (myrank .EQ. root) THEN
                   ! read ranks out
                   DO I= 1, 30

           #define  LEN   1000

           float val[LEN];        /* local array of values */
           int count;             /* local number of values */
           int myrank, minrank, minindex;
           float minval;

           struct {
               float value;
               int   index;
           } in, out;

           /* local minloc */
           in.value = val[0];
           in.index = 0;
           for (i=1; i &lt; count; i++)
               if (in.value &gt; val[i]) {
                   in.value = val[i];
                   in.index = i;
               }

           /* global minloc */
           <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>(MPI_COMM_WORLD, &amp;myrank);
           in.index = myrank*LEN + in.index;
           MPI_Reduce( in, out, 1, MPI_FLOAT_INT, MPI_MINLOC, root, comm );
               /* At this point, the answer resides on process root
                */
           if (myrank == root) {
               /* read answer out
                */
               minval = out.value;
               minrank = out.index / LEN;
               minindex = out.index % LEN;

       All MPI objects (e.g., MPI_Datatype, MPI_Comm) are of type  INTEGER  in
       Fortran.

</PRE>
<H2>NOTES ON COLLECTIVE OPERATIONS</H2><PRE>
       The  reduction functions ( <I>MPI</I><B>_</B><I>Op</I> ) do not return an error value.  As a
       result, if the functions detect an error, all they  can  do  is  either
       call  <I>MPI</I><B>_</B><I>Abort</I>  or silently skip the problem.  Thus, if you change the
       error handler from <I>MPI</I><B>_</B><I>ERRORS</I><B>_</B><I>ARE</I><B>_</B><I>FATAL</I> to something else, for example,
       <I>MPI</I><B>_</B><I>ERRORS</I><B>_</B><I>RETURN</I> , then no error may be indicated.

       The  reason  for  this is the performance problems in ensuring that all
       collective routines return the same error value.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       <a href="../man3/MPI_Reduce_scatter.3.php">MPI_Reduce_scatter</a>
       <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>
       <a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a>
       <a href="../man3/MPI_Op_free.3.php">MPI_Op_free</a>

1.3.4                            Nov 11, 2009                    <B>MPI_Reduce(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
