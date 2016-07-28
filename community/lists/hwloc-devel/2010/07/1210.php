<?
$subject_val = "Re: [hwloc-devel] Cpuset problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 13:30:59 2010" -->
<!-- isoreceived="20100722173059" -->
<!-- sent="Thu, 22 Jul 2010 12:30:54 -0500" -->
<!-- isosent="20100722173054" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cpuset problem" -->
<!-- id="4C48804E.9070208_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C4876D2.7000501_at_inria.fr" -->
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
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 13:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>In reply to:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1211.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1211.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
/proc/mounts:
<br>
cpuset /dev/cpuset cgroup
<br>
rw,relatime,cpuset,noprefix,release_agent=/sbin/cpuset_release_agent 0 0
<br>
<p>&nbsp;&nbsp;The third element there is &quot;cgroup&quot; which the code specifically looks
<br>
for in hwloc_find_linux_cpuset_mntpnt().
<br>
<p>/etc/fstab
<br>
..
<br>
cpuset               /dev/cpuset          cpuset     defaults
<br>
&nbsp;&nbsp;&nbsp;0 0
<br>
..
<br>
<p><p><p>Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 22/07/2010 14:53, Michael Raymond a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;   I was doing some testing on what's in SVN and I found that the
</span><br>
<span class="quotelev2">&gt;&gt; topology discovery code has a problem when running within a cpuset.  On
</span><br>
<span class="quotelev2">&gt;&gt; my 2.6.32 SLES11SP1 box the code calls hwloc_read_linux_cpuset_mask()
</span><br>
<span class="quotelev2">&gt;&gt; with a cgroup mount point and tries to read
</span><br>
<span class="quotelev2">&gt;&gt; /dev/cpuset/&lt;blah&gt;/cpuset.[cpus|mems].  Those files don't exist but
</span><br>
<span class="quotelev2">&gt;&gt; &lt;blah&gt;/[cpus|mems] do.  If I change the code to use those files instead
</span><br>
<span class="quotelev2">&gt;&gt; then everything else works.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Michael,
</span><br>
<span class="quotelev1">&gt; This probably means that we found a cgroup mount point in /dev/cpuset
</span><br>
<span class="quotelev1">&gt; while its actually a cpuset mount point. What does your /proc/mounts
</span><br>
<span class="quotelev1">&gt; contain? Can you try to understand why hwloc_find_linux_cpuset_mntpnt
</span><br>
<span class="quotelev1">&gt; would find a wrong mount type?
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p><pre>
-- 
Michael A. Raymond
Message Passing Toolkit Team
Silicon Graphics Inc
(651) 683-3434
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>In reply to:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1211.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1211.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
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
