<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 20:32:07 2010" -->
<!-- isoreceived="20101111013207" -->
<!-- sent="Thu, 11 Nov 2010 02:31:58 +0100" -->
<!-- isosent="20101111013158" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="20101111013158.GB4896_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1920135903.137703.1289437497863.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 20:31:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1465.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2769)"</a>
<li><strong>Previous message:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka Hladky, le Thu 11 Nov 2010 02:04:57 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;   printf(&quot;max_os_index %u\n&quot;,max_os_index);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   linuxmask = malloc(max_os_index/HWLOC_BITS_PER_LONG * sizeof(long));
</span><br>
<span class="quotelev1">&gt;   if (!linuxmask) {
</span><br>
<span class="quotelev1">&gt;     errno = ENOMEM;
</span><br>
<span class="quotelev1">&gt;     goto out;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   err = get_mempolicy(&amp;linuxpolicy, linuxmask, max_os_index, 0, 0);
</span><br>
<span class="quotelev1">&gt;   if (err &lt; 0) {
</span><br>
<span class="quotelev1">&gt;     perror(&quot;get_mempolicy&quot;);
</span><br>
<span class="quotelev1">&gt;     goto out_with_mask;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; ==========================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On system with 2 NUMA nodes:
</span><br>
<span class="quotelev1">&gt; $ utils/hwloc-bind --get --membind
</span><br>
<span class="quotelev1">&gt; max_os_index 1
</span><br>
<span class="quotelev1">&gt; max_os_index 1
</span><br>
<span class="quotelev1">&gt; max_os_index 64
</span><br>
<span class="quotelev1">&gt; get_mempolicy: Invalid argument
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<p>Could you try to increase the value of max_os_index?
<br>
<p>I can see in the kernel source code the following in sys_get_mempolicy:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (nmask != NULL &amp;&amp; maxnode &lt; MAX_NUMNODES)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -EINVAL;
<br>
<p>and MAX_NUMNODES depends on .config ...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1465.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2769)"</a>
<li><strong>Previous message:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1467.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
