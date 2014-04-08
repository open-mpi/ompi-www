<?php
$topdir = "../../..";
$title = "MPI_File_read_all_end(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_read_all_end</B>  -  Reads a file starting at the locations speci-
       fied by individual file pointers; ending part  of  a  split  collective
       routine (blocking).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_read_all_end(MPI_File <I>fh</I>, void <I>*buf</I>,
            MPI_Status <I>*status</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_READ_ALL_END(<I>FH</I>, <I>BUF</I>, <I>STATUS</I>, <I>IERROR</I>)
                 &lt;type&gt;         BUF(*)
                 INTEGER        FH, STATUS(MPI_STATUS_SIZE), IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Read_all_end(void* <I>buf</I>, MPI::Status&amp; <I>status</I>)

       void MPI::File::Read_all_end(void* <I>buf</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       buf       Initial address of buffer (choice).

       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_read_all_end  is  the ending part of a split collective opera-
       tion that stores the number of elements actually  read  from  the  file
       associated  with  <I>fh</I>  (at  the current individual file pointer position
       maintained by the system) into the user's buffer <I>buf</I>  in  <I>status.</I>   The
       data  is  taken out of those parts of the file specified by the current
       view. All other fields of <I>status</I> are undefined.

</PRE>
<H2>NOTES</H2><PRE>
       All the nonblocking collective routines for  data  access  are  "split"
       into  two  routines,  each with _begin or _end as a suffix. These split
       collective routines are subject to the semantic rules described in Sec-
       tion 9.4.5 of the MPI-2 standard.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI does not guarantee that an MPI program can continue past an  error.

1.3.4                            Nov 11, 2009         <B>MPI_File_read_all_end(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
