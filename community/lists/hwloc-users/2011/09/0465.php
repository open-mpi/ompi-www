<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 15:02:30 2011" -->
<!-- isoreceived="20110925190230" -->
<!-- sent="Sun, 25 Sep 2011 21:02:25 +0200" -->
<!-- isosent="20110925190225" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="4E7F7AC1.1000702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUV5buejQwgG3W+53VXb4fA1dMM-gkeWB0Rffbqhv5rS3Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-25 15:02:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2011 20:57, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; after done this, memory is allocated not in a local node of thread
</span><br>
<span class="quotelev1">&gt; that does set_membind and malloc, but in node of  thread that touches
</span><br>
<span class="quotelev1">&gt; it. And I don't understand this behaviour :(
</span><br>
<p>Memory is allocated when first-touched. If there's no area-specific
<br>
policy, it's allocated according to the policy of the thread that
<br>
touches, not according to the policy of the one that did malloc. If you
<br>
want to follow the malloc'er thread, you have to touch right after malloc.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
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
