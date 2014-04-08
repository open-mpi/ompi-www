<?php
$topdir = "../../..";
$title = "MPI_Bsend(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Bsend</B> - Basic send with user-specified buffering.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Bsend(void <I>*buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
            int <I>dest</I>, int <I>tag</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_BSEND(<I>BUF</I>, <I>COUNT</I>,<I>DATATYPE</I>, <I>DEST</I>, <I>TAG</I>, <I>COMM</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(*)
            INTEGER   <I>COUNT</I>, <I>DATATYPE</I>, <I>DEST</I>, <I>TAG</I>, <I>COMM</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Comm::Bsend(const void* <I>buf</I>, int <I>count</I>, const
            Datatype&amp; <I>datatype</I>, int <I>dest</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       buf       Initial address of send buffer (choice).

       count     Number of entries in send buffer (nonnegative integer).

       datatype  Datatype of each send buffer element (handle).

       dest      Rank of destination (integer).

       tag       Message tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Bsend performs a buffered-mode, blocking send.

</PRE>
<H2>NOTES</H2><PRE>
       This  send is provided as a convenience function; it allows the user to
       send messages without worrying about where they are  buffered  (because
       the user must have provided buffer space with <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a>).

       In deciding how much buffer space to allocate, remember that the buffer
       space is not available for reuse by subsequent  <I>MPI</I><B>_</B><I>Bsend</I>s  unless  you
       are certain that the message has been received (not just that it should
       have been received).  For example, this code does not  allocate  enough
       buffer space:

           <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a>( b, n*sizeof(double) + MPI_BSEND_OVERHEAD );

       In  C, you can force the messages to be delivered by <a href="../man3/MPI_Buffer_detach.3.php">MPI_Buffer_detach</a>(
       &amp;b, &amp;n ); <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a>( b, n ); (The  <I>MPI</I><B>_</B><I>Buffer</I><B>_</B><I>detach</I>  will  not
       complete until all buffered messages are delivered.)

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
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a>
       <a href="../man3/MPI_Ibsend.3.php">MPI_Ibsend</a>
       <a href="../man3/MPI_Bsend_init.3.php">MPI_Bsend_init</a>

1.3.4                            Nov 11, 2009                     <B>MPI_Bsend(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
