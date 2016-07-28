<?
$subject_val = "Re: [OMPI devel] Problem running openmpi on nodes connected via eth";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 23:08:44 2015" -->
<!-- isoreceived="20151021030844" -->
<!-- sent="Tue, 20 Oct 2015 23:08:39 -0400" -->
<!-- isosent="20151021030839" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem running openmpi on nodes connected via eth" -->
<!-- id="20151020230839.08467057_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5626FAD9.6060201_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem running openmpi on nodes connected via eth<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 23:08:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Previous message:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Reply:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>Thanks for your reply!
<br>
<p><span class="quotelev1">&gt; by &quot;running on the head node&quot;, shall i understand you mean
</span><br>
<span class="quotelev1">&gt; &quot;running mpirun command *and* all mpi tasks on the head node&quot; ?
</span><br>
<p>Precisely.
<br>
<p><span class="quotelev1">&gt; by &quot;running on the compute node&quot;, shall i understand you mean
</span><br>
<span class="quotelev1">&gt; &quot;running mpirun on the compute node *and* all mpi tasks on the *same* 
</span><br>
<span class="quotelev1">&gt; compute node&quot; ?
</span><br>
<p>What I meant to say is &quot;running mpirun on the head node and all mpi
<br>
tasks on a single worker node&quot;, i.e.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --hostfile node1 -np 48 --byslot ./mpitest.py
<br>
<p>where node1 contains:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node1 slots=48 max_slots=48
<br>
<p>I then ssh'd to node1 and ran htop to observe that processes are all
<br>
colored in red, i.e. kernel cycles. A curious observation is the load
<br>
average, which shows 700+, i.e. ridiculous given that there are only 48
<br>
processors.
<br>
<p><span class="quotelev1">&gt; what i mean is that if your mpi program is very sensitive to 
</span><br>
<span class="quotelev1">&gt; latency/bandwidth, TCP over a gigabit ethernet is way slower that
</span><br>
<span class="quotelev1">&gt; shared memory, and that can explain the 20x drop in performance.
</span><br>
<p>Is there a good way to profile this? I installed an evaluation version
<br>
of vampirtrace, but I didn't yet get so far to produce a trace with
<br>
mpirun.
<br>
<p><span class="quotelev1">&gt; ideally, i would recommend you first try using openmpi v1.8 or the 
</span><br>
<span class="quotelev1">&gt; latest v1.10.1rc2.
</span><br>
<p>I tried 1.8.2 and needed to use --bind-to none to get the cores to even
<br>
run (with Jeff Squyres' help), most likely because of this L3 bios bug.
<br>
I'll try 1.10.1rc2 tomorrow and report back.
<br>
<p><span class="quotelev1">&gt; btw, is your head node running on similar hardware than compute nodes 
</span><br>
<span class="quotelev1">&gt; (e.g. 4 sockets 48 cores) ?
</span><br>
<p>Yes, all nodes are identical, 4 sockets, 48 cores.
<br>
<p><span class="quotelev1">&gt; are you using a batch manager to run on compute nodes ?
</span><br>
<span class="quotelev1">&gt; if yes, did you check all tasks are running on different cores ?
</span><br>
<span class="quotelev1">&gt; (depending on your configuration and how you submit your job, all mpi 
</span><br>
<span class="quotelev1">&gt; tasks can endup sharing the same core ...)
</span><br>
<p>I do have torque/maui installed and configured, but I disabled them for
<br>
these tests, and running mpirun directly.
<br>
<p><span class="quotelev1">&gt; you reported a lot of time is spent in the kernel, is this time spent 
</span><br>
<span class="quotelev1">&gt; for MPI communication ?
</span><br>
<span class="quotelev1">&gt; (it could be for NFS access since you have no local disk on the
</span><br>
<span class="quotelev1">&gt; compute nodes)
</span><br>
<p>I'd *love* to be able to answer that question, but I don't know how to
<br>
find that out. If you can point me in the right direction, I'd love to
<br>
learn how to do it.
<br>
<p><span class="quotelev1">&gt; btw, how many MPI tasks are you running ?
</span><br>
<p>I ran it on all 48 cores per node.
<br>
<p><span class="quotelev1">&gt; if your application can run on a small number of tasks, here is what
</span><br>
<span class="quotelev1">&gt; you can do from your head node :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 a.out
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -host &lt;compute&gt; a.out
</span><br>
<span class="quotelev1">&gt; run a job with one task on the compute node
</span><br>
<span class="quotelev1">&gt; if there a performance drop ? if yes,  when ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; try again with -np 2 (using one host)
</span><br>
<span class="quotelev1">&gt; if there a performance drop ? if yes,  when ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then try with two nodes and one task per node
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host &lt;compute1,compute2&gt; a.out
</span><br>
<p>It'll take a bit of code modification, but let me try it and report
<br>
back.
<br>
<p>Thanks a lot,
<br>
Andrej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Previous message:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Reply:</strong> <a href="18225.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
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
