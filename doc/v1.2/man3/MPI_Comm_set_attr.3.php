<?php
$topdir = "../../..";
$title = "MPI_Comm_set_attr(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_set_attr</B> - Stores attribute value associated with a key.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_set_attr(MPI_Comm <I>comm</I>, int <I>comm</I><B>_</B><I>keyval</I>, void *<I>attribute</I><B>_</B><I>val</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_SET_ATTR(<I>COMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>ATTRIBUTE</I><B>_</B><I>VAL</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Set_attr(int <I>comm</I><B>_</B><I>keyval</I>, const void* <I>attribute</I><B>_</B><I>val</I>) const

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       comm      Communicator  from which attribute will be attached (handle).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm_keyval
                 Key value (integer).

       attribute_val
                 Attribute value.

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_set_attr stores the stipulated attribute  value  <I>attribute</I><B>_</B><I>val</I>
       for  subsequent retrieval by <a href="../man3/MPI_Comm_get_attr.3.php">MPI_Comm_get_attr</a>. If the value is already
       present, then the outcome  is  as  if  <a href="../man3/MPI_Comm_delete_attr.3.php">MPI_Comm_delete_attr</a>  was  first
       called  to  delete  the  previous  value  (and  the  callback  function
       delete_fn was executed), and a new value was next stored. The  call  is
       erroneous  if  there  is  no  key with value <I>comm</I><B>_</B><I>keyval</I>; in particular
       MPI_KEYVAL_INVALID is an erroneous key value. The call will fail if the
       delete_fn function returned an error code other than MPI_SUCCESS.

       This  function  replaces  <a href="../man3/MPI_Attr_put.3.php">MPI_Attr_put</a>, the use of which is deprecated.
       The C binding  is  identical.  The  Fortran  binding  differs  in  that
       <I>attribute</I><B>_</B><I>val</I> is an address-sized integer.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The   MPI   standard   prescribes   portable  Fortran  syntax  for  the
       <I>ATTRIBUTE</I><B>_</B><I>VAL</I> argument only for Fortran 90. Sun FORTRAN  77  users  may
       use the non-portable syntax

       MPI_WTIME_IS_GLOBAL may not be changed.

       The  type  of  the  attribute  value depends on whether C or Fortran is
       being used. In C, an attribute value is a pointer (void *); in Fortran,
       it  is  a  single, address-size integer system for which a pointer does
       not fit in an integer.

       If an attribute is already present, the delete function (specified when
       the corresponding keyval was created) will be called.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006     MPI_Comm_set_attr(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
