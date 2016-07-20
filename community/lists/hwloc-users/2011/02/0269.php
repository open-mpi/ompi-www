<?
$subject_val = "[hwloc-users] Problem getting cpuset of MPI task";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 10:53:36 2011" -->
<!-- isoreceived="20110209155336" -->
<!-- sent="Wed, 09 Feb 2011 16:53:24 +0100" -->
<!-- isosent="20110209155324" -->
<!-- name="Hendryk Bockelmann" -->
<!-- email="bockelmann_at_[hidden]" -->
<!-- subject="[hwloc-users] Problem getting cpuset of MPI task" -->
<!-- id="4D52B874.60409_at_dkrz.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Problem getting cpuset of MPI task<br>
<strong>From:</strong> Hendryk Bockelmann (<em>bockelmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 10:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/01/0268.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe reply:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Reply:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe reply:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe reply:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I am new to hwloc there might be a misunderstanding from my side, 
<br>
but I have a problem getting the cpuset of MPI tasks. I just want to run 
<br>
a simple MPI program to see on which cores (or CPUs in case of 
<br>
hyperthreading or SMT) the tasks run, so that I can arrange my MPI 
<br>
communicators.
<br>
<p>For the program below I get the following output:
<br>
<p>Process 0 of 2 on tide
<br>
Process 1 of 2 on tide
<br>
--&gt; cpuset of process 0 is 0x0000000f
<br>
--&gt; cpuset of process 0 after singlify is 0x00000001
<br>
--&gt; cpuset of process 1 is 0x0000000f
<br>
--&gt; cpuset of process 1 after singlify is 0x00000001
<br>
<p>So why do both MPI tasks report the same cpuset?
<br>
Here is the program (attached you find the output of 
<br>
hwloc-gather-topology.sh):
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &quot;hwloc.h&quot;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char* argv[]) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_t topology;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_t cpuset;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *str = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myid, numprocs, namelen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char procname[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(procname,&amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d of %d on %s\n&quot;, myid, numprocs, procname);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_init(&amp;topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_load(topology);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* get native cpuset of this process */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpuset = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_cpubind(topology, cpuset, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;str, cpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;--&gt; cpuset of process %d is %s\n&quot;, myid, str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_singlify(cpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;str, cpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;--&gt; cpuset of process %d after singlify is %s\n&quot;, myid, str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(str);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_free(cpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_destroy(topology);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>

<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0269/tide.output">tide.output</a>
</ul>
<!-- attachment="tide.output" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0269/tide.tar.bz2">tide.tar.bz2</a>
</ul>
<!-- attachment="tide.tar.bz2" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0269/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/01/0268.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe reply:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Reply:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe reply:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe reply:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
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
