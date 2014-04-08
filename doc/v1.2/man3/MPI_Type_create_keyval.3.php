<?php
$topdir = "../../..";
$title = "MPI_Type_create_keyval(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_keyval</B>  -  Generates a new attribute key for caching on
       data types.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_keyval(MPI_Type_copy_attr_function *<I>type</I><B>_</B><I>copy</I><B>_</B><I>attr</I><B>_</B><I>fn</I>,
            MPI_Type_delete_attr_function *<I>type</I><B>_</B><I>delete</I><B>_</B><I>attr</I><B>_</B><I>fn</I>,
            int *<I>type</I><B>_</B><I>keyval</I>, void *<I>extra</I><B>_</B><I>state</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_KEYVAL(<I>TYPE</I><B>_</B><I>COPY</I><B>_</B><I>ATTR</I><B>_</B><I>FN,</I> <I>TYPE</I><B>_</B><I>DELETE</I><B>_</B><I>ATTR</I><B>_</B><I>FN,</I>
                 <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I> <I>IERROR</I>)
            EXTERNAL <I>TYPE</I><B>_</B><I>COPY</I><B>_</B><I>ATTR</I><B>_</B><I>FN,</I> <I>TYPE</I><B>_</B><I>DELETE</I><B>_</B><I>ATTR</I><B>_</B><I>FN</I>
            INTEGER   <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static int MPI::Datatype::Create_keyval(MPI::Datatype::Copy_attr_function*
            <I>type</I><B>_</B><I>copy</I><B>_</B><I>attr</I><B>_</B><I>fn</I>, MPI::Datatype::Delete_attr_function*
            <I>type</I><B>_</B><I>delete</I><B>_</B><I>attr</I><B>_</B><I>fn</I>, void* <I>extra</I><B>_</B><I>state</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       type_copy_attr_fn
                 Copy callback function for <I>type</I><B>_</B><I>keyval</I> (function).

       type_delete_attr_fn
                 Delete callback function for <I>type</I><B>_</B><I>keyval</I> (function).

       extra_state
                 Extra state for callback functions.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       type_keyval
                 Key value for future access (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_create_keyval generates a new attribute  key  for  caching  on
       data types. This routine partially replaces <a href="../man3/MPI_Keyval_create.3.php">MPI_Keyval_create</a>.

       The     argument     <I>type</I><B>_</B><I>copy</I><B>_</B><I>attr</I><B>_</B><I>fn</I>     may    be    specified    as
       MPI_TYPE_NULL_COPY_FN or  MPI_TYPE_DUP_FN  from  C,  C++,  or  Fortran.
       MPI_TYPE_NULL_COPY_FN  is  a  function  that  does  nothing  other than
       returning <I>flag</I> = 0 and MPI_SUCCESS. MPI_TYPE_DUP_FN is a  simple-minded
       copy function that sets <I>flag</I> = 1, returns the value of <I>attribute</I><B>_</B><I>val</I><B>_</B><I>in</I>
       in <I>attribute</I><B>_</B><I>val</I><B>_</B><I>out</I>, and returns MPI_SUCCESS.

       and
       typedef int MPI_Type_delete_attr_function(MPI_Datatype <I>type</I>, int <I>type</I><B>_</B><I>keyval</I>,
                    void *<I>attribute</I><B>_</B><I>val</I>, void *<I>extra</I><B>_</B><I>state</I>);

       The Fortran callback functions are:

       SUBROUTINE TYPE_COPY_ATTR_FN(<I>OLDTYPE,</I> <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I>
                    <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>IN,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>OUT,</I> <I>FLAG,</I> <I>IERROR</I>)
           INTEGER <I>OLDTYPE,</I> <I>TYPE</I> <I>KEYVAL,</I> <I>IERROR</I>
           INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE,</I>
               <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>IN,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>OUT</I>
           LOGICAL <I>FLAG</I>
       and
       SUBROUTINE TYPE_DELETE_ATTR_FN(<I>TYPE,</I> <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I>
                    <I>IERROR</I>)
           INTEGER <I>TYPE,</I> <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
           INTEGER(KIND=MPI_ADDRESS_KIND) <I>ATTRIBUTE</I> <I>VAL,</I> <I>EXTRA</I><B>_</B><I>STATE</I>

       The C++ callbacks are:

       typedef int MPI::Datatype::Copy_attr_function(const MPI::Datatype&amp; <I>oldtype</I>,
                    int <I>type</I><B>_</B><I>keyval</I>, void* <I>extra</I><B>_</B><I>state</I>,
                    const void* <I>attribute</I><B>_</B><I>val</I><B>_</B><I>in</I>, void* <I>attribute</I><B>_</B><I>val</I><B>_</B><I>out</I>,
                    bool&amp; <I>flag</I>);
       and
       typedef int MPI::Datatype::Delete_attr_function(MPI::Datatype&amp; <I>type</I>,
                    int <I>type</I><B>_</B><I>keyval</I>, void* <I>attribute</I><B>_</B><I>val</I>, void* <I>extra</I><B>_</B><I>state</I>);

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>EXTRA</I><B>_</B><I>STATE</I>
       argument only for Fortran 90.  FORTRAN 77 users may use the  non-porta-
       ble syntax

            INTEGER*MPI_ADDRESS_KIND <I>EXTRA</I><B>_</B><I>STATE</I>

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
       <a href="../man3/MPI_Type_free_keyval.3.php">MPI_Type_free_keyval</a>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
