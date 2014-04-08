<?php
$topdir = "../../..";
$title = "MPI_Comm_create_keyval(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_create_keyval</B> - Generates a new attribute key.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_create_keyval(MPI_Comm_copy_attr_function
            *<I>comm</I><B>_</B><I>copy</I><B>_</B><I>attr</I><B>_</B><I>fn</I>, MPI_Comm_delete_attr_function
            *<I>comm</I><B>_</B><I>delete</I><B>_</B><I>attr</I><B>_</B><I>fn</I>, int *<I>comm</I><B>_</B><I>keyval</I>,
            void *<I>extra</I><B>_</B><I>state</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_CREATE_KEYVAL(<I>COMM</I><B>_</B><I>COPY</I><B>_</B><I>ATTR</I><B>_</B><I>FN,</I> <I>COMM</I><B>_</B><I>DELETE</I><B>_</B><I>ATTR</I><B>_</B><I>FN,</I>
            <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I> <I>IERROR</I>)

           EXTERNAL <I>COMM</I><B>_</B><I>COPY</I><B>_</B><I>ATTR</I><B>_</B><I>FN,</I> <I>COMM</I><B>_</B><I>DELETE</I><B>_</B><I>ATTR</I><B>_</B><I>FN</I>
           INTEGER <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
           INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static in MPI::Comm::Create_keyval(MPI::Comm::Copy_attr_function*
            <I>comm</I><B>_</B><I>copy</I><B>_</B><I>attr</I><B>_</B><I>fn</I>,
            MPI::Comm::Delete_attr_function* <I>comm</I><B>_</B><I>delete</I><B>_</B><I>attr</I><B>_</B><I>fn</I>,
            void* <I>extra</I><B>_</B><I>state</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm_copy_attr_fn
                 Copy callback function for <I>comm</I><B>_</B><I>keyval</I> (function).

       comm_delete_attr_fn
                 Delete callback function for <I>comm</I><B>_</B><I>keyval</I> (function).

       extra_state
                 Extra state for callback functions.

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       comm_keyval
                 Key value for future access (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  function  replaces  <a href="../man3/MPI_Keyval_create.3.php">MPI_Keyval_create</a>, the use of which is depre-
       cated. The C binding is identical. The Fortran binding differs in  that
       <I>extra</I><B>_</B><I>state</I>  is  an  address-sized  integer.  Also, the copy and delete
       callback functions have  Fortran  bindings  that  are  consistent  with
       address-sized attributes.

       The     argument     <I>comm</I><B>_</B><I>copy</I><B>_</B><I>attr</I><B>_</B><I>fn</I>     may    be    specified    as
       MPI_COMM_NULL_COPY_FN or  MPI_COMM_DUP_FN  from  C,  C++,  or  Fortran.

       typedef int MPI_Comm_copy_attr_function(MPI_Comm <I>oldcomm</I>, int <I>comm</I><B>_</B><I>keyval</I>,
                    void *<I>extra</I><B>_</B><I>state</I>, void *<I>attribute</I><B>_</B><I>val</I><B>_</B><I>in</I>,
                    void *<I>attribute</I><B>_</B><I>val</I><B>_</B><I>out</I>, int *<I>flag</I>);
       and
       typedef int MPI_Comm_delete_attr_function(MPI_Comm <I>comm</I>, int <I>comm</I><B>_</B><I>keyval</I>,
                    void *<I>attribute</I><B>_</B><I>val</I>, void *<I>extra</I><B>_</B><I>state</I>);

       which are the same as the MPI-1.1 calls but with a new  name.  The  old
       names are deprecated.

       The Fortran callback functions are:

       SUBROUTINE COMM_COPY_ATTR_FN(<I>OLDCOMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I>
                    <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>IN,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>OUT,</I> <I>FLAG,</I> <I>IERROR</I>)
           INTEGER <I>OLDCOMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
           INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>IN,</I>
               <I>ATTRIBUTE</I><B>_</B><I>VAL</I><B>_</B><I>OUT</I>
           LOGICAL <I>FLAG</I>
       and
       SUBROUTINE COMM_DELETE_ATTR_FN(<I>COMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I>
                    <I>IERROR</I>)
           INTEGER <I>COMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
           INTEGER(KIND=MPI_ADDRESS_KIND) <I>ATTRIBUTE</I><B>_</B><I>VAL,</I> <I>EXTRA</I><B>_</B><I>STATE</I>

       The C++ callbacks are:

       typedef int MPI::Comm::Copy_attr_function(const MPI::Comm&amp; <I>oldcomm</I>,
                    int <I>comm</I><B>_</B><I>keyval</I>, void* <I>extra</I><B>_</B><I>state</I>, void* <I>attribute</I><B>_</B><I>val</I><B>_</B><I>in</I>,
                    void* <I>attribute</I><B>_</B><I>val</I><B>_</B><I>out</I>, bool&amp; <I>flag</I>);
       and
       typedef int MPI::Comm::Delete_attr_function(MPI::Comm&amp; <I>comm</I>,
                    int <I>comm</I><B>_</B><I>keyval</I>, void* <I>attribute</I><B>_</B><I>val</I>, void* <I>extra</I><B>_</B><I>state</I>);

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>EXTRA</I><B>_</B><I>STATE</I>
       argument only for Fortran 90. FORTRAN 77 users may use the non-portable
       syntax

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
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
