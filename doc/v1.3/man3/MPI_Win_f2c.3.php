<?php
$topdir = "../../..";
$title = "MPI_Win_f2c(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B><a href="../man3/MPI_Comm_f2c.3.php">MPI_Comm_f2c</a>,</B>  <B><a href="../man3/MPI_Comm_c2f.3.php">MPI_Comm_c2f</a>,</B>  <B><a href="../man3/MPI_File_f2c.3.php">MPI_File_f2c</a>,</B> <B><a href="../man3/MPI_File_c2f.3.php">MPI_File_c2f</a>,</B> <B><a href="../man3/MPI_Info_f2c.3.php">MPI_Info_f2c</a>,</B>
       <B><a href="../man3/MPI_Info_c2f.3.php">MPI_Info_c2f</a>,</B> <B><a href="../man3/MPI_Op_f2c.3.php">MPI_Op_f2c</a>,</B> <B><a href="../man3/MPI_Op_c2f.3.php">MPI_Op_c2f</a>,</B> <B><a href="../man3/MPI_Request_f2c.3.php">MPI_Request_f2c</a>,</B> <B><a href="../man3/MPI_Request_c2f.3.php">MPI_Request_c2f</a>,</B>
       <B><a href="../man3/MPI_Type_f2c.3.php">MPI_Type_f2c</a>,</B>  <B><a href="../man3/MPI_Type_c2f.3.php">MPI_Type_c2f</a>,</B> <B>MPI_Win_f2c,</B> <B><a href="../man3/MPI_Win_c2f.3.php">MPI_Win_c2f</a></B>  - Translates a C
       handle into a Fortran handle, or vice versa.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI_Comm <a href="../man3/MPI_Comm_f2c.3.php">MPI_Comm_f2c</a>(MPI_Fint <I>comm</I>)
       MPI_Fint <a href="../man3/MPI_Comm_c2f.3.php">MPI_Comm_c2f</a>(MPI_Comm <I>comm</I>)

       MPI_File <a href="../man3/MPI_File_f2c.3.php">MPI_File_f2c</a>(MPI_Fint <I>file</I>)
       MPI_Fint <a href="../man3/MPI_File_c2f.3.php">MPI_File_c2f</a>(MPI_File <I>file</I>)

       MPI_Group <a href="../man3/MPI_Group_f2c.3.php">MPI_Group_f2c</a>(MPI Fint <I>group</I>)
       MPI_Fint <a href="../man3/MPI_Group_c2f.3.php">MPI_Group_c2f</a>(MPI Group <I>group</I>)

       MPI_Info <a href="../man3/MPI_Info_f2c.3.php">MPI_Info_f2c</a>(MPI_Fint <I>info</I>)
       MPI_Fint <a href="../man3/MPI_Info_c2f.3.php">MPI_Info_c2f</a>(MPI_Info <I>info</I>)

       MPI_Op <a href="../man3/MPI_Op_f2c.3.php">MPI_Op_f2c</a>(MPI_Fint <I>op</I>)
       MPI_Fint <a href="../man3/MPI_Op_c2f.3.php">MPI_Op_c2f</a>(MPI_Op <I>op</I>)

       MPI_Request <a href="../man3/MPI_Request_f2c.3.php">MPI_Request_f2c</a>(MPI_Fint <I>request</I>)
       MPI_Fint <a href="../man3/MPI_Request_c2f.3.php">MPI_Request_c2f</a>(MPI_Request <I>request</I>)

       MPI_Datatype <a href="../man3/MPI_Type_f2c.3.php">MPI_Type_f2c</a>(MPI_Fint <I>datatype</I>)
       MPI_Fint <a href="../man3/MPI_Type_c2f.3.php">MPI_Type_c2f</a>(MPI_Datatype <I>datatype</I>)

       MPI_Win MPI_Win_f2c(MPI_Fint <I>win</I>)
       MPI_Fint <a href="../man3/MPI_Win_c2f.3.php">MPI_Win_c2f</a>(MPI_Win <I>win</I>)

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Handles are passed between Fortran and C or C++ by using an explicit  C
       wrapper  to  convert  Fortran  handles to C handles. There is no direct
       access to C or C++ handles in Fortran. Handles are passed between C and
       C++  using  overloaded  C++ operators called from C++ code. There is no
       direct access to C++ objects from C. The type  definition  <I>MPI</I><B>_</B><I>Fint</I>  is
       provided  in  C/C++  for  an integer of the size that matches a Fortran
       <I>INTEGER</I>; usually, <I>MPI</I><B>_</B><I>Fint</I> will be equivalent to <I>int</I>. The handle trans-
       lation  functions  are  provided  in C to convert from a Fortran handle
       (which is an integer) to a C handle, and vice versa.

       For example, if <I>comm</I> is a valid Fortran handle to a communicator,  then
       <a href="../man3/MPI_Comm_f2c.3.php">MPI_Comm_f2c</a>  returns  a  valid  C handle to that same communicator; if
       <I>comm</I> = MPI_COMM_NULL (Fortran value), then <a href="../man3/MPI_Comm_f2c.3.php">MPI_Comm_f2c</a> returns a  null
       C  handle;  if  <I>comm</I>  is  an  invalid Fortran handle, then <a href="../man3/MPI_Comm_f2c.3.php">MPI_Comm_f2c</a>
       returns an invalid C handle.

</PRE>
<H2>NOTE</H2><PRE>
       This function does not return an error value. Consequently, the  result
       of calling it before <a href="../man3/MPI_Init.3.php">MPI_Init</a> or after <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a> is undefined.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
