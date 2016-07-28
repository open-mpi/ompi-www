<?
$subject_val = "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 04:28:51 2015" -->
<!-- isoreceived="20151215092851" -->
<!-- sent="Tue, 15 Dec 2015 10:28:21 +0100" -->
<!-- isosent="20151215092821" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated" -->
<!-- id="566FDD35.8030202_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="566FB169.8070208_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 04:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1227.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1231.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1231.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/12/2015 07:21, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 15/12/2015 05:57, Rezaul Karim Raju a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; *OUTPUT: *
</span><br>
<span class="quotelev2">&gt;&gt; *Policy--&gt;* buffer(Array: A) *membind [default OS binding] Policy
</span><br>
<span class="quotelev2">&gt;&gt; is:= 1 [1 refers to *HWLOC_MEMBIND_FIRSTTOUCH
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0</a>&gt;*]*
</span><br>
<span class="quotelev2">&gt;&gt; *Nodeset --&gt; *buffer(Array: A) bound to nodeset*0x000000ff *with
</span><br>
<span class="quotelev2">&gt;&gt; contains*:*
</span><br>
<span class="quotelev2">&gt;&gt; * *node #0 (OS index 0) with 8387047424 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;  node #1 (OS index 1) with 8471617536 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;  node #2 (OS index 2) with 8471621632 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;  node #3 (OS index 3) with 8471617536 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;  node #4 (OS index 4) with 8471621632 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;  node #5 (OS index 5) with 8471617536 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;  node #6 (OS index 6) with 8471621632 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;  node #7 (OS index 7) with 8471564288 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; *why it shows allocated memory is bound to all available nodeset..?
</span><br>
<span class="quotelev2">&gt;&gt; should it not be allocated to a specific nodeset one ..?*
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are confusing the &quot;binding&quot; and the &quot;actual location&quot;. Your memory
</span><br>
<span class="quotelev1">&gt; buffer isn't bound to a specific location by default. But Linux has to
</span><br>
<span class="quotelev1">&gt; allocate it somewhere. So your buffer is &quot;located&quot; in some node after
</span><br>
<span class="quotelev1">&gt; the allocation, but it is not &quot;bound&quot; there (what get_area_membind
</span><br>
<span class="quotelev1">&gt; returns) which means Linux could have allocated it somewhere else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc cannot currently return the &quot;location&quot; of a memory buffer. I
</span><br>
<span class="quotelev1">&gt; have been thinking about adding this feature in the past, but it looks
</span><br>
<span class="quotelev1">&gt; like you are the first actual user requesting this. We could add
</span><br>
<span class="quotelev1">&gt; something like
</span><br>
<span class="quotelev1">&gt; hwloc_get_last_memory_location(topology, input buffer, outputnodeset)
</span><br>
<span class="quotelev1">&gt; At least on Linux that's possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For clarity, this is similar to the difference between
</span><br>
<span class="quotelev1">&gt; hwloc_get_cpubind() and hwloc_get_last_cpu_location(): A task always
</span><br>
<span class="quotelev1">&gt; runs on a specific PU, even if it is not bound to anything specific PU.
</span><br>
<p>By the way, there is already an issue for this:
<br>
<a href="https://github.com/open-mpi/hwloc/issues/97">https://github.com/open-mpi/hwloc/issues/97</a>
<br>
<p>Feel to comment there.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1227.php">Marco Atzeri: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1231.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1231.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
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
