<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 07:17:45 2010" -->
<!-- isoreceived="20101111121745" -->
<!-- sent="Thu, 11 Nov 2010 13:17:42 +0100" -->
<!-- isosent="20101111121742" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="4CDBDEE6.1060102_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201011111308.01183.jhladky_at_redhat.com" -->
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
<strong>Date:</strong> 2010-11-11 07:17:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/11/2010 13:08, Jirka Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On Thursday, November 11, 2010 11:11:31 am Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Le 11/11/2010 02:31, Samuel Thibault a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get_mempolicy: Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you try to increase the value of max_os_index?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can see in the kernel source code the following in sys_get_mempolicy:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	if (nmask != NULL &amp;&amp; maxnode &lt; MAX_NUMNODES)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		return -EINVAL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and MAX_NUMNODES depends on .config ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; And indeed MAX_NUMNODES is (1&lt;&lt;CONFIG_NODES_SHIFT) and
</span><br>
<span class="quotelev2">&gt;&gt; CONFIG_NODES_SHIFT=9 on rhel6 kernels. We pass a single ulong to the
</span><br>
<span class="quotelev2">&gt;&gt; kernel, so it's not large enough to store 1&lt;&lt;9 bits. We couldn't
</span><br>
<span class="quotelev2">&gt;&gt; reproduce on Debian and RHEL5 since NODE_SHIFT=6 there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We had to loop until we found the kernel NR_CPUS for sched_getaffinity,
</span><br>
<span class="quotelev2">&gt;&gt; we can do the same to find the kernel MAX_NUMNODES for get_mempolicy.
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch may help. Only slightly tested obviously since I
</span><br>
<span class="quotelev2">&gt;&gt; don't have any kernel causing the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the quick patch. I have tested it and it works! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ utils/hwloc-bind --membind node:1 --mempolicy interleave -- utils/hwloc-bind 
</span><br>
<span class="quotelev1">&gt; --get --membind
</span><br>
<span class="quotelev1">&gt; 0x0000aaaa (interleave)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have couple of questions:
</span><br>
<span class="quotelev1">&gt; 1) Does the option --get works together with --pid ? Like finding out mempolicy 
</span><br>
<span class="quotelev1">&gt; for any pid? I don't think that get_mempolicy supports this.
</span><br>
<p>Right, it's not supported on Linux.
<br>
<p><span class="quotelev1">&gt;  We can perhaps 
</span><br>
<span class="quotelev1">&gt; enhance the parsing to raise an error when --pid and --get are both specified.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It actually depends on the OS. I'll see what I can.
<br>
<p><span class="quotelev1">&gt; 2) This might be a dumb question - I have tried --get on my laptop which is 
</span><br>
<span class="quotelev1">&gt; running Fedora-12. It's one socket system with NUMA enabled - there is however 
</span><br>
<span class="quotelev1">&gt; only node#0. I know that it's nonsense. But still, you can use this to run 
</span><br>
<span class="quotelev1">&gt; some tests
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm quite puzzled by the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $utils/hwloc-bind --membind node:0 --mempolicy interleave -- utils/hwloc-bind 
</span><br>
<span class="quotelev1">&gt; --get --membind
</span><br>
<span class="quotelev1">&gt; 0xf...f (interleave)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does &quot;0xf...f&quot; mean?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>0xf...f is a full set (all bit from 0 to infinity are set). It means
<br>
that the memory binding is set to &quot;near all the memory of the machine&quot;.
<br>
Finding a behavior that works for both NUMA and non-NUMA cases was not
<br>
easy...
<br>
<p><p><span class="quotelev1">&gt; 3) Just a small hint. Fedora 12 is using almost the same kernel as RHEL-6.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Ah good to know, thanks. I am deploying a F12 machine right now to check
<br>
things.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1468.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
