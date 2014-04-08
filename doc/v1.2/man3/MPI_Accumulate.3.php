<?php
$topdir = "../../..";
$title = "MPI_Accumulate(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Accumulate</B>   - Combines the contents of the origin buffer with that
       of a target buffer.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Accumulate(void *<I>origin</I><B>_</B><I>addr</I>, int <I>origin</I><B>_</B><I>count</I>,
            MPI_Datatype <I>origin</I><B>_</B><I>datatype</I>, int <I>target</I><B>_</B><I>rank</I>,
            MPI_Aint <I>target</I><B>_</B><I>disp</I>, int <I>target</I><B>_</B><I>count</I>,
            MPI_Datatype <I>target</I><B>_</B><I>datatype</I>, MPI_Op <I>op</I>, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ACCUMULATE(<I>ORIGIN</I><B>_</B><I>ADDR,</I> <I>ORIGIN</I><B>_</B><I>COUNT,</I> <I>ORIGIN</I><B>_</B><I>DATATYPE,</I> <I>TARGET</I><B>_</B><I>RANK,</I>
            <I>TARGET</I><B>_</B><I>DISP,</I> <I>TARGET</I><B>_</B><I>COUNT,</I> <I>TARGET</I><B>_</B><I>DATATYPE,</I> <I>OP,</I> <I>WIN,</I> <I>IERROR</I>)
            &lt;type&gt; <I>ORIGIN</I><B>_</B><I>ADDR</I>(*)
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>TARGET</I><B>_</B><I>DISP</I>
            INTEGER <I>ORIGIN</I><B>_</B><I>COUNT,</I> <I>ORIGIN</I><B>_</B><I>DATATYPE,</I> <I>TARGET</I><B>_</B><I>RANK,</I> <I>TARGET</I><B>_</B><I>COUNT,</I>
            <I>TARGET</I><B>_</B><I>DATATYPE,</I> <I>OP,</I> <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Accumulate(const void* <I>origin</I><B>_</B><I>addr</I>, int <I>origin</I><B>_</B><I>count</I>,
            const MPI::Datatype&amp; <I>origin</I><B>_</B><I>datatype</I>, int <I>target</I><B>_</B><I>rank</I>,
            MPI::Aint <I>target</I><B>_</B><I>disp</I>, int <I>target</I><B>_</B><I>count</I>, const MPI::Datatype&amp;
            <I>target</I><B>_</B><I>datatype</I>, const MPI::Op&amp; <I>op</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       origin_addr
                 Initial address of buffer (choice).

       origin_count
                 Number of entries in buffer (nonnegative integer).

       origin_datatype
                 Data type of each buffer entry (handle).

       target_rank
                 Rank of target (nonnegative integer).

       target_disp
                 Displacement from start of  window  to  beginning  of  target
                 buffer (nonnegative integer).

       target_count
                 Number of entries in target buffer (nonnegative integer).

       target_datatype
                 Data type of each entry in target buffer (handle).

       op        Reduce operation (handle).

       win       Window object (handle).
       adds the contents of the origin buffer (as defined by <I>origin</I><B>_</B><I>addr</I>, <I>ori-</I>
       <I>gin</I><B>_</B><I>count</I>,  and  <I>origin</I><B>_</B><I>datatype</I>)  to the buffer specified by the argu-
       ments <I>target</I><B>_</B><I>count</I> and <I>target</I><B>_</B><I>datatype</I>, at offset <I>target</I><B>_</B><I>disp</I>,  in  the
       target window specified by <I>target</I><B>_</B><I>rank</I> and <I>win</I>, using the operation <I>op</I>.
       The target window can only be accessed by  processes  within  the  same
       node. This is similar to <a href="../man3/MPI_Put.3.php">MPI_Put</a>, except that data is combined into the
       target area instead of overwriting it.

       Any of the predefined operations for  <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>  can  be  used.  User-
       defined  functions  cannot be used. For example, if <I>op</I> is MPI_SUM, each
       element of the origin buffer is added to the corresponding  element  in
       the target, replacing the former value in the target.

       Each datatype argument must be a predefined data type or a derived data
       type, where all basic components are of the same predefined data  type.
       Both  datatype  arguments  must be constructed from the same predefined
       data type. The operation <I>op</I> applies  to  elements  of  that  predefined
       type.   The  <I>target</I><B>_</B><I>datatype</I>  argument  must  not  specify  overlapping
       entries, and the target buffer must fit in the target window.

       A new predefined operation, MPI_REPLACE, is defined. It corresponds  to
       the  associative function f(a, b) =b; that is, the current value in the
       target memory is replaced by the value supplied by the origin.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>TARGET</I><B>_</B><I>DISP</I>
       argument  only for Fortran 90.  FORTRAN 77 users may use the non-porta-
       ble syntax

            INTEGER*MPI_ADDRESS_KIND <I>TARGET</I><B>_</B><I>DISP</I>

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

</PRE>
<H2>NOTES</H2><PRE>
       <a href="../man3/MPI_Put.3.php">MPI_Put</a>  is  a  special  case  of  MPI_Accumulate,  with  the operation
       MPI_REPLACE. Note, however, that <a href="../man3/MPI_Put.3.php">MPI_Put</a> and MPI_Accumulate  have  dif-
       ferent constraints on concurrent updates.

       It is the user's responsibility to guarantee that, when using the accu-
       mulate  functions,  the  target  displacement  argument  is  such  that
       accesses  to the window are properly aligned according to the data type
       arguments in the call to the MPI_Accumulate function.

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

Open MPI 1.2                    September 2006        MPI_Accumulate(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
