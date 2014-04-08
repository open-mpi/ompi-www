<?php
$topdir = "../../..";
$title = "orte_snapc(7) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       Open RTE MCA Snapshot Coordination (SnapC) Framework - Overview of Open
       RTE's SnapC framework, and selected modules.  Open MPI 1.3.4

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Open RTE can coordinate the generation of a global snapshot of a paral-
       lel  job  from many distributed local snapshots. The components in this
       framework determine how to: Initiate the  checkpoint  of  the  parallel
       application,  gather together the many distributed local snapshots, and
       provide the user with a global snapshot handle reference  that  can  be
       used to restart the parallel application.

</PRE>
<H2>GENERAL PROCESS REQUIREMENTS</H2><PRE>
       In  order  for  a  process to use the Open RTE SnapC components it must
       adhear to a few programmatic requirements.

       First, the program must call <I>ORTE</I><B>_</B><I>INIT</I> early  in  its  execution.  This
       should  only  be  called once, and it is not possible to checkpoint the
       process without it first having called this function.

       The program must call <I>ORTE</I><B>_</B><I>FINALIZE</I> before termination.

       A user may initiate a checkpoint of a parallel application by using the
       <B>orte-checkpoint(1)</B> and <B>orte-restart(1)</B> commands.

</PRE>
<H2>AVAILABLE COMPONENTS</H2><PRE>
       Open RTE ships with one SnapC component: <I>full</I>.

       The following MCA parameters apply to all components:

       snapc_base_verbose
           Set the verbosity level for all components. Default is 0, or silent
           except on error.

       snapc_base_global_snapshot_dir
           The directory to store the checkpoint snapshots. Default is <B>/tmp</B>.

   <B>full</B> <B>SnapC</B> <B>Component</B>
       The <I>full</I> component gathers together the local  snapshots  to  the  disk
       local  to  the Head Node Process (HNP) before completing the checkpoint
       of the process. This component does not  currently  support  replicated
       HNPs,  or  timer  based  gathering  of  local  snapshot data. This is a
       3-tiered hierarchy of coordinators.

       The <I>full</I> component has the following MCA parameters:

       snapc_full_priority
           The component's priority to use when selecting the most appropriate
           component for a run.

       snapc_full_verbose
           Set the verbosity level for this component. Default is 0, or silent
           except on error.

   <B>none</B> <B>SnapC</B> <B>Component</B>
       The <I>none</I> component simply selects no SnapC component. All of the  SnapC
       function calls return immediately with ORTE_SUCCESS.

1.3.4                            Nov 11, 2009                    <B>ORTE_SNAPC(7)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
