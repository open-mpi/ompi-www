<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 12:16:35 2007" -->
<!-- isoreceived="20070124171635" -->
<!-- sent="Wed, 24 Jan 2007 09:16:27 -0800" -->
<!-- isosent="20070124171627" -->
<!-- name="Geoff Galitz" -->
<!-- email="geoff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nodes are oversubscribed in 1.1.1" -->
<!-- id="0900D276-E8BA-4967-9766-3D7B50C3570F_at_galitz.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45B7753D.4070504_at_Sun.COM" -->
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
<strong>From:</strong> Geoff Galitz (<em>geoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 12:16:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2534.php">Olli-Pekka Lehto: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 24, 2007, at 7:03 AM, Pak Lui wrote:
<br>
<p><span class="quotelev1">&gt; Geoff Galitz wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; On the following system:
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt; SGE 6.0 (with tight integration)
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Linux 4.3
</span><br>
<span class="quotelev2">&gt;&gt; Dual Dual-Core Opterons
</span><br>
<span class="quotelev2">&gt;&gt; MPI jobs are oversubscribing to the nodes.  No matter where jobs  
</span><br>
<span class="quotelev2">&gt;&gt; are  launched by the scheduler, they always stack up on the first  
</span><br>
<span class="quotelev2">&gt;&gt; node  (node00) and continue to stack even though the system load  
</span><br>
<span class="quotelev2">&gt;&gt; exceeds 6  (on a 4 processor box).  Eeach node is defined as 4  
</span><br>
<span class="quotelev2">&gt;&gt; slots with 4 max  slots.  The MPI jobs launch via &quot;mpirun -np  
</span><br>
<span class="quotelev2">&gt;&gt; (some-number-of- processors)&quot; from within the scheduler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Geoff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we first start having SGE support in 1.2, not in 1.1.1.  
</span><br>
<span class="quotelev1">&gt; Unless you did some modification on your own to include the  
</span><br>
<span class="quotelev1">&gt; gridengine ras/pls modules from v1.2, you probably are not using  
</span><br>
<span class="quotelev1">&gt; the SGE tight integration. So even though you start mpirun in the  
</span><br>
<span class="quotelev1">&gt; SGE parallel environment, ORTE does not have the gridengine modules  
</span><br>
<span class="quotelev1">&gt; for allocating and launching the jobs, so that could be why all  
</span><br>
<span class="quotelev1">&gt; processes are launched on the same node. (because there's no node  
</span><br>
<span class="quotelev1">&gt; list available from gridengine and it defaults to single node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have used the backport instructions provided by Olli-Pekka Lehto.   
<br>
Of course, if it is running properly in my case, I can't say as I am  
<br>
certainly not getting the expected behavior, although the jobs do run.
<br>
<p><span class="quotelev1">&gt; On a related note, there is a way for SGE to allocate and assign  
</span><br>
<span class="quotelev1">&gt; slots for launching tasks. It is done by setting the allocation  
</span><br>
<span class="quotelev1">&gt; rule in the parallel environment (PE). If all of the slots are  
</span><br>
<span class="quotelev1">&gt; allocated on the same node, it sounds like the allocation rule has  
</span><br>
<span class="quotelev1">&gt; been set to $fill_up. Maybe you can try with $round_robin instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>If I use $round_robin, one MPI process starts up per node and then  
<br>
wraps around the cluster.  So if I have 4 process MPI job, it starts  
<br>
1 process on 4 nodes which is certainly not the most efficient method.
<br>
<p><span class="quotelev2">&gt;&gt; It seems to me that MPI is not detecting that the nodes are   
</span><br>
<span class="quotelev2">&gt;&gt; overloaded and that due to the way the job slots are defined and  
</span><br>
<span class="quotelev2">&gt;&gt; how  mpirun is being called.  If I read the documentation  
</span><br>
<span class="quotelev2">&gt;&gt; correctly, a  single mpirun run consumes one job slot no matter  
</span><br>
<span class="quotelev2">&gt;&gt; the number of  processes which are launched.  We can chagne the  
</span><br>
<span class="quotelev2">&gt;&gt; number of job slots,  but then we expect to waste processors since  
</span><br>
<span class="quotelev2">&gt;&gt; only one mpirun job will  run on any node, even if the job is only  
</span><br>
<span class="quotelev2">&gt;&gt; a two processor job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for oversubscription, I remember we start having that - 
</span><br>
<span class="quotelev1">&gt; nooversubscribe option in v1.2 so if you want to limit ORTE from  
</span><br>
<span class="quotelev1">&gt; oversubscribing because by default oversubscription is allowed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So it seems the real story for me is that there is no logic that  
<br>
detects the oversubscription condition and re-schedules the job for  
<br>
another node in the MPI nodelist in OpenMPI 1.1.1?  If so, that would  
<br>
certainly explain what I am seeing.  Is that correct?
<br>
<p>-geoff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2534.php">Olli-Pekka Lehto: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2536.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
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
