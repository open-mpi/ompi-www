<?
$subject_val = "Re: [OMPI users] How to add nodes while running job";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 27 10:35:47 2011" -->
<!-- isoreceived="20110827143547" -->
<!-- sent="Sat, 27 Aug 2011 08:35:39 -0600" -->
<!-- isosent="20110827143539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to add nodes while running job" -->
<!-- id="366A937A-B6A8-4719-94BE-60BDEB91CB45_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHwLALNS9E19X-AQymGtg-G-p3YGSCJ98-PpSo6+iaO1Gr44SQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to add nodes while running job<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-27 10:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17117.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17115.php">Joshua Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17114.php">Rayson Ho: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2011, at 8:28 AM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, Aug 27, 2011 at 9:12 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OMPI has no way of knowing that you will turn the node on at some future
</span><br>
<span class="quotelev2">&gt;&gt; point. All it can do is try to launch the job on the provided node, which
</span><br>
<span class="quotelev2">&gt;&gt; fails because the node doesn't respond.
</span><br>
<span class="quotelev2">&gt;&gt; You'll have to come up with some scheme for telling the node to turn on in
</span><br>
<span class="quotelev2">&gt;&gt; anticipation of starting a job - a resource manager is typically used for
</span><br>
<span class="quotelev2">&gt;&gt; that purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you referring to a specific resource manager/batch system?? AFAIK,
</span><br>
<span class="quotelev1">&gt; no common batch systems support MPI_Spawn properly...
</span><br>
<p>Usually, resource managers &quot;turn on&quot; nodes when allocating them for use by a job - SLURM is an example that does this. Helps the cluster save energy when not in use. I believe almost all the RM's out there now support this to some degree.
<br>
<p>Support for MPI_Comm_spawn (i.e., dynamically allocating new nodes as required by a running MPI job and turning them on) doesn't exist (to my knowledge) at this time, mostly because this MPI feature is so rarely used. I've helped (integrating from the OMPI side) several groups that were adding such support to various RM's (typically Torque), but I don't think that code has hit a distribution yet.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2011, at 6:58 AM, Rafael Braga wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to know how to add nodes during a job execution.
</span><br>
<span class="quotelev2">&gt;&gt; Now my hostfile has the node 10.0.0.23 that is off,
</span><br>
<span class="quotelev2">&gt;&gt; I would start this node during the execution so that the job can use it
</span><br>
<span class="quotelev2">&gt;&gt; When I run the command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -hostfile /tmp/hosts application
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the following message appears:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ssh: connect to host 10.0.0.23 port 22: No route to host
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 10773) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks a lot,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Rafael Braga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<li><strong>Next message:</strong> <a href="17117.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17115.php">Joshua Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17114.php">Rayson Ho: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
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
