<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 08:03:53 2011" -->
<!-- isoreceived="20110922120353" -->
<!-- sent="Thu, 22 Sep 2011 14:03:47 +0200" -->
<!-- isosent="20110922120347" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="4E7B2423.6080303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUW5GKCQEaRhURhRc3BnMxZC0p1V8tywxfsiPp2oJ_AAJg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-22 08:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0453.php">Samuel Thibault: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0451.php">Gabriele Fatigati: "[hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0451.php">Gabriele Fatigati: "[hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0454.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/09/2011 12:20, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; NUMA node(s) near the specified cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does   &quot;nodes near the specified cpuset&quot; means? The node wherethe
</span><br>
<span class="quotelev1">&gt; specified cpuset lives?
</span><br>
<span class="quotelev1">&gt; Set the default memory binding policy of the current process or thread
</span><br>
<span class="quotelev1">&gt; to prefer the
</span><br>
<p>The node near the CPU specified in the cpuset.
<br>
<p><span class="quotelev1">&gt; The first thread allocates with a malloc an array. The second thread
</span><br>
<span class="quotelev1">&gt; (bound on other node) initialize the array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The free memory on the nodes decrease only on the node where the
</span><br>
<span class="quotelev1">&gt; second thread is. Is it rigth?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc_set_membind involves all future allocations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes. And already allocated pages if you add the migrate flag.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0453.php">Samuel Thibault: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0451.php">Gabriele Fatigati: "[hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0451.php">Gabriele Fatigati: "[hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0454.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
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
