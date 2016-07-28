<?
$subject_val = "Re: [OMPI devel] -npersocket in 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 23:18:34 2012" -->
<!-- isoreceived="20121110041834" -->
<!-- sent="Fri, 9 Nov 2012 20:18:26 -0800" -->
<!-- isosent="20121110041826" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -npersocket in 1.6" -->
<!-- id="CB434188-1DDF-466D-98A4-AD4BD36378A9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="509AD368.2010501_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] -npersocket in 1.6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 23:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11771.php">Ralph Castain: "[OMPI devel] Trunk warnings in collectives"</a>
<li><strong>Previous message:</strong> <a href="11769.php">Paul Kapinos: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>In reply to:</strong> <a href="11765.php">David Singleton: "[OMPI devel] -npersocket in 1.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe there is an issue over the default setting for the number of sockets on a node. We changed to discovering it in the 1.7 and beyond series, but the default value in the 1.6 series got set to zero (it defaults to 1 I believe for 1.4).
<br>
<p>Try adding &quot;-mca orte_num_sockets N -mca orte_num_cores M&quot;, where N=#sockets on your nodes and M=#cores on each socket, to your cmd line.
<br>
<p><p>On Nov 7, 2012, at 1:32 PM, David Singleton &lt;David.Singleton_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There appears to have been a change in the behaviour of -npersocket from
</span><br>
<span class="quotelev1">&gt; 1.4.3 to 1.6.x (tested with 1.6.2). Below is what I see on a pair of dual
</span><br>
<span class="quotelev1">&gt; quad-core socket Nehalem nodes running under PBS.  Is this expected?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v482 ~/MPI]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4.3
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v482 ~/MPI]$ mpirun --report-bindings -npersocket 3 -np 12 ./numa143
</span><br>
<span class="quotelev1">&gt; [v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev1">&gt; [v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],1] to socket 0 cpus 0002
</span><br>
<span class="quotelev1">&gt; [v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],2] to socket 0 cpus 0004
</span><br>
<span class="quotelev1">&gt; [v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],3] to socket 1 cpus 0010
</span><br>
<span class="quotelev1">&gt; [v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],4] to socket 1 cpus 0020
</span><br>
<span class="quotelev1">&gt; [v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],5] to socket 1 cpus 0040
</span><br>
<span class="quotelev1">&gt; [v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],6] to socket 0 cpus 0001
</span><br>
<span class="quotelev1">&gt; [v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],7] to socket 0 cpus 0002
</span><br>
<span class="quotelev1">&gt; [v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],8] to socket 0 cpus 0004
</span><br>
<span class="quotelev1">&gt; [v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],9] to socket 1 cpus 0010
</span><br>
<span class="quotelev1">&gt; [v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],10] to socket 1 cpus 0020
</span><br>
<span class="quotelev1">&gt; [v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],11] to socket 1 cpus 0040
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v482 ~/MPI]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.6.2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v482 ~/MPI]$ mpirun --report-bindings -npersocket 3 -np 12 ./numa162
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Your job has requested a conflicting number of processes for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; App: ./numa162
</span><br>
<span class="quotelev1">&gt; number of procs:  12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is more processes than we can launch under the following
</span><br>
<span class="quotelev1">&gt; additional directives and conditions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number of sockets:   0
</span><br>
<span class="quotelev1">&gt; npersocket:   3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please revise the conflict and try again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11771.php">Ralph Castain: "[OMPI devel] Trunk warnings in collectives"</a>
<li><strong>Previous message:</strong> <a href="11769.php">Paul Kapinos: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>In reply to:</strong> <a href="11765.php">David Singleton: "[OMPI devel] -npersocket in 1.6"</a>
<!-- nextthread="start" -->
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
