<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 06:30:39 2011" -->
<!-- isoreceived="20110925103039" -->
<!-- sent="Sun, 25 Sep 2011 12:30:29 +0200" -->
<!-- isosent="20110925103029" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="4E7F02C5.8020700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUWHQE5M2=8yiDEtTXxZ0R_iC8u8akL4ZY8udF2tZ884SA_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-25 06:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0459.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2011 12:19, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;The flag says &quot;when the first touch occurs and the physical memory is
</span><br>
<span class="quotelev1">&gt; allocated for real, don't allocate on the local node (default), but
</span><br>
<span class="quotelev2">&gt; &gt;rather allocate where specified by set_membind&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If is it already allocated for real, how set_membind() can allocate on
</span><br>
<span class="quotelev1">&gt; other node?
</span><br>
<p>Add the MIGRATE flag.
<br>
<p><span class="quotelev1">&gt; So, what's the difference between HWLOC_MEMBIND_BIND and
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_FIRSTTOUCH?
</span><br>
<p>First touch makes the allocation on the node local to the thread that
<br>
touches first (default on Linux).
<br>
BIND makes the allocation on the node specified in set_membind.
<br>
<p><span class="quotelev1">&gt; Doing the follow test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; omp parallel region
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(tid==0){
</span><br>
<span class="quotelev1">&gt;  malloc(array)...
</span><br>
<span class="quotelev1">&gt;  set_area_membind(HWLOCMEMBIND_BIND, node 0)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (tid==1){
</span><br>
<span class="quotelev1">&gt;  set_area_membind(HWLOCMEMBIND_BIND, node 1)
</span><br>
<p>If both set_area_membind work on the same array (not on different
<br>
halves), this is doubly-wrong:
<br>
* you have no guarantee that thread 0 has already finished doing the
<br>
malloc before thread 1 does set_area_membind on the buffer.
<br>
* doing two set_area_membind on the same entire array is useless, the
<br>
second one will overwrite the first one.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0458/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0459.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
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
