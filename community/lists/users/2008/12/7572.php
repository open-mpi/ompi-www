<?
$subject_val = "[OMPI users] OpenMPI 1.3RC2 job startup issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 16:58:35 2008" -->
<!-- isoreceived="20081222215835" -->
<!-- sent="Mon, 22 Dec 2008 15:58:29 -0600" -->
<!-- isosent="20081222215829" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3RC2 job startup issue" -->
<!-- id="49500D85.9090105_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3RC2 job startup issue<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-22 16:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Previous message:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Reply:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have been happily running under OpenMPI 1.2 on our cluster unitil 
<br>
recently.  It is 2200 processors (8 way Opteron) , Qlogic IB connected.
<br>
<p>We have had issues starting larger jobs (600+ processors).  There seemed 
<br>
to be some indication that OpenMPI may solve our problems.
<br>
<p>It built with no problem and installed. Users can compile programs.
<br>
<p>When they tried to run, they got the attached output.  Are we missing 
<br>
something obvious?
<br>
<p>This is a Rocks cluster with jobs scheduled through SGE.
<br>
<p>=====================================================
<br>
$ mpirun -np 1024 program
<br>
<p>[compute-2-6.local:32580] Error: unknown option &quot;--daemonize&quot;
<br>
Usage: orted [OPTION]...
<br>
Start an Open RTE Daemon
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--bootproxy &lt;arg0&gt;    Run as boot proxy for &lt;job-id&gt;
<br>
-d|--debug               Debug the OpenRTE
<br>
-d|--spin                Have the orted spin until we can connect a debugger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--debug-daemons       Enable debugging of OpenRTE daemons
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--debug-daemons-file  Enable debugging of OpenRTE daemons, storing 
<br>
output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in files
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--gprreplica &lt;arg0&gt;   Registry contact information.
<br>
-h|--help                This help message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mpi-call-yield &lt;arg0&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have MPI (or similar) applications call yield when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;idle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--name &lt;arg0&gt;         Set the orte process name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--no-daemonize        Don't daemonize into the background
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--nodename &lt;arg0&gt;     Node name as specified by host/resource
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--ns-nds &lt;arg0&gt;       set sds/nds component to use for daemon (normally
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not needed)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--nsreplica &lt;arg0&gt;    Name service contact information.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--num_procs &lt;arg0&gt;    Set the number of process in this job
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--persistent          Remain alive after the application process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;completes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--report-uri &lt;arg0&gt;   Report this process' uri on indicated pipe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--scope &lt;arg0&gt;        Set restrictions on who can connect to this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;universe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--seed                Host replicas for the core universe services
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--set-sid             Direct the orted to separate from the current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;session
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--tmpdir &lt;arg0&gt;       Set the root for the session directory tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--universe &lt;arg0&gt;     Set the universe name as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username_at_hostname:universe_name for this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--vpid_start &lt;arg0&gt;   Set the starting vpid for this job
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 4151) died unexpectedly with status 251 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-5-15.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-5-35.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-4-8.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-7-2.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-2-6.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-6-28.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-6-35.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-6-25.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-6-26.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-2-19.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-6-37.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-6-12.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-2-36.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-7-5.local - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-7-23.local - daemon did not report back when launched
<br>
<p>================================================
<br>
<p><pre>
-- 
  Ray Muno
  University of Minnesota
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Previous message:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Reply:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
