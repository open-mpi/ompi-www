<?php
$topdir = "../../..";
$title = "MPI_Keyval_create(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Keyval_create</B>  -  Generates a new attribute key -- use of this rou-
       tine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Keyval_create(MPI_Copy_function *<I>copy</I><B>_</B><I>fn</I>,
            MPI_Delete_function *<I>delete</I><B>_</B><I>fn</I>, int *<I>keyval</I>, void *<I>extra</I><B>_</B><I>state</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_KEYVAL_CREATE(<I>COPY</I><B>_</B><I>FN,</I> <I>DELETE</I><B>_</B><I>FN,</I> <I>KEYVAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I> <I>IERROR</I>)
            EXTERNAL  <I>COPY</I><B>_</B><I>FN,</I> <I>DELETE</I><B>_</B><I>FN</I>
            INTEGER   <I>KEYVAL,</I> <I>EXTRA</I><B>_</B><I>STATE,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       copy_fn   Copy callback function for keyval.

       delete_fn Delete callback function for keyval.

       extra_state
                 Extra state for callback functions.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       keyval    Key value for future access (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note that use of this routine is <I>deprecated</I> as  of  MPI-2.  Please  use
       <a href="../man3/MPI_Comm_create_keyval.3.php">MPI_Comm_create_keyval</a> instead.

       This deprecated routine is not available in C++.

       Generates a new attribute key. Keys are locally unique in a process and
       opaque to the user, though they are explicitly stored in integers. Once
       allocated, the key value can be used to associate attributes and access
       them on any locally defined communicator.

       The copy_fn function is invoked when a communicator  is  duplicated  by
       <a href="../man3/MPI_Comm_dup.3.php">MPI_COMM_DUP</a>.  copy_fn  should  be  of type MPI_Copy_function, which is
       defined as follows:

         typedef int MPI_Copy_function(MPI_Comm oldcomm, int keyval,
                                       void *extra_state, void *attribute_val_in,
                                       void *attribute_val_out, int *flag)

       A Fortran declaration for such a function is as follows:

         SUBROUTINE COPY_FUNCTION(OLDCOMM, KEYVAL, EXTRA_STATE, ATTRIBUTE_VAL_IN,
                     ATTRIBUTE_VAL_OUT, FLAG, IERR)

       1),  the  new  attribute  value  is  set  to  the  value  returned   in
       attribute_val_out.  The  function returns MPI_SUCCESS on success and an
       error code on failure (in which case <a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a> will fail).

       copy_fn may be specified as MPI_NULL_COPY_FN or MPI_DUP_FN from  either
       C  or  Fortran;  MPI_NULL_COPY_FN is a function that does nothing other
       than return flag = 0, and MPI_SUCCESS. MPI_DUP_FN  is  a  simple-minded
       copy function that sets flag = 1, returns the value of attribute_val_in
       in attribute_val_out, and returns MPI_SUCCESS.

</PRE>
<H2>NOTES</H2><PRE>
       Key values are global (available for any and all communicators).

       There are subtle differences between C and Fortran  that  require  that
       the  copy_fn  be written in the same language that MPI_Keyval_create is
       called from. This should not be a problem for  most  users;  only  pro-
       gramers  using  both  Fortran and C in the same program need to be sure
       that they follow this rule.

       Even   though    both    formal    arguments    attribute_val_in    and
       attribute_val_out  are  of  type void*, their usage differs. The C copy
       function is  passed  by  MPI  in  attribute_val_in  the  value  of  the
       attribute, and in attribute_val_out the address of the attribute, so as
       to allow the function to return the (new) attribute value. The  use  of
       type void* for both is to avoid messy type casts.

       A valid copy function is one that completely duplicates the information
       by making a full duplicate copy of the data structures  implied  by  an
       attribute;  another  might  just  make  another  reference to that data
       structure, while using a  reference-count  mechanism.  Other  types  of
       attributes  might  not  copy  at all (they might be specific to oldcomm
       only).

       Analogous to copy_fn is a callback deletion function, defined  as  fol-
       lows.  The delete_fn function is invoked when a communicator is deleted
       by <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> or when a call is made explicitly to  <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a>.
       delete_fn  should  be  of type MPI_Delete_function, which is defined as
       follows:

         typedef int MPI_Delete_function(MPI_Comm comm, int keyval,
             void *attribute_val, void *extra_state);

       A Fortran declaration for such a function is as follows:

         SUBROUTINE DELETE_FUNCTION(COMM, KEYVAL,ATTRIBUTE_VAL, EXTRA_STATE, IERR)
             INTEGER COMM, KEYVAL, ATTRIBUTE_VAL, EXTRA_STATE, IERR

       This  function  is  called  by  <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>,   <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a>,   and
       <a href="../man3/MPI_Attr_put.3.php">MPI_Attr_put</a> to do whatever is needed to remove an attribute. The func-
       tion returns MPI_SUCCESS on success and an error code  on  failure  (in
       which case <a href="../man3/MPI_Comm_free.3.php">MPI_COMM_FREE</a> will fail).

       delete_fn  may be specified as MPI_NULL_DELETE_FN from either C or FOR-
       TRAN; MPI_NULL_DELETE_FN is a function that does  nothing,  other  than
       returning MPI_SUCCESS.

       The  special key value MPI_KEYVAL_INVALID is never returned by MPI_Key-
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Keyval_free.3.php">MPI_Keyval_free</a>

Open MPI 1.2                    September 2006     MPI_Keyval_create(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
