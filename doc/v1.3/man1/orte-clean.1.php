<?php
$topdir = "../../..";
$title = "orte-clean(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>orte-clean</B> - Cleans up any stale processes and files leftover from Open
       MPI jobs.

</PRE>
<H2>SYNOPSIS</H2><PRE>
       orte-clean [--verbose]
       mpirun --pernode [--host | --hostfile <I>file</I>] orte-clean [--verbose]

</PRE>
<H2>OPTIONS</H2><PRE>
       [-v | --verbose] This argument will run the command in verbose mode and
       print  out  the  universes  that are getting cleaned up as well as pro-
       cesses that are being killed.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <I>orte-clean</I> attempts to clean up any processes and files left over  from
       Open  MPI  jobs that were run in the past as well as any currently run-
       ning jobs.  This includes OMPI infrastructure and helper commands,  any
       processes  that  were  spawned  as  part  of the job, and any temporary
       files.  orte-clean will only act upon processes and files  that  belong
       to  the  user  running the orte-clean command.  If run as root, it will
       kill off processes belonging to any users.

       When run from the command line, orte-clean will attempt to clean up the
       local  node it is run from.  When launched via mpirun, it will clean up
       the nodes selected by mpirun.

</PRE>
<H2>EXAMPLES</H2><PRE>
       Example 1: Clean up local node only.

       example% orte-clean

       Example 2: To clean up on a specific set of nodes specified on  command
       line,  it  is recommended to use the pernode option.  This will run one
       orte-clean for each node.

       example% mpirun --pernode --host node1,node2,node3 orte-clean

       To clean up on a specific set of nodes from a file.

       example% mpirun --pernode --hostfile nodes_file orte-clean

       Example 3: Within a resource managed environment like N1GE,  SLURM,  or
       Torque.  The following example is from N1GE.

       First, we see that we have two nodes with two CPUs each.

       example% qsh -pe orte 4
       example% mpirun --pernode orte-clean

       Clean up a subset of the nodes in the cluster.

       example% mpirun --pernode --host node1 orte-clean

</PRE>
<H2>SEE ALSO</H2><PRE>
       <B>orterun(1)</B>, <B>orte-ps(1)</B>

1.3.4                            Nov 11, 2009                    <B>orte-clean(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
