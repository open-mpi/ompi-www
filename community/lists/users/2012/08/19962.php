<?
$subject_val = "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 09:57:08 2012" -->
<!-- isoreceived="20120820135708" -->
<!-- sent="Mon, 20 Aug 2012 06:56:59 -0700" -->
<!-- isosent="20120820135659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Connection to lifeline lost&amp;quot; when developing a new rsh agent" -->
<!-- id="1E72AD76-5A64-4900-A9B8-D310CA650A7D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50322958.9050407_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 09:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19963.php">Jeff Squyres: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19961.php">Yann RADENAC: "[OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>In reply to:</strong> <a href="19961.php">Yann RADENAC: "[OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Reply:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be clear: what you are launching is an orted daemon, not your application process. Once the daemons are running, then we use them to launch the actual application process. So the issue here is with starting the daemons themselves. You might try adding &quot;-mca plm_base_verbose 5 --debug-daemons&quot; to watch the debug output from the daemons as they are launched.
<br>
<p>The lifeline is a socket connection between the daemons and mpirun. For some reason, the socket from your remote daemon back to mpirun is being closed, which the remote daemon interprets as &quot;lifeline lost&quot; and terminates itself. You could try setting the verbosity on the OOB to get the debug output from it (see &quot;ompi_info --param oob tcp&quot; for the settings), though it's likely to just tell you that the socket closed.
<br>
<p><p>On Aug 20, 2012, at 5:11 AM, Yann RADENAC &lt;Yann.Radenac_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm developing MPI support for XtreemOS (www.xtreemos.eu) so that an MPI program is managed as a single XtreemOS job.
</span><br>
<span class="quotelev1">&gt; To manage all processes as a single XtreemOS job, I've developed the program xos-createProcess that plays the role of the rsh agent (replacing ssh/rsh) to start a process on a remote machine that is part of the ones reserved for the current job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running a simple hello world MPI program where each processes sends a string to the process 0 that itself prints them on standard output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using OpenMPI with ssh, this program works perfectly on several machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using OpenMPI with my launcher xos-createProcess, it works with an MPI program of 2 processes on 2 different machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However I cannot pass through the following error that happens when running an MPI program of 3 processes on 3 different machines (or any n processes on n different machines with n &gt;= 3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A process started by xos-createProcess on a remote machine ends with the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [paradent-5.rennes.grid5000.fr:08191] [[50627,0],2] routed:binomial: Connection to lifeline [[50627,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, process 0 is still running! lifeline should not have been lost!
</span><br>
<span class="quotelev1">&gt; Actually, process 0 is still waiting for remote process to terminate (checked with gdb, the initial process is calling libc's poll()).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The run command is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash -c '(mpirun  --mca orte_rsh_agent xos-createProcess --leave-session-attached   -np 2   -host `xreservation -a $XOS_RSVID` mpi/hello_world_MPI  &lt; /dev/null &gt; mpirun.out) &gt;&amp; mpirun.err'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same problem with or without option --leave-session-attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, how is the lifeline implemented? why does it work with 2 processes but start failing when using 3 or more processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Yann Radenac
</span><br>
<span class="quotelev1">&gt; Research Engineer, INRIA
</span><br>
<span class="quotelev1">&gt; Myriads research team, INRIA Rennes - Bretagne Atlantique
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19963.php">Jeff Squyres: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19961.php">Yann RADENAC: "[OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>In reply to:</strong> <a href="19961.php">Yann RADENAC: "[OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Reply:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
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
