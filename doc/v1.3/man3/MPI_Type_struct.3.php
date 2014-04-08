<?php
$topdir = "../../..";
$title = "MPI_Type_struct(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_struct</B>  - Creates a <I>struct</I> data type -- use of this routine is
       deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_struct(int <I>count</I>, int <I>*array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>,
            MPI_Aint <I>*array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>, MPI_Datatype <I>*array</I><B>_</B><I>of</I><B>_</B><I>types</I>,
            MPI_Datatype <I>*newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_STRUCT(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>TYPES,</I>
                 <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS(*)</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>TYPES(*),</I> <I>NEWTYPE,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of blocks (integer)  also number of entries in  arrays
                 array_of_types,   array_of_displacements, and array_of_block-
                 lengths.

       array_of_blocklengths
                 Number of elements in each block (array).

       array_of_displacements
                 Byte displacement of each block (array).

       array_of_types
                 Type of elements in each block (array of handles to  datatype
                 objects).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New datatype (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note  that  use  of  this  routine  is  <I>deprecated</I>  as  of  MPI-2.  Use
       <a href="../man3/MPI_Type_create_struct.3.php">MPI_Type_create_struct</a> instead.

       This deprecated routine is not available in C++.

       MPI_Type_struct is the most general type constructor. It further gener-
       alizes  <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>  in  that  it allows each block to consist of
       replications of different datatypes.

       <B>Example:</B> Let type1 have type map
           (char, 26), (char, 27), (char, 28)}

       That is, two copies of MPI_FLOAT starting at 0, followed by one copy of
       type1 starting at 16, followed by three copies of MPI_CHAR, starting at
       26. (We assume that a float occupies 4 bytes.)

       For more information, see section 3.12.1 of the MPI-1.1 Standard.

</PRE>
<H2>NOTES</H2><PRE>
       If an upperbound is set explicitly by using the  MPI  datatype  MPI_UB,
       the corresponding index must be positive.

       The  MPI-1  Standard originally made vague statements about padding and
       alignment; this was intended to allow the simple definition  of  struc-
       tures that could be sent with a count greater than one. For example,
           struct {int a; char b;} foo;
       may have
           sizeof(foo) = sizeof(int) + sizeof(char);
       defining  the extent of a datatype as including an epsilon, which would
       have allowed an implementation to make the extent an MPI  datatype  for
       this structure equal to 2*sizeof(int). However, since different systems
       might define different paddings, a clarification to the  standard  made
       epsilon zero. Thus, if you define a structure datatype and wish to send
       or receive multiple items, you  should  explicitly  include  an  MPI_UB
       entry  as the last member of the structure.  For example, the following
       code can be used for the structure foo:

           blen[0] = 1; indices[0] = 0; oldtypes[0] = MPI_INT;
           blen[1] = 1; indices[1] = &amp;foo.b - &amp;foo; oldtypes[1] = MPI_CHAR;
           blen[2] = 1; indices[2] = sizeof(foo); oldtypes[2] = MPI_UB;
           MPI_Type_struct( 3, blen, indices, oldtypes, &amp;newtype );

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
       <a href="../man3/MPI_Type_create_struct.3.php">MPI_Type_create_struct</a>
       <a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a>

1.3.4                            Nov 11, 2009               <B>MPI_Type_struct(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
