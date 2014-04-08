<?php
$topdir = "../../..";
$title = "MPI_Get(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Get</B> - Copies data from the target memory to the origin.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI_Get(void *<I>origin</I><B>_</B><I>addr</I>, int <I>origin</I><B>_</B><I>count</I>, MPI_Datatype
            <I>origin</I><B>_</B><I>datatype</I>, int <I>target</I><B>_</B><I>rank</I>, MPI_Aint <I>target</I><B>_</B><I>disp</I>,
            int <I>target</I><B>_</B><I>count</I>, MPI_Datatype <I>target</I><B>_</B><I>datatype</I>, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GET(<I>ORIGIN</I><B>_</B><I>ADDR,</I> <I>ORIGIN</I><B>_</B><I>COUNT,</I> <I>ORIGIN</I><B>_</B><I>DATATYPE,</I> <I>TARGET</I><B>_</B><I>RANK,</I>
            <I>TARGET</I><B>_</B><I>DISP,</I> <I>TARGET</I><B>_</B><I>COUNT,</I> <I>TARGET</I><B>_</B><I>DATATYPE,</I> <I>WIN,</I> <I>IERROR</I>)
            &lt;type&gt; <I>ORIGIN</I><B>_</B><I>ADDR</I>(*)
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>TARGET</I><B>_</B><I>DISP</I>
            INTEGER <I>ORIGIN</I><B>_</B><I>COUNT,</I> <I>ORIGIN</I><B>_</B><I>DATATYPE,</I> <I>TARGET</I><B>_</B><I>RANK,</I>
            <I>TARGET</I><B>_</B><I>COUNT,</I> <I>TARGET</I><B>_</B><I>DATATYPE,</I> <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Get(const void *<I>origin</I><B>_</B><I>addr</I>, int <I>origin</I><B>_</B><I>count</I>,
            const MPI::Datatype&amp; <I>origin</I><B>_</B><I>datatype</I>, int <I>target</I><B>_</B><I>rank</I>,
            MPI::Aint <I>target</I><B>_</B><I>disp</I>, int <I>target</I><B>_</B><I>count</I>,
            const MPI::Datatype&amp; <I>target</I><B>_</B><I>datatype</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       origin_addr
                 Initial address of origin buffer (choice).

       origin_count
                 Number of entries in origin buffer (nonnegative integer).

       origin_datatype
                 Data type of each entry in origin buffer (handle).

       target_rank
                 Rank of target (nonnegative integer).

       target_disp
                 Displacement from window start to the beginning of the target
                 buffer (nonnegative integer).

       target_count
                 Number of entries in target buffer (nonnegative integer).

       target datatype
                 datatype of each entry in target buffer (handle)

       win       window object used for communication (handle)

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).
       Only processes within the same node can access the target window.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>TARGET</I><B>_</B><I>DISP</I>
       argument only for Fortran 90. FORTRAN 77 users may use the non-portable
       syntax

            INTEGER*MPI_ADDRESS_KIND <I>TARGET</I><B>_</B><I>DISP</I>

       where  MPI_ADDRESS_KIND  is  a constant defined in mpif.h and gives the
       length of the declared integer in bytes.

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
       <a href="../man3/MPI_Put.3.php">MPI_Put</a>

1.3.4                            Nov 11, 2009                       <B>MPI_Get(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
