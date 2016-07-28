<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 15:08:49 2012" -->
<!-- isoreceived="20121119200849" -->
<!-- sent="Mon, 19 Nov 2012 21:08:43 +0100" -->
<!-- isosent="20121119200843" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="50AA91CB.50500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1353355274.99835.YahooMailNeo_at_web161805.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Windows api threading functions equivalent to hwloc?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 15:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0769.php">Andrew Somorjai: "[hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0769.php">Andrew Somorjai: "[hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 19/11/2012 21:01, Andrew Somorjai a &#233;crit :
<br>
<span class="quotelev1">&gt; Below I posted a simple windows thread creation C++ routine which sets
</span><br>
<span class="quotelev1">&gt; the processor affinity to two cores.
</span><br>
<span class="quotelev1">&gt; What I want is the equivalent code using hwloc. Sorry for being
</span><br>
<span class="quotelev1">&gt; somewhat new to this but I'm not sure what 
</span><br>
<span class="quotelev1">&gt; api calls are equivalent to the windows calls and I did search hwloc.h
</span><br>
<span class="quotelev1">&gt; for &quot;affinity&quot; thinking the function call
</span><br>
<span class="quotelev1">&gt; would be easy to find. More specifically I'm wondered whats the
</span><br>
<span class="quotelev1">&gt; equivalent of &quot; CreateThread &quot;, &quot; SetThreadAffinityMask &quot;, 
</span><br>
<span class="quotelev1">&gt; &quot; GetSystemInfo &quot;, and &quot; WaitForMultipleObjects &quot; in hwloc.
</span><br>
<p>CreateThread() and WaitForMultipleObjects() are not in hwloc since they
<br>
have nothing to do with topologies.
<br>
<p><span class="quotelev1">&gt; DWORD_PTR m_id = 0;
</span><br>
<span class="quotelev1">&gt; DWORD_PTR m_mask = 1 &lt;&lt; i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m_threads[i] = CreateThread(NULL, 0,
</span><br>
<span class="quotelev1">&gt; (LPTHREAD_START_ROUTINE)threadMain, (LPVOID)i, NULL, &amp;m_id);
</span><br>
<span class="quotelev1">&gt; SetThreadAffinityMask(m_threads[i], m_mask);
</span><br>
<p>This will likely be something such as:
<br>
<p>hwloc_bitmap_t bitmap = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_set_only(bitmap, i);
<br>
hwloc_set_thread_cpubind(topology, m_threads[i], bitmap, 0);
<br>
hwloc_bitmap_free(bitmap);
<br>
<p><p>To get the number of processors with hwloc, use something like:
<br>
&nbsp;&nbsp;hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_CORE);
<br>
or
<br>
&nbsp;&nbsp;hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_PU);
<br>
Then it depends if you want real cores (the former or hardware threads
<br>
(the latter).
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0770/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0769.php">Andrew Somorjai: "[hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0769.php">Andrew Somorjai: "[hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
