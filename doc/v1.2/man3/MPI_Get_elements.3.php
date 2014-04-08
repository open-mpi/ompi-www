<?php
$topdir = "../../..";
$title = "MPI_Get_elements(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Get_elements</B>   -  Returns  the  number  of basic elements in a data
       type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Get_elements(MPI_Status *<I>status</I>, MPI_Datatype <I>datatype</I>,
            int <I>*count</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GET_ELEMENTS(<I>STATUS,</I> <I>DATATYPE,</I> <I>COUNT,</I> <I>IERROR</I>)
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>DATATYPE,</I> <I>COUNT,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Status::Get_elements(const Datatype&amp; <I>datatype</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       status    Return status of receive operation (status).

       datatype  Datatype used by receive operation (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       count     Number of received basic elements (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Get_elements behaves different from  <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>,  which  returns
       the  number  of  "top-level  entries"  received,  i.e.,  the  number of
       "copies" of type datatype. <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> may return any  integer  value
       k,  where  0 =&lt; k =&lt; count. If <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> returns k, then the number
       of basic elements received (and the  value  returned  by   MPI_Get_ele-
       ments)  is  n  * k, where n is the number of basic elements in the type
       map of datatype. If the number of basic elements received is not a mul-
       tiple of n, that is, if the receive operation has not received an inte-
       gral number of datatype "copies," then <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> returns the  value
       MPI_UNDEFINED.

       <B>Example:</B> Usage of <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a> and MPI_Get_element:

         ...
         CALL <a href="../man3/MPI_Type_contiguous.3.php">MPI_TYPE_CONTIGUOUS</a>(2, MPI_REAL, Type2, ierr)
         CALL <a href="../man3/MPI_Type_commit.3.php">MPI_TYPE_COMMIT</a>(Type2, ierr)
         ...
         CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr)
         IF(rank.EQ.0) THEN
               CALL <a href="../man3/MPI_Send.3.php">MPI_SEND</a>(a, 2, MPI_REAL, 1, 0, comm, ierr)
               CALL <a href="../man3/MPI_Send.3.php">MPI_SEND</a>(a, 3, MPI_REAL, 1, 0, comm, ierr)
         ELSE

       The  function  MPI_Get_elements  can also be used after a probe to find
       the number of elements in the probed message. Note that the  two  func-
       tions  <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>  and  MPI_Get_elements return the same values when
       they are used with primitive data types.

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
       <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>

Open MPI 1.2                    September 2006      MPI_Get_elements(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
