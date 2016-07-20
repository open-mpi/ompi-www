<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 05:52:34 2011" -->
<!-- isoreceived="20110925095234" -->
<!-- sent="Sun, 25 Sep 2011 11:52:24 +0200" -->
<!-- isosent="20110925095224" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="4E7EF9D8.9050805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUW5XaO6hF_RZM6w7zx4Q5-zjnTxCBQW_UcV1htu=HLsZg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-25 05:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0455.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0455.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2011 11:14, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I report my  questions in a different way (in the first question i did
</span><br>
<span class="quotelev1">&gt; a mistake):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I don't understand the means of set_membind() function. Why I
</span><br>
<span class="quotelev1">&gt; should to allocate in a node &quot;near&quot; my cpuset and not in my local node
</span><br>
<span class="quotelev1">&gt; (where thread or process runs?)
</span><br>
<p>It's exactly the same. Your local node is near the cpuset that contains
<br>
the CPUs that are close to this node.
<br>
<p><span class="quotelev1">&gt; 2) Which is the behaviour of HWLOC_MEMBIND_BIND  flag? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the manual:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Allocate memory on the specified nodes.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It means that I can allocate without binding the memory?
</span><br>
<p>It's about physical memory allocation (first touch causing a fault
<br>
causing a page to be allocated), not about virtual memory (malloc).
<br>
<p><span class="quotelev1">&gt; What happens if one thread allocate and another thread in another node
</span><br>
<span class="quotelev1">&gt;  read/write for the first time this memory? In a little example I see
</span><br>
<span class="quotelev1">&gt; the memory is allocated on the second thread, not where first thread
</span><br>
<span class="quotelev1">&gt; does malloc().  So, when I have to use HWLOC_MEMBIND_BIND flag? Or it
</span><br>
<span class="quotelev1">&gt; has nothing to do with binding?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the effective allocation is done when first thread touch the
</span><br>
<span class="quotelev1">&gt; memory, which is the means of this flag?
</span><br>
<p>The flag says &quot;when the first touch occurs and the physical memory is
<br>
allocated for real, don't allocate on the local node (default), but
<br>
rather allocate where specified by set_membind&quot;.
<br>
<p><span class="quotelev1">&gt; 2) My goal is to replicate the behaviour of set_area_membind_nodeset()
</span><br>
<span class="quotelev1">&gt; in some manner for all futures allocation without call this function
</span><br>
<span class="quotelev1">&gt; each time I allocate some memory. Is it possible to do this?
</span><br>
<p>set_membind_nodeset() with BIND and the nodeset containing the nodes
<br>
where physical memory should be allocated.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0455.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0455.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0457.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
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
