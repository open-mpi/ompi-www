<?php
$topdir = "../../..";
$title = "MPI_Status_set_cancelled(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Status_set_cancelled</B>  -  Sets <I>status</I> to indicate a request has been
       canceled.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Status_set_cancelled(MPI_Status *<I>status</I>, int <I>flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_STATUS_SET_CANCELLED(<I>STATUS,</I> <I>FLAG,</I> <I>IERROR</I>)
            INTEGER   <I>STATUS</I>(MPI_STATUS_SIZE), <I>IERROR</I>
            LOGICAL <I>FLAG</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Status::Set_cancelled(bool <I>flag</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       status    Status with which to associate cancel flag (status).

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       flag      If true, indicates request was canceled (logical).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       If <I>flag</I> is set  to  true,  then  a  subsequent  call  to  MPI_Test_can-
       celled(<I>status,</I>  <I>flag</I>)  will  also return <I>flag</I> = true; otherwise it will
       return false.

</PRE>
<H2>NOTES</H2><PRE>
       Users are advised not to reuse the status fields for values other  than
       those  for  which  they  were intended. Doing so may lead to unexpected
       results when using the status object. For example, calling MPI_Get_ele-
       ments  may  cause  an  error if the value is out of range, or it may be
       impossible to detect such an error. The <I>extra</I><B>_</B><I>state</I>  argument  provided
       with  a generalized request can be used to return information that does
       not logically belong in <I>status</I>. Furthermore, modifying the values in  a
       status  set  internally  by  MPI,  such as <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>, may lead to unpre-
       dictable results and is strongly discouraged.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>Open MPI 1.2                    September 20MPI_Status_set_cancelled(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
