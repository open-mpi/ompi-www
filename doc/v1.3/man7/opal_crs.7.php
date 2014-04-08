<?php
$topdir = "../../..";
$title = "opal_crs(7) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       Open  PAL MCA Checkpoint/Restart Service (CRS) - Overview of Open PAL's
       CRS framework, and selected modules.  Open MPI 1.3.4.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Open PAL can involuntarily checkpoint and restart sequential  programs.
       Doing  so  requires  that Open PAL was compiled with thread support and
       that the back-end checkpointing systems are available at run-time.

   <B>Phases</B> <B>of</B> <B>Checkpoint</B> <B>/</B> <B>Restart</B>
       Open PAL defines three phases for checkpoint /  restart  support  in  a
       procress:

       Checkpoint
           When  the  checkpoint  request arrives, the procress is notified of
           the request before the checkpoint is taken.

       Continue
           After a checkpoint has successfully completed, the same process  as
           the checkpoint is notified of its successful continuation of execu-
           tion.

       Restart
           After a checkpoint has successfully completed, a  new  /  restarted
           process is notified of its successful restart.

       The Continue and Restart phases are identical except for the process in
       which they are invoked. The Continue  phase  is  invoked  in  the  same
       process  as the Checkpoint phase was invoked. The Restart phase is only
       invoked in newly restarted processes.

</PRE>
<H2>GENERAL PROCESS REQUIREMENTS</H2><PRE>
       In order for a process to use the  Open  PAL  CRS  components  it  must
       adhear to a few programmatic requirements.

       First,  the  program  must  call <I>OPAL</I><B>_</B><I>INIT</I> early in its execution. This
       should only be called once, and it is not possible  to  checkpoint  the
       process without it first having called this function.

       The  program  must  call  <I>OPAL</I><B>_</B><I>FINALIZE</I> before termination. This does a
       significant amount of cleanup. If it is not called,  then  it  is  very
       likely that remnants are left in the filesystem.

       To  checkpoint and restart a process you must use the Open PAL tools to
       do so. Using the backend checkpointer's checkpoint  and  restart  tools
       will   lead  to  undefined  behavior.   To  checkpoint  a  process  use
       <I>opal</I><B>_</B><I>checkpoint</I>  (<B>opal_checkpoint(1)</B>).   To  restart  a   process   use
       <I>opal</I><B>_</B><I>restart</I> (<B>opal_restart(1)</B>).

</PRE>
<H2>AVAILABLE COMPONENTS</H2><PRE>
       Open PAL ships with two CRS components: <I>self</I> and <I>blcr</I>.

       The following MCA parameters apply to all components:

       crs_base_verbose
           Set the verbosity level for all components. Default is 0, or silent
           except on error.

       the user's checkpoint function. No libary state is saved at all.

       As such, the model for the <I>self</I> component is slightly differnt than for
       other  components. Specifically, the Restart function is not invoked in
       the same process image  of  the  process  that  was  checkpointed.  The
       Restart  phase  is  invoked during <B>OPAL_INIT</B> of the new instance of the
       applicaiton (i.e., it starts over from main()).

       The <I>self</I> component has the following MCA parameters:

       crs_self_prefix
           Speficy a string prefix for the name of the  checkpoint,  continue,
           and  restart functions that Open PAL will invoke during the respec-
           tive stages. That is,  by  specifying  "-mca  crs_self_prefix  foo"
           means that Open PAL expects to find three functions at run-time:

              int foo_checkpoint()

              int foo_continue()

              int foo_restart()

           By default, the prefix is set to "opal_crs_self_user".

       crs_self_priority
           Set the <I>self</I> components default priority

       crs_self_verbose
           Set the verbosity level. Default is 0, or silent except on error.

       crs_self_do_restart
           This is mostly internally used. A general user should never need to
           set this value. This is set to non-0 when a the new process  should
           invoke  the  restart callback in <I>OPAL</I><B>_</B><I>INIT</I>. Default is 0, or normal
           execution.

   <B>blcr</B> <B>CRS</B> <B>Component</B>
       The Berkeley Lab Checkpoint/Restart (BLCR) single-process checkpoint is
       a  software  system developed at Lawrence Berkeley National Laboratory.
       See the project website for more details:

           <I>http://ftg.lbl.gov/CheckpointRestart/CheckpointRestart.shtml</I>

       The <I>blcr</I> component has the following MCA parameters:

       crs_blcr_priority
           Set the <I>blcr</I> components default priority.

       crs_blcr_verbose
           Set the verbosity level. Default is 0, or silent except on error.

   <B>none</B> <B>CRS</B> <B>Component</B>
       The <I>none</I> component simply selects no CRS  component.  All  of  the  CRS
       function calls return immediately with OPAL_SUCCESS.

       This  component  is  the last component to be selected by default. This
       means that if another component is available, and  the  <I>none</I>  component
       was  not  explicity requested then OPAL will attempt to activate all of
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
