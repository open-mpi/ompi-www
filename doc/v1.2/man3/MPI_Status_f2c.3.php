<?php
$topdir = "../../..";
$title = "MPI_Status_f2c(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Status_f2c,</B>  <B><a href="../man3/MPI_Status_c2f.3.php">MPI_Status_c2f</a></B>  - Translates a C status into a Fortran
       status, or vice versa.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Status_f2c(MPI_Fint <I>*f</I><B>_</B><I>status</I>, MPI_Status <I>*c</I><B>_</B><I>status</I>)
       int <a href="../man3/MPI_Status_c2f.3.php">MPI_Status_c2f</a>(MPI_Status <I>*c</I><B>_</B><I>status</I>, MPI_Fint <I>*f</I><B>_</B><I>status</I>)

</PRE>
<H2>DESCRIPTION</H2><PRE>
       These two procedures are provided in C to convert from a Fortran status
       (which  is  an array of integers) to a C status (which is a structure),
       and vice versa. The conversion occurs on all the information in <I>status</I>,
       including  that which is hidden. That is, no status information is lost
       in the conversion.

       When using MPI_Status_f2c, if <I>f</I><B>_</B><I>status</I> is a valid Fortran  status,  but
       not the Fortran value of MPI_STATUS_IGNORE or MPI_STATUSES_IGNORE, then
       MPI_Status_f2c returns in <I>c</I><B>_</B><I>status</I> a valid C status with the same  con-
       tent. If <I>f</I><B>_</B><I>status</I> is the Fortran value of MPI_STATUS_IGNORE or MPI_STA-
       TUSES_IGNORE, or if <I>f</I><B>_</B><I>status</I> is not a valid Fortran  status,  then  the
       call is erroneous.

       When  using  <a href="../man3/MPI_Status_c2f.3.php">MPI_Status_c2f</a>,  the  opposite  conversion  is applied. If
       <I>c</I><B>_</B><I>status</I> is MPI_STATUS_IGNORE or MPI_STATUSES_IGNORE, or if <I>c</I><B>_</B><I>status</I> is
       not a valid C status, then the call is erroneous.

       The C status has the same source, tag and error code values as the For-
       tran status, and returns the same answers when queried for count,  ele-
       ments,  and  cancellation. The conversion function may be called with a
       Fortran status argument that has an undefined  error  field,  in  which
       case  the  value  of  the error field in the C status argument is unde-
       fined.

Open MPI 1.2                    September 2006        MPI_Status_f2c(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
