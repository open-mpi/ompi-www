<?
$subject_val = "Re: [hwloc-users] hwloc get cpubind function";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 11 12:03:44 2011" -->
<!-- isoreceived="20110811160344" -->
<!-- sent="Thu, 11 Aug 2011 18:03:38 +0200" -->
<!-- isosent="20110811160338" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc get cpubind function" -->
<!-- id="CAJNPZUXKJQ0dhwY8gB21adWO2OaPxC1-k0eg9wRTHShzLpEQJg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110811103916.GM5226_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc get cpubind function<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-11 12:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>I'm using as it in OpenMP parallel region:
<br>
<p><p>-------------------------
<br>
<p>char* bitmap_string=(char*)malloc(256);
<br>
<p>hwloc_bitmap_t set = hwloc_bitmap_alloc();
<br>
<p>hwloc_linux_get_tid_cpubind(&amp;topology, tid, set);
<br>
<p>hwloc_bitmap_asprintf(&amp;bitmap_string, set);
<br>
<p>printf( &quot; bitmap_string: %s from tid: %d \n&quot;, bitmap_string[0], tid);
<br>
<p>------------------------
<br>
<p><p><p>2011/8/11 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Thu 11 Aug 2011 10:32:23 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I'm using hwloc-1.3a1r3606.  Now hwloc_get_last_cpu_location() works
</span><br>
<span class="quotelev1">&gt; well:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thread 0  bind:  0x00000008   as core number 3
</span><br>
<span class="quotelev2">&gt; &gt; thread 1 bind: 0x00000800 as core number 11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; but hwloc_linux_get_tid_cpubind() has still some problems because after
</span><br>
<span class="quotelev1">&gt; binding
</span><br>
<span class="quotelev2">&gt; &gt; one thread on just one core it give me:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thread 0 bind:  0x00000008   as core number 3
</span><br>
<span class="quotelev2">&gt; &gt; thread 1 bind: &quot;0x00ffffff&quot;  as all available cores!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do you use it exactly?
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
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
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
