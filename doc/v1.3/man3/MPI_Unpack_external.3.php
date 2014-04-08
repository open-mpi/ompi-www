<?php
$topdir = "../../..";
$title = "MPI_Unpack_external(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Unpack_external</B> - Reads data from a portable format

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Unpack_external(char *<I>datarep</I>, void *<I>inbuf</I>,
            MPI_Aint <I>insize</I>, MPI_Aint *<I>position</I>,
            void *<I>outbuf</I>, int <I>outcount</I>,
            MPI_Datatype <I>datatype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_UNPACK_EXTERNAL(<I>DATAREP,</I> <I>INBUF,</I> <I>INSIZE,</I> <I>POSITION,</I>
            <I>OUTBUF,</I> <I>OUTCOUNT,</I> <I>DATATYPE,</I> <I>IERROR</I>)

            INTEGER        <I>OUTCOUNT,</I> <I>DATATYPE,</I> <I>IERROR</I>
            INTEGER (KIND=MPI_ADDRESS_KIND) <I>INSIZE,</I> <I>POSITION</I>
            CHARACTER*(*)  <I>DATAREP</I>
            &lt;type&gt;         <I>INBUF(*),</I> <I>OUTBUF(*)</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Unpack_external(const char* <I>datarep</I>,
            const void* <I>inbuf</I>, MPI::Aint <I>insize</I>,
            MPI_Aint&amp; <I>position</I>, void *<I>outbuf</I>,
            int <I>outcount</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       datarep   Data Representation (string).

       inbuf     Input buffer start (choice).

       insize    Size of input buffer, in bytes (integer).

       outcount  Number of items to be unpacked (integer).

       datatype  Datatype of each output data item (handle).

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       position  Current position in buffer, in bytes (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       outbuf    Output buffer start (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Unpack_external  unpacks data from the external32 format, a univer-
       sal data representation defined by the MPI Forum. This format is useful
       for  exchanging  data between MPI implementations, or when writing data
       for unpacking (measured in bytes, not elements, relative to  the  start
       of  the  buffer). When the function returns, <I>position</I> is incremented by
       the size of the packed message, so that it points to the first location
       in  <I>inbuf</I>  following  the message that was unpacked. This way it may be
       used as input to a subsequent call to MPI_Unpack_external.

</PRE>
<H2>NOTES</H2><PRE>
       Note  the  difference  between  <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>  and  MPI_Unpack_external:  In
       <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>, the <I>count</I> argument specifies the maximum number of items that
       can be received. In MPI_Unpack_external, the <I>outcount</I>  argument  speci-
       fies the actual number of items that are to be unpacked. With a regular
       receive operation, the incoming message size determines the  number  of
       components that will be received. With MPI_Unpack_external, it is up to
       the user to specify how many components to unpack, since the  user  may
       wish  to  unpack  the  received  message  multiple  times  into various
       buffers.

       To understand the behavior of pack and  unpack,  it  is  convenient  to
       think  of  the data part of a message as being the sequence obtained by
       concatenating the successive values sent  in  that  message.  The  pack
       operation  stores  this sequence in the buffer space, as if sending the
       message to that buffer. The unpack operation  retrieves  this  sequence
       from  buffer  space, as if receiving a message from that buffer. (It is
       helpful to think of internal Fortran files or sscanf in C for a similar
       function.)

       Several messages can be successively packed into one packing unit. This
       is effected by several successive related calls  to  <a href="../man3/MPI_Pack_external.3.php">MPI_Pack_external</a>,
       where  the  first  call  provides  <I>position</I>=0, and each successive call
       inputs the value of <I>position</I> that was  output  by  the  previous  call,
       along  with  the same values for <I>outbuf</I> and <I>outcount</I>. This packing unit
       now contains the equivalent information that would have been stored  in
       a  message  by one send call with a send buffer that is the "concatena-
       tion" of the individual send buffers.

       A packing unit can be sent using type MPI_PACKED. Any point-to-point or
       collective  communication  function can be used to move the sequence of
       bytes that forms the packing unit from one  process  to  another.  This
       packing  unit can now be received using any receive operation, with any
       datatype: The type-matching rules are relaxed for  messages  sent  with
       type MPI_PACKED.

       A  packing  unit can be unpacked into several successive messages. This
       is effected by several successive related calls to MPI_Unpack_external,
       where  the  first  call  provides  <I>position</I>=0, and each successive call
       inputs the value of position that was output by the previous call,  and
       the same values for <I>inbuf</I> and <I>insize</I>.

       The  concatenation  of  two  packing units is not necessarily a packing
       unit; nor is a substring of a packing unit necessarily a packing  unit.
       Thus,  one  cannot  concatenate  two  packing units and then unpack the
       result as one packing unit; nor can one unpack a substring of a packing
       unit  as a separate packing unit. Each packing unit that was created by
       a related sequence of pack calls must  be  unpacked  as  a  unit  by  a
       sequence of related unpack calls.

       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Pack_external.3.php">MPI_Pack_external</a>
       <a href="../man3/MPI_Pack_external_size.3.php">MPI_Pack_external_size</a>
       <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>
       <B>sscanf(3C)</B>

1.3.4                            Nov 11, 2009           <B>MPI_Unpack_external(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
