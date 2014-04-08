<?php
$topdir = "../../..";
$title = "ompi-restart(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       ompi-restart, orte-restart - Restart a previously checkpointed parallel
       job using the Open PAL Checkpoint/Restart Service (CRS)

       <B>NOTE:</B> <I>ompi-restart</I>, and <I>orte-restart</I> are all exact  synonyms  for  each
       other.  Using  any of the names will result in exactly identical behav-
       ior.

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>ompi-restart</B> [ options ] <B>&lt;GLOBAL</B> <B>SNAPSHOT</B> <B>HANDLE&gt;</B>

</PRE>
<H2>Options</H2><PRE>
       <I>ompi-restart</I> will attempt to restart a previously checkpointed parallel
       job  from  the global snapshot handle reference returned by <I>ompi</I><B>_</B><I>check-</I>
       <I>point</I>.

       <B>&lt;GLOBAL</B> <B>SNAPSHOT</B> <B>HANDLE&gt;</B>
                 The global snapshot handle reference returned by  <I>ompi</I><B>_</B><I>check-</I>
                 <I>point</I>,  used  to  restart the job. This is required to be the
                 last argument to this command.

       <B>-h</B> <B>|</B> <B>--help</B>
                 Display help for this command

       <B>-p</B> <B>|</B> <B>--preload</B>
                 Preload the checkpoint files on  the  remote  systems  before
                 restarting the application. Disabled by default.

       <B>--fork</B>    Fork  off  a  new process, which is the restarted process. By
                 default, the restarted process will replace <I>ompi-restart</I>.

       <B>-s</B> <B>|</B> <B>--seq</B>
                 The sequence number of the checkpoint  to  restart  from.  By
                 default,  the  most recent sequence number is used (specified
                 by -1).

       <B>-hostfile</B> <B>|</B> <B>--hostfile</B>
                 The hostfile from which to restart the application. Useful in
                 unscheduled  environments.  (Same  behavior  as --machinefile
                 option)

       <B>-machinefile</B> <B>|</B> <B>--machinefile</B>
                 The machinefile from which to restart the application. Useful
                 in  unscheduled  environments.  (Same  behavior as --hostfile
                 option)

       <B>-v</B> <B>|</B> <B>--verbose</B>
                 Enable verbose output for debugging.

       <B>-gmca</B> <B>|</B> <B>--gmca</B> &lt;key&gt; &lt;value&gt;
                 Pass global MCA parameters that are applicable  to  all  con-
                 texts.  <I>&lt;key&gt;</I> is the parameter name; <I>&lt;value&gt;</I> is the parameter
                 value.

       <B>-mca</B> <B>|</B> <B>--mca</B> <B>&lt;key&gt;</B> <B>&lt;value&gt;</B>
                 Send arguments to various MCA modules.

</PRE>
<H2>DESCRIPTION</H2><PRE>

1.3.4                            Nov 11, 2009                  <B>OMPI-RESTART(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
