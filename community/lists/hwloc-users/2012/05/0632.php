<?
$subject_val = "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 11:06:18 2012" -->
<!-- isoreceived="20120529150618" -->
<!-- sent="Tue, 29 May 2012 17:06:13 +0200" -->
<!-- isosent="20120529150613" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_get_last_cpu_location on AIX" -->
<!-- id="4FC4E5E5.1030504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FA9147D.40205_at_inria.fr" -->
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
<strong>Date:</strong> 2012-05-29 11:06:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0633.php">Youri LACAN-BARTLEY: "[hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
<li><strong>In reply to:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to your help, this should now work in hwloc trunk. A tarball will
<br>
be available tomorrow morning at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/">http://www.open-mpi.org/software/hwloc/nightly/trunk/</a>
<br>
(you need a SVN revision &gt;= 4528)
<br>
<p>I also added instruction cache detection for AIX while I was working on AIX.
<br>
<p>I am now looking at get_last_cpu_location() for entire processes instead
<br>
of individual threads.
<br>
<p>Brice
<br>
<p><p><p>Le 08/05/2012 14:41, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 08/05/2012 14:33, Hendryk Bockelmann a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just ran into trouble using hwloc_get_last_cpu_location on our
</span><br>
<span class="quotelev2">&gt;&gt; POWER6 cluster with AIX6.1
</span><br>
<span class="quotelev2">&gt;&gt; My plan is to find out if the binding of the job-scheduler was correct
</span><br>
<span class="quotelev2">&gt;&gt; for MPI-tasks and OpenMP-threads. This is what I want to use:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; support = hwloc_topology_get_support(topology);
</span><br>
<span class="quotelev2">&gt;&gt; ret = hwloc_get_cpubind(topology, set, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;&gt; if (support-&gt;cpubind-&gt;get_thisthread_cpubind) {
</span><br>
<span class="quotelev2">&gt;&gt;   hwloc_bitmap_asprintf(&amp;str, set);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;--&gt; cpuset (thread %d) is %s \n&quot;,omp_get_thread_num(),str);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; if (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) {
</span><br>
<span class="quotelev2">&gt;&gt;   ret = hwloc_set_cpubind(topology, set, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;&gt;   last = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt;&gt;   ret = hwloc_get_last_cpu_location(topology,last,HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;&gt;   hwloc_bitmap_asprintf(&amp;str, last);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;--&gt; cpu_loca (thread %d) is %s \n&quot;,omp_get_thread_num(),str);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is what I found in src/tests/hwloc_get_last_cpu_location.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running this on my local linux machine gives e.g.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset (thread 1) is 0x00000005
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset (thread 0) is 0x00000005
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpu_loca (thread 0) is 0x00000004
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpu_loca (thread 1) is 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hence, (support-&gt;cpubind-&gt;get_thisthread_cpubind) and
</span><br>
<span class="quotelev2">&gt;&gt; (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) are both true
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but on the AIX cluster I just get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset (thread 0) is 0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; cpuset (thread 1) is 0x00000003
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hence, (support-&gt;cpubind-&gt;get_thisthread_last_cpu_location) is false.
</span><br>
<span class="quotelev2">&gt;&gt; Now the question is whether this is related to my install of
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-1.4.1 or a general problem on AIX?
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; get_last_cpu_location is currently not implemented on AIX. There's a
</span><br>
<span class="quotelev1">&gt; TODO in the code saying that we should use AIX &quot;mycpu&quot;. The main problem
</span><br>
<span class="quotelev1">&gt; with hwloc on AIX is that none of us has access to a AIX machine anymore.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0633.php">Youri LACAN-BARTLEY: "[hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
<li><strong>In reply to:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
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
