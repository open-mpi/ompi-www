<?
$subject_val = "Re: [hwloc-devel] Cpuset problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 03:24:19 2010" -->
<!-- isoreceived="20100723072419" -->
<!-- sent="Fri, 23 Jul 2010 09:21:07 +0200" -->
<!-- isosent="20100723072107" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cpuset problem" -->
<!-- id="4C4942E3.9020203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C48804E.9070208_at_sgi.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cpuset problem<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 03:21:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1214.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me know if this patch helps. It looks for the the noprefix option
<br>
and marks the mount point as cpuset instead of cgroup if found.
<br>
It also contains a couple cleanups that make the parsing safer.
<br>
<p>Brice
<br>
<p><p><p><p>Le 22/07/2010 19:30, Michael Raymond a &#233;crit :
<br>
<span class="quotelev1">&gt; /proc/mounts:
</span><br>
<span class="quotelev1">&gt; cpuset /dev/cpuset cgroup
</span><br>
<span class="quotelev1">&gt; rw,relatime,cpuset,noprefix,release_agent=/sbin/cpuset_release_agent 0 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The third element there is &quot;cgroup&quot; which the code specifically looks
</span><br>
<span class="quotelev1">&gt; for in hwloc_find_linux_cpuset_mntpnt().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /etc/fstab
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; cpuset               /dev/cpuset          cpuset     defaults
</span><br>
<span class="quotelev1">&gt;    0 0
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Le 22/07/2010 14:53, Michael Raymond a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I was doing some testing on what's in SVN and I found that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology discovery code has a problem when running within a cpuset.  On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my 2.6.32 SLES11SP1 box the code calls hwloc_read_linux_cpuset_mask()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a cgroup mount point and tries to read
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /dev/cpuset/&lt;blah&gt;/cpuset.[cpus|mems].  Those files don't exist but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;blah&gt;/[cpus|mems] do.  If I change the code to use those files instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then everything else works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Hello Michael,
</span><br>
<span class="quotelev2">&gt;&gt; This probably means that we found a cgroup mount point in /dev/cpuset
</span><br>
<span class="quotelev2">&gt;&gt; while its actually a cpuset mount point. What does your /proc/mounts
</span><br>
<span class="quotelev2">&gt;&gt; contain? Can you try to understand why hwloc_find_linux_cpuset_mntpnt
</span><br>
<span class="quotelev2">&gt;&gt; would find a wrong mount type?
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1214.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
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
