<?php
$topdir = "../../..";
$title = "MPI_Reduce(3) man page (version 1.6.4)";
$meta_desc = "Open MPI v1.6.4 man page: MPI_REDUCE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Reduce</b> - Reduces values on all processes within a group.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C
Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Reduce(void *sendbuf, void *recvbuf, int count,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype datatype, MPI_Op op, int root, MPI_Comm comm)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_REDUCE(SENDBUF, RECVBUF, COUNT, DATATYPE, OP, ROOT, COMM,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, OP, ROOT, COMM, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Intracomm::Reduce(const void* sendbuf, void* recvbuf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int count, const MPI::Datatype&amp; datatype, const MPI::Op&amp; op,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int root) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Address of send buffer (choice). </dd>

<dt>count </dt>
<dd>Number of
elements in send buffer (integer). </dd>

<dt>datatype </dt>
<dd>Data type of elements of send
buffer (handle). </dd>

<dt>op </dt>
<dd>Reduce operation (handle). </dd>

<dt>root </dt>
<dd>Rank of root process
(integer). </dd>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>recvbuf </dt>
<dd>Address
of receive buffer (choice, significant only at root). </dd>

<dt>IERROR </dt>
<dd>Fortran only:
Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
The global reduce functions (MPI_Reduce,
<a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a>, <a href="../man3/MPI_Op_free.3.php">MPI_Op_free</a>, <a href="../man3/MPI_Allreduce.3.php">MPI_Allreduce</a>, <a href="../man3/MPI_Reduce_scatter.3.php">MPI_Reduce_scatter</a>, <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>)
perform a global reduce operation (such as sum, max, logical AND, etc.)
across all the members of a group. The reduction operation can be either
one of a predefined list of operations, or a user-defined operation. The
global reduction functions come in several flavors: a reduce that returns
the result of the reduction at one node, an all-reduce that returns this
result at all nodes, and a scan (parallel prefix) operation. In addition,
a reduce-scatter operation combines the functionality of a reduce and a
scatter operation. <p>
MPI_Reduce combines the elements provided in the input
buffer of each process in the group, using the operation op, and returns
the combined value in the output buffer of the process with rank root. The
input buffer is defined by the arguments sendbuf, count, and datatype;
the output buffer is defined by the arguments recvbuf, count, and datatype;
both have the same number of elements, with the same type. The routine is
called by all group members using the same arguments for count, datatype,
op, root, and comm. Thus, all processes provide input buffers and output
buffers of the same length, with elements of the same type. Each process
can provide one element, or a sequence of elements, in which case the combine
operation is executed element-wise on each entry of the sequence. For example,
if the operation is MPI_MAX and the send buffer contains two elements that
are floating-point numbers (count = 2 and datatype = MPI_FLOAT), then <i>recvbuf(1)</i>
= global max (<i>sendbuf(1)</i>) and <i>recvbuf(2)</i> = global max(<i>sendbuf(2)</i>).  <p>

<h2><a name='sect8' href='#toc8'>Use
of In-place Option</a></h2>
When the communicator is an intracommunicator, you can
perform a reduce operation in-place (the output buffer is used as the input
buffer).  Use the variable MPI_IN_PLACE as the value of the root process
<i>sendbuf</i>.  In this case, the input data is taken at the root from the receive
buffer, where it will be replaced by the output data.   <p>
Note that MPI_IN_PLACE
is a special kind of value; it has the same restrictions on its use as
MPI_BOTTOM. <p>
Because the in-place option converts the receive buffer into
a send-and-receive buffer, a Fortran binding that includes INTENT must mark
these as INOUT, not OUT.    <p>

<h2><a name='sect9' href='#toc9'>When Communicator is an Inter-communicator</a></h2>
<p>
When
the communicator is an inter-communicator, the root process in the first
group combines data from all the processes in the second group and then
performs the <i>op</i> operation.  The first group defines the root process.  That
process uses MPI_ROOT as the value of its <i>root</i> argument.  The remaining
processes use MPI_PROC_NULL as the value of their <i>root</i> argument.  All processes
in the second group use the rank of that root process in the first group
as the value of their <i>root</i> argument.  Only the send buffer arguments are
significant in the second group, and only the receive buffer arguments
are significant in the root process of the first group.     <p>

<h2><a name='sect10' href='#toc10'>Predefined Reduce
Operations</a></h2>
<p>
The set of predefined operations provided by MPI is listed below
(Predefined Reduce Operations). That section also enumerates the datatypes
each operation can be applied to. In addition, users may define their own
operations that can be overloaded to operate on several datatypes, either
basic or derived. This is further explained in the description of the user-defined
operations (see the man pages for <a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a> and <a href="../man3/MPI_Op_free.3.php">MPI_Op_free</a>). <p>
The operation
op is always assumed to be associative. All predefined operations are also
assumed to be commutative. Users may define operations that are assumed
to be associative, but not commutative. The &lsquo;&lsquo;canonical&rsquo;&rsquo; evaluation order of
a reduction is determined by the ranks of the processes in the group. However,
the implementation can take advantage of associativity, or associativity
and commutativity, in order to change the order of evaluation. This may
change the result of the reduction for operations that are not strictly
associative and commutative, such as floating point addition.   <p>
Predefined
operators work only with the MPI types listed below (Predefined Reduce
Operations, and the section MINLOC and MAXLOC, below).  User-defined operators
may operate on general, derived datatypes. In this case, each argument that
the reduce operation is applied to is one element described by such a datatype,
which may contain several basic values. This is further explained in Section
4.9.4 of the MPI Standard, "User-Defined Operations."
<p> The following predefined
operations are supplied for MPI_Reduce and related functions <a href="../man3/MPI_Allreduce.3.php">MPI_Allreduce</a>,
<a href="../man3/MPI_Reduce_scatter.3.php">MPI_Reduce_scatter</a>, and <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>. These operations are invoked by placing
the following in op: <p>
<br>
<pre><tt> </tt>&nbsp;<tt> </tt>&nbsp;Name                Meaning
     ---------           --------------------
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_MAX             maximum
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_MIN             minimum
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_SUM             sum
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_PROD            product
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_LAND            logical and
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_BAND            bit-wise and
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_LOR             logical or
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_BOR             bit-wise or
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_LXOR            logical xor
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_BXOR            bit-wise xor
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_MAXLOC          max value and location
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_MINLOC          min value and location
</pre><p>
The two operations MPI_MINLOC and MPI_MAXLOC are discussed separately below
(MINLOC and MAXLOC). For the other predefined operations, we enumerate below
the allowed combinations of op and datatype arguments. First, define groups
of MPI basic datatypes in the following way: <p>
<br>
<pre><tt> </tt>&nbsp;<tt> </tt>&nbsp;C integer:            MPI_INT, MPI_LONG, MPI_SHORT,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;                      MPI_UNSIGNED_SHORT, MPI_UNSIGNED,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;                      MPI_UNSIGNED_LONG
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Fortran integer:      MPI_INTEGER
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Floating-point:       MPI_FLOAT, MPI_DOUBLE, MPI_REAL,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;                      MPI_DOUBLE_PRECISION, MPI_LONG_DOUBLE
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Logical:              MPI_LOGICAL
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Complex:              MPI_COMPLEX
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Byte:                 MPI_BYTE
</pre><p>
Now, the valid datatypes for each option is specified below. <p>
<br>
<pre><tt> </tt>&nbsp;<tt> </tt>&nbsp;Op                      <tt> </tt>&nbsp;<tt> </tt>&nbsp;Allowed Types
     ----------------         ---------------------------
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_MAX, MPI_MIN<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;C integer, Fortran integer,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;floating-point
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_SUM, MPI_PROD <tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;C integer, Fortran integer,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;floating-point, complex
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_LAND, MPI_LOR,<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;C integer, logical
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_LXOR
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_BAND, MPI_BOR,<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;C integer, Fortran integer, byte
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_BXOR
</pre><p>
<b>Example 1:</b> A routine that computes the dot product of two vectors that
are distributed across a  group of processes and returns the answer at
process zero.  <p>
<br>
<pre>    SUBROUTINE PAR_BLAS1(m, a, b, c, comm)
    REAL a(m), b(m)       ! local slice of array
    REAL c                ! result (at process zero)
    REAL sum
    INTEGER m, comm, i, ierr

    ! local sum
    sum = 0.0
    DO i = 1, m
       sum = sum + a(i)*b(i)
    END DO

    ! global sum
    CALL MPI_REDUCE(sum, c, 1, MPI_REAL, MPI_SUM, 0, comm, ierr)
    RETURN
</pre><p>
<b>Example 2:</b> A routine that computes the product of a vector and an array
that are distributed across a  group of processes and returns the answer
at process zero. <p>
<br>
<pre>    SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm)
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
</pre>
<h2><a name='sect11' href='#toc11'>Minloc and Maxloc</a></h2>
The operator MPI_MINLOC is used to compute a global minimum
and also an index attached to the minimum value. MPI_MAXLOC similarly computes
a global maximum and index. One application of these is to compute a global
minimum (maximum) and the rank of the process containing this value.

