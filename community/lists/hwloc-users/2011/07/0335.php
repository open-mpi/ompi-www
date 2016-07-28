<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 06:50:16 2011" -->
<!-- isoreceived="20110729105016" -->
<!-- sent="Fri, 29 Jul 2011 12:50:07 +0200" -->
<!-- isosent="20110729105007" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="20110729105007.GD10677_at_const.dc0b.debconf.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1321319738.1896637.1311936227104.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread core affinity<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-29 06:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Gabriele Fatigati, le Fri 29 Jul 2011 12:43:47 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm so confused. I see couples of cores with the same core id! (&#160;Core#8 for
</span><br>
<span class="quotelev1">&gt; example)&#160; How is it possible?&#160;
</span><br>
<p>That's because they are on different sockets. These are physical IDs
<br>
(not logical IDs), and are thus not garanteed to be unique.
<br>
<p><span class="quotelev1">&gt; 2) logical Core id and Physical core id maybe differents. If i want to be sure
</span><br>
<span class="quotelev1">&gt; that id 0 and id 1 are physically near, i have to use core id or PU id? PU ids
</span><br>
<span class="quotelev1">&gt; are ever physically near?
</span><br>
<p>Using core or thread ID does not matter. What matters is that you take
<br>
the proper ID. Physical IDs will in general never bring you any
<br>
proximity indication. What you want is logical IDs, which hwloc takes
<br>
care of meaning proximity. Using adjacent logical IDs (be it for core or
<br>
threads) will bring you adjacent cores/threads.
<br>
<p><span class="quotelev1">&gt; 3) Binding a thread on a core, what's the difference between&#160;hwloc_set_cpubind
</span><br>
<span class="quotelev1">&gt; () and&#160;hwloc_set_thread_cpubind()? More in depth, my code example works well
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(topology, set, &#160;HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and crash with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_set_thread_cpubind(topology, tid, set, &#160;HWLOC_CPUBIND_THREAD);
</span><br>
<p>Note that tid is hwloc_thread_t, i.e. pthread_t on unixes.
<br>
It is not a (Linux-specific) tid. If what you have is a (Linux-specific)
<br>
tid, use the Linux-specific function, hwloc_linux_set_tid_cpubind.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
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
