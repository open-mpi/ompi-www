<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 20:00:42 2010" -->
<!-- isoreceived="20101111010042" -->
<!-- sent="Thu, 11 Nov 2010 02:00:31 +0100" -->
<!-- isosent="20101111010031" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="201011110200.32255.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CDAC805.6000204_at_inria.fr" -->
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
<strong>Date:</strong> 2010-11-10 20:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday, November 10, 2010 05:27:49 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 10/11/2010 15:02, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2) hwloc-bind --get --membind is not working for me (RHEL 6.0)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ hwloc-bind --membind node:1 --mempolicy interleave -- hwloc-bind
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --get -- membind
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You get the same error when running only &quot;hwloc-bind --get --membind&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; right?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes:
</span><br>
<span class="quotelev2">&gt; &gt; $ hwloc-bind --get --membind
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am not sure about this one. Do you have NUMA support in your kernel?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is your machine NUMA? Can you send the gather-topology tarball ? (if we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; don't have it already :))
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, it's a NUMA box with NUMA support in kernel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, I can't reproduce. I tried with your tarball, with a
</span><br>
<span class="quotelev1">&gt; Redhat 5 machine, with a similar Nehalem-based machine running Debian.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try to debug this? I'd like to know if EINVAL is returned by the
</span><br>
<span class="quotelev1">&gt; kernel or by hwloc. You'd have to open src/topology-linux.c, go in
</span><br>
<span class="quotelev1">&gt; function hwloc_linux_get_thisthread_membind() and add some printf there
</span><br>
<span class="quotelev1">&gt; to check where EINVAL comes from.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Hi Brice,
<br>
<p>I have added some printf and perror. EINVAL is coming from get_mempolicy call:
<br>
<p>==============================================================
<br>
&nbsp;&nbsp;/* compute max_os_index */
<br>
&nbsp;&nbsp;complete_nodeset = hwloc_topology_get_complete_nodeset(topology);
<br>
&nbsp;&nbsp;if (complete_nodeset) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_os_index = hwloc_bitmap_last(complete_nodeset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;max_os_index %u\n&quot;,max_os_index);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (max_os_index == (unsigned) -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_os_index = 0;
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;max_os_index = 0;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;max_os_index %u\n&quot;,max_os_index);
<br>
&nbsp;&nbsp;/* round up to the nearest multiple of BITS_PER_LONG */
<br>
&nbsp;&nbsp;max_os_index = (max_os_index + HWLOC_BITS_PER_LONG) &amp; ~(HWLOC_BITS_PER_LONG 
<br>
- 1);
<br>
&nbsp;&nbsp;printf(&quot;max_os_index %u\n&quot;,max_os_index);
<br>
<p>&nbsp;&nbsp;linuxmask = malloc(max_os_index/HWLOC_BITS_PER_LONG * sizeof(long));
<br>
&nbsp;&nbsp;if (!linuxmask) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errno = ENOMEM;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;goto out;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;err = get_mempolicy(&amp;linuxpolicy, linuxmask, max_os_index, 0, 0);
<br>
&nbsp;&nbsp;if (err &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;perror(&quot;get_mempolicy&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;goto out_with_mask;
<br>
&nbsp;&nbsp;}
<br>
==========================================================================
<br>
<p>On system with 2 NUMA nodes:
<br>
$ utils/hwloc-bind --get --membind
<br>
max_os_index 1
<br>
max_os_index 1
<br>
max_os_index 64
<br>
get_mempolicy: Invalid argument
<br>
hwloc_get_membind failed (errno 22 Invalid argument)
<br>
<p><p>I do not see any problem with your code. I don't know what's going on. Is 
<br>
get_mempolicy itself buggy? How can I debug this?
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1462.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
