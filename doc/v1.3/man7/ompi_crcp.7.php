<?php
$topdir = "../../..";
$title = "ompi_crcp(7) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       Open  MPI MCA Checkpoint/Restart Coordination Protocol (CRCP) Framework
       - Overview of Open MPI's CRCP framework, and  selected  modules.   Open
       MPI 1.3.4

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The CRCP Framework is used by Open MPI for the encapsulation of various
       Checkpoint/Restart Coordination Protocols (e.g., Coordinated, Uncoordi-
       nated, Message/Communication Induced, ...).

</PRE>
<H2>GENERAL PROCESS REQUIREMENTS</H2><PRE>
       In  order  for  a  process  to use the Open MPI CRCP components it must
       adhear to a few programmatic requirements.

       First, the program must call <I>MPI</I><B>_</B><I>INIT</I> early in its execution.

       The program must call <I>MPI</I><B>_</B><I>FINALIZE</I> before termination.

       A user may initiate a checkpoint of a parallel application by using the
       <B>ompi-checkpoint(1)</B> and <B>ompi-restart(1)</B> commands.

</PRE>
<H2>AVAILABLE COMPONENTS</H2><PRE>
       Open MPI currently ships with one CRCP component: <I>coord</I>.

       The following MCA parameters apply to all components:

       crcp_base_verbose
           Set the verbosity level for all components. Default is 0, or silent
           except on error.

   <B>coord</B> <B>CRCP</B> <B>Component</B>
       The <I>coord</I> component implements a Coordinated Checkpoint/Restart Coordi-
       nation Protocol similar to the one implemented in LAM/MPI.

       The <I>coord</I> component has the following MCA parameters:

       crcp_coord_priority
           The component's priority to use when selecting the most appropriate
           component for a run.

       crcp_coord_verbose
           Set the verbosity level for this component. Default is 0, or silent
           except on error.

   <B>none</B> <B>CRCP</B> <B>Component</B>
       The  <I>none</I>  component  simply selects no CRCP component. All of the CRCP
       function calls return immediately with ORTE_SUCCESS.

       This component is the last component to be selected  by  default.  This
       means  that  if  another component is available, and the <I>none</I> component
       was not explicity requested then Open MPI will attempt to activate  all
       of the available components before falling back to this component.

</PRE>
<H2>SEE ALSO</H2><PRE>
         <B>ompi-checkpoint(1)</B>,    <B>ompi-restart(1)</B>,   <B>opal-checkpoint(1)</B>,   opal-
       <B>restart(1)</B>, <B>orte_snapc(7)</B>, <B>orte_filem(7)</B>, <B>opal_crs(7)</B>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
