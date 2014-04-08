<?php
$topdir = "../../..";
$title = "MPI_Type_get_envelope(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_get_envelope</B>  - Returns informaion about input arguments asso-
       ciated with a data type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_get_envelope(MPI_Datatype <I>datatype</I>, int *<I>num</I><B>_</B><I>integers</I>,
            int *<I>num</I><B>_</B><I>addresses</I>, int *<I>num</I><B>_</B><I>datatypes</I>, int *<I>combiner</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_GET_ENVELOPE(<I>DATATYPE,</I> <I>NUM</I><B>_</B><I>INTEGERS,</I> <I>NUM</I><B>_</B><I>ADDRESSES,</I>
                 <I>NUM</I><B>_</B><I>DATATYPES,</I> <I>COMBINER,</I> <I>IERROR</I>)
            INTEGER   <I>DATATYPE,</I> <I>NUM</I><B>_</B><I>INTEGERS,</I> <I>NUM</I><B>_</B><I>ADDRESSES</I>
            INTEGER   <I>NUM</I><B>_</B><I>DATATYPES,</I> <I>COMBINER,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Get_envelope(int&amp; <I>num</I><B>_</B><I>integers</I>,
            int&amp; <I>num</I><B>_</B><I>addresses</I>, int&amp; <I>num</I><B>_</B><I>datatypes</I>,
            int&amp; <I>combiner</I>) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       datatype  Data type to access (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       num_integers
                 Number of input integers used in the call  constructing  <I>com-</I>
                 <I>biner</I> (nonnegative integer).

       num_addresses
                 Number  of input addresses used in the call constructing <I>com-</I>
                 <I>biner</I> (nonnegative integer).

       num_datatypes
                 Number of input data types used in the call constructing <I>com-</I>
                 <I>biner</I> (nonnegative integer).

       combiner  Combiner (state).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       For  the  given data type, MPI_Type_get_envelope returns information on
       the number and type of input arguments used in teh  call  that  created
       the  data  type. The number-of-arguments values returned can be used to
       provide   sufficiently   large   arrays   in   the   decoding   routine
       <a href="../man3/MPI_Type_get_contents.3.php">MPI_Type_get_contents</a>. This call and the meaning of the returned values
       is described below. The combiner reflects the MPI data type constructor
       call that was used in creating <I>datatype</I>.

       MPI_COMBINER_DUP                <a href="../man3/MPI_Type_dup.3.php">MPI_Type_dup</a>
       MPI_COMBINER_CONTIGUOUS         <a href="../man3/MPI_Type_contiguous.3.php">MPI_Type_contiguous</a>
       MPI_COMBINER_VECTOR             <a href="../man3/MPI_Type_vector.3.php">MPI_Type_vector</a>
       MPI_COMBINER_HVECTOR_INTEGER    <a href="../man3/MPI_Type_hvector.3.php">MPI_Type_hvector</a> from Fortran
       MPI_COMBINER_HVECTOR            <a href="../man3/MPI_Type_hvector.3.php">MPI_Type_hvector</a> from C or C++
                                         and MPI_Type_create for
                                         all languages
       MPI_COMBINER_INDEXED            <a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a>
       MPI_COMBINER_HINDEXED_INTEGER   <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a> from Fortran
       MPI_COMBINER_HINDEXED           <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a> from C or C++
                                         and <a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a>
                                         for all languages
       MPI_COMBINER_INDEXED_BLOCK      <a href="../man3/MPI_Type_create_indexed_block.3.php">MPI_Type_create_indexed_block</a>
       MPI_COMBINER_STRUCT_INTEGER     <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a> from Fortran
       MPI_COMBINER_STRUCT             <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a> from C or C++
                                         and <a href="../man3/MPI_Type_create_struct.3.php">MPI_Type_create_struct</a>
                                         for all languages
       MPI_COMBINER_SUBARRAY           <a href="../man3/MPI_Type_create_subarray.3.php">MPI_Type_create_subarray</a>
       MPI_COMBINER_DARRAY             <a href="../man3/MPI_Type_create_darray.3.php">MPI_Type_create_darray</a>
       MPI_COMBINER_F90_REAL           <a href="../man3/MPI_Type_create_f90_real.3.php">MPI_Type_create_f90_real</a>
       MPI_COMBINER_F90_COMPLEX        <a href="../man3/MPI_Type_create_f90_complex.3.php">MPI_Type_create_f90_complex</a>
       MPI_COMBINER_F90_INTEGER        <a href="../man3/MPI_Type_create_f90_integer.3.php">MPI_Type_create_f90_integer</a>
       MPI_COMBINER_RESIZED            <a href="../man3/MPI_Type_create_resized.3.php">MPI_Type_create_resized</a>

       If <I>combiner</I> is MPI_COMBINER_NAMED, then <I>datatype</I> is a named  predefined
       data type.

       The  actual  arguments used in the creation call for a data type can be
       obtained from the call <a href="../man3/MPI_Type_get_contents.3.php">MPI_Type_get_contents</a>.

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
       <a href="../man3/MPI_Type_get_contents.3.php">MPI_Type_get_contents</a>

1.3.4                            Nov 11, 2009         <B>MPI_Type_get_envelope(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
