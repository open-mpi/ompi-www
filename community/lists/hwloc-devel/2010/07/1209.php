<?
$subject_val = "Re: [hwloc-devel] Cpuset problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 12:53:41 2010" -->
<!-- isoreceived="20100722165341" -->
<!-- sent="Thu, 22 Jul 2010 18:50:26 +0200" -->
<!-- isosent="20100722165026" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cpuset problem" -->
<!-- id="4C4876D2.7000501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C483F5B.2080802_at_sgi.com" -->
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
<strong>Date:</strong> 2010-07-22 12:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1208.php">Michael Raymond: "[hwloc-devel] Cpuset problem"</a>
<li><strong>In reply to:</strong> <a href="1208.php">Michael Raymond: "[hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/07/2010 14:53, Michael Raymond a &#233;crit :
<br>
<span class="quotelev1">&gt;   I was doing some testing on what's in SVN and I found that the
</span><br>
<span class="quotelev1">&gt; topology discovery code has a problem when running within a cpuset.  On
</span><br>
<span class="quotelev1">&gt; my 2.6.32 SLES11SP1 box the code calls hwloc_read_linux_cpuset_mask()
</span><br>
<span class="quotelev1">&gt; with a cgroup mount point and tries to read
</span><br>
<span class="quotelev1">&gt; /dev/cpuset/&lt;blah&gt;/cpuset.[cpus|mems].  Those files don't exist but
</span><br>
<span class="quotelev1">&gt; &lt;blah&gt;/[cpus|mems] do.  If I change the code to use those files instead
</span><br>
<span class="quotelev1">&gt; then everything else works.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Hello Michael,
<br>
This probably means that we found a cgroup mount point in /dev/cpuset
<br>
while its actually a cpuset mount point. What does your /proc/mounts
<br>
contain? Can you try to understand why hwloc_find_linux_cpuset_mntpnt
<br>
would find a wrong mount type?
<br>
thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1208.php">Michael Raymond: "[hwloc-devel] Cpuset problem"</a>
<li><strong>In reply to:</strong> <a href="1208.php">Michael Raymond: "[hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
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
