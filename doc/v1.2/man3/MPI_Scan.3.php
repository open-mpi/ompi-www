<?php
$topdir = "../../..";
$title = "MPI_Scan(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Scan</B> - Computes an inclusive scan (partial reduction)

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Scan(void *<I>sendbuf</I>, void *<I>recvbuf</I>, int <I>count</I>,
            MPI_Datatype <I>datatype</I>, MPI_Op <I>op</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_SCAN(<I>SENDBUF,</I> <I>RECVBUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>OP,</I> <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>OP,</I> <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Intracomm::Scan(const void* <I>sendbuf</I>, void* <I>recvbuf</I>,
            int <I>count</I>, const MPI::Datatype&amp; <I>datatype</I>,
            const MPI::Op&amp; <I>op</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Send buffer (choice).

       count     Number of elements in input buffer (integer).

       datatype  Data type of elements of input buffer (handle).

       op        Operation (handle).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Receive buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Scan  is used to perform an inclusive prefix reduction on data dis-
       tributed across the calling processes. The operation  returns,  in  the
       <I>recvbuf</I> of the process with rank i, the reduction (calculated according
       to the function <I>op</I>) of the values in the  <I>sendbuf</I>s  of  processes  with
       ranks  0,  ...,  i (inclusive). The type of operations supported, their
       semantics, and the constraints on send and receive buffers are  as  for
       <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>.

</PRE>
<H2>EXAMPLE</H2><PRE>
       This example uses a user-defined operation to produce a segmented scan.
       A segmented scan takes, as input, a set of values and a  set  of  logi-
       cals,  where  the  logicals delineate the various segments of the scan.
       For example,

             [ u ]     [ v ]     [ w ]
             [   ]  o  [   ]  =  [   ]
             [ i ]     [ j ]     [ j ]

       where

                   ( u + v if i  = j
             w  =  (
                   ( v     if i != j

       Note that this is a noncommutative operator. C code that implements  it
       is given below.

            typedef struct {
                 double val;
                 int log;
            } SegScanPair;

            /*
             * the user-defined function
             */
            void segScan(SegScanPair *in, SegScanPair *inout, int *len,
                 MPI_Datatype *dptr)
            {
                 int i;
                 SegScanPair c;

                 for (i = 0; i &lt; *len; ++i) {
                      if (in-&gt;log == inout-&gt;log)
                           c.val = in-&gt;val + inout-&gt;val;
                      else
                           c.val = inout-&gt;val;

                      c.log = inout-&gt;log;
                      *inout = c;
                      in++;
                      inout++;
                 }
            }

       Note  that  the inout argument to the user-defined function corresponds
       to the right-hand operand of the operator. When using this operator, we
       must be careful to specify that it is noncommutative, as in the follow-
       ing:

            int            i, base;
            SeqScanPair    a, answer;
            MPI_Op         myOp;
            MPI_Datatype   type[2] = {MPI_DOUBLE, MPI_INT};
            MPI_Aint       disp[2];
            int            blocklen[2] = {1, 1};
            MPI_Datatype   sspair;

            /*
             * explain to MPI how type SegScanPair is defined
             */
            <a href="../man3/MPI_Get_address.3.php">MPI_Get_address</a>(a, disp);
             * create the segmented-scan user-op
             * noncommutative - set commute (arg 2) to 0
             */
            <a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a>((MPI_User_function *)segScan, 0, &amp;myOp);
            ...
            MPI_Scan(a, answer, 1, sspair, myOp, comm);

</PRE>
<H2>USE OF IN-PLACE OPTION</H2><PRE>
       WHen the communicator is an intracommunicator, you can perform a  scan-
       ning  operation  in  place  (the  output  buffer  is  used as the input
       buffer).  Use the variable MPI_IN_PLACE as the  value  of  the  <I>sendbuf</I>
       argument.  The input data is taken from the receive buffer and replaced
       by the output data.

</PRE>
<H2>NOTES ON COLLECTIVE OPERATIONS</H2><PRE>
       The reduction functions of type MPI_Op do not return  an  error  value.
       As  a  result,  if  the  functions  detect an error, all they can do is
       either call <a href="../man3/MPI_Abort.3.php">MPI_Abort</a> or silently skip the problem. Thus, if the  error
       handler  is  changed from MPI_ERRORS_ARE_FATAL to something else (e.g.,
       MPI_ERRORS_RETURN), then no error may be indicated.

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

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Exscan.3.php">MPI_Exscan</a>
       <a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a>
       <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>

Open MPI 1.2                    September 2006              MPI_Scan(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
