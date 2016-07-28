<?
$subject_val = "Re: [OMPI users] How to add nodes while running job";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 27 10:28:19 2011" -->
<!-- isoreceived="20110827142819" -->
<!-- sent="Sat, 27 Aug 2011 10:28:15 -0400" -->
<!-- isosent="20110827142815" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to add nodes while running job" -->
<!-- id="CAHwLALNS9E19X-AQymGtg-G-p3YGSCJ98-PpSo6+iaO1Gr44SQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B7EA8B35-4FA6-4905-B49C-ADD7362BB510_at_open-mpi.org" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-27 10:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17115.php">Joshua Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>In reply to:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17116.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17116.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Aug 27, 2011 at 9:12 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; OMPI has no way of knowing that you will turn the node on at some future
</span><br>
<span class="quotelev1">&gt; point. All it can do is try to launch the job on the provided node, which
</span><br>
<span class="quotelev1">&gt; fails because the node doesn't respond.
</span><br>
<span class="quotelev1">&gt; You'll have to come up with some scheme for telling the node to turn on in
</span><br>
<span class="quotelev1">&gt; anticipation of starting a job - a resource manager is typically used for
</span><br>
<span class="quotelev1">&gt; that purpose.
</span><br>
<p>Hi Ralph,
<br>
<p>Are you referring to a specific resource manager/batch system?? AFAIK,
<br>
no common batch systems support MPI_Spawn properly...
<br>
<p>Rayson
<br>
<p><p><p><p><span class="quotelev1">&gt; On Aug 27, 2011, at 6:58 AM, Rafael Braga wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to know how to add nodes during a job execution.
</span><br>
<span class="quotelev1">&gt; Now my hostfile has the node 10.0.0.23 that is off,
</span><br>
<span class="quotelev1">&gt; I would start this node during the execution so that the job can use it
</span><br>
<span class="quotelev1">&gt; When I run the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile /tmp/hosts application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the following message appears:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh: connect to host 10.0.0.23 port 22: No route to host
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 10773) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
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
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks a lot,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rafael Braga
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17115.php">Joshua Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>In reply to:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17116.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17116.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
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
