<?php
$topdir = "../../..";
$title = "MPI_Wtick(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Wtick</B> - Returns the resolution of <a href="../man3/MPI_Wtime.3.php">MPI_Wtime</a>.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       double MPI_Wtick()

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       DOUBLE PRECISION MPI_WTICK()

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       double Wtick()

</PRE>
<H2>RETURN VALUE</H2><PRE>
       Time in seconds of resolution of <a href="../man3/MPI_Wtime.3.php">MPI_Wtime</a>.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Wtick  returns  the resolution of <a href="../man3/MPI_Wtime.3.php">MPI_Wtime</a> in seconds. That is, it
       returns, as a double-precision value, the  number  of  seconds  between
       successive clock ticks. For example, if the clock is implemented by the
       hardware as a counter that is incremented every millisecond, the  value
       returned by MPI_Wtick should be 10^-3.

</PRE>
<H2>NOTE</H2><PRE>
       This  function does not return an error value. Consequently, the result
       of calling it before <a href="../man3/MPI_Init.3.php">MPI_Init</a> or after <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a> is undefined.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Wtime.3.php">MPI_Wtime</a>

Open MPI 1.2                    September 2006             MPI_Wtick(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
