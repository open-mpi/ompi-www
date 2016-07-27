<?
$subject_val = "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 03:13:07 2012" -->
<!-- isoreceived="20120619071307" -->
<!-- sent="Tue, 19 Jun 2012 03:13:02 -0400" -->
<!-- isosent="20120619071302" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion" -->
<!-- id="CAHwLALOwi8xD9-neOsnYRpoNEyauB1wg2UZFrd+hCfmicYZY0w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FE02258.4090509_at_inria.fr" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 03:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3127.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4544)"</a>
<li><strong>Previous message:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>In reply to:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brice, it's exactly what I need.
<br>
<p>I checked the docs, linux-libnuma.h, and linux.h earlier but I could
<br>
not find what I needed, as it did not mention cpuset or cgroups :-)
<br>
<p>However, the hwloc_bitmap_list_snprintf() function you pointed me to
<br>
is exactly the format used by cpuset cgroups (and the older Linux
<br>
cpuset), and now I can finally get some sleep (it's 3am here!!).
<br>
<p>Thanks again!
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Tue, Jun 19, 2012 at 2:55 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't this what hwloc_bitmap_list_sscanf/snprintf/asprintf do ? (added
</span><br>
<span class="quotelev1">&gt; in 1.2.0)
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
<span class="quotelev1">&gt; Le 19/06/2012 08:32, Rayson Ho a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; hwloc already has code (linux-libnuma.h) for hwloc_cpuset_t to libnuma
</span><br>
<span class="quotelev2">&gt;&gt; data type conversion. Does it make sense to add functions to convert
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_cpuset_t types to the cpuset string format used by Linux's
</span><br>
<span class="quotelev2">&gt;&gt; cgroups?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The cpuset format used by cgroups is not difficult to handle (in fact,
</span><br>
<span class="quotelev2">&gt;&gt; the user interface is same as/very similar to the older cpuset
</span><br>
<span class="quotelev2">&gt;&gt; implementation). Eg. create a cpuset that includes CPU 2 &amp; 3 for
</span><br>
<span class="quotelev2">&gt;&gt; OGS/Grid Engine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # echo 2-3 &gt; /sys/fs/cgroup/cpuset/gridengine/cpuset.cpus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ref: <a href="http://www.kernel.org/doc/Documentation/cgroups/cpusets.txt">http://www.kernel.org/doc/Documentation/cgroups/cpusets.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are pinging the list because we use hwloc for topology binding, and
</span><br>
<span class="quotelev2">&gt;&gt; we also added cgroups support (for a lot of things) in OGS/Grid
</span><br>
<span class="quotelev2">&gt;&gt; Engine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html">http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are planning to integrate hwloc &amp; cgroups (and skip libnuma)... And
</span><br>
<span class="quotelev2">&gt;&gt; we want to choose which method we use at runtime. While hwloc can be
</span><br>
<span class="quotelev2">&gt;&gt; used by non-root applications, the applications can modify the
</span><br>
<span class="quotelev2">&gt;&gt; affinity mask themselves and thus they can escape from the &quot;cpuset&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (as least with the current hwloc implementation that uses
</span><br>
<span class="quotelev2">&gt;&gt; sched_setaffinity). The cgroups cpuset support is only available to
</span><br>
<span class="quotelev2">&gt;&gt; root, but once binded, batch jobs running as non-root could not escape
</span><br>
<span class="quotelev2">&gt;&gt; from the cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3127.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4544)"</a>
<li><strong>Previous message:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>In reply to:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
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
