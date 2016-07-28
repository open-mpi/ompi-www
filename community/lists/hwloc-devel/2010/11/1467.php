<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 05:11:35 2010" -->
<!-- isoreceived="20101111101135" -->
<!-- sent="Thu, 11 Nov 2010 11:11:31 +0100" -->
<!-- isosent="20101111101131" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="4CDBC153.5030407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20101111013158.GB4896_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 05:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1466.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2770)"</a>
<li><strong>In reply to:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/11/2010 02:31, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; get_mempolicy: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try to increase the value of max_os_index?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see in the kernel source code the following in sys_get_mempolicy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	if (nmask != NULL &amp;&amp; maxnode &lt; MAX_NUMNODES)
</span><br>
<span class="quotelev1">&gt; 		return -EINVAL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and MAX_NUMNODES depends on .config ...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>And indeed MAX_NUMNODES is (1&lt;&lt;CONFIG_NODES_SHIFT) and
<br>
CONFIG_NODES_SHIFT=9 on rhel6 kernels. We pass a single ulong to the
<br>
kernel, so it's not large enough to store 1&lt;&lt;9 bits. We couldn't
<br>
reproduce on Debian and RHEL5 since NODE_SHIFT=6 there.
<br>
<p>We had to loop until we found the kernel NR_CPUS for sched_getaffinity,
<br>
we can do the same to find the kernel MAX_NUMNODES for get_mempolicy.
<br>
The attached patch may help. Only slightly tested obviously since I
<br>
don't have any kernel causing the problem.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1467/find_kernel_max_numnodes.patch">find_kernel_max_numnodes.patch</a>
</ul>
<!-- attachment="find_kernel_max_numnodes.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1466.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2770)"</a>
<li><strong>In reply to:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
