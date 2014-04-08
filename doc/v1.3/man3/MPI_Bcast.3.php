<?php
$topdir = "../../..";
$title = "MPI_Bcast(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Bcast</B> - Broadcasts a message from the process with rank <I>root</I> to all
       other processes of the group.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Bcast(void <I>*buffer</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
            int <I>root</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_BCAST(<I>BUFFER</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>ROOT</I>, <I>COMM</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>BUFFER</I>(*)
            INTEGER   <I>COUNT</I>, <I>DATATYPE</I>, <I>ROOT</I>, <I>COMM</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Bcast(void* <I>buffer</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>, int <I>root</I>) const = 0

</PRE>
<H2>INPUT/OUTPUT PARAMETERS</H2><PRE>
       buffer    Starting address of buffer (choice).

       count     Number of entries in buffer (integer).

       datatype  Data type of buffer (handle).

       root      Rank of broadcast root (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Bcast broadcasts a message from the process with rank root  to  all
       processes of the group, itself included. It is called by all members of
       group using the same arguments for comm, root. On return, the  contents
       of root's communication buffer has been copied to all processes.

       General, derived datatypes are allowed for datatype. The type signature
       of count, datatype on any process must be equal to the  type  signature
       of  count,  datatype  at the root. This implies that the amount of data
       sent must be equal  to  the  amount  received,  pairwise  between  each
       process  and the root. MPI_Bcast and all other data-movement collective
       routines make this restriction. Distinct type maps between  sender  and
       receiver are still allowed.

       <B>Example:</B>  Broadcast  100  ints  from  process 0 to every process in the
       group.
           MPI_Comm comm;

       WHEN COMMUNICATOR IS AN INTER-COMMUNICATOR

       When the communicator is an inter-communicator, the root process in the
       first  group  broadcasts data to all the processes in the second group.
       The first group defines the root process.  That process  uses  MPI_ROOT
       as  the  value  of  its  <I>root</I>  argument.   The  remaining processes use
       MPI_PROC_NULL as the value of their <I>root</I> argument.   All  processes  in
       the  second  group use the rank of that root process in the first group
       as the value of their <I>root</I> argument.   The receive buffer arguments  of
       the  processes  in  the  second  group must be consistent with the send
       buffer argument of the root process in the first group.

</PRE>
<H2>NOTES</H2><PRE>
       This function does not support the in-place option.

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

1.3.4                            Nov 11, 2009                     <B>MPI_Bcast(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
