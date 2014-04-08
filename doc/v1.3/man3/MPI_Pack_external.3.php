<?php
$topdir = "../../..";
$title = "MPI_Pack_external(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Pack_external</B> - Writes data to a portable format

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Pack_external(char *<I>datarep</I>, void *<I>inbuf</I>,
            int <I>incount</I>, MPI_Datatype <I>datatype</I>,
            void *<I>outbuf</I>, MPI_Aint <I>outsize</I>,
            MPI_Aint *<I>position</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PACK_EXTERNAL(<I>DATAREP,</I> <I>INBUF,</I> <I>INCOUNT,</I> <I>DATATYPE,</I>
            <I>OUTBUF,</I> <I>OUTSIZE,</I> <I>POSITION,</I> <I>IERROR</I>)

            INTEGER        <I>INCOUNT,</I> <I>DATATYPE,</I> <I>IERROR</I>
            INTEGER (KIND=MPI_ADDRESS_KIND) <I>OUTSIZE,</I> <I>POSITION</I>
            CHARACTER*(*)  <I>DATAREP</I>
            &lt;type&gt;         <I>INBUF(*),</I> <I>OUTBUF(*)</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Pack_external(const char* <I>datarep</I>,
            const void* <I>inbuf</I>, int <I>incount</I>,
            void* <I>outbuf</I>, MPI::Aint <I>outsize</I>,
            MPI::Aint&amp; <I>position</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       datarep   Data representation (string).

       inbuf     Input buffer start (choice).

       incount   Number of input data items (integer).

       datatype  Datatype of each input data item (handle).

       outsize   Output buffer size, in bytes (integer).

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       position  Current position in buffer, in bytes (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       outbuf    Output buffer start (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Pack_external  packs  data  into the external32 format, a universal
       data representation defined by the MPI Forum. This format is useful for
       exchanging  data between MPI implementations, or when writing data to a
       the buffer). When the function returns, <I>position</I> is incremented by  the
       size  of the packed message, so that it points to the first location in
       <I>outbuf</I> following the packed message. This way it may be used  as  input
       to a subsequent call to MPI_Pack_external.

       <B>Example:</B> An example using MPI_Pack_external:

            int position, i;
            double msg[5];
            char buf[1000];

            ...

            <a href="../man3/MPI_Comm_rank.3.php">MPI_Comm_rank</a>(MPI_COMM_WORLD, &amp;myrank);
            if (myrank == 0) {  /* SENDER CODE */
                 position = 0;
                 i = 5; /* number of doubles in msg[] */
                 MPI_Pack_external("external32", &amp;i, 1, MPI_INT,
                     buf, 1000, &amp;position);
                 MPI_Pack_external("external32", &amp;msg, i, MPI_DOUBLE,
                     buf, 1000, &amp;position);
                 <a href="../man3/MPI_Send.3.php">MPI_Send</a>(buf, position, MPI_PACKED, 1, 0,
                     MPI_COMM_WORLD);
            } else {       /* RECEIVER CODE */
                 <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(buf, 1, MPI_PACKED, 0, 0, MPI_COMM_WORLD,
                     MPI_STATUS_IGNORE);
                 <a href="../man3/MPI_Unpack_external.3.php">MPI_Unpack_external</a>("external32", buf, 1000,
                     MPI_INT, &amp;i, 1, &amp;position);
                 <a href="../man3/MPI_Unpack_external.3.php">MPI_Unpack_external</a>("external32", buf, 1000,
                     MPI_DOUBLE, &amp;msg, i, &amp;position);
            }

</PRE>
<H2>NOTES</H2><PRE>
       The <I>datarep</I> argument specifies the data format. The only valid value in
       the current version of MPI is "external32". The  argument  is  provided
       for future extensibility.

       To  understand  the  behavior  of  pack and unpack, it is convenient to
       think of the data part of a message as being the sequence  obtained  by
       concatenating  the  successive  values  sent  in that message. The pack
       operation stores this sequence in the buffer space, as if  sending  the
       message  to  that  buffer. The unpack operation retrieves this sequence
       from buffer space, as if receiving a message from that buffer.  (It  is
       helpful to think of internal Fortran files or sscanf in C for a similar
       function.)

       Several messages can be successively packed into one packing unit. This
       is  effected  by several successive related calls to MPI_Pack_external,
       where the first call provides  <I>position</I>=0,  and  each  successive  call
       inputs  the  value  of  <I>position</I>  that was output by the previous call,
       along with the same values for <I>outbuf</I> and <I>outcount</I>. This  packing  unit
       now  contains the equivalent information that would have been stored in
       a message by one send call with a send buffer that is  the  "concatena-
       tion" of the individual send buffers.

       A packing unit can be sent using type MPI_PACKED. Any point-to-point or
       where the first call provides  <I>position</I>=0,  and  each  successive  call
       inputs  the value of position that was output by the previous call, and
       the same values for <I>inbuf</I> and <I>insize</I>.

       The concatenation of two packing units is  not  necessarily  a  packing
       unit;  nor is a substring of a packing unit necessarily a packing unit.
       Thus, one cannot concatenate two packing  units  and  then  unpack  the
       result as one packing unit; nor can one unpack a substring of a packing
       unit as a separate packing unit. Each packing unit that was created  by
       a  related  sequence  of  pack  calls  must  be unpacked as a unit by a
       sequence of related unpack calls.

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

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Pack_external_size.3.php">MPI_Pack_external_size</a>
       <a href="../man3/MPI_Send.3.php">MPI_Send</a>
       <a href="../man3/MPI_Unpack_external.3.php">MPI_Unpack_external</a>
       <B>sscanf(3C)</B>

1.3.4                            Nov 11, 2009             <B>MPI_Pack_external(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
