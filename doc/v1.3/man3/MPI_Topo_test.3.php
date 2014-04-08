<?php
$topdir = "../../..";
$title = "MPI_Topo_test(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Topo_test</B>  -  Determines  the  type of topology (if any) associated
       with a communicator.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Topo_test(MPI_Comm <I>comm</I>, int <I>*top</I><B>_</B><I>type</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TOPO_TEST(<I>COMM,</I> <I>TOP</I><B>_</B><I>TYPE,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>TOP</I><B>_</B><I>TYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Comm::Get_topology() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       top_type  Topology type of communicator comm (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The function  MPI_Topo_test  returns  the  type  of  topology  that  is
       assigned to a communicator.

       The output value <I>top</I><B>_</B><I>type</I> is one of the following:

           MPI_GRAPH       graph topology
           MPI_CART        Cartesian topology
           MPI_UNDEFINED   no topology

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

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
