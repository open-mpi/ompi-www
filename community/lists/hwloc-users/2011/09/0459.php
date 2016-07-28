<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 06:41:21 2011" -->
<!-- isoreceived="20110925104121" -->
<!-- sent="Sun, 25 Sep 2011 12:41:15 +0200" -->
<!-- isosent="20110925104115" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="CAJNPZUVMi7uC_iDsSeaFebFySwP6ag8dPP8q6zS0m1Bd1yFxRw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E7F02C5.8020700_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc set membind function<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-25 06:41:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0460.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0461.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * doing two set_area_membind on the same entire array is useless, the
</span><br>
second one will overwrite the first one.
<br>
<p>But set_area_membind is for memory in general, not for a particular malloc.
<br>
( Is it rigth?)  In my example, I'm doing set_area_membind for thread 0
<br>
before to do some allocations, and set_area_membind for thread 2 for futures
<br>
allocations.
<br>
<p>set_membind done by thread 2 has no reference with malloc(array) done by
<br>
first thread, so why it influence the real allocation of this array?
<br>
<p><p>2011/9/25 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Le 25/09/2011 12:19, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;The flag says &quot;when the first touch occurs and the physical memory is
</span><br>
<span class="quotelev1">&gt; allocated for real, don't allocate on the local node (default), but &gt;rather
</span><br>
<span class="quotelev1">&gt; allocate where specified by set_membind&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If is it already allocated for real, how set_membind() can allocate on
</span><br>
<span class="quotelev1">&gt; other node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Add the MIGRATE flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So, what's the difference between HWLOC_MEMBIND_BIND and
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_FIRSTTOUCH?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First touch makes the allocation on the node local to the thread that
</span><br>
<span class="quotelev1">&gt; touches first (default on Linux).
</span><br>
<span class="quotelev1">&gt; BIND makes the allocation on the node specified in set_membind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing the follow test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  omp parallel region
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if(tid==0){
</span><br>
<span class="quotelev1">&gt;  malloc(array)...
</span><br>
<span class="quotelev1">&gt;  set_area_membind(HWLOCMEMBIND_BIND, node 0)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (tid==1){
</span><br>
<span class="quotelev1">&gt;  set_area_membind(HWLOCMEMBIND_BIND, node 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If both set_area_membind work on the same array (not on different halves),
</span><br>
<span class="quotelev1">&gt; this is doubly-wrong:
</span><br>
<span class="quotelev1">&gt; * you have no guarantee that thread 0 has already finished doing the malloc
</span><br>
<span class="quotelev1">&gt; before thread 1 does set_area_membind on the buffer.
</span><br>
<span class="quotelev1">&gt; * doing two set_area_membind on the same entire array is useless, the
</span><br>
<span class="quotelev1">&gt; second one will overwrite the first one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0459/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0460.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0461.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
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
