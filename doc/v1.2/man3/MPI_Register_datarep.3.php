<?php
$topdir = "../../..";
$title = "MPI_Register_datarep(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Register_datarep</B> - Defines data representation.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_Register_datarep(char <I>*datarep</I>,
                  MPI_Datarep_conversion_function <I>*read</I><B>_</B><I>conversion</I><B>_</B><I>fn</I>,
                  MPI_Datarep_conversion_function <I>*write</I><B>_</B><I>conversion</I><B>_</B><I>fn</I>,
                  MPI_Datarep_extent_function <I>*dtype</I><B>_</B><I>file</I><B>_</B><I>extent</I><B>_</B><I>fn</I>,
                  void <I>*extra</I><B>_</B><I>state</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_REGISTER_DATAREP(<I>DATAREP</I>, <I>READ</I><B>_</B><I>CONVERSION</I><B>_</B><I>FN</I>,
            <I>WRITE</I><B>_</B><I>CONVERSION</I><B>_</B><I>FN</I>, <I>DTYPE</I><B>_</B><I>FILE</I><B>_</B><I>EXTENT</I><B>_</B><I>FN</I>,
            <I>EXTRA</I><B>_</B><I>STATE</I>, <I>IERROR</I>)
                 CHARACTER*(*) <I>DATAREP</I>
                 EXTERNAL <I>READ</I><B>_</B><I>CONVERSION</I><B>_</B><I>FN,</I> <I>WRITE</I><B>_</B><I>CONVERSION</I><B>_</B><I>FN,</I>
                          <I>DTYPE</I><B>_</B><I>FILE</I><B>_</B><I>EXTENT</I><B>_</B><I>FN</I>
                 INTEGER   <I>IERROR</I>
                 INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTRA</I><B>_</B><I>STATE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Register_datarep(const char* <I>datarep</I>,
            MPI::Datarep_conversion_function* <I>read</I><B>_</B><I>conversion</I><B>_</B><I>fn</I>,
            MPI::Datarep_conversion_function* <I>write</I><B>_</B><I>conversion</I><B>_</B><I>fn</I>,
            MPI::Datarep_extent_function* <I>dtype</I><B>_</B><I>file</I><B>_</B><I>extent</I><B>_</B><I>fn</I>,
            void* <I>extra</I><B>_</B><I>state</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       datarep   Data representation identifier (string).

       read_conversion_fn
                 Function  invoked  to  convert  from  file  representation to
                 native representation (function).

       write_conversion_fn
                 Function invoked to convert  from  native  representation  to
                 file representation (function).

       dtype_file_extent_fn
                 Function  invoked  to get the extent of a data type as repre-
                 sented in the file (function).

       extra_state
                 Extra state.

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

       this routine,  you  may  specify  its  identifier  as  an  argument  to
       <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a>,  causing  subsequent  data-access operations to call
       the specified conversion functions.

       The  call  associates  <I>read</I><B>_</B><I>conversion</I><B>_</B><I>fn</I>,   <I>write</I><B>_</B><I>conversion</I><B>_</B><I>fn</I>,   and
       <I>dtype</I><B>_</B><I>file</I><B>_</B><I>extent</I><B>_</B><I>fn</I>  with  the data representation identifier <I>datarep</I>.
       <I>datarep</I> can then be used as an argument to  <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a>,  causing
       subsequent  data  access operations to call the conversion functions to
       convert all data items accessed between file  data  representation  and
       native  representation.  MPI_Register_datarep  is a local operation and
       only registers the data representation for the calling MPI process.  If
       <I>datarep</I>   is   already   defined,   an   error   in   the  error  class
       MPI_ERR_DUP_DATAREP is raised using the default file error handler. The
       length  of  a  data  representation  string  is limited to the value of
       MPI_MAX_DATAREP_STRING. MPI_MAX_DATAREP_STRING must have a value of  at
       least  64.  No routines are provided to delete data representations and
       free the associated resources; it is not expected that  an  application
       will generate them in significant numbers.

</PRE>
<H2>NOTES</H2><PRE>
       The  Fortran version of each MPI I/O routine includes a final argument,
       IERROR, which is not defined in the PARAMETERS sections. This  argument
       is used to return the error status of the routine in the manner typical
       for Fortran library routines.

       The C version of each routine returns an error  status  as  an  integer
       return value.

       Error  classes  are  found  in mpi.h (for C), mpif.h (for Fortran), and
       mpi++.h (for C++).

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

Open MPI 1.2                    September 2006  MPI_Register_datarep(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
