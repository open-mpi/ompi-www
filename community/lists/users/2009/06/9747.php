<?
$subject_val = "Re: [OMPI users] CPU user time vs. system time";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 28 17:57:20 2009" -->
<!-- isoreceived="20090628215720" -->
<!-- sent="Sun, 28 Jun 2009 17:57:15 -0400" -->
<!-- isosent="20090628215715" -->
<!-- name="Qiming He" -->
<!-- email="qiming.he_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU user time vs. system time" -->
<!-- id="a49be6ca0906281457u438bfa66racbe399f5b4da68_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3817D76A-5FD9-42AA-9DC6-813C246829BD_at_open-mpi.org" -->
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
<strong>From:</strong> Qiming He (<em>qiming.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-28 17:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9748.php">Ashika Umanga Umagiliya: "[OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9746.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Reply:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I try a couple of things including your suggestion. I also find out this has
<br>
been reported before,
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/03/2904.php">http://www.open-mpi.org/community/lists/users/2007/03/2904.php</a>
<br>
but there seems to be no clear solution so far:
<br>
<p>Here is what I observe:
<br>
I keep the problem size fixed with 24 processes. I use two nodes with 8-core
<br>
each and 2-core each.
<br>
<p>1. When it is oversubscribed (12 process/processor), sys vs. user time is
<br>
much higher than less-subscribed (1.5 process/processor).
<br>
Almost The wall clock does not improve too much :-(
<br>
<p>2.  I try following options, individually and collectively, no difference
<br>
mpirun --mpi_yield_when_idle 1 --mca btl tcp,sm,self --mca
<br>
coll_hierarch_priority 100 ...
<br>
<p>3. older openmpi version (1.3) seems to be better than new version (1.3.2),
<br>
but not significantly.
<br>
<p>By the way, I am working on Amazon EC2 (VM-host). Will that make any
<br>
difference?
<br>
<p>Please advise
<br>
<p>Thanks
<br>
<p><p><p>On Fri, Jun 26, 2009 at 11:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you are running fewer processes on your nodes than they have processors,
</span><br>
<span class="quotelev1">&gt; then you can improve performance by adding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your cmd line. This will bind your processes to individual cores, which
</span><br>
<span class="quotelev1">&gt; helps with latency. If your program involves collectives, then you can try
</span><br>
<span class="quotelev1">&gt; setting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca coll_hierarch_priority 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will activate the hierarchical collectives, which utilize shared
</span><br>
<span class="quotelev1">&gt; memory for messages between procs on the same node.
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
<span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to OpenMPI, and have an urgent run-time question. I have
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3.2 compiled with Intel Fortran compiler v.11 simply by
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=&lt;my-dir&gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt; then I set my LD_LIBRARY_PATH to include &lt;openmpi-lib&gt; and &lt;intel-lib&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and compile my Fortran program properly. No compilation error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run my program on single node. Everything looks ok. However, when I run
</span><br>
<span class="quotelev2">&gt;&gt; it on multiple nodes.
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np &lt;num&gt; --hostfile &lt;my-hosts&gt; &lt;my-program&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The performance is much worse than a single node with the same size of the
</span><br>
<span class="quotelev2">&gt;&gt; problem to solve (MPICH2 has 50% improvement)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use top and saidar to find that user time (CPU user) is much lower than
</span><br>
<span class="quotelev2">&gt;&gt; system time (CPU system), i.e,
</span><br>
<span class="quotelev2">&gt;&gt; only small portion of CPU time is used by user application, while the rest
</span><br>
<span class="quotelev2">&gt;&gt; is busy with system.
</span><br>
<span class="quotelev2">&gt;&gt; No wonder I got bad performance.  I am assuming &quot;CPU system&quot; is used for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; I notice the total traffic (on eth0) is not that big (~5Mb/sec). What is
</span><br>
<span class="quotelev2">&gt;&gt; CPU system busy for?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help? Anything I need to tune?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Qiming
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9748.php">Ashika Umanga Umagiliya: "[OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9746.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Reply:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
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
