<?
$subject_val = "Re: [hwloc-devel] hwloc on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 05:35:59 2010" -->
<!-- isoreceived="20100712093559" -->
<!-- sent="Mon, 12 Jul 2010 11:35:50 +0200" -->
<!-- isosent="20100712093550" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on PPC64" -->
<!-- id="201007121135.50901.jhladky_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C3AA8BF.1080002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on PPC64<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 05:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><p><span class="quotelev1">&gt; Le 12/07/2010 00:08, Jirka Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; $./lstopo --xml /tmp/2010-Jul-10_22h14m_results/2.6.32-44.el6.ppc64_OS-
</span><br>
<span class="quotelev2">&gt; &gt; indexing.xml a.txt
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was a crash in a drawing code (in the merge() function) that Samuel
</span><br>
<span class="quotelev1">&gt; fixed in trunk r2234 (and backported in 1.0.x). The log doesn't speak
</span><br>
<span class="quotelev1">&gt; about a crash, looks like we were lucky... gdb log says:
</span><br>
<p>Great, thanks!
<br>
<p><p><span class="quotelev2">&gt; &gt; Please notice that hwloc-distrib is
</span><br>
<span class="quotelev2">&gt; &gt; also not working correctly - check CPU_AFFINITY/0008.log for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that one of the NUMA nodes has an empty cpuset (it could
</span><br>
<span class="quotelev1">&gt; be a BIOS bug by the way). hwloc-distrib should probably ignore such
</span><br>
<span class="quotelev1">&gt; object and not distribute among them.
</span><br>
Oh, you are right! I didn't notice it!
<br>
<p>It seems to be indeed BIOS bug. numactl shows the same information.
<br>
<p>Luckily,
<br>
[root_at_ibm-js22-vios-02-lp2 hwloc-1.0.1]# lstopo --ignore numanode a.xml
<br>
[root_at_ibm-js22-vios-02-lp2 hwloc-1.0.1]# hwloc-distrib --xml a.xml --single 4
<br>
can be used to WA the issue. 
<br>
<p>I'm looking forward to have --ignore switch available in hwloc-distrib  once 
<br>
hwloc 1.1 is released.
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1153.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
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
