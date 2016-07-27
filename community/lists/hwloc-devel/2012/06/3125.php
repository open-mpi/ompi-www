<?
$subject_val = "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 02:55:26 2012" -->
<!-- isoreceived="20120619065526" -->
<!-- sent="Tue, 19 Jun 2012 08:55:20 +0200" -->
<!-- isosent="20120619065520" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion" -->
<!-- id="4FE02258.4090509_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALMfQ-fekAjhsU6+VdcdKGPRDoWYo3RrhH811cNXtUBaJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 02:55:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3126.php">Rayson Ho: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Previous message:</strong> <a href="3124.php">Rayson Ho: "[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>In reply to:</strong> <a href="3124.php">Rayson Ho: "[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3126.php">Rayson Ho: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Reply:</strong> <a href="3126.php">Rayson Ho: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Isn't this what hwloc_bitmap_list_sscanf/snprintf/asprintf do ? (added
<br>
in 1.2.0)
<br>
<p>Brice
<br>
<p><p><p>Le 19/06/2012 08:32, Rayson Ho a &#233;crit :
<br>
<span class="quotelev1">&gt; hwloc already has code (linux-libnuma.h) for hwloc_cpuset_t to libnuma
</span><br>
<span class="quotelev1">&gt; data type conversion. Does it make sense to add functions to convert
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t types to the cpuset string format used by Linux's
</span><br>
<span class="quotelev1">&gt; cgroups?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cpuset format used by cgroups is not difficult to handle (in fact,
</span><br>
<span class="quotelev1">&gt; the user interface is same as/very similar to the older cpuset
</span><br>
<span class="quotelev1">&gt; implementation). Eg. create a cpuset that includes CPU 2 &amp; 3 for
</span><br>
<span class="quotelev1">&gt; OGS/Grid Engine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # echo 2-3 &gt; /sys/fs/cgroup/cpuset/gridengine/cpuset.cpus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ref: <a href="http://www.kernel.org/doc/Documentation/cgroups/cpusets.txt">http://www.kernel.org/doc/Documentation/cgroups/cpusets.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are pinging the list because we use hwloc for topology binding, and
</span><br>
<span class="quotelev1">&gt; we also added cgroups support (for a lot of things) in OGS/Grid
</span><br>
<span class="quotelev1">&gt; Engine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html">http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are planning to integrate hwloc &amp; cgroups (and skip libnuma)... And
</span><br>
<span class="quotelev1">&gt; we want to choose which method we use at runtime. While hwloc can be
</span><br>
<span class="quotelev1">&gt; used by non-root applications, the applications can modify the
</span><br>
<span class="quotelev1">&gt; affinity mask themselves and thus they can escape from the &quot;cpuset&quot;
</span><br>
<span class="quotelev1">&gt; (as least with the current hwloc implementation that uses
</span><br>
<span class="quotelev1">&gt; sched_setaffinity). The cgroups cpuset support is only available to
</span><br>
<span class="quotelev1">&gt; root, but once binded, batch jobs running as non-root could not escape
</span><br>
<span class="quotelev1">&gt; from the cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<li><strong>Next message:</strong> <a href="3126.php">Rayson Ho: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Previous message:</strong> <a href="3124.php">Rayson Ho: "[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>In reply to:</strong> <a href="3124.php">Rayson Ho: "[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3126.php">Rayson Ho: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Reply:</strong> <a href="3126.php">Rayson Ho: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
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
