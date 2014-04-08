<?php
$topdir = "../../..";
$title = "MPI_Pack(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Pack</B> - Packs data of a given datatype into contiguous memory.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Pack(void *<I>inbuf</I>, int <I>incount</I>, MPI_Datatype <I>datatype</I>,
            void <I>*outbuf</I>, int <I>outsize</I>, int <I>*position</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PACK(<I>INBUF,</I> <I>INCOUNT,</I> <I>DATATYPE,</I> <I>OUTBUF,OUTSIZE,</I> <I>POSITION,</I>
                 <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>INBUF(*),</I> <I>OUTBUF(*)</I>
            INTEGER   <I>INCOUNT,</I> <I>DATATYPE,</I> <I>OUTSIZE,</I> <I>POSITION,</I> <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Datatype::Pack(const void* <I>inbuf</I>, int <I>incount</I>, void *<I>outbuf</I>,
            int <I>outsize</I>, int&amp; <I>position</I>, const Comm &amp;<I>comm</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       inbuf     Input buffer start (choice).

       incount   Number of input data items (integer).

       datatype  Datatype of each input data item (handle).

       outsize   Output buffer size, in bytes (integer).

       comm      Communicator for packed message (handle).

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       position  Current position in buffer, in bytes (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       outbuf    Output buffer start (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Packs  the  message  in  the  send  buffer specified by <I>inbuf</I>, <I>incount</I>,
       <I>datatype</I> into the buffer space specified by  <I>outbuf</I>  and  <I>outsize</I>.  The
       input  buffer  can be any communication buffer allowed in <a href="../man3/MPI_Send.3.php">MPI_Send</a>. The
       output buffer is a contiguous storage area  containing  <I>outsize</I>  bytes,
       starting  at  the  address <I>outbuf</I> (length is counted in bytes, not ele-
       ments, as if it were a communication  buffer  for  a  message  of  type
       MPI_Packed).

       The  input value of <I>position</I> is the first location in the output buffer
       to be used for packing. <I>position</I> is incremented  by  the  size  of  the
           char buff[1000];

           ....

           <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>(MPI_COMM_WORLD, &amp;myrank);
           if (myrank == 0)
           {
              / * SENDER CODE */

           position = 0;
             MPI_Pack(&amp;i, 1, MPI_INT, buff, 1000, &amp;position, MPI_COMM_WORLD);
             MPI_Pack(&amp;j, 1, MPI_INT, buff, 1000, &amp;position, MPI_COMM_WORLD);
             <a href="../man3/MPI_Send.3.php">MPI_Send</a>( buff, position, MPI_PACKED, 1, 0, MPI_COMM_WORLD);
           }
           else  /* RECEIVER CODE */
             <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>( a, 2, MPI_INT, 0, 0, MPI_COMM_WORLD)

           }

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

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Unpack.3.php">MPI_Unpack</a>
       <a href="../man3/MPI_Pack_size.3.php">MPI_Pack_size</a>

1.3.4                            Nov 11, 2009                      <B>MPI_Pack(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
