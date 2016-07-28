<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 20:07:17 2006" -->
<!-- isoreceived="20060602000717" -->
<!-- sent="Thu, 1 Jun 2006 20:07:07 -0400" -->
<!-- isosent="20060602000707" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Dual Core (machinefile)" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C43A_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI and Dual Core (machinefile)" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 20:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Previous message:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1353.php">Troy Telford: "[OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This *sounds* like the classic oversubscription problem: Open MPI's
<br>
aggressive vs. degraded operating modes:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
<br>
<p>Specifically, &quot;slots&quot; is *not* meant to be the number of processes to
<br>
run.  It's meant to be how many processors are available to run.  Hence,
<br>
if you lie and tell OMPI that you have more slots than CPUs, OMPI will
<br>
think that it can run in aggressive mode.  But you'll have less
<br>
processors than processes, and all of them will be running in aggressive
<br>
mode -- hence, massive slowdown.
<br>
<p>However, you say that you've got 2 dual core opterons in a single box,
<br>
so there should be 4 processors.  Hence &quot;slots=4&quot; should not be a lie. 
<br>
<p>I can't think of why this would happen.  The only difference between
<br>
aggressive and degraded mode is that we call sched_yield() in the middle
<br>
of tight progression loops in Open MPI, forcing the process to yield to
<br>
other processes that are waiting (which will likely be the case in
<br>
oversubscribed scenarios).
<br>
<p>Can you confirm that your Linux installation thinks that it has 4
<br>
processors and will schedule 4 processes simultaneously?
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 01, 2006 7:24 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Open MPI and Dual Core (machinefile)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm hoping this is just user error...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running a single-node job with a node that has two 
</span><br>
<span class="quotelev1">&gt; dual-core opterons   
</span><br>
<span class="quotelev1">&gt; (Open MPI 1.0.2).
</span><br>
<span class="quotelev1">&gt; compiler=gcc 4.1.0
</span><br>
<span class="quotelev1">&gt; arch=x86_64 (64-bit)
</span><br>
<span class="quotelev1">&gt; OS=linux 2.6.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; My machine file looked like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an HPL configuration for 4 processors (PxQ=2x2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I started with 'mpirun -np 4 -machinefile foo ./xhpl'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the problem takes 15 seconds to complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I change the machinefile to read:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1 slots=2
</span><br>
<span class="quotelev1">&gt; -or, simply-
</span><br>
<span class="quotelev1">&gt; node1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't matter which machinefile I use; I still execute it with:
</span><br>
<span class="quotelev1">&gt; 'mpirun -np 4 -machinefile foo ./xhpl'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Except now the problem takes 0.1 sec to complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's perfectly repeatable...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something about the machine file format I'm not 
</span><br>
<span class="quotelev1">&gt; aware of (with  
</span><br>
<span class="quotelev1">&gt; respect to dual-core CPUs)?  IIRC, slots=(num of processes to 
</span><br>
<span class="quotelev1">&gt; run per  
</span><br>
<span class="quotelev1">&gt; node); so two dual-cores should be slots=4.  Except 'slots=4' 
</span><br>
<span class="quotelev1">&gt; makes it run  
</span><br>
<span class="quotelev1">&gt; a few orders of magnitude slower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Troy Telford
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Previous message:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1353.php">Troy Telford: "[OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
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
