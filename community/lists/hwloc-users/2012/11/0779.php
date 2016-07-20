<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 11:58:05 2012" -->
<!-- isoreceived="20121120165805" -->
<!-- sent="Tue, 20 Nov 2012 17:58:00 +0100" -->
<!-- isosent="20121120165800" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="20121120165800.GJ6241_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1353401109.44997.YahooMailNeo_at_web161805.mail.bf1.yahoo.com" -->
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
<strong>Date:</strong> 2012-11-20 11:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>In reply to:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0782.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew Somorjai, le Tue 20 Nov 2012 09:45:12 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm also confused about these two lines and whether its necessary for the second one to exist?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HANDLE thread[num_threads];
</span><br>
<span class="quotelev1">&gt; HANDLE pthread_getw32threadhandle_np(thread); 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does the second api call fill the thread array or just the first element?
</span><br>
<p>It does not fill anything, it returns the converted value.
<br>
The second api call should be done between pthread_create and
<br>
hwloc_set_thread_cpubind, as it needs to be called for each thread.
<br>
Otherwise it's not surprising that the threads are going around: if you
<br>
checked the error returned by hwloc_set_thread_cpubind, you would see
<br>
that it says the thread id is invalid.
<br>
<p>What you need to understand is that that pthread_create fills
<br>
a pthread_t, not a HANDLE. That's why one then needs to use
<br>
pthread_getw32threadhandle_np to convert from the pthread_t into the
<br>
HANDLE before passing it to hwloc_set_thread_cpubind.
<br>
<p>I.e.
<br>
<p><span class="quotelev1">&gt; pthread_t thread[num_threads];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for (t = 0; t &lt; num_threads; t++)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; printf(&quot;Creating thread %ld\n&quot;, t);
</span><br>
<span class="quotelev1">&gt; rc = pthread_create(&amp;thread[t], NULL, threaded_task, (void *)t);
</span><br>
<span class="quotelev1">&gt; HANDLE handle = pthread_getw32threadhandle_np(thread[t]);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_t bitmap = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_set_only(bitmap, t);
</span><br>
<span class="quotelev1">&gt; hwloc_set_thread_cpubind(topology, handle, bitmap, 0);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(bitmap);
</span><br>
<p>In addition to that, remember what I mentioned in a previous mail (Mon,
<br>
19 Nov 2012 23:36:09 +0100): using hwloc_bitmap_set_only will use
<br>
physical indexes, which are most probably not what you want because they
<br>
depend on phases of the moon. Depending whether you want to execute one
<br>
thread per core, or per hyperthread, use the first or second of these:
<br>
<p>rc = pthread_create(&amp;thread[t], NULL, threaded_task, (void *)t);
<br>
HANDLE handle = pthread_getw32threadhandle_np(thread[t]);
<br>
hwloc_set_thread_cpubind(topology, handle,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0);
<br>
<p>rc = pthread_create(&amp;thread[t], NULL, threaded_task, (void *)t);
<br>
HANDLE handle = pthread_getw32threadhandle_np(thread[t]);
<br>
hwloc_set_thread_cpubind(topology, handle,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0);
<br>
<p>and use
<br>
<p>n = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_CORE);
<br>
<p>or
<br>
<p>n = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_PU);
<br>
<p>to get the number of cores or hyperthreads.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>In reply to:</strong> <a href="0774.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0782.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
