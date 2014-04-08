<?php
$topdir = "../../..";
$title = "MPI_Type_get_contents(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_get_contents</B>  -  Returns  information  about arguments used in
       creation of a data type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_get_contents(MPI_Datatype <I>datatype</I>, int <I>max</I><B>_</B><I>integers</I>,
            int <I>max</I><B>_</B><I>addresses</I>, int <I>max</I><B>_</B><I>datatypes</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>integers</I>[], MPI_Aint <I>array</I><B>_</B><I>of</I><B>_</B><I>addresses</I>[], MPI_Datatype array_of_datatypes<I>[])</I>

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_GET_CONTENTS(<I>DATATYPE,</I> <I>MAX</I><B>_</B><I>INTEGERS,</I> <I>MAX</I><B>_</B><I>ADDRESSES,</I>
                 <I>MAX</I><B>_</B><I>DATATYPES,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INTEGERS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ADDRESSES,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DATATYPES,</I> <I>IERROR</I>)
            INTEGER   <I>DATATYPE,</I> <I>MAX</I><B>_</B><I>INTEGERS,</I> <I>MAX</I><B>_</B><I>ADDRESSES,</I> <I>MAX</I><B>_</B><I>DATATYPES</I>
            INTEGER   <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INTEGERS(*),</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DATATYPES(*),</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ADDRESSES</I>(*)

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Get_contents(int <I>max</I><B>_</B><I>integers</I>, int <I>max</I><B>_</B><I>addresses</I>,
            int <I>max</I><B>_</B><I>datatypes</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>integers</I>[],
            MPI::Aint <I>array</I><B>_</B><I>of</I><B>_</B><I>addresses</I>[],
            MPI::Datatype <I>array</I><B>_</B><I>of</I><B>_</B><I>datatypes</I>[]) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       datatype  Data type to access (handle).

       max_integers
                 Number of elements in  <I>array</I><B>_</B><I>of</I><B>_</B><I>integers</I>  (nonnegative  inte-
                 ger).

       max_addresses
                 Number  of  elements in <I>array</I><B>_</B><I>of</I><B>_</B><I>addresses</I> (nonnegative inte-
                 ger).

       max_datatypes
                 Number of elements in <I>array</I><B>_</B><I>of</I><B>_</B><I>datatypes</I>  (nonnegative  inte-
                 ger).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       array_of_integers
                 Contains  integer  arguments  used  in  constructing <I>datatype</I>
                 (array of integers).

       array_of_addresses
                 Contains address  arguments  used  in  constructing  <I>datatype</I>
                 (array of integers).

       array_of_datatypes
                 Contains  data-type  arguments  used in constructing <I>datatype</I>
                 (array of integers).

       provide   sufficiently   large   arrays   in   the   decoding   routine
       MPI_Type_get_contents. This call and the meaning of the returned values
       is described below. The combiner reflects the MPI data type constructor
       call that was used in creating <I>datatype</I>.

       The parameter <I>datatype</I> must be a predefined unnamed or a  derived  data
       type.  The  call  is  erroneous  if <I>datatype</I> is a predefined named data
       type.

       The values given for  <I>max</I><B>_</B><I>integers</I>,  <I>max</I><B>_</B><I>addresses</I>,  and  <I>max</I><B>_</B><I>datatypes</I>
       must  be  at  least  as  large  as  the value returned in <I>num</I><B>_</B><I>integers</I>,
       <I>num</I><B>_</B><I>addresses</I>,   and   <I>num</I><B>_</B><I>datatypes</I>,   respectively,   in   the   call
       <a href="../man3/MPI_Type_get_envelope.3.php">MPI_Type_get_envelope</a> for the same <I>datatype</I> argument.

       The  data types returned in <I>array</I><B>_</B><I>of</I><B>_</B><I>datatypes</I> are handles to data-type
       objects that are equivalent to the data types used in the original con-
       struction  call.  If  these  were derived data types, then the returned
       data types are new data-type objects, and the user is  responsible  for
       freeing  these  datatypes  with <a href="../man3/MPI_Type_free.3.php">MPI_Type_free</a>. If these were predefined
       data types, then the returned data type is  equal  to  that  (constant)
       predefined data type and cannot be freed.

       The  committed  state of returned derived data types is undefined, that
       is, the data types may or may not be committed. Furthermore,  the  con-
       tent of attributes of returned data types is undefined.

       Note  that  MPI_Type_get_contents can be invoked with a data-type argu-
       ment that was constructed using <a href="../man3/MPI_Type_create_f90_real.3.php">MPI_Type_create_f90_real</a>, MPI_Type_cre-
       ate_f90_integer,  or <a href="../man3/MPI_Type_create_f90_complex.3.php">MPI_Type_create_f90_complex</a> (an unnamed predefined
       data type). In such a case, an empty <I>array</I><B>_</B><I>of</I><B>_</B><I>datatypes</I> is returned.

       In the MPI-1 data-type constructor calls, the address arguments in For-
       tran are of type INTEGER. In the new MPI-2 calls, the address arguments
       are of type INTEGER(KIND=MPI ADDRESS KIND). The call  MPI_Type_get_con-
       tents  returns  all  addresses  in an argument of type INTEGER(KIND=MPI
       ADDRESS KIND). This is true even if the  old  MPI-1  calls  were  used.
       Thus,  the  location  of  values  returned  can  be thought of as being
       returned by the C bindings. It can also be determined by examining  the
       new  MPI-2  calls  for  data-type constructors for the deprecated MPI-1
       calls that involve addresses.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI  standard  prescribes  portable   Fortran   syntax   for   the
       <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ADDRESSES</I>  argument  only for Fortran 90. FORTRAN 77 users may
       use the non-portable syntax

            INTEGER*MPI_ADDRESS_KIND <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ADDRESSES</I>(*)

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Type_get_envelope.3.php">MPI_Type_get_envelope</a>

Open MPI 1.2                    September 2006 MPI_Type_get_contents(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
