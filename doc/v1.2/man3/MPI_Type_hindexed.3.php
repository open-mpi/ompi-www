<?php
$topdir = "../../..";
$title = "MPI_Type_hindexed(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_hindexed</B>  -  Creates an indexed datatype with offsets in bytes
       -- use of this routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_hindexed(int <I>count</I>, int <I>*array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>,
            MPI_Aint <I>*array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>, MPI_Datatype <I>oldtype</I>,
            MPI_Datatype <I>*newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_HINDEXED(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS(*),</I> <I>OLDTYPE,</I> <I>NEWTYPE</I>
            INTEGER   <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of blocks -- also number of entries  in  array_of_dis-
                 placements  and array_of_blocklengths  (integer).

       array_of_blocklengths
                 Number  of elements in each block (array of nonnegative inte-
                 gers).

       array_of_displacements
                 Byte displacement of each block (array of integer).

       oldtype   Old datatype (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New datatype (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note  that  use  of  this  routine  is  <I>deprecated</I>  as  of  MPI-2.  Use
       <a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a> instead.

       This deprecated routine is not available in C++.

       The  function  is identical to <a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a>, except that block dis-
       placements in array_of_displacements are  specified  in  bytes,  rather
       than in multiples of the oldtype extent.

       Assume that oldtype has type map

           {(<B>type(0)</B>, <B>disp(0)</B>), ..., (type(n-1), disp(n-1))},

         (<B>type(0)</B>, <B>disp(0)</B> + D[count-1]),...,(type(n-1), disp(n-1) + D[count-1]),...,
         (<B>type(0)</B>, <B>disp(0)</B> +  D[count-1] + (B[count-1] -1)* ex),...,
         (type(n-1), disp(n-1) + D[count-1] + (B[count-1] -1)* ex)}

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
       <a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a>
       <a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a>

Open MPI 1.2                    September 2006     MPI_Type_hindexed(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
