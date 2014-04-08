<?php
$topdir = "../../..";
$title = "MPI_Grequest_complete(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Grequest_complete</B>   -  Reports  that  a generalized request is com-
       plete.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Grequest_complete(MPI_Request <I>request</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GREQUEST_COMPLETE(<I>REQUEST,</I> <I>IERROR</I>)
            INTEGER   <I>REQUEST,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Grequest::Complete()

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       request   Generalized request (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Grequest_complete informs MPI that the  operations  represented  by
       the   generalized   request   <I>request</I>   are   complete.   A   call   to
       <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>(<I>request,</I> <I>status</I>) will return, and a call to  <a href="../man3/MPI_Test.3.php">MPI_Test</a>(<I>request,</I>
       <I>flag,</I>  <I>status</I>)  will  return  flag=true  only  after a call to MPI_Gre-
       quest_complete has declared that these operations are complete.

       MPI imposes no restrictions on the code executed by the callback  func-
       tions.  However,  new  nonblocking operations should be defined so that
       the  general  semantic  rules  about  MPI  calls  such   as   <a href="../man3/MPI_Test.3.php">MPI_Test</a>,
       <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>,  or  <a href="../man3/MPI_Cancel.3.php">MPI_Cancel</a>  still  hold.  For example, all these
       calls are supposed to be local and nonblocking. Therefore, the callback
       functions  <I>query</I><B>_</B><I>fn</I>,  <I>free</I><B>_</B><I>fn</I>,  or <I>cancel</I><B>_</B><I>fn</I> should invoke blocking MPI
       communication calls only if the context is such that  these  calls  are
       guaranteed  to return in finite time. Once <a href="../man3/MPI_Cancel.3.php">MPI_Cancel</a> has been invoked,
       the canceled operation should complete in finite  time,  regardless  of
       the state of other processes (the operation has acquired "local" seman-
       tics). It should either succeed or fail without side-effects. The  user
       should guarantee these same properties for newly defined operations.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

Open MPI 1.2                    September 2006 MPI_Grequest_complete(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