<p> <p>
The operation that defines MPI_MAXLOC is  <p>
<br>
<pre>         ( u )    (  v )      ( w )
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
         ( i )    (  j )      ( k )
where
    w = min(u, v)
and
         ( i            if u &lt; v
         (
   k   = ( min(i, j)    if u = v
         (
         (  j           if u &gt; v)
</pre><p>

<p> Both operations are associative and commutative. Note that if MPI_MAXLOC
is applied to reduce a sequence of pairs (u(0), 0), (<i>u(1)</i>, 1),&nbsp;..., (u(n-1),
n-1), then the value returned is (u , r), where u= max(i) u(i) and r is
the index of the first global maximum in the sequence. Thus, if each process
supplies a value and its rank within the group, then a reduce operation
with op = MPI_MAXLOC will return the maximum value and the rank of the
first process with that value. Similarly, MPI_MINLOC can be used to return
a minimum and its index. More generally, MPI_MINLOC computes a lexicographic
minimum, where elements are ordered according to the first component of
each pair, and ties are resolved according to the second component. <p>
The
reduce operation is defined to operate on arguments that consist of a pair:
value and index. For both Fortran and C, types are provided to describe
the pair. The potentially mixed-type nature of such arguments is a problem
in Fortran. The problem is circumvented, for Fortran, by having the MPI-provided
type consist of a pair of the same type as value, and coercing the index
to this type also. In C, the MPI-provided pair type has distinct types and
the index is an int. <p>
In order to use MPI_MINLOC and MPI_MAXLOC in a reduce
operation, one must provide a datatype argument that represents a pair
(value and index). MPI provides nine such predefined datatypes. The operations
MPI_MAXLOC and MPI_MINLOC can be used with each of the following datatypes:
<p>
<br>
<pre>    Fortran:
    Name                     Description
    MPI_2REAL                pair of REALs
    MPI_2DOUBLE_PRECISION    pair of DOUBLE-PRECISION variables
    MPI_2INTEGER             pair of INTEGERs

    C: <tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;
    Name        <tt> </tt>&nbsp;<tt> </tt>&nbsp;    <tt> </tt>&nbsp;<tt> </tt>&nbsp;Description
    MPI_FLOAT_INT            float and int
    MPI_DOUBLE_INT           double and int
    MPI_LONG_INT             long and int
    MPI_2INT                 pair of ints
    MPI_SHORT_INT            short and int
    MPI_LONG_DOUBLE_INT      long double and int
</pre><p>
The data type MPI_2REAL is equivalent to: <br>
<pre>    <a href="../man3/MPI_Type_contiguous.3.php">MPI_TYPE_CONTIGUOUS</a>(2, MPI_REAL, MPI_2REAL)
</pre><p>
Similar statements apply for MPI_2INTEGER, MPI_2DOUBLE_PRECISION, and MPI_2INT.
<p>
The datatype MPI_FLOAT_INT is as if defined by the following sequence of
instructions. <p>
<br>
<pre>    type[0] = MPI_FLOAT
    type[1] = MPI_INT
    disp[0] = 0
    disp[1] = sizeof(float)
    block[0] = 1
    block[1] = 1
    <a href="../man3/MPI_Type_struct.3.php">MPI_TYPE_STRUCT</a>(2, block, disp, type, MPI_FLOAT_INT)
</pre><p>
Similar statements apply for MPI_LONG_INT and MPI_DOUBLE_INT.   <p>
<b>Example
3:</b> Each process has an array of 30 doubles, in C. For each of the 30 locations,
compute the value and rank of the process containing the largest value.
<p>
<br>
<pre>        ...
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
        MPI_Reduce( in, out, 30, MPI_DOUBLE_INT, MPI_MAXLOC, root, comm
);
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
</pre><p>
</pre><b>Example 4:</b>  Same example, in Fortran.   <p>
<br>
<pre>    ...
    ! each process has an array of 30 double: ain(30)

    DOUBLE PRECISION ain(30), aout(30)
    INTEGER ind(30);
    DOUBLE PRECISION in(2,30), out(2,30)
    INTEGER i, myrank, root, ierr;

    <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(MPI_COMM_WORLD, myrank);
        DO I=1, 30
            in(1,i) = ain(i)
            in(2,i) = myrank    ! myrank is coerced to a double
        END DO

    MPI_REDUCE( in, out, 30, MPI_2DOUBLE_PRECISION, MPI_MAXLOC, root,
                                                              comm, ierr
);
    ! At this point, the answer resides on process root

    IF (myrank .EQ. root) THEN
            ! read ranks out
            DO I= 1, 30
                aout(i) = out(1,i)
                ind(i) = out(2,i)  ! rank is coerced back to an integer

            END DO
        END IF
</pre><p>
<b>Example 5:</b> Each process has a nonempty array of values.  Find the minimum
global value, the rank of the process that holds it, and its index on this
process. <p>
<br>
<pre>    #define  LEN   1000

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
</pre><p>
All MPI objects (e.g., MPI_Datatype, MPI_Comm) are of type INTEGER in Fortran.

<h2><a name='sect12' href='#toc12'>Notes on Collective Operations</a></h2>

<p> The reduction functions ( <i>MPI_Op</i> ) do not
return an error value.  As a result, if the functions detect an error, all
they can do is either call  <i><a href="../man3/MPI_Abort.3.php">MPI_Abort</a></i> or silently skip the problem.  Thus,
if you change the error handler from <i>MPI_ERRORS_ARE_FATAL</i> to something
else, for example,  <i>MPI_ERRORS_RETURN</i> , then no error may be indicated.

<p> The reason for this is the performance problems in ensuring that all collective
routines return the same error value.
<p>
<h2><a name='sect13' href='#toc13'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI:Exception object. <p>
Before
the error value is returned, the current MPI error handler is called. By
default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect14' href='#toc14'>See Also</a></h2>
<p>
<a href="../man3/MPI_Allreduce.3.php">MPI_Allreduce</a> <br>
<a href="../man3/MPI_Reduce_scatter.3.php">MPI_Reduce_scatter</a> <br>
<a href="../man3/MPI_Scan.3.php">MPI_Scan</a> <br>
<a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a> <br>

<p><a href="../man3/MPI_Op_free.3.php">MPI_Op_free</a>
<p>
<p>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Use of In-place Option</a></li>
<li><a name='toc9' href='#sect9'>When Communicator is an Inter-communicator</a></li>
<li><a name='toc10' href='#sect10'>Predefined Reduce Operations</a></li>
<li><a name='toc11' href='#sect11'>Minloc and Maxloc</a></li>
<li><a name='toc12' href='#sect12'>Notes on Collective Operations</a></li>
<li><a name='toc13' href='#sect13'>Errors</a></li>
<li><a name='toc14' href='#sect14'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
