<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 08:25:31 2007" -->
<!-- isoreceived="20070124132531" -->
<!-- sent="Wed, 24 Jan 2007 06:25:25 -0700" -->
<!-- isosent="20070124132525" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nodes are oversubscribed in 1.1.1" -->
<!-- id="C1DCAC55.14A7%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B94B5850-06A7-47DA-A526-84731E108F43_at_galitz.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 08:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2528.php">Geoff Galitz: "[OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2528.php">Geoff Galitz: "[OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Geoff
<br>
<p><p>On 1/23/07 4:31 PM, &quot;Geoff Galitz&quot; &lt;geoff_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the following system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.1
</span><br>
<span class="quotelev1">&gt; SGE 6.0 (with tight integration)
</span><br>
<span class="quotelev1">&gt; Scientific Linux 4.3
</span><br>
<span class="quotelev1">&gt; Dual Dual-Core Opterons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI jobs are oversubscribing to the nodes.  No matter where jobs are
</span><br>
<span class="quotelev1">&gt; launched by the scheduler, they always stack up on the first node
</span><br>
<span class="quotelev1">&gt; (node00) and continue to stack even though the system load exceeds 6
</span><br>
<span class="quotelev1">&gt; (on a 4 processor box).  Eeach node is defined as 4 slots with 4 max
</span><br>
<span class="quotelev1">&gt; slots.  The MPI jobs launch via &quot;mpirun -np (some-number-of-
</span><br>
<span class="quotelev1">&gt; processors)&quot; from within the scheduler.
</span><br>
<p>I'm afraid I don't understand the situation. Are you saying that all of the
<br>
processes in a single job are trying to execute on node00??
<br>
<p>Or are you saying that multiple mpirun's are all executing application
<br>
processes using the same nodes? In other words, multiple mpiruns are not
<br>
recognizing that another mpirun has already used the job slots on a node and
<br>
therefore the sum of the mpiruns is overloading the node?
<br>
<p>If the latter, then let me know and I'll provide a more thorough
<br>
explanation. The short answer, though, is yes - that would be true. Each
<br>
mpirun would have no knowledge of what is happening on a node due to another
<br>
instance of mpirun.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that MPI is not detecting that the nodes are
</span><br>
<span class="quotelev1">&gt; overloaded and that due to the way the job slots are defined and how
</span><br>
<span class="quotelev1">&gt; mpirun is being called.  If I read the documentation correctly, a
</span><br>
<span class="quotelev1">&gt; single mpirun run consumes one job slot no matter the number of
</span><br>
<span class="quotelev1">&gt; processes which are launched.  We can chagne the number of job slots,
</span><br>
<span class="quotelev1">&gt; but then we expect to waste processors since only one mpirun job will
</span><br>
<span class="quotelev1">&gt; run on any node, even if the job is only a two processor job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone enlighten me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -geoff
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2528.php">Geoff Galitz: "[OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2528.php">Geoff Galitz: "[OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
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
