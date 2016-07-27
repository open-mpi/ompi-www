<?
$subject_val = "Re: [hwloc-devel] Cpuset problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 13:48:12 2010" -->
<!-- isoreceived="20100722174812" -->
<!-- sent="Thu, 22 Jul 2010 19:44:58 +0200" -->
<!-- isosent="20100722174458" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cpuset problem" -->
<!-- id="4C48839A.1070204_at_inria.fr" -->
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
<strong>Date:</strong> 2010-07-22 13:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1212.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/07/2010 19:30, Michael Raymond a &#233;crit :
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
<p>Ok, I see. Recent kernels directly mount &quot;cpuset&quot; as &quot;cgroup&quot; but they
<br>
add the &quot;noprefix&quot; mount option to maintain backward compatibility with
<br>
the old /dev/cpuset/ filenames. We need to either check whether noprefix
<br>
is given in the mount options, or directly look for cpus/mems if
<br>
cpuset.cpus/cpuset.mems do not exist. I'll fix this when after some testing.
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1212.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Michael Raymond: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
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
