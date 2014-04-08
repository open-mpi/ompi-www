<?php
$topdir = "../../..";
$title = "MPI_Pcontrol(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Pcontrol</B> - Controls profiling.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Pcontrol(const int <I>level</I>, ... )

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PCONTROL(<I>LEVEL</I>)
            INTEGER   <I>LEVEL</I>, ...

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Pcontrol(const int <I>level</I>, ...)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       level     Profiling level.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI  libraries  themselves  make  no  use  of this routine; they simply
       return immediately to the user code. However the presence of  calls  to
       this  routine allows a profiling package to be explicitly called by the
       user.

       Since MPI has no control of the implementation of the  profiling  code,
       we  are unable to specify precisely the semantics that will be provided
       by calls to MPI_Pcontrol. This vagueness extends to the number of argu-
       ments to the function, and their datatypes.

       However to provide some level of portability of user codes to different
       profiling libraries, we request the following meanings for certain val-
       ues of level:

         o    level==0  Profiling is disabled.

         o    level==1  Profiling  is  enabled  at  a  normal default level of
              detail.

         o    level==2  Profile buffers are flushed. (This may be a  no-op  in
              some profilers).

         o    All  other  values of level have profile library-defined effects
              and additional arguments.

       We also request that the default state after <a href="../man3/MPI_Init.3.php">MPI_Init</a> has  been  called
       is for profiling to be enabled at the normal default level (i.e., as if
       MPI_Pcontrol had just been called with the  argument  1).  This  allows
       users  to link with a profiling library and obtain profile output with-
       out having to modify their source code at all.

       interpretation of level and any other arguments is left to the  profil-
       ing library.

       This  function does not return an error value. Consequently, the result
       of calling it before <a href="../man3/MPI_Init.3.php">MPI_Init</a> or after <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a> is undefined.

Open MPI 1.2                    September 2006          MPI_Pcontrol(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
