<?php
$topdir = "../../..";
$title = "ompi-checkpoint(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       ompi-checkpoint,   orte-checkpoint  -  Checkpoint  a  running  parallel
       process using the Open MPI Checkpoint/Restart Service (CRS)

       <B>NOTE:</B> <I>ompi-checkpoint</I>, and <I>orte-checkpoint</I> are all exact  synonyms  for
       each  other.  Using  any  of the names will result in exactly identical
       behavior.

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>ompi-checkpoint</B> [ options ] <B>&lt;PID_OF_MPIRUN&gt;</B>

</PRE>
<H2>Options</H2><PRE>
       <I>orte-checkpoint</I> will attempt to notify a running parallel job  (identi-
       fied  by  <I>mpirun</I>)  that  it  has been requested that the job checkpoint
       itself. A global snapshot handle reference is presented  to  the  user,
       which is used in <I>ompi</I><B>_</B><I>restart</I> to restart the job.

       <B>&lt;PID_OF_MPIRUN&gt;</B>
                 Process ID of the <I>mpirun</I> process.

       <B>-h</B> <B>|</B> <B>--help</B>
                 Display help for this command

       <B>-w</B> <B>|</B> <B>--nowait</B>
                 Do  not  wait  for  the  application  to finish checkpointing
                 before returning.

       <B>-s</B> <B>|</B> <B>--status</B>
                 Display status messages  regarding  the  progression  of  the
                 checkpoint request.

       <B>--term</B>    After checkpointing the running job, terminate it.

       <B>-v</B> <B>|</B> <B>--verbose</B>
                 Enable verbose output for debugging.

       <B>-gmca</B> <B>|</B> <B>--gmca</B> &lt;key&gt; &lt;value&gt;
                 Pass  global  MCA  parameters that are applicable to all con-
                 texts. <I>&lt;key&gt;</I> is the parameter name; <I>&lt;value&gt;</I> is the  parameter
                 value.

       <B>-mca</B> <B>|</B> <B>--mca</B> <B>&lt;key&gt;</B> <B>&lt;value&gt;</B>
                 Send arguments to various MCA modules.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <I>orte-checkpoint</I>  can be invoked multiple, non-overlapping times.  It is
       convenient to note that the user does not need to spectify  the  check-
       pointer  to  be  used here, as that is determined completely by each of
       the running process in the job being checkpointed.

</PRE>
<H2>SEE ALSO</H2><PRE>
         <B>orte-ps(1)</B>, <B>orte-clean(1)</B>, <B>ompi-restart(1)</B>, <B>opal-checkpoint(1)</B>, opal-
       <B>restart(1)</B>, <B>opal_crs(7)</B>

1.3.4                            Nov 11, 2009               <B>OMPI-CHECKPOINT(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
