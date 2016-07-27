<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 07:02:42 2010" -->
<!-- isoreceived="20100729110242" -->
<!-- sent="Thu, 29 Jul 2010 13:01:10 +0200 (CEST)" -->
<!-- isosent="20100729110110" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="1365773177.5734.1280401270629.JavaMail.root_at_zmbs2.inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1280400719.2300.322.camel_at_kallies.zib.de" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 07:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1233.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; To my opinion, the job hwloc does in forming &quot;groups&quot; is basically OK.
</span><br>
<span class="quotelev1">&gt; Also the group content makes sense.
</span><br>
<p>We're lucky that it somehow matches the physical ordering,
<br>
but it is really meaningless given the distance matrix.
<br>
That's why Group2 matches nothing in reality.
<br>
Group3 matches nothing as well from what I understand.
<br>
<p>This meaningless part will disappear in hwloc 1.1. You will
<br>
only see 24 Group0 objects.
<br>
<p><span class="quotelev1">&gt; The only &quot;strange&quot; thing is, that the grouping code becomes disturbed on
</span><br>
<span class="quotelev1">&gt; this special machine, which only contains 3/4 of the NUMA nodes that are
</span><br>
<span class="quotelev1">&gt; found in a fully equipped rack.
</span><br>
<p>It's an artifact of the aforementioned meaningless grouping code.
<br>
If you have 2^N objects with such a distance matrix, the grouping code
<br>
will create a binary tree. If it's not 2^N, you'll artifact like here
<br>
since the binary tree isn't complete.
<br>
<p><span class="quotelev1">&gt; Physically, the 2nd enclosure is only
</span><br>
<span class="quotelev1">&gt; half filled. I'm wondering what would happen in a fully equipped rack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will there be 4xGroup3, or 2xGroup4 with 2xGroup3 each? From my feeling
</span><br>
<span class="quotelev1">&gt; the latter should be happen.
</span><br>
<p>Yes, the latter would happen. Such a distance matrix always groups pairs
<br>
of consecutive objects starting from #0. So you'll get two pairs of Group3
<br>
grouped in 2 Group4 objects.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1233.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
