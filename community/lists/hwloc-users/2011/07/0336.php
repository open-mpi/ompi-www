<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 07:23:40 2011" -->
<!-- isoreceived="20110729112340" -->
<!-- sent="Fri, 29 Jul 2011 13:23:34 +0200" -->
<!-- isosent="20110729112334" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUU48NSAcNqErvjbVKCY+pH9-UGySCoFkwrxiq69yssLZg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110729105007.GD10677_at_const.dc0b.debconf.org" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-29 07:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>yhanks for yout quick reply!
<br>
<p>But i have a litte doubt. in a non SMT machine, Is it better use this:
<br>
<p>hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, tid);
<br>
hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
<br>
hwloc_bitmap_singlify(set);
<br>
hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
<br>
<p>or:
<br>
<p>hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
<br>
hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
<br>
hwloc_bitmap_singlify(set);
<br>
hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
<br>
<p>because work in the same way( i suppose).
<br>
<p>2011/7/29 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati, le Fri 29 Jul 2011 12:43:47 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I'm so confused. I see couples of cores with the same core id! ( Core#8
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt; example)  How is it possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's because they are on different sockets. These are physical IDs
</span><br>
<span class="quotelev1">&gt; (not logical IDs), and are thus not garanteed to be unique.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) logical Core id and Physical core id maybe differents. If i want to be
</span><br>
<span class="quotelev1">&gt; sure
</span><br>
<span class="quotelev2">&gt; &gt; that id 0 and id 1 are physically near, i have to use core id or PU id?
</span><br>
<span class="quotelev1">&gt; PU ids
</span><br>
<span class="quotelev2">&gt; &gt; are ever physically near?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using core or thread ID does not matter. What matters is that you take
</span><br>
<span class="quotelev1">&gt; the proper ID. Physical IDs will in general never bring you any
</span><br>
<span class="quotelev1">&gt; proximity indication. What you want is logical IDs, which hwloc takes
</span><br>
<span class="quotelev1">&gt; care of meaning proximity. Using adjacent logical IDs (be it for core or
</span><br>
<span class="quotelev1">&gt; threads) will bring you adjacent cores/threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3) Binding a thread on a core, what's the difference
</span><br>
<span class="quotelev1">&gt; between hwloc_set_cpubind
</span><br>
<span class="quotelev2">&gt; &gt; () and hwloc_set_thread_cpubind()? More in depth, my code example works
</span><br>
<span class="quotelev1">&gt; well
</span><br>
<span class="quotelev2">&gt; &gt; with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and crash with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_set_thread_cpubind(topology, tid, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that tid is hwloc_thread_t, i.e. pthread_t on unixes.
</span><br>
<span class="quotelev1">&gt; It is not a (Linux-specific) tid. If what you have is a (Linux-specific)
</span><br>
<span class="quotelev1">&gt; tid, use the Linux-specific function, hwloc_linux_set_tid_cpubind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0336/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0335.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
