<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 07:08:11 2010" -->
<!-- isoreceived="20101111120811" -->
<!-- sent="Thu, 11 Nov 2010 13:08:00 +0100" -->
<!-- isosent="20101111120800" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="201011111308.01183.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4CDBC153.5030407_at_inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 07:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, November 11, 2010 11:11:31 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 11/11/2010 02:31, Samuel Thibault a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; get_mempolicy: Invalid argument
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you try to increase the value of max_os_index?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can see in the kernel source code the following in sys_get_mempolicy:
</span><br>
<span class="quotelev2">&gt; &gt; 	if (nmask != NULL &amp;&amp; maxnode &lt; MAX_NUMNODES)
</span><br>
<span class="quotelev2">&gt; &gt; 	
</span><br>
<span class="quotelev2">&gt; &gt; 		return -EINVAL;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and MAX_NUMNODES depends on .config ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And indeed MAX_NUMNODES is (1&lt;&lt;CONFIG_NODES_SHIFT) and
</span><br>
<span class="quotelev1">&gt; CONFIG_NODES_SHIFT=9 on rhel6 kernels. We pass a single ulong to the
</span><br>
<span class="quotelev1">&gt; kernel, so it's not large enough to store 1&lt;&lt;9 bits. We couldn't
</span><br>
<span class="quotelev1">&gt; reproduce on Debian and RHEL5 since NODE_SHIFT=6 there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had to loop until we found the kernel NR_CPUS for sched_getaffinity,
</span><br>
<span class="quotelev1">&gt; we can do the same to find the kernel MAX_NUMNODES for get_mempolicy.
</span><br>
<span class="quotelev1">&gt; The attached patch may help. Only slightly tested obviously since I
</span><br>
<span class="quotelev1">&gt; don't have any kernel causing the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p><p>Hi Brice,
<br>
<p>thanks for the quick patch. I have tested it and it works! :-)
<br>
<p>$ utils/hwloc-bind --membind node:1 --mempolicy interleave -- utils/hwloc-bind 
<br>
--get --membind
<br>
0x0000aaaa (interleave)
<br>
<p><p>I have couple of questions:
<br>
1) Does the option --get works together with --pid ? Like finding out mempolicy 
<br>
for any pid? I don't think that get_mempolicy supports this. We can perhaps 
<br>
enhance the parsing to raise an error when --pid and --get are both specified.
<br>
<p>2) This might be a dumb question - I have tried --get on my laptop which is 
<br>
running Fedora-12. It's one socket system with NUMA enabled - there is however 
<br>
only node#0. I know that it's nonsense. But still, you can use this to run 
<br>
some tests
<br>
<p>I'm quite puzzled by the following output:
<br>
<p>$utils/hwloc-bind --membind node:0 --mempolicy interleave -- utils/hwloc-bind 
<br>
--get --membind
<br>
0xf...f (interleave)
<br>
<p>What does &quot;0xf...f&quot; mean?
<br>
<p>3) Just a small hint. Fedora 12 is using almost the same kernel as RHEL-6.
<br>
<p>Thanks for looking into this!!!
<br>
<p>Cheers
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
