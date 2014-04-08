<?php
$topdir = "../../..";
$title = "MPI_Pack_size(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Pack_size</B>  -  Returns the upper bound on the amount of space needed
       to pack a message.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Pack_size(int <I>incount</I>, MPI_Datatype <I>datatype</I>, MPI_Comm <I>comm</I>,
            int <I>*size</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PACK_SIZE(<I>INCOUNT,</I> <I>DATATYPE,</I> <I>COMM,</I> <I>SIZE,</I> <I>IERROR</I>)
            INTEGER   <I>INCOUNT,</I> <I>DATATYPE,</I> <I>COMM,</I> <I>SIZE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Datatype::Pack_size(int <I>incount</I>, const Comm&amp; <I>comm</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       incount   Count argument to packing call (integer).

       datatype  Datatype argument to packing call (handle).

       comm      Communicator argument to packing call (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       size      Upper bound on size of packed message, in bytes (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Pack_size allows the application to find  out  how  much  space  is
       needed  to  pack  a message. A call to MPI_Pack_size(incount, datatype,
       comm, size) returns in size an upper bound on the increment in position
       that  would  occur  in  a  call  to  <a href="../man3/MPI_Pack.3.php">MPI_Pack</a>, with the same values for
       <I>incount</I>, <I>datatype</I>, and <I>comm</I>.

       <B>Rationale:</B>  The call returns an  upper  bound,  rather  than  an  exact
       bound,  since  the exact amount of space needed to pack the message may
       depend on the context (e.g., first message packed in a packing unit may
       take more space).

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       <a href="../man3/MPI_Pack.3.php">MPI_Pack</a>
       <a href="../man3/MPI_Unpack.3.php">MPI_Unpack</a>

Open MPI 1.2                    September 2006         MPI_Pack_size(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
