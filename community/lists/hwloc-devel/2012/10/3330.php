<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 17:15:00 2012" -->
<!-- isoreceived="20121011211500" -->
<!-- sent="Thu, 11 Oct 2012 23:14:52 +0200" -->
<!-- isosent="20121011211452" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="507736CC.2030206_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAN=597SCp2BEG2yTX5kqB_9uDC3vZLCyQsyvmeSo52NmyGsdPg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-10-11 17:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3331.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4890)"</a>
<li><strong>Previous message:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3333.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3333.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I would rather do something like below, to make sure we only
<br>
modify the cpuset while discovering things.
<br>
The code builds fine on FreeBSD9 and seems to work, but my testing of
<br>
changing cpuset doesn't seem to work very well so I'd like a bit more
<br>
testing.
<br>
<p>Brice
<br>
<p><p><p><p>Index: src/topology-freebsd.c
<br>
===================================================================
<br>
--- src/topology-freebsd.c	(r&#233;vision 4893)
<br>
+++ src/topology-freebsd.c	(copie de travail)
<br>
@@ -178,14 +178,21 @@
<br>
&nbsp;hwloc_look_freebsd(struct hwloc_topology *topology)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;unsigned nbprocs = hwloc_fallback_nbprocessors(topology);
<br>
+  cpusetid_t setid;
<br>
&nbsp;
<br>
&nbsp;#ifdef HAVE__SC_LARGE_PAGESIZE
<br>
&nbsp;&nbsp;&nbsp;topology-&gt;levels[0][0]-&gt;attr-&gt;machine.huge_page_size_kB = sysconf(_SC_LARGE_PAGESIZE);
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;hwloc_set_freebsd_hooks(topology);
<br>
+
<br>
+  cpuset_getid(CPU_LEVEL_CPUSET, CPU_WHICH_PID, -1, &amp;setid);
<br>
+  cpuset_setid(CPU_WHICH_PID, -1, 0);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;hwloc_look_x86(topology, nbprocs);
<br>
&nbsp;
<br>
+  cpuset_setid(CPU_WHICH_PID, -1, setid);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;hwloc_setup_pu_level(topology, nbprocs);
<br>
&nbsp;
<br>
&nbsp;#ifdef HAVE_SYSCTL
<br>
<p><p><p><p><p>Le 11/10/2012 18:39, Sebastian Kuzminsky a &#233;crit :
<br>
<span class="quotelev1">&gt; This patch (against r4884) fixes the issue on my system.  It moves the
</span><br>
<span class="quotelev1">&gt; lstopo process to cpuset 0, which includes all the CPUs in the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- r4884/hwloc-trunk.svn/tests/ports/topology-freebsd.c      
</span><br>
<span class="quotelev1">&gt;  2012-10-02 16:13:06.000000000 -0600
</span><br>
<span class="quotelev1">&gt; +++ cpuset/hwloc-trunk.svn/tests/ports/topology-freebsd.c      
</span><br>
<span class="quotelev1">&gt; 2012-10-11 10:36:18.326408333 -0600
</span><br>
<span class="quotelev1">&gt; @@ -197,6 +197,7 @@
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt;  hwloc_set_freebsd_hooks(struct hwloc_topology *topology)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; +  cpuset_setid(CPU_WHICH_PID, -1, 0);
</span><br>
<span class="quotelev1">&gt;  #if defined(HAVE_SYS_CPUSET_H) &amp;&amp; defined(HAVE_CPUSET_SETAFFINITY)
</span><br>
<span class="quotelev1">&gt;    topology-&gt;set_thisproc_cpubind = hwloc_freebsd_set_thisproc_cpubind;
</span><br>
<span class="quotelev1">&gt;    topology-&gt;get_thisproc_cpubind = hwloc_freebsd_get_thisproc_cpubind;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3331.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4890)"</a>
<li><strong>Previous message:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3333.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3333.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
