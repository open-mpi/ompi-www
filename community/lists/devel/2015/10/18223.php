<?
$subject_val = "Re: [OMPI devel] Problem running openmpi on nodes connected via eth";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 22:39:30 2015" -->
<!-- isoreceived="20151021023930" -->
<!-- sent="Wed, 21 Oct 2015 11:39:21 +0900" -->
<!-- isosent="20151021023921" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem running openmpi on nodes connected via eth" -->
<!-- id="5626FAD9.6060201_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20151020220900.0ca32830_at_antares" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 22:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Previous message:</strong> <a href="18222.php">Andrej Prsa: "[OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18222.php">Andrej Prsa: "[OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Reply:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrej,
<br>
<p>by &quot;running on the head node&quot;, shall i understand you mean
<br>
&quot;running mpirun command *and* all mpi tasks on the head node&quot; ?
<br>
<p>by &quot;running on the compute node&quot;, shall i understand you mean
<br>
&quot;running mpirun on the compute node *and* all mpi tasks on the *same* 
<br>
compute node&quot; ?
<br>
or do you mean several compute nodes could be used by the same mpi job ?
<br>
<p>what i mean is that if your mpi program is very sensitive to 
<br>
latency/bandwidth, TCP over a gigabit ethernet
<br>
is way slower that shared memory, and that can explain the 20x drop in 
<br>
performance.
<br>
<p><p>ideally, i would recommend you first try using openmpi v1.8 or the 
<br>
latest v1.10.1rc2.
<br>
<p>iirc, process binding is default from v1.8 but must by manually 
<br>
requested in v1.6.
<br>
that could explain some drop in performance too.
<br>
btw, is your head node running on similar hardware than compute nodes 
<br>
(e.g. 4 sockets 48 cores) ?
<br>
<p>are you using a batch manager to run on compute nodes ?
<br>
if yes, did you check all tasks are running on different cores ?
<br>
(depending on your configuration and how you submit your job, all mpi 
<br>
tasks can endup sharing the same core ...)
<br>
<p>you reported a lot of time is spent in the kernel, is this time spent 
<br>
for MPI communication ?
<br>
(it could be for NFS access since you have no local disk on the compute 
<br>
nodes)
<br>
<p><p>btw, how many MPI tasks are you running ?
<br>
if your application can run on a small number of tasks, here is what you 
<br>
can do from your head node :
<br>
<p>mpirun -np 1 a.out
<br>
mpirun -np 1 -host &lt;compute&gt; a.out
<br>
run a job with one task on the compute node
<br>
if there a performance drop ? if yes,  when ?
<br>
<p>try again with -np 2 (using one host)
<br>
if there a performance drop ? if yes,  when ?
<br>
<p>and then try with two nodes and one task per node
<br>
mpirun -np 2 -host &lt;compute1,compute2&gt; a.out
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/21/2015 11:09 AM, Andrej Prsa wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a small cluster of 6 identical 48-core nodes for astrophysical
</span><br>
<span class="quotelev1">&gt; research. We are struggling on getting openmpi to run efficiently on
</span><br>
<span class="quotelev1">&gt; the nodes. The head node is running ubuntu and openmpi-1.6.5 on a local
</span><br>
<span class="quotelev1">&gt; disk. All worker nodes are booting from NFS exported root that resides
</span><br>
<span class="quotelev1">&gt; on a NAS, also with ubuntu and openmpi 1.6.5. All nodes have Gbit
</span><br>
<span class="quotelev1">&gt; ethernets and the NAS is connected to the switch with 4 NICs. The
</span><br>
<span class="quotelev1">&gt; motherboard is Supermicro H8QG6, processors are 2.6GHz AMD Opterons
</span><br>
<span class="quotelev1">&gt; 6344.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we run openmpi on the head node, everything works as expected. But
</span><br>
<span class="quotelev1">&gt; when we run in on any of the worker nodes, the execution is ~20+ times
</span><br>
<span class="quotelev1">&gt; longer, and htop shows that all processes spend the vast majority of
</span><br>
<span class="quotelev1">&gt; their time on kernel cycles (red symbols).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying to learn about the profilers and MCA optimization
</span><br>
<span class="quotelev1">&gt; and such, but it seems to me that a 20-fold hit in performance
</span><br>
<span class="quotelev1">&gt; indicates a much more serious problem. For example, it might have to do
</span><br>
<span class="quotelev1">&gt; with a buggy BIOS that doesn't report L3 cache correctly, and that
</span><br>
<span class="quotelev1">&gt; throws hwloc warnings that I reported in the past. I flashed the BIOS
</span><br>
<span class="quotelev1">&gt; to the latest version, we are running the latest kernel, and I tried
</span><br>
<span class="quotelev1">&gt; newer, manually compiled hwloc/openmpi to no avail. I am at my wits'
</span><br>
<span class="quotelev1">&gt; end on what to try next, and I would thoroughly appreciate any help and
</span><br>
<span class="quotelev1">&gt; guidance. Our cluster is idling till I resolve this, and quite a few
</span><br>
<span class="quotelev1">&gt; people are tapping on my shoulder impatiently. And yes, I'm an
</span><br>
<span class="quotelev1">&gt; astronomer, not a sys admin, so please excuse my ignorance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a bunch,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18222.php">http://www.open-mpi.org/community/lists/devel/2015/10/18222.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Previous message:</strong> <a href="18222.php">Andrej Prsa: "[OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>In reply to:</strong> <a href="18222.php">Andrej Prsa: "[OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Reply:</strong> <a href="18224.php">Andrej Prsa: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
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
