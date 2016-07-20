<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 19:38:51 2012" -->
<!-- isoreceived="20121120003851" -->
<!-- sent="Mon, 19 Nov 2012 16:38:46 -0800 (PST)" -->
<!-- isosent="20121120003846" -->
<!-- name="Andrew Somorjai" -->
<!-- email="verthex2099_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="1353371926.39906.YahooMailNeo_at_web161804.mail.bf1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[hwloc-users] Windows api threading functions equivalent to hwloc?" -->
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
<strong>From:</strong> Andrew Somorjai (<em>verthex2099_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 19:38:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0769.php">Andrew Somorjai: "[hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;CreateThread() and WaitForMultipleObjects() are not in hwloc since they have nothing to do with topologies.&quot;
<br>
<p><p>I thought hwloc was also for threading?
<br>
<p><p>&quot;DWORD_PTR m_id = 0;
<br>
DWORD_PTR m_mask = 1 &lt;&lt; i;
<br>
<p>m_threads[i] = CreateThread(NULL, 0, (LPTHREAD_START_ROUTINE)threadMain, (LPVOID)i, NULL, &amp;m_id);
<br>
SetThreadAffinityMask(m_threads[i], m_mask);
<br>
<p>This will likely be something such as:
<br>
<p>hwloc_bitmap_t bitmap = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_set_only(bitmap, i);
<br>
hwloc_set_thread_cpubind(topology, m_threads[i], bitmap, 0);
<br>
hwloc_bitmap_free(bitmap);&quot;
<br>
<p>How would I pass a function like threadMain in the above CreateThread function into the thread itself. Someone told me
<br>
<p>to use this library for this purpose so I wasn't sure what it was made for. 
<br>
<p>How would I create an array m_threads and pass it
<br>
into hwloc_set_thread_cpubind. I would still need this part then correct?
<br>
<p>m_threads[i] = CreateThread(NULL, 0, (LPTHREAD_START_ROUTINE)threadMain, (LPVOID)i, NULL, &amp;m_id); 
<br>
<p>I would like to be independent of windows.h   by the way, not using windows api calls is the motivation for all of this.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0771.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0769.php">Andrew Somorjai: "[hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
