<?
$subject_val = "Re: [hwloc-users] Problem getting cpuset of MPI task";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 11:12:41 2011" -->
<!-- isoreceived="20110209161241" -->
<!-- sent="Wed, 09 Feb 2011 17:12:24 +0100" -->
<!-- isosent="20110209161224" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem getting cpuset of MPI task" -->
<!-- id="4D52BCE8.2080702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D52B874.60409_at_dkrz.de" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 11:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>In reply to:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Reply:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/02/2011 16:53, Hendryk Bockelmann a &#233;crit :
<br>
<span class="quotelev1">&gt; Since I am new to hwloc there might be a misunderstanding from my
</span><br>
<span class="quotelev1">&gt; side, but I have a problem getting the cpuset of MPI tasks. I just
</span><br>
<span class="quotelev1">&gt; want to run a simple MPI program to see on which cores (or CPUs in
</span><br>
<span class="quotelev1">&gt; case of hyperthreading or SMT) the tasks run, so that I can arrange my
</span><br>
<span class="quotelev1">&gt; MPI communicators.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the program below I get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0 of 2 on tide
</span><br>
<span class="quotelev1">&gt; Process 1 of 2 on tide
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset of process 0 is 0x0000000f
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset of process 0 after singlify is 0x00000001
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset of process 1 is 0x0000000f
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset of process 1 after singlify is 0x00000001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So why do both MPI tasks report the same cpuset?
</span><br>
<p>Hello Hendryk,
<br>
<p>Your processes are not bound, there may run anywhere they want.
<br>
hwloc_get_cpubind() tells you where they are bound. That's why the
<br>
cpuset is 0x0000f first (all the existing logical processors in the
<br>
machine).
<br>
<p>You want to know where they actually run. It's different from where
<br>
there are bound. The former is included in the latter. The former is a
<br>
single processor, while the later may be any combination of any processors).
<br>
<p>hwloc cannot tell you where a task run. But I am looking at implementing
<br>
it. I actually sent a patch to hwloc-devel about it yesterday [1]. You
<br>
would just have to replace get_cpubind with get_cpuexec (or whatever the
<br>
final function name is).
<br>
<p>You should note that such a function would not be guaranteed to return
<br>
something true since the process may migrate to another processor in the
<br>
meantime.
<br>
<p>Also note that hwloc_bitmap_singlify is usually used to &quot;simplify&quot; a
<br>
cpuset (to avoid migration between multiple SMT for instance) before
<br>
binding a task (calling set_cpubind). It's useless in your code above.
<br>
<p>Brice
<br>
<p>[1] <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/1915.php">http://www.open-mpi.org/community/lists/hwloc-devel/2011/02/1915.php</a>
<br>
<p><p><p><span class="quotelev1">&gt; Here is the program (attached you find the output of
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology.sh):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;hwloc.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    hwloc_topology_t topology;
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_t cpuset;
</span><br>
<span class="quotelev1">&gt;    char *str = NULL;
</span><br>
<span class="quotelev1">&gt;    int myid, numprocs, namelen;
</span><br>
<span class="quotelev1">&gt;    char procname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev1">&gt;    MPI_Get_processor_name(procname,&amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Process %d of %d on %s\n&quot;, myid, numprocs, procname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev1">&gt;    hwloc_topology_load(topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* get native cpuset of this process */
</span><br>
<span class="quotelev1">&gt;    cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;    hwloc_get_cpubind(topology, cpuset, 0);
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_asprintf(&amp;str, cpuset);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;--&gt; cpuset of process %d is %s\n&quot;, myid, str);
</span><br>
<span class="quotelev1">&gt;    free(str);
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_asprintf(&amp;str, cpuset);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;--&gt; cpuset of process %d after singlify is %s\n&quot;, myid, str);
</span><br>
<span class="quotelev1">&gt;    free(str);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_free(cpuset);
</span><br>
<span class="quotelev1">&gt;    hwloc_topology_destroy(topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>In reply to:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Reply:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
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
