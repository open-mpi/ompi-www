<?php
$topdir = "../../..";
$title = "MPI_Buffer_attach(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Buffer_attach</B> - Attaches a user-defined buffer for sending.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Buffer_attach(void <I>*buf</I>, int <I>size</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_BUFFER_ATTACH(<I>BUF</I>, <I>SIZE</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(<I>*</I>)
            INTEGER   <I>SIZE</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Attach_buffer(void* <I>buffer</I>, int <I>size</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       buf       Initial buffer address (choice).

       size      Buffer size, in bytes (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Provides  to MPI a buffer in the user's memory to be used for buffering
       outgoing messages. The buffer is used only by messages sent in buffered
       mode. Only one buffer can be attached to a process at a time.

</PRE>
<H2>NOTES</H2><PRE>
       The size given should be the sum of the sizes of all outstanding Bsends
       that you intend to have, plus MPI_BSEND_OVERHEAD bytes for  each  Bsend
       that  you  do.  For  the  purposes  of calculating size, you should use
       <a href="../man3/MPI_Pack_size.3.php">MPI_Pack_size</a>. In other words, in the code

           MPI_Buffer_attach( buf, size );
           <a href="../man3/MPI_Bsend.3.php">MPI_Bsend</a>( ..., count=20, datatype=type1, ... );
           ...
           <a href="../man3/MPI_Bsend.3.php">MPI_Bsend</a>( ..., count=40, datatype=type2, ... );

       the value of size in the MPI_Buffer_attach call should be greater  than
       the value computed by

           <a href="../man3/MPI_Pack_size.3.php">MPI_Pack_size</a>( 20, type1, comm, &amp;s1 );
           <a href="../man3/MPI_Pack_size.3.php">MPI_Pack_size</a>( 40, type2, comm, &amp;s2 );
           size = s1 + s2 + 2 * MPI_BSEND_OVERHEAD;

       MPI_BSEND_OVERHEAD gives the maximum amount of buffer space that may be
       used by the Bsend routines. This value is in mpi.h for C and mpif.h for
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Buffer_detach.3.php">MPI_Buffer_detach</a>

1.3.4                            Nov 11, 2009             <B>MPI_Buffer_attach(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
