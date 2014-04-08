<?php
$topdir = "../../..";
$title = "MPI_File_open(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_open</B> - Opens a file (collective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_open(MPI_Comm <I>comm</I>, char <I>*filename</I>,
                  int <I>amode</I>, MPI_Info <I>info</I>,
                  MPI_File <I>*fh</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_OPEN(<I>COMM</I>, <I>FILENAME</I>, <I>AMODE</I>, <I>INFO</I>, <I>FH</I>, <I>IERROR</I>)
             CHARACTER*(*)    FILENAME
             INTEGER      COMM, AMODE, INFO, FH, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::File MPI::File::Open(const MPI::Intracomm&amp; <I>comm</I>,
            const char* <I>filename</I>, int <I>amode</I>, const MPI::Info&amp; <I>info</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator (handle).

       filename  Name of file to open (string).

       amode     File access mode (integer).

       info      Info object (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       fh        New file handle (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_open opens the file identified by the filename <I>filename</I> on all
       processes in the <I>comm</I> communicator group. MPI_File_open is a collective
       routine;  all  processes must provide the same value for <I>amode,</I> and all
       processes must provide filenames that reference the same file and which
       are  textually  identical.  A  process can open a file independently of
       other processes by using the MPI_COMM_SELF communicator. The file  han-
       dle returned, <I>fh,</I> can be subsequently used to access the file until the
       file is closed using <a href="../man3/MPI_File_close.3.php">MPI_File_close</a>. Before calling  <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>,  the
       user  is  required  to  close  (via <a href="../man3/MPI_File_close.3.php">MPI_File_close</a>) all files that were
       opened with MPI_File_open. Note that the  communicator  <I>comm</I>  is  unaf-
       fected by MPI_File_open and continues to be usable in all MPI routines.
       Furthermore, use of <I>comm</I> will not interfere with I/O behavior.

       Initially, all processes view the file as a linear  byte  stream;  that
       is,  the  <I>etype</I>  and  <I>filetype</I>  are both MPI_BYTE. The file view can be
       changed via the <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a> routine.

         o  MPI_MODE_EXCL -- Error creating a file that already exists.

         o  MPI_MODE_RDONLY -- Read only.

         o  MPI_MODE_RDWR -- Reading and writing.

         o  MPI_MODE_SEQUENTIAL

         o  MPI_MODE_WRONLY -- Write only.

         o  MPI_MODE_UNIQUE_OPEN

The modes MPI_MODE_RDONLY, MPI_MODE_RDWR, MPI_MODE_WRONLY, and MPI_MODE_CREATE
have identical semantics to their POSIX counterparts. It is erroneous to spec-
ify MPI_MODE_CREATE in conjunction with MPI_MODE_RDONLY. Errors related to the
access mode are raised in the class MPI_ERR_AMODE.

On single-node clusters, files are opened by default using nonatomic mode file
consistency  semantics.  The more stringent atomic-mode consistency semantics,
required for atomicity of overlapping accesses, are the default  when  proces-
sors  in  a communicator group reside on more than one node.  This setting can
be changed using <a href="../man3/MPI_File_set_atomicity.3.php">MPI_File_set_atomicity</a>.

The MPI_File_open interface allows the user to pass information via  the  <I>info</I>
argument.  It can be set to MPI_INFO_NULL. See the HINTS section for a list of
hints that can be set.

</PRE>
<H2>HINTS</H2><PRE>
       The following hints can be used as values for the <I>info</I> argument.

       SETTABLE HINTS:

       - MPI_INFO_NULL

       - shared_file_timeout: Amount of time (in seconds) to wait  for  access
       to the shared file pointer before exiting with MPI_ERR_TIMEDOUT.

       -  rwlock_timeout:  Amount of time (in seconds) to wait for obtaining a
       read or write lock on a contiguous chunk of a UNIX file before  exiting
       with MPI_ERR_TIMEDOUT.

       -  noncoll_read_bufsize:  Maximum size of the buffer used by MPI I/O to
       satisfy multiple noncontiguous read requests in the noncollective data-
       access routines. (See NOTE, below.)

       -  noncoll_write_bufsize: Maximum size of the buffer used by MPI I/O to
       satisfy multiple noncontiguous  write  requests  in  the  noncollective
       data-access routines. (See NOTE, below.)

       -  coll_read_bufsize:   Maximum  size  of the buffer used by MPI I/O to
       satisfy multiple noncontiguous read requests in  the  collective  data-
       access routines. (See NOTE, below.)

       -  coll_write_bufsize:   Maximum  size of the buffer used by MPI I/O to
       satisfy multiple noncontiguous write requests in the  collective  data-
       access routines. (See NOTE, below.)
       write() calls made. If this  is  not  desirable  behavior,  you  should
       reduce  this  buffer  size  to  equal the size of the contiguous chunks
       within the aggregate request.

       - mpiio_concurrency: (boolean) controls whether  nonblocking  I/O  rou-
       tines can bind an extra thread to an LWP.

       -  mpiio_coll_contiguous: (boolean) controls whether subsequent collec-
       tive data accesses will request collectively contiguous regions of  the
       file.

       NON-SETTABLE HINTS:

       - filename: Access this hint to get the name of the file.

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

1.3.4                            Nov 11, 2009                 <B>MPI_File_open(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
