<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 13:30:39 2012" -->
<!-- isoreceived="20120314173039" -->
<!-- sent="Wed, 14 Mar 2012 13:30:35 -0400 (EDT)" -->
<!-- isosent="20120314173035" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203141240080.11946_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="113FE270-0905-4136-B3EA-FE6B3AF20C9A_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 13:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18765.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18760.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 14 Mar 2012 at 9:33am, Reuti wrote
<br>
<p><span class="quotelev2">&gt;&gt; I can run as many threads as I like on a single system with no 
</span><br>
<span class="quotelev2">&gt;&gt; problems, even if those threads are running at different nice levels.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do they get different nice levels - you renice them? I would assume 
</span><br>
<span class="quotelev1">&gt; that all start at the same of the parent. In your test program you 
</span><br>
<span class="quotelev1">&gt; posted there are no threads.
</span><br>
<p>Ah, thanks for pointing this out.  Yes, when a job runs on a single host 
<br>
(even if SGE has assigned it to multiple queues), there's no qrsh 
<br>
involved.  There's just a simple mpirun and all the threads run at the 
<br>
same priority.  I did try renicing half the threads, and the job didn't 
<br>
fail.
<br>
<p><span class="quotelev2">&gt;&gt;  The problem seems to arise when I'm both a) running across multiple 
</span><br>
<span class="quotelev2">&gt;&gt; machines and b) running threads at differing nice levels (which often 
</span><br>
<span class="quotelev2">&gt;&gt; happens as a result of our queueing setup).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sounds like you are getting slots from different queues assigned to 
</span><br>
<span class="quotelev1">&gt; one and the same job. My experience: don't do it, unless you neeed it.
</span><br>
<p>You are correct -- the problem is specific to a parallel job getting slots 
<br>
from different queues.  Our cluster is used by a combination of folks 
<br>
who've financially supported it, and those that haven't.  Our high 
<br>
priority queue, lab.q, runs un-niced and is available only to those who 
<br>
have donated money and/or machines to us.  Our low priority queue, long.q, 
<br>
runs nice 19 and is available to all.  The goal is to ensure instant 
<br>
access by a lab to its &quot;share&quot; of the cluster while letting both those 
<br>
users and non-supporting users to use as many cores as they can in long.q. 
<br>
We explicitly allow overloading to further support our goal of keeping the 
<br>
usage both full and fair.
<br>
<p>The setup is a bit convoluted, but it has kept the users (and, more 
<br>
importantly, the PIs) happy.  Until the recent upgrade to CentOS 6 and 
<br>
concomitant switch from MPICH2 to Open MPI, we've had no issues with 
<br>
parallel jobs and this queue setup.  And the test jobs I've tried with our 
<br>
old MPICH2 install (and the MPICH tight integration) running under CentOS 
<br>
6 don't fail either.
<br>
<p><span class="quotelev1">&gt; Do you face the same if you stay in one and the same queue across the 
</span><br>
<span class="quotelev1">&gt; machines?
</span><br>
<p>Jobs don't crash if they either:
<br>
<p>a) all run in the same queue, or
<br>
<p>b) run in multiple queues all on one machine
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18765.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18760.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
