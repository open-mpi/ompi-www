<?php
$topdir = "../../..";
$title = "MPI_Op_create(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Op_create</B> - Creates a user-defined combination function handle.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Op_create(MPI_User_function *<I>function</I>, int <I>commute</I>,
            MPI_Op *<I>op</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_OP_CREATE(<I>FUNCTION,</I> <I>COMMUTE,</I> <I>OP,</I> <I>IERROR</I>)
            EXTERNAL  <I>FUNCTION</I>
            LOGICAL   <I>COMMUTE</I>
            INTEGER   <I>OP,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Op::Init(User function* <I>function</I>, bool <I>commute</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       function  User-defined function (function).

       commute   True if commutative; false otherwise.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       op        Operation (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Op_create  binds  a  user-defined  global operation to an op handle
       that  can  subsequently   be   used   in   <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>,   <a href="../man3/MPI_Allreduce.3.php">MPI_Allreduce</a>,
       <a href="../man3/MPI_Reduce_scatter.3.php">MPI_Reduce_scatter</a>,   and   <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>.  The  user-defined  operation  is
       assumed to be associative. If commute = true, then the operation should
       be both commutative and associative. If commute = false, then the order
       of operands is fixed and is defined to be in  ascending,  process  rank
       order,  beginning  with  process  zero.  The order of evaluation can be
       changed, taking advantage of the associativity  of  the  operation.  If
       commute  =  true  then  the  order of evaluation can be changed, taking
       advantage of commutativity and associativity.

       <I>function</I> is the user-defined function, which must  have  the  following
       four arguments: invec, inoutvec, len, and datatype.

       The ANSI-C prototype for the function is the following:

         typedef void MPI_User_function(void *invec, void *inoutvec,
                                        int *len,
                                        MPI_Datatype *datatype);

       that  the  following holds: Let u[0], ..., u[len-1] be the len elements
       in the communication buffer described by the arguments invec, len,  and
       datatype  when  the function is invoked; let v[0], ..., v[len-1] be len
       elements  in  the  communication  buffer  described  by  the  arguments
       inoutvec,   len,  and  datatype  when  the  function  is  invoked;  let
       w[0], ..., w[len-1]  be  len  elements  in  the  communication   buffer
       described  by  the arguments inoutvec, len, and datatype when the func-
       tion returns; then w[i] = u[i] o v[i], for i=0 ,..., len-1, where o  is
       the reduce operation that the function computes.

       Informally,  we  can  think of invec and inoutvec as arrays of len ele-
       ments that function is combining. The result  of  the  reduction  over-
       writes values in inoutvec, hence the name. Each invocation of the func-
       tion results in the pointwise evaluation of the reduce operator on  len
       elements: i.e, the function returns in inoutvec[i] the value invec[i] o
       inoutvec[i], for i = 0..., count-1, where o is the combining  operation
       computed by the function.

       By  internally  comparing  the value of the datatype argument to known,
       global handles, it is possible to overload the use of  a  single  user-
       defined function for several different data types.

       General  datatypes  may be passed to the user function. However, use of
       datatypes that are not contiguous is likely to lead to  inefficiencies.

       No  MPI  communication function may be called inside the user function.
       <a href="../man3/MPI_Abort.3.php">MPI_Abort</a> may be called inside the function in case of an error.

</PRE>
<H2>NOTES</H2><PRE>
       Suppose one defines a library of user-defined reduce functions that are
       overloaded: The datatype argument is used to select the right execution
       path at each invocation, according to the types of  the  operands.  The
       user-defined reduce function cannot "decode" the datatype argument that
       it is passed,  and  cannot  identify,  by  itself,  the  correspondence
       between the datatype handles and the datatype they represent. This cor-
       respondence was established when the datatypes were created. Before the
       library  is  used,  a library initialization preamble must be executed.
       This preamble code will define the  datatypes  that  are  used  by  the
       library  and  store  handles to these datatypes in global, static vari-
       ables that are shared by the user code and the library code.

       <B>Example:</B> Example of user-defined reduce:

       Compute the product of an array of complex numbers, in C.

           typedef struct {
               double real,imag;
           } Complex;

           /* the user-defined function
            */
           void myProd( Complex *in, Complex *inout, int *len,
                        MPI_Datatype *dptr )
           {
               int i;
               Complex c;

           }

           /* and, to call it...
            */
           ...

           /* each process has an array of 100 Complexes
                */
               Complex a[100], answer[100];
               MPI_Op myOp;
               MPI_Datatype ctype;

           /* explain to MPI how type Complex is defined
                */
              <a href="../man3/MPI_Type_contiguous.3.php">MPI_Type_contiguous</a>( 2, MPI_DOUBLE, &amp;ctype );
               <a href="../man3/MPI_Type_commit.3.php">MPI_Type_commit</a>( &amp;ctype );
               /* create the complex-product user-op
                */
               MPI_Op_create( myProd, True, &amp;myOp );

               <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>( a, answer, 100, ctype, myOp, root, comm );

               /* At this point, the answer, which consists of 100 Complexes,
                * resides on process root
                */

       The Fortran version of <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a> will  invoke  a  user-defined  reduce
       function using the Fortran calling conventions and will pass a Fortran-
       type datatype argument; the C version will use C calling convention and
       the  C  representation of a datatype handle. Users who plan to mix lan-
       guages should define their reduction functions accordingly.

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

1.3.4                            Nov 11, 2009                 <B>MPI_Op_create(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
