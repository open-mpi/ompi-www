<?php
$topdir = "../../..";
$title = "MPI_Type_commit(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_commit</B> - Commits a data type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_commit(MPI_Datatype *<I>datatype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_COMMIT(<I>DATATYPE,</I> <I>IERROR</I>)
            INTEGER   <I>DATATYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Datatype::Commit()

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       datatype  Data type (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The  commit  operation commits the data type. A data type is the formal
       description of a communication buffer, not the content of that  buffer.
       After  a  data  type has been committed, it can be repeatedly reused to
       communicate the changing content of a buffer or, indeed, the content of
       different buffers, with different starting addresses.

       <B>Example:</B>  The  following  Fortran code fragment gives examples of using
       MPI_Type_commit.

           INTEGER type1, type2
           CALL <a href="../man3/MPI_Type_contiguous.3.php">MPI_TYPE_CONTIGUOUS</a>(5, MPI_REAL, type1, ierr)
                         ! new type object created
           CALL MPI_TYPE_COMMIT(type1, ierr)
                         ! now type1 can be used for communication

       If the data type specified in <I>datatype</I>  is  already  committed,  it  is
       equivalent to a no-op.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for

Open MPI 1.2                    September 2006       MPI_Type_commit(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
