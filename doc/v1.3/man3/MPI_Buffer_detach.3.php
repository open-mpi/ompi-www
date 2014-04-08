<?php
$topdir = "../../..";
$title = "MPI_Buffer_detach(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Buffer_detach</B>  -  Removes an existing buffer (for use in <a href="../man3/MPI_Bsend.3.php">MPI_Bsend</a>,
       etc.)

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Buffer_detach(void <I>*buf</I>, int <I>*size</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_BUFFER_DETACH(<I>BUF</I>, <I>SIZE</I>, <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(<I>*</I>)
            INTEGER   <I>SIZE</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Detach_buffer(void*&amp; <I>buffer</I>)

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       buf       Initial buffer address (choice).

       size      Buffer size, in bytes (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Detach the buffer currently associated with MPI. The call  returns  the
       address  and the size of the detached buffer. This operation will block
       until all messages currently in the buffer have been transmitted.  Upon
       return  of  this  function,  the user may reuse or deallocate the space
       taken by the buffer.

       <B>Example:</B> Calls to attach and detach buffers.

           #define BUFFSIZE 10000
           int size
           char *buff;
           <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a>( malloc(BUFFSIZE), BUFFSIZE);
           /* a buffer of 10000 bytes can now be used by <a href="../man3/MPI_Bsend.3.php">MPI_Bsend</a> */
           MPI_Buffer_detach( &amp;buff, &amp;size);
           /* Buffer size reduced to zero */
           <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a>( buff, size);
           /* Buffer of 10000 bytes available again */

</PRE>
<H2>NOTES</H2><PRE>
       The reason that MPI_Buffer_detach returns the address and size  of  the
       buffer  being  detached  is  to  allow  nested libraries to replace and
       restore the buffer. For example, consider

           int size, mysize, idummy;
           void *ptr, *myptr, *dummy;

       This is much like the action of the UNIX signal  routine  and  has  the
       same  strengths  (it's simple) and weaknesses (it only works for nested
       usages).

       <B>For</B> <B>Fortran:</B> The Fortran binding for this routine is different. Because
       Fortran  does  not  have pointers, it is impossible to provide a way to
       use the output of this routine to exchange buffers. In this case,  only
       the size field is set.

       <B>For</B>  <B>C:</B>  Even though the buf argument is declared as void, it is really
       the address of a void pointer. See Rationale, below, for more  details.

       Even  though  the  C  functions <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a> and MPI_Buffer_detach
       both have a first argument of type void*, these arguments are used dif-
       ferently:  A  pointer to the buffer is passed to <a href="../man3/MPI_Buffer_attach.3.php">MPI_Buffer_attach</a>; the
       address of the pointer is passed to  MPI_Buffer_detach,  so  that  this
       call can return the pointer value.

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
       <a href="../man3/MPI_Bsend.3.php">MPI_Bsend</a>

1.3.4                            Nov 11, 2009             <B>MPI_Buffer_detach(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
