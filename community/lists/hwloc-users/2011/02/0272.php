<?
$subject_val = "Re: [hwloc-users] Problem getting cpuset of MPI task";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 03:07:32 2011" -->
<!-- isoreceived="20110210080732" -->
<!-- sent="Thu, 10 Feb 2011 09:07:24 +0100" -->
<!-- isosent="20110210080724" -->
<!-- name="Hendryk Bockelmann" -->
<!-- email="bockelmann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem getting cpuset of MPI task" -->
<!-- id="4D539CBC.2050204_at_dkrz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D52BCE8.2080702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problem getting cpuset of MPI task<br>
<strong>From:</strong> Hendryk Bockelmann (<em>bockelmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 03:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Brice,
<br>
<p>I already though so, but thank you for the explanation.
<br>
On our clusters the job scheduler binds the MPI tasks, but it is not 
<br>
always clear to which resources. So for us it would be great to know 
<br>
where a task runs such that we might adopt the MPI communicators to 
<br>
increase performance.
<br>
Maybe just a note on the hwloc output on the cluster: while on my locale 
<br>
machine all MPI tasks are able to explore the whole topology, on the 
<br>
cluster each task only sees itself, e.g. for task 7:
<br>
<p>7:Machine#0(Backend=AIXOSName=AIXOSRelease=1OSVersion=6HostName=p191Architecture=00C83AC24C00), 
<br>
cpuset: 0x0000c000
<br>
7:  NUMANode#0, cpuset: 0x0000c000
<br>
7:    L2Cache#0(0KB line=0), cpuset: 0x0000c000
<br>
7:      Core#0, cpuset: 0x0000c000
<br>
7:        PU, cpuset: 0x00004000
<br>
7:        PU#0, cpuset: 0x00008000
<br>
7:--&gt; root_cpuset of process 7 is 0x0000c000
<br>
<p>Nevertheless, all MPI-tasks have different cpusets and since the nodes 
<br>
are homogeneous one can guess the whole binding using the information of 
<br>
lstopo and the HostName of each task. Perhaps you can tell me whether 
<br>
such a restricted topology is due to hwloc or due to the fixed binding 
<br>
by the job scheduler?
<br>
<p>Greetings,
<br>
Hendryk
<br>
<p>On 09/02/11 17:12, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 09/02/2011 16:53, Hendryk Bockelmann a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Since I am new to hwloc there might be a misunderstanding from my
</span><br>
<span class="quotelev2">&gt;&gt; side, but I have a problem getting the cpuset of MPI tasks. I just
</span><br>
<span class="quotelev2">&gt;&gt; want to run a simple MPI program to see on which cores (or CPUs in
</span><br>
<span class="quotelev2">&gt;&gt; case of hyperthreading or SMT) the tasks run, so that I can arrange my
</span><br>
<span class="quotelev2">&gt;&gt; MPI communicators.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the program below I get the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 2 on tide
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 2 on tide
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset of process 0 is 0x0000000f
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset of process 0 after singlify is 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset of process 1 is 0x0000000f
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset of process 1 after singlify is 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So why do both MPI tasks report the same cpuset?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Hendryk,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your processes are not bound, there may run anywhere they want.
</span><br>
<span class="quotelev1">&gt; hwloc_get_cpubind() tells you where they are bound. That's why the
</span><br>
<span class="quotelev1">&gt; cpuset is 0x0000f first (all the existing logical processors in the
</span><br>
<span class="quotelev1">&gt; machine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You want to know where they actually run. It's different from where
</span><br>
<span class="quotelev1">&gt; there are bound. The former is included in the latter. The former is a
</span><br>
<span class="quotelev1">&gt; single processor, while the later may be any combination of any processors).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc cannot tell you where a task run. But I am looking at implementing
</span><br>
<span class="quotelev1">&gt; it. I actually sent a patch to hwloc-devel about it yesterday [1]. You
</span><br>
<span class="quotelev1">&gt; would just have to replace get_cpubind with get_cpuexec (or whatever the
</span><br>
<span class="quotelev1">&gt; final function name is).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should note that such a function would not be guaranteed to return
</span><br>
<span class="quotelev1">&gt; something true since the process may migrate to another processor in the
</span><br>
<span class="quotelev1">&gt; meantime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also note that hwloc_bitmap_singlify is usually used to &quot;simplify&quot; a
</span><br>
<span class="quotelev1">&gt; cpuset (to avoid migration between multiple SMT for instance) before
</span><br>
<span class="quotelev1">&gt; binding a task (calling set_cpubind). It's useless in your code above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/1915.php">http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/1915.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the program (attached you find the output of
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-gather-topology.sh):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;hwloc.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_t topology;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_t cpuset;
</span><br>
<span class="quotelev2">&gt;&gt; char *str = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; int myid, numprocs, namelen;
</span><br>
<span class="quotelev2">&gt;&gt; char procname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_processor_name(procname,&amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;Process %d of %d on %s\n&quot;, myid, numprocs, procname);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_load(topology);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* get native cpuset of this process */
</span><br>
<span class="quotelev2">&gt;&gt; cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_get_cpubind(topology, cpuset, 0);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_asprintf(&amp;str, cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;--&gt; cpuset of process %d is %s\n&quot;, myid, str);
</span><br>
<span class="quotelev2">&gt;&gt; free(str);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_asprintf(&amp;str, cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;--&gt; cpuset of process %d after singlify is %s\n&quot;, myid, str);
</span><br>
<span class="quotelev2">&gt;&gt; free(str);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_free(cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_destroy(topology);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0272/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
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
