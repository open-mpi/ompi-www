<?php
$topdir = "../../..";
$title = "orte_filem(7) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       Open RTE MCA File Management (FileM) Framework - Overview of Open RTE's
       FileM framework, and selected modules.  Open MPI 1.3.4

</PRE>
<H2>DESCRIPTION</H2><PRE>
       FileM is a utility framework used by OpenRTE for a variety of purposes,
       including  the transport of checkpoint files, preloading user binaries,
       and preloading of user files.

</PRE>
<H2>AVAILABLE COMPONENTS</H2><PRE>
       Open RTE currently ships with one FileM component: <I>rsh</I>.

       The following MCA parameters apply to all components:

       filem_base_verbose
           Set the verbosity level for all components. Default is 0, or silent
           except on error.

   <B>rsh</B> <B>FileM</B> <B>Component</B>
       The <I>rsh</I> component uses <I>rcp</I> or <I>scp</I> to do its file transfers. This compo-
       nent requires the use of passwordless <I>rsh</I> or <I>ssh</I> between all nodes.

       The <I>rsh</I> component has the following MCA parameters:

       filem_rsh_priority
           The component's priority to use when selecting the most appropriate
           component for a run.

       filem_rsh_verbose
           Set the verbosity level for this component. Default is 0, or silent
           except on error.

       filem_rsh_rcp
           The program to use to copy files. Generally will be rcp or scp.

       filem_rsh_rsh
           The program used to remotely log into a given  machine  and  remove
           files.  Generally will be rsh or ssh.

   <B>none</B> <B>FileM</B> <B>Component</B>
       The  <I>none</I> component simply selects no FileM component. All of the FileM
       function calls return immediately with ORTE_SUCCESS.

       This component is the last component to be selected  by  default.  This
       means  that  if  another component is available, and the <I>none</I> component
       was not explicity requested then ORTE will attempt to activate  all  of
       the available components before falling back to this component.

</PRE>
<H2>SEE ALSO</H2><PRE>
         <B>orte-checkpoint(1)</B>,    <B>orte-restart(1)</B>,   <B>opal-checkpoint(1)</B>,   opal-
       <B>restart(1)</B>, <B>orte_snapc(7)</B>, <B>opal_crs(7)</B>

1.3.4                            Nov 11, 2009                    <B>ORTE_FILEM(7)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
