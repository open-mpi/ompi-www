<?php
$topdir = "../../..";
$title = "MPI_Put(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Put</B> - Copies data from the origin memory to the target.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI_Put(void *<I>origin</I><B>_</B><I>addr</I>, int <I>origin</I><B>_</B><I>count</I>, MPI_Datatype
            <I>origin</I><B>_</B><I>datatype</I>, int <I>target</I><B>_</B><I>rank</I>, MPI_Aint <I>target</I><B>_</B><I>disp</I>,
            int <I>target</I><B>_</B><I>count</I>, MPI_Datatype <I>target</I><B>_</B><I>datatype</I>, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PUT(<I>ORIGIN</I><B>_</B><I>ADDR,</I> <I>ORIGIN</I><B>_</B><I>COUNT,</I> <I>ORIGIN</I><B>_</B><I>DATATYPE,</I> <I>TARGET</I><B>_</B><I>RANK,</I>
            <I>TARGET</I><B>_</B><I>DISP,</I> <I>TARGET</I><B>_</B><I>COUNT,</I> <I>TARGET</I><B>_</B><I>DATATYPE,</I> <I>WIN,</I> <I>IERROR</I>)
            &lt;type&gt; <I>ORIGIN</I><B>_</B><I>ADDR</I>(*)
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>TARGET</I><B>_</B><I>DISP</I>
            INTEGER <I>ORIGIN</I><B>_</B><I>COUNT,</I> <I>ORIGIN</I><B>_</B><I>DATATYPE,</I> <I>TARGET</I><B>_</B><I>RANK,</I> <I>TARGET</I><B>_</B><I>COUNT,</I>
            <I>TARGET</I><B>_</B><I>DATATYPE,</I> <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Put(const void* <I>origin</I><B>_</B><I>addr</I>, int <I>origin</I><B>_</B><I>count</I>, const
            MPI::Datatype&amp; <I>origin</I><B>_</B><I>datatype</I>, int <I>target</I><B>_</B><I>rank</I>, MPI::Aint
            <I>target</I><B>_</B><I>disp</I>, int <I>target</I><B>_</B><I>count</I>, const MPI::Datatype&amp;
            <I>target</I><B>_</B><I>datatype</I>) const

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
                 Displacement  from start of window to target buffer (nonnega-
                 tive integer).

       target_count
                 Number of entries in target buffer (nonnegative integer).

       target_datatype
                 Data type of each entry in target buffer (handle).

       win       Window object used for communication (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).
       address  and  window  displacement unit specified at window initializa-
       tion, by the target process.

       The target buffer is specified by the arguments <I>target</I><B>_</B><I>count</I>  and  <I>tar-</I>
       <I>get</I><B>_</B><I>datatype</I>.

       The  data  transfer is the same as that which would occur if the origin
       process executed a send  operation  with  arguments  <I>origin</I><B>_</B><I>addr</I>,  <I>ori-</I>
       <I>gin</I><B>_</B><I>count</I>,  <I>origin</I><B>_</B><I>datatype</I>,  <I>target</I><B>_</B><I>rank</I>,  <I>tag</I>,  <I>comm</I>,  and the target
       process executed a receive operation with arguments  <I>target</I><B>_</B><I>addr</I>,  <I>tar-</I>
       <I>get</I><B>_</B><I>count</I>, <I>target</I><B>_</B><I>datatype</I>, <I>source</I>, <I>tag</I>, <I>comm</I>, where <I>target</I><B>_</B><I>addr</I> is the
       target buffer address computed as explained above, and <I>comm</I> is a commu-
       nicator for the group of <I>win</I>.

       The  communication  must  satisfy the same constraints as for a similar
       message-passing communication.  The  <I>target</I><B>_</B><I>datatype</I>  may  not  specify
       overlapping  entries  in  the target buffer. The message sent must fit,
       without truncation, in  the  target  buffer.  Furthermore,  the  target
       buffer  must  fit  in  the  target  window. In addition, only processes
       within the same buffer can access the target window.

       The <I>target</I><B>_</B><I>datatype</I> argument is a handle to a datatype  object  defined
       at  the origin process. However, this object is interpreted at the tar-
       get process: The outcome is as  if  the  target  datatype  object  were
       defined  at  the  target process, by the same sequence of calls used to
       define it at the origin process. The target data type must contain only
       relative  displacements, not absolute addresses. The same holds for get
       and accumulate.

</PRE>
<H2>NOTES</H2><PRE>
       The <I>target</I><B>_</B><I>datatype</I> argument is a handle to a datatype object  that  is
       defined  at the origin process, even though it defines a data layout in
       the target process memory. This does not cause problems  in  a  homoge-
       neous or heterogeneous environment, as long as only portable data types
       are used (portable data types are defined in Section 2.4 of  the  MPI-2
       Standard).

       The  performance  of  a  put transfer can be significantly affected, on
       some systems, from the choice of window  location  and  the  shape  and
       location  of the origin and target buffer: Transfers to a target window
       in memory allocated by <a href="../man3/MPI_Alloc_mem.3.php">MPI_Alloc_mem</a> may be much faster on shared  mem-
       ory  systems; transfers from contiguous buffers will be faster on most,
       if not all, systems; the alignment of  the  communication  buffers  may
       also impact performance.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>TARGET</I><B>_</B><I>DISP</I>
       argument only for Fortran 90. FORTRAN 77 users may use the non-portable
       syntax

            INTEGER*MPI_ADDRESS_KIND <I>TARGET</I><B>_</B><I>DISP</I>

       where  MPI_ADDRESS_KIND  is  a constant defined in mpif.h and gives the
       length of the declared integer in bytes.

       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Get.3.php">MPI_Get</a>
       <a href="../man3/MPI_Accumulate.3.php">MPI_Accumulate</a>

1.3.4                            Nov 11, 2009                       <B>MPI_Put(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
