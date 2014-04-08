<?php
$topdir = "../../..";
$title = "MPI_File_set_view(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_set_view</B>  -  Changes  process's  view of data in file (collec-
       tive).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_set_view(MPI_File <I>fh</I>, MPI_Offset <I>disp</I>,
                  MPI_Datatype <I>etype</I>, MPI_Datatype <I>filetype</I>,
                  char <I>*datarep</I>, MPI_Info <I>info</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_SET_VIEW(<I>FH</I>, <I>DISP</I>, <I>ETYPE</I>,
                   <I>FILETYPE</I>, <I>DATAREP</I>, <I>INFO</I>, <I>IERROR</I>)
             INTEGER <I>FH,</I> <I>ETYPE,</I> <I>FILETYPE,</I> <I>INFO,</I> <I>IERROR</I>
             CHARACTER*(*) <I>DATAREP</I>
             INTEGER(KIND=MPI_OFFSET_KIND) <I>DISP</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Set_view(MPI::Offset <I>disp</I>,
            const MPI::Datatype&amp; <I>etype</I>,
            const MPI::Datatype&amp; <I>filetype</I>, const char* <I>datarep</I>,
            const MPI::Info&amp; <I>info</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       disp      Displacement (integer).

       etype     Elementary data type (handle).

       filetype  File type (handle). See Restrictions, below.

       datarep   Data representation (string).

       info      Info object (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The MPI_File_set_view routine changes the process's view of the data in
       the  file  --  the beginning of the data accessible in the file through
       that view is set to <I>disp;</I> the type of data is set  to  <I>etype;</I>  and  the
       distribution  of  data  to  processes is set to <I>filetype.</I>  In addition,
       MPI_File_set_view resets the independent file pointers and  the  shared
       file pointer to zero. MPI_File_set_view is collective; all processes in
       the group must pass identical values for <I>fh</I> and <I>etype;</I> values for <I>disp,</I>
       <I>filetype,</I>  and  <I>info</I>  may  vary. It is erroneous to use the shared file
       pointer data-access routines unless identical values for <I>disp</I> and <I>file-</I>
       default value (or "native"), pass NULL. The user can also pass informa-
       tion via the <I>info</I> argument. See the HINTS section for a list  of  hints
       that can be set. For more information, see the MPI-2 standard.

</PRE>
<H2>HINTS</H2><PRE>
       The following hints can be used as values for the <I>info</I> argument.

       SETTABLE HINTS:

       - MPI_INFO_NULL

       -  shared_file_timeout:  Amount of time (in seconds) to wait for access
       to the shared file pointer before exiting with MPI_ERR_TIMEDOUT.

       - rwlock_timeout: Amount of time (in seconds) to wait for  obtaining  a
       read  or write lock on a contiguous chunk of a UNIX file before exiting
       with MPI_ERR_TIMEDOUT.

       - noncoll_read_bufsize:  Maximum size of the buffer used by MPI I/O  to
       satisfy  read  requests in the noncollective data-access routines. (See
       NOTE, below.)

       - noncoll_write_bufsize: Maximum size of the buffer used by MPI I/O  to
       satisfy  write requests in the noncollective data-access routines. (See
       NOTE, below.)

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

       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

1.3.4                            Nov 11, 2009             <B>MPI_File_set_view(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
