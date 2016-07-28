<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 18:54:14 2012" -->
<!-- isoreceived="20120314225414" -->
<!-- sent="Wed, 14 Mar 2012 23:54:01 +0100" -->
<!-- isosent="20120314225401" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="A4659C2D-BBE5-4801-85BA-12D5E3AE5436_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1203141240080.11946_at_hogwarts.egr.duke.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 18:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18773.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18771.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18766.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 14.03.2012 um 18:30 schrieb Joshua Baker-LePain:
<br>
<p><span class="quotelev1">&gt; On Wed, 14 Mar 2012 at 9:33am, Reuti wrote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can run as many threads as I like on a single system with no problems, even if those threads are running at different nice levels.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How do they get different nice levels - you renice them? I would assume that all start at the same of the parent. In your test program you posted there are no threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, thanks for pointing this out.  Yes, when a job runs on a single host (even if SGE has assigned it to multiple queues), there's no qrsh involved.  There's just a simple mpirun and all the threads run at the same priority.  I did try renicing half the threads, and the job didn't fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem seems to arise when I'm both a) running across multiple machines and b) running threads at differing nice levels (which often happens as a result of our queueing setup).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This sounds like you are getting slots from different queues assigned to one and the same job. My experience: don't do it, unless you neeed it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are correct -- the problem is specific to a parallel job getting slots from different queues.
</span><br>
<p>I'm not sure, whether it's good regarding the runtime of the jobs. The un-niced processes might have to wait sometimes for the slower processes to exchange their results.
<br>
<p>But I think it's not a matter of the nice value, as the timing behavior may be similar to have faster and slower machines.
<br>
<p><p><span class="quotelev1">&gt;  Our cluster is used by a combination of folks who've financially supported it, and those that haven't.  Our high priority queue, lab.q, runs un-niced and is available only to those who have donated money and/or machines to us.  Our low priority queue, long.q, runs nice 19 and is available to all.  The goal is to ensure instant access by a lab to its &quot;share&quot; of the cluster while letting both those users and non-supporting users to use as many cores as they can in long.q. We explicitly allow overloading to further support our goal of keeping the usage both full and fair.
</span><br>
<p>Although it's not an explanation (as I have none for this behavior), you could even increase the slots in the priority queue by the number of slots you allow in the low priroty queue and force parallel jobs to stay inside long.q. The overall amount you can still limit on an exechost level to match the targeted oversubscription.
<br>
<p>Does the low priority have the same limit regarding memory ot anything else like the high priority queue?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; The setup is a bit convoluted, but it has kept the users (and, more importantly, the PIs) happy.  Until the recent upgrade to CentOS 6 and concomitant switch from MPICH2 to Open MPI, we've had no issues with parallel jobs and this queue setup.  And the test jobs I've tried with our old MPICH2 install (and the MPICH tight integration) running under CentOS 6 don't fail either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you face the same if you stay in one and the same queue across the machines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jobs don't crash if they either:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) all run in the same queue, or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) run in multiple queues all on one machine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev1">&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev1">&gt; UCSF
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
<li><strong>Next message:</strong> <a href="18773.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18771.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18766.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
