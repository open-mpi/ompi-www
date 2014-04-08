<?php
$topdir = "../../..";
$title = "MPI_Pack_external_size(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Pack_external_size</B>  -  Calculates  upper  bound  on space needed to
       write to a portable format

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Pack_external_size(char *<I>datarep</I>, int <I>incount</I>,
            MPI_Datatype <I>datatype</I>, MPI_Aint *<I>size</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PACK_EXTERNAL_SIZE(<I>DATAREP,</I> <I>INCOUNT,</I> <I>DATATYPE,</I> <I>SIZE,</I> <I>IERROR</I>)

            INTEGER        <I>INCOUNT,</I> <I>DATATYPE,</I> <I>IERROR</I>
            INTEGER (KIND=MPI_ADDRESS_KIND) <I>SIZE</I>
            CHARACTER*(*)  <I>DATAREP</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Aint MPI::Datatype::Pack_external_size(const char* <I>datarep</I>,
            int <I>incount</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       datarep   Data representation (string).

       incount   Number of input data items (integer).

       datatype  Datatype of each input data item (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       size      Upper bound on size of packed message, in bytes (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Pack_external_size allows the application  to  find  out  how  much
       space is needed to pack a message in the portable format defined by the
       MPI Forum. It returns in <I>size</I> an upper bound on the increment in  <I>posi-</I>
       <I>tion</I> that would occur in a call to <a href="../man3/MPI_Pack_external.3.php">MPI_Pack_external</a> with the same val-
       ues for <I>datarep</I>, <I>incount</I>, and <I>datatype</I>.

       The call returns an upper bound, rather than an  exact  bound,  as  the
       exact  amount of space needed to pack the message may depend on context
       and alignment (e.g., the first message packed in  a  packing  unit  may
       take more space).

</PRE>
<H2>NOTES</H2><PRE>
       The <I>datarep</I> argument specifies the data format. The only valid value in
       the current version of MPI is "external32". The  argument  is  provided
       for future extensibility.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Pack_external.3.php">MPI_Pack_external</a>
       <a href="../man3/MPI_Unpack_external.3.php">MPI_Unpack_external</a>

1.3.4                            Nov 11, 2009        <B>MPI_Pack_external_size(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
