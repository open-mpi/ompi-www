<?
$subject_val = "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 08:41:46 2012" -->
<!-- isoreceived="20120508124146" -->
<!-- sent="Tue, 08 May 2012 14:41:33 +0200" -->
<!-- isosent="20120508124133" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_get_last_cpu_location on AIX" -->
<!-- id="4FA9147D.40205_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FA9129F.4020509_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc_get_last_cpu_location on AIX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 08:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0629.php">Jeff Squyres: "[hwloc-users] #tgfh (thank God for hwloc)"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Hendryk Bockelmann: "[hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Hendryk Bockelmann: "[hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Reply:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/05/2012 14:33, Hendryk Bockelmann a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just ran into trouble using hwloc_get_last_cpu_location on our
</span><br>
<span class="quotelev1">&gt; POWER6 cluster with AIX6.1
</span><br>
<span class="quotelev1">&gt; My plan is to find out if the binding of the job-scheduler was correct
</span><br>
<span class="quotelev1">&gt; for MPI-tasks and OpenMP-threads. This is what I want to use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; support = hwloc_topology_get_support(topology);
</span><br>
<span class="quotelev1">&gt; ret = hwloc_get_cpubind(topology, set, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; if (support-&gt;cpubind-&gt;get_thisthread_cpubind) {
</span><br>
<span class="quotelev1">&gt;   hwloc_bitmap_asprintf(&amp;str, set);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;--&gt; cpuset (thread %d) is %s \n&quot;,omp_get_thread_num(),str);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; if (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) {
</span><br>
<span class="quotelev1">&gt;   ret = hwloc_set_cpubind(topology, set, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;   last = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;   ret = hwloc_get_last_cpu_location(topology,last,HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;   hwloc_bitmap_asprintf(&amp;str, last);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;--&gt; cpu_loca (thread %d) is %s \n&quot;,omp_get_thread_num(),str);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is what I found in src/tests/hwloc_get_last_cpu_location.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running this on my local linux machine gives e.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset (thread 1) is 0x00000005
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset (thread 0) is 0x00000005
</span><br>
<span class="quotelev1">&gt; --&gt; cpu_loca (thread 0) is 0x00000004
</span><br>
<span class="quotelev1">&gt; --&gt; cpu_loca (thread 1) is 0x00000001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hence, (support-&gt;cpubind-&gt;get_thisthread_cpubind) and
</span><br>
<span class="quotelev1">&gt; (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) are both true
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but on the AIX cluster I just get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset (thread 0) is 0x00000003
</span><br>
<span class="quotelev1">&gt; --&gt; cpuset (thread 1) is 0x00000003
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hence, (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) is false.
</span><br>
<span class="quotelev1">&gt; Now the question is whether this is related to my install of
</span><br>
<span class="quotelev1">&gt; hwloc-1.4.1 or a general problem on AIX?
</span><br>
<p>Hello,
<br>
get_last_cpu_location is currently not implemented on AIX. There's a
<br>
TODO in the code saying that we should use AIX &quot;mycpu&quot;. The main problem
<br>
with hwloc on AIX is that none of us has access to a AIX machine anymore.
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0629.php">Jeff Squyres: "[hwloc-users] #tgfh (thank God for hwloc)"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Hendryk Bockelmann: "[hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Hendryk Bockelmann: "[hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Reply:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
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
