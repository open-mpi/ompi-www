<?
$subject_val = "Re: [hwloc-devel] multiline legend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 08:40:03 2010" -->
<!-- isoreceived="20101130134003" -->
<!-- sent="Tue, 30 Nov 2010 08:39:59 -0500" -->
<!-- isosent="20101130133959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiline legend" -->
<!-- id="ACACD020-34CE-4E2F-98C5-362E2A891AB9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF3B07E.1040109_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multiline legend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 08:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1629.php">Samuel Thibault: "Re: [hwloc-devel] multiline legend"</a>
<li><strong>Previous message:</strong> <a href="1627.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="1626.php">Brice Goglin: "[hwloc-devel] multiline legend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1629.php">Samuel Thibault: "Re: [hwloc-devel] multiline legend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How's this, instead?  I made a few minor changes:
<br>
<p>- prefixed each line of the legend (the &quot;physical IDs&quot; line was confusing to me without a prefix)
<br>
- fixed logic for terminating timestamp string
<br>
- moved all the legend logic inside &quot;if (legend)&quot;
<br>
<p><p>On Nov 29, 2010, at 8:54 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, is the attached patch what you want? Lines should be small enough
</span><br>
<span class="quotelev1">&gt; on most machines now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;multiline_legend.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1628/multiline-legend-take-2.diff">multiline-legend-take-2.diff</a>
</ul>
<!-- attachment="multiline-legend-take-2.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1629.php">Samuel Thibault: "Re: [hwloc-devel] multiline legend"</a>
<li><strong>Previous message:</strong> <a href="1627.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="1626.php">Brice Goglin: "[hwloc-devel] multiline legend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1629.php">Samuel Thibault: "Re: [hwloc-devel] multiline legend"</a>
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
