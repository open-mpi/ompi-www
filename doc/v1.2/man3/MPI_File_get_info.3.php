<?php
$topdir = "../../..";
$title = "MPI_File_get_info(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_info</B>  -  Returns  a  new info object containing values for
       current hints associated with a file.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_info(MPI_File <I>fh</I>, MPI_Info <I>*info</I><B>_</B><I>used</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_GET_INFO(<I>FH</I>, <I>INFO</I><B>_</B><I>USED</I>, <I>IERROR</I>)
                  INTEGER    FH, INFO_USED, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Info MPI::File::Get_info() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       info_used New info object (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_get_info returns a new info object containing  all  the  hints
       that the system currently associates with the file <I>fh</I>. The current set-
       ting of all hints actually used by the system related to this open file
       is returned in <I>info</I><B>_</B><I>used</I>. The user is responsible for freeing <I>info</I><B>_</B><I>used</I>
       via <a href="../man3/MPI_Info_free.3.php">MPI_Info_free</a>.

       Note that the set of hints returned in  <I>info</I><B>_</B><I>used</I>  may  be  greater  or
       smaller   than   the   set   of   hints  passed  in  to  <a href="../man3/MPI_File_open.3.php">MPI_File_open</a>,
       <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a>, and <a href="../man3/MPI_File_set_info.3.php">MPI_File_set_info</a>, as the system may not  recog-
       nize  some hints set by the user, and may automatically set other hints
       that the user has not requested to be set. See the HINTS section for  a
       list of hints that can be set.

</PRE>
<H2>HINTS</H2><PRE>
       The following hints can be used as values for the <I>info</I><B>_</B><I>used</I> argument.

       SETTABLE HINTS:

       -  shared_file_timeout:  Amount of time (in seconds) to wait for access
       to the shared file pointer before exiting with MPI_ERR_TIMEDOUT.

       - rwlock_timeout: Amount of time (in seconds) to wait for  obtaining  a
       read  or write lock on a contiguous chunk of a UNIX file before exiting
       with MPI_ERR_TIMEDOUT.

       - coll_read_bufsize:  Maximum size of the buffer used  by  MPI  I/O  to
       satisfy  read  requests  in  the  collective data-access routines. (See
       NOTE, below.)

       - coll_write_bufsize:  Maximum size of the buffer used by  MPI  I/O  to
       satisfy  write  requests  in  the collective data-access routines. (See
       NOTE, below.)

       NOTE: A buffer size smaller than the distance (in bytes) in a UNIX file
       between  the  first byte and the last byte of the access request causes
       MPI I/O to iterate and perform multiple UNIX read() or  write()  calls.
       If  the request includes multiple noncontiguous chunks of data, and the
       buffer size is greater than the size of those  chunks,  then  the  UNIX
       read()  or  write()  (made  at  the MPI I/O level) will access data not
       requested by this process in  order  to  reduce  the  total  number  of
       write()  calls  made.  If  this  is  not desirable behavior, you should
       reduce this buffer size to equal the  size  of  the  contiguous  chunks
       within the aggregate request.

       -  mpiio_concurrency:  (boolean)  controls whether nonblocking I/O rou-
       tines can bind an extra thread to an LWP.

       - mpiio_coll_contiguous: (boolean) controls whether subsequent  collec-
       tive  data accesses will request collectively contiguous regions of the
       file.

       NON-SETTABLE HINTS:

       - filename: Access this hint to get the name of the file.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  For  MPI I/O function errors, the default error handler is set
       to  MPI_ERRORS_RETURN.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;      the      predefined     error     handler
       MPI_ERRORS_ARE_FATAL may be used to make I/O errors  fatal.  Note  that
       MPI  does not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006     MPI_File_get_info(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
