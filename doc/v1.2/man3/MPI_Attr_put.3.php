<?php
$topdir = "../../..";
$title = "MPI_Attr_put(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Attr_put</B>  -  Stores attribute value associated with a key -- use of
       this routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Attr_put(MPI_Comm <I>comm</I>, int <I>keyval</I>, void <I>*attribute</I><B>_</B><I>val</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ATTR_PUT(<I>COMM</I>, <I>KEYVAL</I>, <I>ATTRIBUTE</I><B>_</B><I>VAL</I>, <I>IERROR</I>)
            INTEGER   <I>COMM</I>, <I>KEYVAL</I>, <I>ATTRIBUTE</I><B>_</B><I>VAL</I>, <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator to which attribute will be attached (handle).

       keyval    Key value, as returned by <a href="../man3/MPI_Keyval_create.3.php">MPI_KEYVAL_CREATE</a> (integer).

       attribute_val
                 Attribute value.

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note that use of this routine is <I>deprecated</I> as  of  MPI-2.  Please  use
       <a href="../man3/MPI_Comm_set_attr.3.php">MPI_Comm_set_attr</a> instead.

       This deprecated routine is not available in C++.

       MPI_Attr_put  stores  the  stipulated attribute value attribute_val for
       subsequent retrieval by <a href="../man3/MPI_Attr_get.3.php">MPI_Attr_get</a>. If the value is already  present,
       then  the  outcome  is as if <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a> was first called to delete
       the previous value (and the callback function delete_fn was  executed),
       and  a  new value was next stored. The call is erroneous if there is no
       key with value keyval; in particular MPI_KEYVAL_INVALID is an erroneous
       key  value.  The  call  will fail if the delete_fn function returned an
       error code other than MPI_SUCCESS.

</PRE>
<H2>NOTES</H2><PRE>
       Values of the permanent attributes MPI_TAG_UB,  MPI_HOST,  MPI_IO,  and
       MPI_WTIME_IS_GLOBAL may not be changed.

       The  type  of  the  attribute  value depends on whether C or Fortran is
       being used. In C, an attribute value is a pointer (void *); in Fortran,
       it  is  a  single integer (not a pointer, since Fortran has no pointers
       and there are systems for which a pointer does not fit in  an  integer,
       e.g.,  any   32-bit address system that uses 64 bits for Fortran DOUBLE
       PRECISION).

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
       <a href="../man3/MPI_Comm_set_attr.3.php">MPI_Comm_set_attr</a>

Open MPI 1.2                    September 2006          MPI_Attr_put(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
