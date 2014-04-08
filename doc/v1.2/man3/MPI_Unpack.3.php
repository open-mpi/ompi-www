<?php
$topdir = "../../..";
$title = "MPI_Unpack(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Unpack</B> - Unpacks a datatype into contiguous memory.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Unpack(void *<I>inbuf</I>, int <I>insize</I>, int <I>*position</I>,
            void <I>*outbuf</I>, int <I>outcount</I>, MPI_Datatype <I>datatype</I>,
            MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_UNPACK(<I>INBUF,</I> <I>INSIZE,</I> <I>POSITION,</I> <I>OUTBUF,</I> <I>OUTCOUNT,</I>
            <I>DATATYPE,</I> <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>INBUF(*),</I> <I>OUTBUF(*)</I>
            INTEGER   <I>INSIZE,</I> <I>POSITION,</I> <I>OUTCOUNT,</I> <I>DATATYPE,</I>
                 <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Datatype::Unpack(const void* <I>inbuf</I>, int <I>insize</I>,
            void *<I>outbuf</I>, int <I>outcount</I>, int&amp; <I>position</I>,
            const Comm&amp; <I>comm</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       inbuf     Input buffer start (choice).

       insize    Size of input buffer, in bytes (integer).

       outcount  Number of items to be unpacked (integer).

       datatype  Datatype of each output data item (handle).

       comm      Communicator for packed message (handle).

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       position  Current position in bytes (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       outbuf    Output buffer start (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Unpacks  a  message  into  the receive buffer specified by outbuf, out-
       count, datatype from the buffer space specified by  inbuf  and  insize.
       The  output buffer can be any communication buffer allowed in <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>.
       The input buffer is a contiguous storage area containing insize  bytes,
       starting  at  address  inbuf.  The input value of position is the first
       location in the input buffer occupied by the packed  message.  <I>position</I>
       is  incremented  by  the size of the packed message, so that the output
       received. The actual number of items  received  is  determined  by  the
       length of the incoming message. In MPI_Unpack, the count argument spec-
       ifies the actual number of items that are to be unpacked; the "size" of
       the  corresponding message is the increment in position. The reason for
       this change is that the "incoming message size"  is  not  predetermined
       since  the user decides how much to unpack; nor is it easy to determine
       the "message size" from the number of items to be unpacked.

       To understand the behavior of pack and  unpack,  it  is  convenient  to
       think  of  the data part of a message as being the sequence obtained by
       concatenating the successive values sent  in  that  message.  The  pack
       operation  stores  this sequence in the buffer space, as if sending the
       message to that buffer. The unpack operation  retrieves  this  sequence
       from  buffer  space, as if receiving a message from that buffer. (It is
       helpful to think of internal Fortran files or sscanf in C for a similar
       function.)

       Several messages can be successively packed into one packing unit. This
       is effected by several successive related calls to <a href="../man3/MPI_Pack.3.php">MPI_Pack</a>, where  the
       first  call  provides position = 0, and each successive call inputs the
       value of position that was output by the previous call,  and  the  same
       values  for  outbuf, outcount, and comm. This packing unit now contains
       the equivalent information that would have been stored in a message  by
       one  send  call  with  a send buffer that is the "concatenation" of the
       individual send buffers.

       A packing unit can be sent using type MPI_Packed. Any point-to-point or
       collective  communication  function can be used to move the sequence of
       bytes that forms the packing unit from one  process  to  another.  This
       packing  unit can now be received using any receive operation, with any
       datatype: The type-matching rules are relaxed for  messages  sent  with
       type MPI_Packed.

       A  message  sent  with  any type (including MPI_Packed) can be received
       using the type MPI_Packed. Such a message can then be unpacked by calls
       to MPI_Unpack.

       A packing unit (or a message created by a regular, "typed" send) can be
       unpacked into several successive messages. This is effected by  several
       successive  related  calls to MPI_Unpack, where the first call provides
       position = 0, and each successive call inputs  the  value  of  position
       that  was  output  by the previous call, and the same values for inbuf,
       insize, and comm.

       The concatenation of two packing units is  not  necessarily  a  packing
       unit;  nor is a substring of a packing unit necessarily a packing unit.
       Thus, one cannot concatenate two packing  units  and  then  unpack  the
       result as one packing unit; nor can one unpack a substring of a packing
       unit as a separate packing unit. Each packing unit that was created  by
       a  related sequence of pack calls or by a regular send must be unpacked
       as a unit, by a sequence of related unpack calls.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Pack.3.php">MPI_Pack</a>
       <a href="../man3/MPI_Pack_size.3.php">MPI_Pack_size</a>

Open MPI 1.2                    September 2006            MPI_Unpack(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
