<?php
$topdir = "../../..";
$title = "OpenMPI(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       MPI - General information Open MPI 1.3.4.

</PRE>
<H2>MPI</H2><PRE>
       Open  MPI  is  an  open  source  implementation of MPI (message-passing
       interface), the industry-standard specification  for  writing  message-
       passing programs. Message passing is a programming model that gives the
       programmer explicit control over interprocess communication.

       The MPI specification was developed by the MPI Forum, a group of  soft-
       ware  developers,  computer  vendors,  academics,  and computer-science
       researchers whose goal was to develop a standard for  writing  message-
       passing programs that would be efficient, flexible, and portable.

       The  outcome,  known  as the MPI Standard, was first published in 1993;
       its most recent version (MPI-2) was published in July  1997.  Open  MPI
       1.2 includes all MPI 1.2-compliant and MPI 2-compliant routines.

       For more information about Open MPI, see the following URL:

          http://www.open-mpi.org

       The MPI standards are available at the following URL:

           http://www.mpi-forum.org

</PRE>
<H2>MAN PAGE SYNTAX</H2><PRE>
       Man pages for Open MPI and Open MPI I/O routines are named according to
       C syntax, that is, they begin with the prefix "MPI_", all in uppercase,
       and the first letter following the "MPI_" prefix is also uppercase. The
       rest of the letters in the routine  are  all  lowercase,  for  example,
       "<a href="../man3/MPI_Comm_get_attr.3.php">MPI_Comm_get_attr</a>".

</PRE>
<H2>ENVIRONMENT</H2><PRE>
       To fine-tune your Open MPI environment, you can either use arguments to
       the <I>mpirun</I>, <I>orterun</I>, or <I>mpiexec</I> commands, or you can  use  MCA  parame-
       ters.

       For more information on arguments, see the orterun.1 man page.

       For  a complete listing of MCA parameters and their descriptions, issue
       the command <I>ompi</I><B>_</B><I>info</I> <I>-h</I> or <I>ompi</I><B>_</B><I>info</I> <I>-param</I> <I>all</I> <I>all</I>. This  information
       also appears in the FAQ on the Open MPI web site at:

          http://www.open-mpi.org/faq/?category=tuning#mca-params

</PRE>
<H2>ERRORS</H2><PRE>
       All  MPI  routines  (except  <a href="../man3/MPI_Wtime.3.php">MPI_Wtime</a>  and  <a href="../man3/MPI_Wtick.3.php">MPI_Wtick</a>) return an error
       value; C routines as the value of the function and Fortran routines  in
       the last argument.  Before the value is returned, the current MPI error
       handler is called.  By default, this error handler aborts the MPI  job.
       The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the pre-
       defined error handler MPI_ERRORS_RETURN may be used to cause error val-
       ues  to be returned.  Note that MPI does not guarantee that an MPI pro-
       MPI_ERR_BUFFER           1      Invalid buffer pointer.
       MPI_ERR_COUNT            2      Invalid count argument.
       MPI_ERR_TYPE             3      Invalid datatype argument.
       MPI_ERR_TAG              4      Invalid tag argument.
       MPI_ERR_COMM             5      Invalid communicator.

       MPI_ERR_RANK             6      Invalid rank.
       MPI_ERR_REQUEST          7      Invalid MPI_Request handle.
       MPI_ERR_ROOT             7      Invalid root.
       MPI_ERR_GROUP            8      Null group passed to function.
       MPI_ERR_OP               9      Invalid operation.
       MPI_ERR_TOPOLOGY        10      Invalid topology.

       MPI_ERR_DIMS            11      Illegal dimension argument.
       MPI_ERR_ARG             12      Invalid argument.
       MPI_ERR_UNKNOWN         13      Unknown error.
       MPI_ERR_TRUNCATE        14      Message truncated on receive.
       MPI_ERR_OTHER           15      Other error; use Error_string.

       MPI_ERR_INTERN          16      Internal error code.
       MPI_ERR_IN_STATUS       17      Look in status for error value.
       MPI_ERR_PENDING         18      Pending request.
       MPI_ERR_ACCESS          19      Permission denied.
       MPI_ERR_AMODE           20      Unsupported amode passed to open.

       MPI_ERR_ASSERT          21      Invalid assert.
       MPI_ERR_BAD_FILE        22      Invalid file name (for example,
                                       path name too long).
       MPI_ERR_BASE            23      Invalid base.
       MPI_ERR_CONVERSION      24      An error occurred in a user-supplied
                                       data-conversion function.
       MPI_ERR_DISP            25      Invalid displacement.

       MPI_ERR_DUP_DATAREP     26      Conversion functions could not
                                       be registered because a data
                                       representation identifier that was
                                       already defined was passed to
                                       <a href="../man3/MPI_Register_datarep.3.php">MPI_REGISTER_DATAREP</a>.
       MPI_ERR_FILE_EXISTS     27      File exists.
       MPI_ERR_FILE_IN_USE     28      File operation could not be
                                       completed, as the file is currently
                                       open by some process.
       MPI_ERR_FILE            29
       MPI_ERR_INFO_KEY        30      Illegal info key.

       MPI_ERR_INFO_NOKEY      31      No such key.
       MPI_ERR_INFO_VALUE      32      Illegal info value.
       MPI_ERR_INFO            33      Invalid info object.
       MPI_ERR_IO              34      I/O error.
       MPI_ERR_KEYVAL          35      Illegal key value.

       MPI_ERR_LOCKTYPE        36      Invalid locktype.
       MPI_ERR_NAME            37      Name not found.
       MPI_ERR_NO_MEM          38      Memory exhausted.
       MPI_ERR_NOT_SAME        39
       MPI_ERR_NO_SPACE        40      Not enough space.

       MPI_ERR_NO_SUCH_FILE    41      File (or directory) does not exist.
       MPI_ERR_SPAWN           49      Error spawning.
       MPI_ERR_UNSUPPORTED_DATAREP
                               50      Unsupported datarep passed to
                                       <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a>.

       MPI_ERR_UNSUPPORTED_OPERATION
                               51      Unsupported operation, such as
                                       seeking on a file that supports
                                       only sequential access.
       MPI_ERR_WIN             52      Invalid window.
       MPI_ERR_LASTCODE        53      Last error code.

       MPI_ERR_SYSRESOURCE     -2      Out of resources

1.3.4                            Nov 11, 2009                           <B>MPI(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
