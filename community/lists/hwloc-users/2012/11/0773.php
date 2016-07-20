<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 20:10:29 2012" -->
<!-- isoreceived="20121120011029" -->
<!-- sent="Tue, 20 Nov 2012 02:10:22 +0100" -->
<!-- isosent="20121120011022" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="20121120011022.GQ8916_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1353371926.39906.YahooMailNeo_at_web161804.mail.bf1.yahoo.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 20:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew Somorjai, le Tue 20 Nov 2012 01:39:47 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; &quot;CreateThread() and WaitForMultipleObjects() are not in hwloc since they have nothing to do with topologies.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought hwloc was also for threading?
</span><br>
<p>It can bind your threads, yes, but the way to create the thread is
<br>
yours, it can be CreateThread, or OpenMP, etc...
<br>
<p><span class="quotelev1">&gt; &quot;DWORD_PTR m_id = 0;
</span><br>
<span class="quotelev1">&gt; DWORD_PTR m_mask = 1 &lt;&lt; i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; m_threads[i] = CreateThread(NULL, 0, (LPTHREAD_START_ROUTINE)threadMain, (LPVOID)i, NULL, &amp;m_id);
</span><br>
<span class="quotelev1">&gt; SetThreadAffinityMask(m_threads[i], m_mask);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will likely be something such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_t bitmap = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_set_only(bitmap, i);
</span><br>
<span class="quotelev1">&gt; hwloc_set_thread_cpubind(topology, m_threads[i], bitmap, 0);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(bitmap);&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How would I pass a function like threadMain in the above CreateThread function into the thread itself. Someone told me to use this library for this purpose so I wasn't sure what it was made for. 
</span><br>
<p>You should indeed use hwloc to replace the SetThreadAffinityMask, but
<br>
keep your CreateThread.
<br>
<p><span class="quotelev1">&gt; How would I create an array m_threads and pass it
</span><br>
<span class="quotelev1">&gt; into hwloc_set_thread_cpubind. I would still need this part then correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; m_threads[i] = CreateThread(NULL, 0, (LPTHREAD_START_ROUTINE)threadMain, (LPVOID)i, NULL, &amp;m_id); 
</span><br>
<p>Yes, something like:
<br>
<p>m_threads[i] = CreateThread(NULL, 0, (LPTHREAD_START_ROUTINE)threadMain, (LPVOID)i, NULL, &amp;m_id);
<br>
<p>hwloc_bitmap_t bitmap = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_set_only(bitmap, i);
<br>
hwloc_set_thread_cpubind(topology, m_threads[i], bitmap, 0);
<br>
hwloc_bitmap_free(bitmap);&quot;
<br>
<p><span class="quotelev1">&gt; I would like to be independent of windows.h   by the way, not using windows api calls is the motivation for all of this.
</span><br>
<p>Ah, then you may want to also use the pthread-win32 package, which is
<br>
meant to replace CreateThread, and use pthread_getw32threadhandle_np in
<br>
the windows case to convert from pthread-win32's pthread_t into a HANDLE
<br>
for hwloc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
