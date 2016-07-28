<?
$subject_val = "Re: [OMPI users] CPU user time vs. system time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 07:25:36 2009" -->
<!-- isoreceived="20090629112536" -->
<!-- sent="Mon, 29 Jun 2009 07:25:28 -0400" -->
<!-- isosent="20090629112528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU user time vs. system time" -->
<!-- id="005AE4AB-4974-44AA-8DA9-9B807F7D1D4A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a49be6ca0906281457u438bfa66racbe399f5b4da68_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU user time vs. system time<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 07:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9757.php">Jim Kusznir: "[OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9747.php">Qiming He: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My $0.02: there is not much useful that you can learn from system time  
<br>
vs. user time.  The only meaningful metric is total wall clock  
<br>
execution time.
<br>
<p>Open MPI's progression engine is designed to poll aggressively; this  
<br>
approach does not work well in oversubscribed environments.  You can  
<br>
set &quot;mpi_yield_when_idle&quot; (BTW, I assume you mean &quot;--mca  
<br>
mpi_yield_when_idle 1&quot;), but all that does it make every MPI process  
<br>
call sched_yield() frequently to voluntarily yield its position in the  
<br>
kernel's scheduling algorithm.  So every MPI process will still poll  
<br>
aggressively, but they'll give up their run slot at just about every  
<br>
iteration.  No matter how you do it, this guarantees a loss of  
<br>
performance when running in oversubscribed scenarios.
<br>
<p>It's not clear from your text; are *all* of your runs in  
<br>
oversubscribed environments?
<br>
<p><p><p>On Jun 28, 2009, at 5:57 PM, Qiming He wrote:
<br>
<p><span class="quotelev1">&gt; I try a couple of things including your suggestion. I also find out  
</span><br>
<span class="quotelev1">&gt; this has been reported before,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/03/2904.php">http://www.open-mpi.org/community/lists/users/2007/03/2904.php</a>
</span><br>
<span class="quotelev1">&gt; but there seems to be no clear solution so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I observe:
</span><br>
<span class="quotelev1">&gt; I keep the problem size fixed with 24 processes. I use two nodes  
</span><br>
<span class="quotelev1">&gt; with 8-core each and 2-core each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. When it is oversubscribed (12 process/processor), sys vs. user  
</span><br>
<span class="quotelev1">&gt; time is much higher than less-subscribed (1.5 process/processor).
</span><br>
<span class="quotelev1">&gt; Almost The wall clock does not improve too much :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.  I try following options, individually and collectively, no  
</span><br>
<span class="quotelev1">&gt; difference
</span><br>
<span class="quotelev1">&gt; mpirun --mpi_yield_when_idle 1 --mca btl tcp,sm,self --mca  
</span><br>
<span class="quotelev1">&gt; coll_hierarch_priority 100 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. older openmpi version (1.3) seems to be better than new version  
</span><br>
<span class="quotelev1">&gt; (1.3.2), but not significantly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I am working on Amazon EC2 (VM-host). Will that make any  
</span><br>
<span class="quotelev1">&gt; difference?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advise
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 26, 2009 at 11:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If you are running fewer processes on your nodes than they have  
</span><br>
<span class="quotelev1">&gt; processors, then you can improve performance by adding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your cmd line. This will bind your processes to individual cores,  
</span><br>
<span class="quotelev1">&gt; which helps with latency. If your program involves collectives, then  
</span><br>
<span class="quotelev1">&gt; you can try setting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca coll_hierarch_priority 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will activate the hierarchical collectives, which utilize  
</span><br>
<span class="quotelev1">&gt; shared memory for messages between procs on the same node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2009, at 9:09 PM, Qiming He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to OpenMPI, and have an urgent run-time question. I have  
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2 compiled with Intel Fortran compiler v.11 simply by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;my-dir&gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; then I set my LD_LIBRARY_PATH to include &lt;openmpi-lib&gt; and &lt;intel-lib&gt;
</span><br>
<span class="quotelev1">&gt; and compile my Fortran program properly. No compilation error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run my program on single node. Everything looks ok. However, when  
</span><br>
<span class="quotelev1">&gt; I run it on multiple nodes.
</span><br>
<span class="quotelev1">&gt; mpirun -np &lt;num&gt; --hostfile &lt;my-hosts&gt; &lt;my-program&gt;
</span><br>
<span class="quotelev1">&gt; The performance is much worse than a single node with the same size  
</span><br>
<span class="quotelev1">&gt; of the problem to solve (MPICH2 has 50% improvement)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use top and saidar to find that user time (CPU user) is much lower  
</span><br>
<span class="quotelev1">&gt; than system time (CPU system), i.e,
</span><br>
<span class="quotelev1">&gt; only small portion of CPU time is used by user application, while  
</span><br>
<span class="quotelev1">&gt; the rest is busy with system.
</span><br>
<span class="quotelev1">&gt; No wonder I got bad performance.  I am assuming &quot;CPU system&quot; is used  
</span><br>
<span class="quotelev1">&gt; for MPI communication.
</span><br>
<span class="quotelev1">&gt; I notice the total traffic (on eth0) is not that big (~5Mb/sec).  
</span><br>
<span class="quotelev1">&gt; What is CPU system busy for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help? Anything I need to tune?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Qiming
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9757.php">Jim Kusznir: "[OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9747.php">Qiming He: "Re: [OMPI users] CPU user time vs. system time"</a>
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
