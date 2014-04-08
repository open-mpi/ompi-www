<?php
$topdir = "../../..";
$title = "MPI_Wtime(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Wtime</B> - Returns an elapsed time on the calling processor.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       double MPI_Wtime()

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       DOUBLE PRECISION MPI_WTIME()

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       double Wtime()

</PRE>
<H2>RETURN VALUE</H2><PRE>
       Time in seconds since an arbitrary time in the past.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Wtime  returns  a  floating-point  number  of seconds, representing
       elapsed wall-clock time since some time in the past.

       The "time in the past" is guaranteed not to change during the  life  of
       the  process.  The  user is responsible for converting large numbers of
       seconds to other units if they are preferred.

       This function is portable (it returns seconds, not "ticks"), it  allows
       high  resolution,  and carries no unnecessary baggage. One would use it
       like this:

           {
              double starttime, endtime;
              starttime = MPI_Wtime();
               ....  stuff to be timed  ...
              endtime   = MPI_Wtime();
              printf("That took %f seconds\n",endtime-starttime);
           }

       The times returned are local to the node that called them. There is  no
       requirement that different nodes return the "same" time.

</PRE>
<H2>NOTES</H2><PRE>
       The  boolean  variable  MPI_WTIME_IS_GLOBAL, a predefined attribute key
       that indicates whether clocks are synchronized, does not have  a  valid
       value in Open MPI, as the clocks are not guaranteed to be synchronized.

       This is intended to be a high-resolution, elapsed (or wall) clock.  See
       <a href="../man3/MPI_Wtick.3.php">MPI_Wtick</a> to determine the resolution of MPI_Wtime.

       This  function does not return an error value. Consequently, the result
       of calling it before <a href="../man3/MPI_Init.3.php">MPI_Init</a> or after <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a> is undefined.

Open MPI 1.2                    September 2006             MPI_Wtime(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
