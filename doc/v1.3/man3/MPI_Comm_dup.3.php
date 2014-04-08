<?php
$topdir = "../../..";
$title = "MPI_Comm_dup(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_dup</B>   -   Duplicates  an  existing  communicator  with all its
       cached information.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_dup(MPI_Comm <I>comm</I>, MPI_Comm <I>*newcomm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_DUP(<I>COMM,</I> <I>NEWCOMM,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>NEWCOMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Intracomm Intracomm::Dup() const

       Intercomm Intercomm::Dup() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newcomm   Copy of comm (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_dup duplicates the existing communicator comm with  associated
       key  values.  For each key value, the respective copy callback function
       determines the attribute value associated with this key in the new com-
       municator;  one  particular  action that a copy callback may take is to
       delete the attribute from the new communicator. Returns  in  newcomm  a
       new  communicator  with  the same group, any copied cached information,
       but a new context (see Section 5.7.1 of the MPI-1 Standard,  "Function-
       ality").

</PRE>
<H2>NOTES</H2><PRE>
       This operation is used to provide a parallel library call with a dupli-
       cate communication space that has the same properties as  the  original
       communicator.  This  includes any attributes (see below) and topologies
       (see Chapter 6, "Process Topologies," in the MPI-1 Standard). This call
       is  valid  even  if  there  are  pending  point-to-point communications
       involving the communicator  comm.  A  typical  call  might  involve  an
       MPI_Comm_dup   at   the   beginning   of  the  parallel  call,  and  an
       <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> of that duplicated communicator at the end of  the  call.
       Other models of communicator management are also possible.

       This call applies to both intra- and intercommunicators.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009                  <B>MPI_Comm_dup(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
