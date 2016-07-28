<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 13 14:12:49 2012" -->
<!-- isoreceived="20121013181249" -->
<!-- sent="Sat, 13 Oct 2012 20:12:43 +0200" -->
<!-- isosent="20121013181243" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="5079AF1B.3020408_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="507736CC.2030206_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-13 14:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3334.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4895)"</a>
<li><strong>Previous message:</strong> <a href="3332.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc2r4894)"</a>
<li><strong>In reply to:</strong> <a href="3330.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3335.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3335.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I committed (a better version of) this to trunk today. hwloc v1.6 should
<br>
work fine in your case. I didn't backport into v1.5.1 because I can't be
<br>
100% confident that I am not breaking some cases here. We'll see.
<br>
<p>Brice
<br>
<p><p><p>Le 11/10/2012 23:14, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; I think I would rather do something like below, to make sure we only
</span><br>
<span class="quotelev1">&gt; modify the cpuset while discovering things.
</span><br>
<span class="quotelev1">&gt; The code builds fine on FreeBSD9 and seems to work, but my testing of
</span><br>
<span class="quotelev1">&gt; changing cpuset doesn't seem to work very well so I'd like a bit more
</span><br>
<span class="quotelev1">&gt; testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: src/topology-freebsd.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- src/topology-freebsd.c	(r&#233;vision 4893)
</span><br>
<span class="quotelev1">&gt; +++ src/topology-freebsd.c	(copie de travail)
</span><br>
<span class="quotelev1">&gt; @@ -178,14 +178,21 @@
</span><br>
<span class="quotelev1">&gt;  hwloc_look_freebsd(struct hwloc_topology *topology)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    unsigned nbprocs = hwloc_fallback_nbprocessors(topology);
</span><br>
<span class="quotelev1">&gt; +  cpusetid_t setid;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE__SC_LARGE_PAGESIZE
</span><br>
<span class="quotelev1">&gt;    topology-&gt;levels[0][0]-&gt;attr-&gt;machine.huge_page_size_kB = sysconf(_SC_LARGE_PAGESIZE);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    hwloc_set_freebsd_hooks(topology);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  cpuset_getid(CPU_LEVEL_CPUSET, CPU_WHICH_PID, -1, &amp;setid);
</span><br>
<span class="quotelev1">&gt; +  cpuset_setid(CPU_WHICH_PID, -1, 0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    hwloc_look_x86(topology, nbprocs);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +  cpuset_setid(CPU_WHICH_PID, -1, setid);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    hwloc_setup_pu_level(topology, nbprocs);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_SYSCTL
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
<span class="quotelev1">&gt; Le 11/10/2012 18:39, Sebastian Kuzminsky a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; This patch (against r4884) fixes the issue on my system.  It moves the
</span><br>
<span class="quotelev2">&gt;&gt; lstopo process to cpuset 0, which includes all the CPUs in the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- r4884/hwloc-trunk.svn/tests/ports/topology-freebsd.c      
</span><br>
<span class="quotelev2">&gt;&gt;  2012-10-02 16:13:06.000000000 -0600
</span><br>
<span class="quotelev2">&gt;&gt; +++ cpuset/hwloc-trunk.svn/tests/ports/topology-freebsd.c      
</span><br>
<span class="quotelev2">&gt;&gt; 2012-10-11 10:36:18.326408333 -0600
</span><br>
<span class="quotelev2">&gt;&gt; @@ -197,6 +197,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  void
</span><br>
<span class="quotelev2">&gt;&gt;  hwloc_set_freebsd_hooks(struct hwloc_topology *topology)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; +  cpuset_setid(CPU_WHICH_PID, -1, 0);
</span><br>
<span class="quotelev2">&gt;&gt;  #if defined(HAVE_SYS_CPUSET_H) &amp;&amp; defined(HAVE_CPUSET_SETAFFINITY)
</span><br>
<span class="quotelev2">&gt;&gt;    topology-&gt;set_thisproc_cpubind = hwloc_freebsd_set_thisproc_cpubind;
</span><br>
<span class="quotelev2">&gt;&gt;    topology-&gt;get_thisproc_cpubind = hwloc_freebsd_get_thisproc_cpubind;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3334.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4895)"</a>
<li><strong>Previous message:</strong> <a href="3332.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc2r4894)"</a>
<li><strong>In reply to:</strong> <a href="3330.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3335.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3335.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
