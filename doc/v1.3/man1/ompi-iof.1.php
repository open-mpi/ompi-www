<?php
$topdir = "../../..";
$title = "ompi-iof(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       ompi-iof,  orte-iof  -  Displays  a  copy  of the output streams from a
       process.

       <B>NOTE:</B> <I>ompi-iof</I>, and <I>orte-iof</I> are exact synonyms for each  other.  Using
       any of the names will result in exactly identical behavior.

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>ompi-iof</B> [ options ]

</PRE>
<H2>Options</H2><PRE>
       <I>ompi-iof</I>  will  display  a copy of the indicated stdout, stderr, and/or
       stddiag streams from the designated process.

       <B>-pid</B> <B>|</B> <B>--pid</B>
                 The pid of the mpirun executing the process whose streams are
                 to be copied

       <B>-stdout</B> <B>|</B> <B>--stdout</B>
                 Display  a  copy  of  the  specified  process'  stdout. If no
                 options are specified, this will act as the default

       <B>-stderr</B> <B>|</B> <B>--stderr</B>
                 Display a copy of the specified process' stderr.

       <B>-stddiag</B> <B>|</B> <B>--stddiag</B>
                 Display a copy of the specified process' stddiag.

       <B>-rank</B> <B>|</B> <B>--rank</B>
                 The rank of the process whose output is to be copied.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <I>ompi-iof</I> displays a copy of the indicated stdout, stderr,  and/or  std-
       diag  streams  from the designated process. At this time, a ctrl-C must
       be used to terminate the program.  The program will terminate  cleanly,
       telling  the  associated  mpirun  to close the requested streams before
       exiting.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <B>orterun(1)</B>

1.3.4                            Nov 11, 2009                      <B>OMPI-IOF(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
