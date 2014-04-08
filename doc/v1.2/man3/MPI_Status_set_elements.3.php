<?php
$topdir = "../../..";
$title = "MPI_Status_set_elements(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Status_set_elements</B>  -  Modifies  opaque  part  of  <I>status</I> to allow
       <a href="../man3/MPI_Get_elements.3.php">MPI_Get_elements</a> to return <I>count</I>.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Status_set_elements(MPI_Status *<I>status</I>, MPI_Datatype <I>datatype</I>, int <I>count</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_STATUS_SET_ELEMENTS(<I>STATUS,</I> <I>DATATYPE,</I> <I>COUNT,</I> <I>IERROR</I>)
            INTEGER   <I>STATUS</I>(MPI_STATUS_SIZE), DATATYPE, COUNT, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Status::Set_elements(const MPI::Datatype&amp; <I>datatype</I>, int <I>count</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       status    Status to associate with <I>count</I> (status).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       datatype  Data type associated with <I>count</I> (handle).

       count     Number of elements to associate with <I>status</I> (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Status_set_elements modifies the opaque part of <I>status</I>  so  that  a
       call to <a href="../man3/MPI_Get_elements.3.php">MPI_Get_elements</a> will return <I>count</I>. <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> will return a
       compatible value.

       A subsequent call  to  <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>(<I>status,</I>  <I>datatype,</I>  <I>count</I>)  or  to
       <a href="../man3/MPI_Get_elements.3.php">MPI_Get_elements</a>(<I>status,</I> <I>datatype,</I> <I>count</I>) must use a data-type argument
       that has the same type signature as the  data-type  argument  that  was
       used in the call to MPI_Status_set_elements.

</PRE>
<H2>NOTES</H2><PRE>
       Users  are advised not to reuse the status fields for values other than
       those for which they were intended. Doing so  may  lead  to  unexpected
       results when using the status object. For example, calling MPI_Get_ele-
       ments may cause an error if the value is out of range,  or  it  may  be
       impossible  to  detect such an error. The <I>extra</I><B>_</B><I>state</I> argument provided
       with a generalized request can be used to return information that  does
       not  logically belong in <I>status</I>. Furthermore, modifying the values in a
       status set internally by MPI, such as  <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>,  may  lead  to  unpre-
       dictable results and is strongly discouraged.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>Open MPI 1.2                    September 200MPI_Status_set_elements(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
