<?
$subject_val = "[hwloc-users] hwloc_get_last_cpu_location on AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 08:33:46 2012" -->
<!-- isoreceived="20120508123346" -->
<!-- sent="Tue, 08 May 2012 14:33:35 +0200" -->
<!-- isosent="20120508123335" -->
<!-- name="Hendryk Bockelmann" -->
<!-- email="bockelmann_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc_get_last_cpu_location on AIX" -->
<!-- id="4FA9129F.4020509_at_dkrz.de" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc_get_last_cpu_location on AIX<br>
<strong>From:</strong> Hendryk Bockelmann (<em>bockelmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 08:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Christopher Samuel: "Re: [hwloc-users] Blue Gene/Q support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Reply:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just ran into trouble using hwloc_get_last_cpu_location on our POWER6 
<br>
cluster with AIX6.1
<br>
My plan is to find out if the binding of the job-scheduler was correct 
<br>
for MPI-tasks and OpenMP-threads. This is what I want to use:
<br>
<p>support = hwloc_topology_get_support(topology);
<br>
ret = hwloc_get_cpubind(topology, set, HWLOC_CPUBIND_THREAD);
<br>
if (support-&gt;cpubind-&gt;get_thisthread_cpubind) {
<br>
&nbsp;&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;str, set);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;--&gt; cpuset (thread %d) is %s \n&quot;,omp_get_thread_num(),str);
<br>
}
<br>
if (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) {
<br>
&nbsp;&nbsp;&nbsp;ret = hwloc_set_cpubind(topology, set, HWLOC_CPUBIND_THREAD);
<br>
&nbsp;&nbsp;&nbsp;last = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;ret = hwloc_get_last_cpu_location(topology,last,HWLOC_CPUBIND_THREAD);
<br>
&nbsp;&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;str, last);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;--&gt; cpu_loca (thread %d) is %s \n&quot;,omp_get_thread_num(),str);
<br>
}
<br>
<p>this is what I found in src/tests/hwloc_get_last_cpu_location.c
<br>
<p>Running this on my local linux machine gives e.g.:
<br>
<p>--&gt; cpuset (thread 1) is 0x00000005
<br>
--&gt; cpuset (thread 0) is 0x00000005
<br>
--&gt; cpu_loca (thread 0) is 0x00000004
<br>
--&gt; cpu_loca (thread 1) is 0x00000001
<br>
<p>hence, (support-&gt;cpubind-&gt;get_thisthread_cpubind) and 
<br>
(support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) are both true
<br>
<p>but on the AIX cluster I just get:
<br>
<p>--&gt; cpuset (thread 0) is 0x00000003
<br>
--&gt; cpuset (thread 1) is 0x00000003
<br>
<p>hence, (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) is false.
<br>
Now the question is whether this is related to my install of hwloc-1.4.1 
<br>
or a general problem on AIX?
<br>
Furthermore, I would like to know if there is any other change to use 
<br>
hwloc to check correct task/thread binding?
<br>
<p>Best,
<br>
Hendryk
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0627/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Christopher Samuel: "Re: [hwloc-users] Blue Gene/Q support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Reply:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
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
