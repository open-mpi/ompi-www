<?php
$topdir = "../../..";
$title = "MPI_Get_processor_name(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Get_processor_name</B>  - Gets the name of the processor.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Get_processor_name(char *<I>name</I>, int *<I>resultlen</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_GET_PROCESSOR_NAME(<I>NAME,</I> <I>RESULTLEN,</I> <I>IERROR</I>)
            CHARACTER*(*)  <I>NAME</I>
            INTEGER        <I>RESULTLEN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Get_processor_name(char* <I>name</I>, int&amp; <I>resultlen</I>)

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       name      A  unique  specifier  for  the actual (as opposed to virtual)
                 node.

       resultlen Length (in characters) of result returned in name.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This routine returns the name of the processor on which it  was  called
       at  the  moment of the call. The name is a character string for maximum
       flexibility. From this value it must be possible to identify a specific
       piece  of hardware. The argument name must represent storage that is at
       least MPI_MAX_PROCESSOR_NAME characters long.

       The number of characters actually written is  returned  in  the  output
       argument, resultlen.

</PRE>
<H2>NOTES</H2><PRE>
       The  user  must  provide at least MPI_MAX_PROCESSOR_NAME space to write
       the processor name; processor names can be this long. The  user  should
       examine  the output argument, resultlen, to determine the actual length
       of the name.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is

1.3.4                            Nov 11, 2009        <B>MPI_Get_processor_name(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
